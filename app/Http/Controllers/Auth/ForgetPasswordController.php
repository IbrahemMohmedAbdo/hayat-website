<?php

namespace App\Http\Controllers\Auth;

use App\Models\Nurse;
use App\Mail\OTPEmail;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ForgetPasswordController extends Controller
{
    //
    public function showForgetPasswordForm()
    {

        return view('Auth.password');
    }
    public function sendOTP(Request $request)
    {
        $email = $request->email;

        // Try finding the user in each model
        $user = Doctor::where('email', $email)->first();
        if (!$user) {
            $user = Nurse::where('email', $email)->first();
        }
        if (!$user) {
            $user = Patient::where('email', $email)->first();
        }

        if ($user) {
            // Call the sendOTP method on the user instance
            $otpSent = $user->sendOTP($email);

            if ($otpSent) {
                Session::put('resend_email', $email);
                return redirect()->route('otp.verify');
            } else {
                return back()->with('error', 'Failed to send OTP');
            }
        } else {
            return back()->with('error', 'User not found');
        }
    }
    public function resendOTP(Request $request)
{
    // Get the email from the session
    $email = Session::get('resend_email');

    if ($email) {
        // Check if the email exists in any of the user types
        $user = Nurse::where('email', $email)->first();
        if (!$user) {
            $user = Doctor::where('email', $email)->first();
            if (!$user) {
                $user = Patient::where('email', $email)->first();
            }
        }

        if ($user) {
            // Generate a new OTP
            $otp = mt_rand(10000, 99999); // Generate a random 6-digit OTP

            // Send the OTP via email
            Mail::to($email)->send(new OTPEmail($otp));

            // Update the user's record with the new OTP
            $user->otp = Hash::make($otp);
            $user->save();

            return redirect()->route('otp.verify')->with('success', 'OTP resent successfully');
        } else {
            return redirect()->route('login')->with('error', 'User not found');
        }
    } else {
        return redirect()->route('login')->with('error', 'Email not found for resend');
    }
}
    public function showOTPVerificationForm()
    {
        return view('Auth.verification');
    }

    public function verifyOTP(Request $request)
{
    // Retrieve the email and OTP entered by the user
    $email = Session::get('resend_email');
    $otp = implode('', $request->otp); // Concatenate the OTP array into a string

    // Try finding the user in each model
    $user = Doctor::where('email', $email)->first();
    if (!$user) {
        $user = Nurse::where('email', $email)->first();
        if (!$user) {
            $user = Patient::where('email', $email)->first();
        }
    }

    if ($user) {
        // Check if the entered OTP matches the one stored in the user's record
        if (Hash::check($otp, $user->otp)) {
            // OTP verified successfully, proceed with further actions
            // For example, redirect the user to the password reset form
            Session::put('verified_email', $email); // Store the email in session for password reset
            return redirect()->route('password.reset.form');
        } else {
            // Invalid OTP, redirect back with error message
            return back()->with('error', 'Invalid OTP, please try again');
        }
    } else {
        // User not found, redirect back with error message
        return back()->with('error', 'User not found');
    }
}
public function resetNewPassword()
{
    return view('Auth.reset_new_password');
}
public function updatePassword(Request $request)
{
    // Validate the form data
    $request->validate([
        'password' => 'required|min:8',
    ]);

    // Get the email from the session
    $email = Session::get('verified_email');

    if (!$email) {
        return redirect()->route('register_page')->with('error', 'Email not found');
    }

    // Search for the user in each model
    $user = Doctor::where('email', $email)->first();
    if (!$user) {
        $user = Nurse::where('email', $email)->first();
        if (!$user) {
            $user = Patient::where('email', $email)->first();
        }
    }

    if (!$user) {
        return redirect()->route('register.as.pathogen')->with('error', 'User not found');
    }

    // Update the user's password
    $user->password = Hash::make($request->password);
    $user->save();

    // Clear the email from the session
    Session::forget('verified_email');

    // Redirect the user to a success page or any other appropriate action
    return redirect()->route('login')->with('success', 'Password updated successfully');
}



}
