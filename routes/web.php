<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('pricing', 'pricing')
    ->middleware(['auth', 'verified'])
    ->name('pricing');

Route::view('checkout', function () {

})->middleware(['auth', 'verified'])->name('checkout');

require __DIR__.'/auth.php';
