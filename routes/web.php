<?php

use App\Http\Controllers\PenggunaanController;
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

Route::get('/penggunaan',function(){
    return view('penggunaan');
});

Route::post('/penggunaan', [PenggunaanController::class, 'index'])->name('penggunaan.index');

// sku
Route::get('/sku',function(){
    return view('sku');
});

Route::post('/sku', [SuratKeteranganUsahaController::class, 'create'])->name('sku.create');

