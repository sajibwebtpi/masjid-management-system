<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailSendingController;
use App\Http\Controllers\rolePermissionController;
use App\Http\Controllers\social\socialiteController;



Route::get('/', function () {
    return view('dashboard'); // বা যেকোনো view
});

Route::view('/reg' , 'auth.reg')->name('auth.reg');
Route::view('/login' , 'auth.login')->name('auth.login');
Route::view('/login' , 'auth.login')->name('login');

Route::view('/send-mail' , 'email.emailInput')->name('send.email');
Route::view('/verify-otp' , 'email.otp-varify')->name('otp.varify');
Route::view('/update-password' , 'email.reset-password')->name('reset.password');


Route::get('/login/{provider}/redirect' , [socialiteController::class , 'redirect'])->name('social.redirect');
Route::get('/login/{provider}/callback' ,[socialiteController::class, 'callback'])->name('social.callback');

     Route::post('/login' , [AuthController::class , 'login'])->name('user.login');



           //After login Apis\\
        Route::group(['middleware' => ['auth']], function (){
            Route::post('/logout' , [AuthController::class , 'logout'])->name('logout');
            Route::view('/dashboard','auth.dashboard')->name('dashboard');
            Route::get('/dashboard' , [AuthController::class , 'index'])->name('dashboard');
        });
   // Email sending route\\

    Route::post('/send-mail' , [MailSendingController::class , 'sendMail'])->name('send.otp');
    Route::post('/verify-otp', [MailSendingController::class, 'verifyOtp'])->name('otp.verify');
    Route::post('/update-password', [MailSendingController::class, 'resetPassword'])->name('password.reset');
