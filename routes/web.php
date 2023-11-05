<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\SuratKeteranganMeninggal;
use App\Http\Controllers\PenggunaanController;
use App\Http\Controllers\SKDDomisiliController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\SKDBelumMenikahAdminController;
use App\Http\Controllers\SKDBelumMenikahController;
use App\Http\Controllers\SKDDomisiliAdminController;
use App\Http\Controllers\SKMAdminController;
use App\Http\Controllers\SKTMAdminController;
use App\Http\Controllers\SKUAdminController;
use App\Http\Controllers\SuratKeteranganUsahaController;
use App\Http\Controllers\SuratKeteranganMeninggalController;
use App\Http\Controllers\SuratKeteranganTidakMampuController;
use App\Http\Controllers\SuratTugasController;
use App\Models\SKDDomisili;

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

    Route::get('/surattugas', [SuratTugasController::class, 'index']);
    Route::post('/surattugas', [SuratTugasController::class, 'create'])->name('surattugas.create');
    Route::get('/generate-pdf', [SuratTugasController::class, 'generatePDF'])->name('generate-pdf');


    // login admin
    Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.index');
    Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login');

    Route::get('/check-gd', function () {
    if (extension_loaded('gd') && function_exists('gd_info')) {
        return "GD extension is installed and active.";
    } else {
        return "GD extension is not installed or not active.";
    }
});


Route::middleware(['admin'])->group(function (){
    Route::get('/admin/dashboard/', [DashboardAdminController::class, 'index']);
    Route::get('/admin/sku/', [SKUAdminController::class, 'adminSKU'])->name('admin.sku');
    Route::get('/admin/skm/', [SKMAdminController::class, 'adminSKM'])->name('admin.skm');
    Route::get('/admin/sktm/', [SKTMAdminController::class, 'adminSKTM'])->name('admin.sktm');
    Route::get('/admin/skdDomisili/', [SKDDomisiliAdminController::class, 'adminSKDDomisili'])->name('admin.skdDomisili');
    Route::get('/admin/skdBelumMenikah/', [SKDBelumMenikahAdminController::class, 'adminSKDBelumMenikah'])->name('admin.skdBelumMenikah');
    
    // detail
    Route::get('/admin/sku/{id}', [SKUAdminController::class, 'detailSKU']);
    Route::get('/admin/skm/{id}', [SKMAdminController::class, 'detailSKM']);

    // edit
    Route::get('/admin/sku/edit/{id}', [SKUAdminController::class, 'editSKU'])->name('sku.edit');
    Route::put('/admin/sku/{id}', [SKUAdminController::class, 'updateSKU'])->name('sku.update');

    Route::get('/admin/skm/edit/{id}', [SKMAdminController::class, 'editSKM'])->name('skm.edit');
    Route::put('/admin/skm/{id}', [SKMAdminController::class, 'updateSKM'])->name('skm.update');

    Route::get('/admin/skdDomisili/edit/{id}', [SKDDomisiliAdminController::class, 'editSKDDomisili'])->name('skdDomisili.edit');
    Route::put('/admin/skdDomisili/{id}', [SKDDomisiliAdminController::class, 'updateSKDDomisili'])->name('skdDomisili.update');

    Route::get('/admin/skdBelumMenikah/edit/{id}', [SKDBelumMenikahAdminController::class, 'editSKDBelumMenikah'])->name('skdBelumMenikah.edit');
    Route::put('/admin/skdBelumMenikah/{id}', [SKDBelumMenikahAdminController::class, 'updateSKDBelumMenikah'])->name('skdBelumMenikah.update');

    // delete
    Route::delete('/admin/sku/{id}', [SKUAdminController::class, 'deleteSKU'])->name('sku.delete');
    Route::delete('/admin/skm/{id}', [SKMAdminController::class, 'deleteSKM'])->name('skm.delete');
    Route::delete('/admin/skdDomisili/{id}', [SKDDomisiliAdminController::class, 'deleteSKDDomisili'])->name('skdDomisili.delete');
    Route::delete('/admin/skdBelumMenikah/{id}', [SKDBelumMenikahAdminController::class, 'deleteSKDBelumMenikah'])->name('deleteSKDBelumMenikah.delete');
});

Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');



