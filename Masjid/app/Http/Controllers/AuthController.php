<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\regRequest;
use App\Http\Requests\loginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registration(regRequest $request){

        $data = $request->validated();
        User::create($data);
        return response()->json([
            'message' => 'User registered successfully'
        ]);
        
    }

    public function login(loginRequest $request){
        $data = $request->validated();

        $user = User::where('email' , $data['email'])->first();

        if($user && Hash::check($data['password'], $user->password)){
            Auth::login($user);
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'message' => 'User Logged in successfully',
                'access_token' => $token,
                'status' => true
            ]);
        }

        return response()->json([
            'message' => 'Invalid credentials',
            'status' => false
        ], 401);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'User Logged out successfully',
            'status' => true
        ]);
    }
}
