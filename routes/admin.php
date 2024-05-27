<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('admin.guest')->group(function () {
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/', [LoginController::class, 'login'])->name('login');
});

Route::middleware('admin')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/profile', [AdminController::class, 'profileIndex'])->name('profile.index');
    Route::post('/profile', [AdminController::class, 'profileUpdate'])->name('profile.update');
    Route::post('/password', [AdminController::class, 'passwordUpdate'])->name('password.update');
});