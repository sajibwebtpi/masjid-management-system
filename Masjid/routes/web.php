<?php

use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

Route::view('/reg' , 'auth.reg')->name('auth.reg');
Route::view('/login' , 'auth.login')->name('auth.login');

Route::get('/auth/redirect/{provider}' , [SocialController::class , 'redirect'])->name('social.redirect');
Route::get('/auth/callback/{provider}' ,[SocialController::class, 'callback'])->name('social.callback');

