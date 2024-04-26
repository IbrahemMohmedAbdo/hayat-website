<?php

namespace App\Http\Controllers\Auth;

use App\Models\Nurse;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('Auth.login');
    }


    public function loginStore(Request $request)
    {

        $credentials = $request->only('email', 'password');

        // Check if user exists in any of the roles
        if (Doctor::where('email', $credentials['email'])->exists() ||
            Nurse::where('email', $credentials['email'])->exists() ||
            Patient::where('email', $credentials['email'])->exists()) {

            // Attempt to authenticate the user
            if (!Auth::attempt($credentials)) {
                return redirect()->intended(route('login'))->with('success', 'Login successful');
            } else {
                return redirect()->back()->withInput($request->only('email'))->withErrors([
                    'email' => 'These credentials do not match our records.',
                ]);
            }
        }

        // If user not found
        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'You are not authorized to access this portal.',
        ]);
    }




    public function logOut(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/'); // You can redirect to any desired URL after logout
    }

}
