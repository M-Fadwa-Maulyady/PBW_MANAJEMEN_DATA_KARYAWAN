<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\GuestBookController;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', [LandingController::class, 'index']);
Route::post('/buku-tamu', [GuestBookController::class, 'store'])
    ->name('guestbook.store');

/*
|--------------------------------------------------------------------------
| AUTH ROUTES (LOGIN ADMIN)
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES (AUTH ONLY)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('karyawan', KaryawanController::class);

    Route::resource('jabatan', JabatanController::class);

    Route::get('/admin/buku-tamu', [GuestBookController::class, 'index'])
        ->name('guestbook.index');
    
    Route::delete('/admin/buku-tamu/{id}', [GuestBookController::class, 'destroy'])
        ->name('guestbook.destroy');    

    Route::prefix('laporan')->name('laporan.')->group(function () {
        Route::get('/karyawan', [LaporanController::class, 'karyawan'])
            ->name('karyawan');

        Route::get('/jabatan', [LaporanController::class, 'jabatan'])
            ->name('jabatan');
    });

});
