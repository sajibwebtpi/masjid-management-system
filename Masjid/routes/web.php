<?php

use App\Http\Controllers\social\socialiteController;
use Illuminate\Support\Facades\Route;

Route::view('/reg' , 'auth.reg')->name('auth.reg');
Route::view('/login' , 'auth.login')->name('auth.login');
Route::view('/dashboard','auth.dashboard')->name('dashboard');

Route::get('/login/{provider}/redirect' , [socialiteController::class , 'redirect'])->name('social.redirect');
Route::get('/login/{provider}/callback' ,[socialiteController::class, 'callback'])->name('social.callback');

