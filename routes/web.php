<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\SuratKeteranganMeninggal;
use App\Http\Controllers\PenggunaanController;
use App\Http\Controllers\SKDDomisiliController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\SKDBelumMenikahController;
use App\Http\Controllers\SuratKeteranganUsahaController;
use App\Http\Controllers\SuratKeteranganMeninggalController;
use App\Http\Controllers\SuratKeteranganTidakMampuController;

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

    Route::get('/', [HomeController::class, 'index']);

    // sku
    Route::get('/sku', [SuratKeteranganUsahaController::class, 'index']);
    Route::post('/sku', [SuratKeteranganUsahaController::class, 'create'])->name('sku.create');

    // skm
    Route::get('/skm', [SuratKeteranganMeninggalController::class, 'index']);
    Route::post('/skm', [SuratKeteranganMeninggalController::class, 'create'])->name('skm.create');

    // sktm
    Route::get('/sktm', [SuratKeteranganTidakMampuController::class, 'index']);
    Route::post('/sktm', [SuratKeteranganTidakMampuController::class, 'create'])->name('sktm.create');

    // skd domisili
    Route::get('/skddomisili', [SKDDomisiliController::class, 'index']);
    Route::post('/skddomisili', [SKDDomisiliController::class, 'create'])->name('skddomisili.create');

    // skd belum menikah
    Route::get('/skdbelummenikah', [SKDBelumMenikahController::class, 'index']);
    Route::post('/skdbelummenikah', [SKDBelumMenikahController::class, 'create'])->name('skdbelummenikah.create');

    // login admin
    Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.index');
    Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login');


Route::middleware(['admin'])->group(function (){
    Route::get('/admin/dashboard/', [DashboardAdminController::class, 'index']);
    Route::get('/admin/sku/', [DashboardAdminController::class, 'adminSKU'])->name('admin.sku');
    Route::get('/admin/skm/', [DashboardAdminController::class, 'adminSKM'])->name('admin.skm');
    Route::get('/admin/sktm/', [DashboardAdminController::class, 'adminSKTM'])->name('admin.sktm');
    Route::get('/admin/skdDomisili/', [DashboardAdminController::class, 'adminSKDDomisili'])->name('admin.skdDomisili');
    Route::get('/admin/skdBelumMenikah/', [DashboardAdminController::class, 'adminSKDBelumMenikah'])->name('admin.skdBelumMenikah');
    
    // detail
    Route::get('/admin/sku/{id}', [DashboardAdminController::class, 'detailSKU']);
    Route::get('/admin/skm/{id}', [DashboardAdminController::class, 'detailSKM']);
});

Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');



