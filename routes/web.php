<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PertemuanController;
use App\Http\Controllers\AbsensiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Sistem Absensi Mahasiswa
|
*/

// ===============================
// HALAMAN AWAL
// ===============================

Route::get('/', function () {
    return redirect()->route('login');
});

// ===============================
// LOGIN
// ===============================

Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class, 'login'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'authenticate'])
        ->name('login.process');

    Route::get('/register', [AuthController::class, 'register'])
        ->name('register');

    Route::post('/register', [AuthController::class, 'storeRegister'])
        ->name('register.store');

});

// ===============================
// LOGOUT
// ===============================

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

// ===============================
// SEMUA MENU HARUS LOGIN
// ===============================

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::resource('mahasiswa', MahasiswaController::class);

    Route::resource('dosen', DosenController::class);

    Route::resource('mata-kuliah', MataKuliahController::class);

    Route::resource('kelas', KelasController::class);

    Route::resource('jadwal', JadwalController::class);

    Route::resource('pertemuan', PertemuanController::class);

    Route::resource('absensi', AbsensiController::class);

});