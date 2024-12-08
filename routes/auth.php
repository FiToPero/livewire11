<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;


    // route::get('register', 'pages.auth.register')->name('register');

    // route::get('login', 'auth.login')->name('login');

    // route::post('forgot-password', 'pages.auth.forgot-password')->name('password.request');

    // route::post('reset-password/{token}', 'pages.auth.reset-password')->name('password.reset');


// Route::middleware('auth')->group(function () {
//     route::post('verify-email', 'pages.auth.verify-email')
//         ->name('verification.notice');

//     Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
//         ->middleware(['signed', 'throttle:6,1'])
//         ->name('verification.verify');

//     route::post('confirm-password', 'pages.auth.confirm-password')
//         ->name('password.confirm');
// });
