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

        $request->validated();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return to_route('dashboard');
        
    }

    public function login(loginRequest $request){
        $credential = $request->validated();
        if(Auth::attempt([
            'email' => $credential['email'],
            'password' => $credential['password']
        ])){

            $request->session()->regenerate();
            return redirect()->route('dashboard');
        };

        return back()->withErrors([
            'message' => 'email or password invalid'
        ]);

    }



public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login');
}




    public function index(Request $request)
    {
        $totalUser = User::count();
        return view('auth.dashboard' , compact('totalUser'));
    }
}
