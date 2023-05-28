<?php

use App\Http\Controllers\Cetakexceldb;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseexcelController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CrudUserWebController;
use App\Http\Controllers\CrudUserMblController;
use App\Http\Controllers\CrudMasterDataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProsesKlaimGaransi;
use App\Models\surat;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'cek_login'])->name('cek_login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::view('/masterdata', 'layout.masterdata');
    Route::view('/masteruser-mbl', 'layout.masteruser_mbl');
    Route::view('/lap_data', 'layout.lap_data');
    Route::view('/proses-klaim-garansi', 'layout.proses_klaimgaransi');
    Route::view('/pengiriman-surat', 'layout.pengiriman_surat');
    Route::view('/penerimaan-surat', 'layout.penerimaan_surat');

    Route::post('/uploadexcel', [DatabaseexcelController::class, 'uploadexcel'])->name('uploadexcel');

    Route::prefix('penerimaan-surat')->group(function () {
        Route::get('/', [DatabaseexcelController::class, 'penerimaansurat'])->name('penerimaansurat');
        Route::get('/setujuulp/{no_berita_acara}', [DatabaseexcelController::class, 'setujuiulp'])->name('setujuiulp');
        Route::get('/tolakulp/{no_berita_acara}', [DatabaseexcelController::class, 'tolakulp'])->name('tolakulp');
        Route::get('/setujuup3/{no_berita_acara}', [DatabaseexcelController::class, 'setujuiup3'])->name('setujuiup3');
        Route::get('/tolakup3/{no_berita_acara}', [DatabaseexcelController::class, 'tolakup3'])->name('tolakup3');
        Route::get('/setujupabrik/{no_berita_acara}', [DatabaseexcelController::class, 'setujuipabrik'])->name('setujuipabrik');
        Route::get('/tolakpabrik/{no_berita_acara}', [DatabaseexcelController::class, 'tolakpabrik'])->name('tolakpabrik');
    });



    Route::prefix('masteruser-web')->group(function () {
        Route::get('/', [CrudUserWebController::class, 'index']);
        Route::post('/store', [CrudUserWebController::class, 'store'])->name('proses');
        Route::post('/update', [CrudUserWebController::class, 'update'])->name('update');
        Route::get('/destroy/{id}', [CrudUserWebController::class, 'destroy']);
    });

    Route::prefix('masteruser-mbl')->group(function () {
        Route::get('/', [CrudUserMblController::class, 'index']);
        Route::post('/store', [CrudUserMblController::class, 'store'])->name('proses');
        Route::post('/update', [CrudUserMblController::class, 'update'])->name('update');
        Route::get('/destroy/{id}', [CrudUserMblController::class, 'destroy']);
    });

    Route::prefix('masterdata')->group(function () {
        Route::get('/', [CrudMasterDataController::class, 'index']);
        Route::post('/store', [CrudMasterDataController::class, 'store'])->name('masterdata.store');
        Route::post('/update', [CrudMasterDataController::class, 'update'])->name('masterdata.update');
        Route::get('/destroy/{id}', [CrudMasterDataController::class, 'destroy'])->name('masterdata.destroy');
    });

    Route::prefix('lap_data')->group(function () {
        Route::get('/', [Cetakexceldb::class, 'index']);
        Route::post('/cetakexceldb/export', [Cetakexceldb::class, 'export'])->name('export');
    });
    Route::prefix('proses-klaim-garansi')->group(function () {
        Route::get('/', [ProsesKlaimGaransi::class, 'index']);
        Route::get('/packingproses/{no_berita_acara}', [ProsesKlaimGaransi::class, 'packingproses'])->name('packingproses');
        Route::get('/packingselesai/{no_berita_acara}', [ProsesKlaimGaransi::class, 'packingselesai'])->name('packingselesai');
        Route::get('/kirimproses/{no_berita_acara}', [ProsesKlaimGaransi::class, 'kirimproses'])->name('kirimproses');
        Route::get('/kirimdikirim/{no_berita_acara}', [ProsesKlaimGaransi::class, 'kirimdikirim'])->name('kirimdikirim');

    });
});
