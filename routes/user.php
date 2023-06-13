<?php

use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\SettingController;
use Illuminate\Support\Facades\Route;

Route::name('user.')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/nilai', [DashboardController::class, 'nilai'])->name('nilai');
    Route::get('/identitas', [DashboardController::class, 'identitas'])->name('identitas');
    Route::get('/soal/{indikator}', [DashboardController::class, 'soal'])->name('soal');

    Route::get('/setting', [SettingController::class, 'setting'])->name('setting');
    Route::put('/setting', [SettingController::class, 'update'])->name('setting.update');

    Route::get('/reset', [SettingController::class, 'resetPassword'])->name('reset-password');
    Route::put('/reset', [SettingController::class, 'updatePassword'])->name('update-password');
});