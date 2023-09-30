<?php

use App\Http\Controllers\PenggunaanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratKeteranganUsahaController;
use App\Http\Controllers\SuratKeteranganTidakMampuController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

// sku
Route::get('/sku', [SuratKeteranganUsahaController::class, 'index']);
Route::post('/sku', [SuratKeteranganUsahaController::class, 'create'])->name('sku.create');

// sktm
Route::get('/sktm', [SuratKeteranganTidakMampuController::class, 'index']);
Route::post('/sktm', [SuratKeteranganTidakMampuController::class, 'create'])->name('sktm.create');

