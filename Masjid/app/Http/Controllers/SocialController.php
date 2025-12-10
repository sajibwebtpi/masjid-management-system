<?php

namespace App\Http\Controllers;

use App\socialProviderEnum;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect(socialProviderEnum $provider){
        dd($provider);
        return Socialite::driver($provider->value);

        
    }

    public function callback(socialProviderEnum $provider){
        dd($provider);
    }
}
