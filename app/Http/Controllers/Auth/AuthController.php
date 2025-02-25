<?php

namespace App\Http\Controllers\Auth;

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
        
        if ($existingOtp) {
            return Response::error('Please wait before requesting another OTP.');
        }
        $otpCode = env('APP_DEBUG') ? 1234 :  rand(1000, 9999);
        Otp::create([
            "key" => $phone,
            "value" => $otpCode,
            "expiration" => now()->addMinutes(2)->timestamp
        ]);

        // Dispatch the SendOtpJob to the queue
        // SendOtpJob::dispatch($phone, $otpCode);
        $templateId = 979235; // شناسه الگو
        $parameters = [
            [
                "name" => "Code",
                "value" => $otpCode
            ]
        ];

        // $response = SmsIr::verifySend($phone, $templateId, $parameters, [
        //     CURLOPT_SSL_VERIFYPEER => false,
        //     CURLOPT_CAINFO => "D:/wamp64/bin/php/php8.2.0/cacert.pem"
        // ]);


        // $url = "https://api.sms.ir/v1/send?username=09304500129&Password=Amir#1234&Line=&mobile=09369488096&text=1234";
        return Response::success('OTP sent successfully, please check your phone.');
    }

    /**
     * Validate OTP and log in the user, returning Sanctum token.
     */
    public function validateCode(ValidateOtpRequest $request)
    {

        $cachedOtp = Otp::where('key' , $request->phone)->first();
        $otp = $request->otp_code;
        if (!$cachedOtp) {
            return Response::error('OTP expired or not found');
        }

        // Compare the OTP
        if ($otp  != $cachedOtp->value) {
            return Response::error('Invalid OTP', 401);
        }


        $user = User::firstOrCreate(
            ['phone' => $request->phone],
            [
                'first_name' => '',
                'last_name' => '',
                'avatar' => '',
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
        return Response::success($response, 'Logged in successfully');
    }
}
