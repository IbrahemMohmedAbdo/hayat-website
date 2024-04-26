<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgetPassword;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\MainRegisterController;
use App\Http\Controllers\Auth\ForgetPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('app.home');
});

// Reistration routes..
Route::get('registeration',[MainRegisterController::class,'registerPage'])->name('registration.page');
Route::get('doctor/register',[MainRegisterController::class,'registerAsDoctor'])->name('register.as.doctor');
Route::get('patient/register',[MainRegisterController::class,'registerAsPatient'])->name('register.as.patient');
Route::get('pathogen/register',[MainRegisterController::class,'registerAsPathogen'])->name('register.as.pathogen');

// Store routes...
Route::post('doctor',[MainRegisterController::class,'storeDoctor'])->name('storeDoctor');
Route::post('nurse',[MainRegisterController::class,'storeNurse'])->name('storeNurse');

// Handle registration
Route::get('/registerPage', [RegisterController::class, 'index'])->name('register_page');

Route::post('/register', [RegisterController::class, 'register'])->name('register');



// Redirect to the login page
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginStore', [LoginController::class, 'loginStore'])->name('loginStore');

// forget Password
Route::get('/forget-password',[ForgetPasswordController::class,'showForgetPasswordForm'])->name('forget.password');
Route::post('/forgot-password', [ForgetPasswordController::class, 'sendOTP'])->name('password.sendOTP');
Route::get('/verify-otp', [ForgetPasswordController::class, 'showOTPVerificationForm'])->name('otp.verify');
Route::post('/verify-otp', [ForgetPasswordController::class, 'verifyOTP'])->name('otp.verify');
//resendOTP
Route::post('/resend-otp', [ForgetPasswordController::class, 'resendOTP'])->name('otp.resend');
// reset New password..
Route::get('/reset-password', [ForgetPasswordController::class,'resetNewPassword'])->name('password.reset.form');
Route::post('/updated-password', [ForgetPasswordController::class,'updatePassword'])->name('update.password');
