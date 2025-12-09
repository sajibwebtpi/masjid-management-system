<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

     // before login and registration Apis\\

     Route::post('/reg' , [AuthController::class , 'registration'])->name('user.register');
     Route::post('/login' , [AuthController::class , 'login'])->name('user.login');
     Route::get('/login' ,function(){
        return response()->json(['message' => "Please login first", 'status' => 401]);
     });

           //After login Apis\\
        Route::group(['middleware' => ['auth:sanctum']], function (){
            Route::post('/logout' , [AuthController::class , 'logout']);
        });