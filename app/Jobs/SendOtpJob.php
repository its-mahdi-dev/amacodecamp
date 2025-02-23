<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendOtpJob implements ShouldQueue
{
    use Dispatchable, Queueable;

    public $email;
    public $otp;

    public function __construct($email, $otp)
    {
        $this->email = $email;
        $this->otp = $otp;
    }

    public function handle()
    {
        // Send the OTP via email (You can replace this with any SMS service)
        // Mail::raw("Your OTP code is: " . $this->otp, function ($message) {
        //     $message->to($this->email)
        //             ->subject('Your OTP Code');
        // });
    }
}
