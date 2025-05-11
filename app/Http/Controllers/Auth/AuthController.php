<?php

namespace App\Http\Controllers\Auth;

use App\Constants\ResponseMessages;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SendOtpRequest;
use App\Http\Requests\Auth\ValidateOtpRequest;
use App\Http\Resources\OtpValidationResource;
use App\Jobs\SendOtpJob;
use App\Models\Otp;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;
use Ipe\Sdk\Facades\SmsIr;

class AuthController extends Controller
{
    /**
     * Send OTP to the user's phone number.
     */
    public function sendCode(SendOtpRequest $request)
    {
        // Validation is automatically handled by SendOtpRequest

        // Generate a random OTP code (4 digits)
        
        $phone = $request->phone;
        
        $existingOtp = Otp::where('key', $phone)
        ->where('expiration', '>', now())  // Ensure the OTP is not expired
        ->first();

        
        if ($existingOtp &&$existingOtp->expiration - now()->timestamp  > 0) {
            return Response::error(ResponseMessages::WAIT_BEFORE_REQUEST, 429 , $existingOtp->expiration - now()->timestamp);
        }
        $otpCode = env('APP_DEBUG') ? 1234 :  rand(1000, 9999);
        if($existingOtp){
            $existingOtp->update([
                "expiration" => now()->addMinutes(2)->timestamp,
                "value" => $otpCode
            ]);
        }else{
        Otp::create([
            "key" => $phone,
            "value" => $otpCode,
            "expiration" => now()->addMinutes(2)->timestamp,
            "counter" => 0
        ]);
    }

        // Dispatch the SendOtpJob to the queue
        // SendOtpJob::dispatch($phone, $otpCode);
        $templateId = 979235; // شناسه الگو
        $parameters = [
            [
                "name" => "Code",
                "value" => $otpCode
            ]
        ];

        $response = SmsIr::verifySend($phone, $templateId, $parameters, [
            CURLOPT_SSL_VERIFYPEER => false,
            // CURLOPT_CAINFO => "D:/wamp64/bin/php/php8.2.0/cacert.pem"
        ]);


        // $url = "https://api.sms.ir/v1/send?username=09304500129&Password=Amir#1234&Line=&mobile=$phone&text=$otpCode";
        return Response::success(null,ResponseMessages::OTP_SENT_SUCCESS);
    }

    /**
     * Validate OTP and log in the user, returning Sanctum token.
     */
    public function validateCode(ValidateOtpRequest $request)
    {

        $cachedOtp = Otp::where('key' , $request->phone)->first();
        $otp = $request->otp_code;
        if (!$cachedOtp) {
            return Response::notfound();
        }


        if ($cachedOtp->counter >= 5){
            return Response::error(ResponseMessages::LOCK_OTP_ACCOUNT , 403);
        }
        // Compare the OTP
        if ($otp  != $cachedOtp->value) {
            $cachedOtp->update([
                "counter" => $cachedOtp->counter + 1
            ]);
            return Response::error(ResponseMessages::INVALID_OTP, 401);
        }


        $user = User::firstOrCreate(
            ['phone' => $request->phone],
            [
                'first_name' => '',
                'last_name' => '',
                'avatar' => '/assets/images/user.webp',
                'email' => null,
                'role' => 'student'
            ]
        );

        $cachedOtp->delete();


        $isNew = $user->wasRecentlyCreated;

        // Generate Sanctum token
        $token = $user->createToken('OTP Login')->plainTextToken;

        $response = new OtpValidationResource([
            'token' => $token,
            'is_new' => $isNew
        ]);
        return Response::success($response, ResponseMessages::OTP_VALIDATION_SUCCESS);
    }
}
