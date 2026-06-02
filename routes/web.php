<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\LisensiController;
use App\Http\Controllers\PengadaanController;
use App\Http\Controllers\TransaksiBBMController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::resource('kendaraan', KendaraanController::class);
Route::resource('divisi', DivisiController::class);
Route::get('/transaksi/pdf', [TransaksiBBMController::class, 'exportPdf'])
    ->name('transaksi.pdf');
Route::resource('transaksi', TransaksiBBMController::class);
Route::get('/pengadaan/pdf', [PengadaanController::class, 'exportPdf'])
    ->name('pengadaan.pdf');
Route::get('/pengadaan/excel', [PengadaanController::class, 'exportExcel'])
    ->name('pengadaan.excel');
Route::resource('pengadaan', PengadaanController::class);
Route::get('/lisensi/pdf', [LisensiController::class, 'exportPdf'])
    ->name('lisensi.pdf');
Route::get('/lisensi/excel', [LisensiController::class, 'exportExcel'])
    ->name('lisensi.excel');
Route::resource('lisensi', LisensiController::class);
