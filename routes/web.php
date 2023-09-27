<?php

use App\Http\Controllers\PenggunaanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratKeteranganUsahaController;
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
Route::post('/', [SuratKeteranganUsahaController::class, 'create'])->name('sku.create');

