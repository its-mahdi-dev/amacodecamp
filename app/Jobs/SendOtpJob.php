<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;
use Ipe\Sdk\Facades\SmsIr;

class SendOtpJob implements ShouldQueue
{
    use Dispatchable, Queueable;

    public $phone;
    public $otp;

    public function __construct($phone, $otp)
    {
        $this->phone = $phone;
        $this->otp = $otp;
    }

    public function handle()
    {
        // Send the OTP via email (You can replace this with any SMS service)
        // Mail::raw("Your OTP code is: " . $this->otp, function ($message) {
        //     $message->to($this->email)
        //             ->subject('Your OTP Code');
        // });

        $templateId = 979235; // شناسه الگو
        $parameters = [
            [
                "name" => "Code",
                "value" => $this->otp
            ]
        ];

        $response = SmsIr::verifySend($this->phone, $templateId, $parameters, [
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_CAINFO => "D:/wamp64/bin/php/php8.2.0/cacert.pem"
        ]);
    }
}
