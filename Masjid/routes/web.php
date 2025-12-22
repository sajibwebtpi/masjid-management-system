<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\rolePermissionController;
use App\Http\Controllers\social\socialiteController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('dashboard'); // বা যেকোনো view
});

Route::view('/reg' , 'auth.reg')->name('auth.reg');
Route::view('/login' , 'auth.login')->name('auth.login');
Route::view('/login' , 'auth.login')->name('login');


Route::get('/login/{provider}/redirect' , [socialiteController::class , 'redirect'])->name('social.redirect');
Route::get('/login/{provider}/callback' ,[socialiteController::class, 'callback'])->name('social.callback');

     Route::post('/login' , [AuthController::class , 'login'])->name('user.login');



           //After login Apis\\
        Route::group(['middleware' => ['auth']], function (){
            Route::post('/logout' , [AuthController::class , 'logout'])->name('logout');
            Route::view('/dashboard','auth.dashboard')->name('dashboard');
            Route::get('/dashboard' , [AuthController::class , 'index'])->name('dashboard');
        });
