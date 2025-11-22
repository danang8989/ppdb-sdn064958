<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // kalau belum login arahkan ke login
    if (!auth()->check()) {
        return redirect('/login');
    }

    // kalau sudah login arahkan sesuai level
    if (auth()->user()->user_level == 'Admin') {
        return redirect('/admin/dashboard');
    } else {
        return redirect('/user/dashboard');
    }
});


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/user.php';