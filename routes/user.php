<?php

use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\DataDiriController;
use App\Http\Controllers\User\OrangTuaController;
use App\Http\Controllers\User\BerkasController;
use App\Http\Controllers\User\PengumumanHasilController;

Route::namespace('User')->middleware(['auth', 'user'])->prefix('/user')->name('user.')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('/');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('data_diri', [DataDiriController::class, 'index'])->name('data_diri');
    Route::put('data_diri', [DataDiriController::class, 'update'])->name('data_diri.update');

    Route::get('orang_tua', [OrangTuaController::class, 'index'])->name('orang_tua');
    Route::put('orang_tua', [OrangTuaController::class, 'update'])->name('orang_tua.update');

    Route::get('berkas', [BerkasController::class, 'index'])->name('berkas');
    Route::put('berkas', [BerkasController::class, 'update'])->name('berkas.update');

    Route::get('pengumuman_hasil', [PengumumanHasilController::class, 'index'])->name('pengumuman_hasil');
});