<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\rolePermissionController;




Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

     // before login and registration Apis\\

     Route::post('/reg' , [AuthController::class , 'registration'])->name('user.register');
     Route::get('/login' ,function(){
        return response()->json(['message' => "Please login first", 'status' => 401]);
     });



                  // Role and permission \\

    Route::post('/role' , [rolePermissionController::class,'createRole']); 
    Route::post('/permission' , [rolePermissionController::class,'createPermission']);
    Route::post('/permissionToRole',[rolePermissionController::class , 'assignPermissionToRole']); 
    Route::post('/roleToUser',[rolePermissionController::class , 'assignRoleToUser']); 