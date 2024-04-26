<?php

namespace App\Traits;

use App\Mail\OTPEmail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

trait SendsOTP
{
    public function sendOTP($email)
    {
        $otp = '';
        for ($i = 0; $i < 5; $i++) {
            $otp .= mt_rand(0, 9); // Append a random digit (0-9) to the OTP string
        }
        Mail::to($email)->send(new OTPEmail($otp));
        $this->otp = Hash::make($otp);
        $this->save();
        return true;
    }
}
