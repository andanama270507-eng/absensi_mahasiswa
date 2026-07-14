<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AbsensiController;
use app\Http\Controllers\DosenController;
use app\Http\Controllers\JadwalController;
use app\Http\Controllers\MahasiswaController;
use app\Http\Controllers\MataKuliahController;
use app\Http\Controllers\KelasController;
use app\Http\Controllers\DashboardController;
use app\Http\Controllers\PertemuanController;


Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/Dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('Mahasiswa', MahasiswaController::class);
Route::resource('Dosen', DosenController::class);
Route::resource('Matakuliah', MataKuliahController::class);
Route::resource('Kelas', KelasController::class);
Route::resource('Jadwal', JadwalController::class);
Route::resource('Absensi', AbsensiController::class);   
