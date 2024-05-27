<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('admin.guest')->group(function () {
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/', [LoginController::class, 'login'])->name('login');
});

Route::middleware('admin')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // MANAGE PROFILE ROUTES
    Route::prefix('profile')->as('profile.')->group(function () {
        Route::get('/', [AdminController::class, 'profileIndex'])->name('index');
        Route::post('/', [AdminController::class, 'profileUpdate'])->name('update');
        Route::post('/password', [AdminController::class, 'passwordUpdate'])->name('password.update');
    });

    // GENERAL SETTINGS ROUTES
    Route::prefix('settings')->as('settings.')->group(function () {
        Route::get('/general', [GeneralSettingController::class, 'index'])->name('general.index');
        Route::post('/general', [GeneralSettingController::class, 'update'])->name('general.update');
    });
});