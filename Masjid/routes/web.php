<?php

use Illuminate\Support\Facades\Route;

Route::view('/reg' , 'auth.reg')->name('auth.reg');
Route::view('/login' , 'auth.login')->name('auth.login');