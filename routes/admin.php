<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CalonSiswaController;
use App\Http\Controllers\Admin\OrangTuaController;
use App\Http\Controllers\Admin\BerkasController;
use App\Http\Controllers\Admin\TahunAjaranController;
use App\Http\Controllers\Admin\JadwalPendaftaranController;

Route::namespace('Admin')->middleware(['auth', 'admin'])->prefix('/admin')->name('admin.')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('/');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('calon_siswa', [CalonSiswaController::class, 'index'])->name('calon_siswa');
    Route::get('calon_siswa/{calon_siswa}', [CalonSiswaController::class, 'edit'])->name('calon_siswa.edit');
    Route::put('calon_siswa', [CalonSiswaController::class, 'update'])->name('calon_siswa.update');
    
    Route::get('orang_tua', [OrangTuaController::class, 'index'])->name('orang_tua');

    Route::get('berkas', [BerkasController::class, 'index'])->name('berkas');

    Route::get('tahun_ajar', [TahunAjaranController::class, 'index'])->name('tahun_ajar');
    Route::put('tahun_ajar', [TahunAjaranController::class, 'update'])->name('tahun_ajar.update');

    Route::get('jadwal_pendaftaran', [JadwalPendaftaranController::class, 'index'])->name('jadwal_pendaftaran');
    Route::put('jadwal_pendaftaran', [JadwalPendaftaranController::class, 'update'])->name('jadwal_pendaftaran.update');
    
});