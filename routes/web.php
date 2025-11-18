<?php

use App\Http\Controllers\JabatanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

Route::get('/', function () {
    return redirect('/karyawan');
});

Route::get('/dashboard', function () {
    return view('/dashboard');
})->name('dashboard');

// CRUD Routes
Route::resource('karyawan', KaryawanController::class);

Route::resource('jabatan', JabatanController::class);
