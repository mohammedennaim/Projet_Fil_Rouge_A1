<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectGoogle()  {
        return Socialite::driver('google')->redirect();
    }
    public function redirectFacebook()  {
        return Socialite::driver('facebook')->redirect();
    }
    
    public function handleGoogleCallback(){
        try {
            $user = Socialite::driver('google')->user();
            
            // Check if user already exists
            $existingUser = \App\Models\User::where('email', $user->email)->first();
            
            if($existingUser) {
                // Log in existing user
                auth()->login($existingUser, true);
            } else {
                // Create new user
                $newUser = \App\Models\User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => bcrypt(\Illuminate\Support\Str::random(16)),
                    'email_verified_at' => now(),
                ]);
                
                auth()->login($newUser, true);
            }
            
            return redirect()->intended('/home');
            
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Google login failed: ' . $e->getMessage());
        }
    }
    
    public function handleFacebookCallback(){
        try {
            $user = Socialite::driver('facebook')->user();
            
            // Check if user already exists
            $existingUser = \App\Models\User::where('email', $user->email)->first();
            
            if($existingUser) {
                // Log in existing user
                auth()->login($existingUser, true);
            } else {
                // Create new user
                $newUser = \App\Models\User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => bcrypt(\Illuminate\Support\Str::random(16)),
                    'email_verified_at' => now(),
                ]);
                
                auth()->login($newUser, true);
            }
            
            return redirect()->intended('/home');
            
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Facebook login failed: ' . $e->getMessage());
        }
    }
}
