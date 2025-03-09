<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [authController::class, 'login'])->name('login');
Route::get('/register', [authController::class, 'register'])->name('register');
Route::post('/register', [authController::class, 'store']);
Route::post('/login', [authController::class, 'authenticate']);
Route::post('/logout', [authController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

Route::get('auth/google',[SocialiteController::class,'redirectGoogle']);
Route::get('auth/google/callback',[SocialiteController::class,'handleGoogleCallBack']);
Route::get('auth/facebook',[SocialiteController::class,'redirectFacebook']);
Route::get('auth/facebook/callback',[SocialiteController::class,'handleFacebookCallback']);