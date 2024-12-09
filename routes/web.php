<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomController;

Route::get('/', [WelcomController::class, 'index'])->name('welcome');

Route::get('dashboard', [WelcomController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('profile', [WelcomController::class, 'profile'])->middleware(['auth'])->name('profile');

require __DIR__.'/auth.php';
