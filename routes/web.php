<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "Sistem Pelaporan Masalah - Teknik Informatika";
});

Route::get('/daftar-masalah', function () {
  return "daftar-masalah";
    });

    Route::get('/laporan', [LaporanController::class, 'index']);
    route::get('/cari', [LaporanController::class, 'search']);
    route::get('/rincian', [LaporanController::class, 'detail']);



    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('dosen', DosenController::class);