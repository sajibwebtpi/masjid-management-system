<?php

namespace App\Http\Controllers\Social;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\SocialProviderEnum;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class socialiteController extends Controller
{
    public function redirect(SocialProviderEnum $provider)
    {
        return Socialite::driver($provider->value)->redirect();
    }

    public function callback(SocialProviderEnum $provider)
    {
        // dd($provider->value);
        $providerUser = Socialite::driver($provider->value)->user();
        // dd($providerUser);
        $existingUser = User::query()
            ->where('email', $providerUser->getEmail())
            ->first();

        // dd($existingUser);

        if ($existingUser) {
            $existingUser->update([
                'name' => $providerUser->getName(),
                'provider_name' => $provider->value,
                'provider_id' => $providerUser->getId()
            ]);
            Auth::login($existingUser);

            return to_route('dashboard');
        }

        $user = User::create([
            'name' => $providerUser->getName(),
            'email' => $providerUser->getEmail(),
            'provider_name' => $provider->value,
            'provider_id' => $providerUser->getId(),
            // 'password' => str()->random(),
        ]);

        Auth::login($user);

        return to_route('dashboard');
    }
}
