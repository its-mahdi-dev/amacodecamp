<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SendOtpRequest;
use App\Http\Requests\Auth\ValidateOtpRequest;
use App\Jobs\SendOtpJob;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;

class AuthController extends Controller
{
    /**
     * Send OTP to the user's phone number.
     */
    public function sendCode(SendOtpRequest $request)
    {
        // Validation is automatically handled by SendOtpRequest

        // Generate a random OTP code (4 digits)
        $otpCode = env('APP_DEBUG') ? 1234 :  rand(1000, 9999);

        $phone = $request->phone;


        // Cache OTP with an expiry time of 10 minutes
        Cache::put('otp_' . $phone, $otpCode, now()->addMinutes(2));

        // Dispatch the SendOtpJob to the queue
        SendOtpJob::dispatch($phone, $otpCode);

        return Response::success('OTP sent successfully, please check your phone.');
    }

    /**
     * Validate OTP and log in the user, returning Sanctum token.
     */
    public function validateCode(ValidateOtpRequest $request)
    {

        $cachedOtp = Cache::get('otp_' . $request->phone);
        $otp = $request->otp_code;
        if (!$cachedOtp) {
            return Response::error('OTP expired or not found');
        }

        // Compare the OTP
        if ($otp  != $cachedOtp) {
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


        // Generate Sanctum token
        $token = $user->createToken('OTP Login')->plainTextToken;

        return Response::success($token, 'Logged in successfully');
    }
}
