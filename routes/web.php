<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseexcelController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CrudUserWebController;
use App\Http\Controllers\CrudUserMblController;
use App\Models\surat;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'cek_login'])->name('cek_login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'layout.dashboard');
    Route::view('/masterdata', 'layout.masterdata');
    Route::view('/masteruser-mbl', 'layout.masteruser_mbl');
    Route::view('/lap-data', 'layout.lap_data');
    Route::view('/proses-klaim-garansi', 'layout.proses_klaimgaransi');
    Route::view('/pengiriman-surat', 'layout.pengiriman_surat');
    Route::view('/penerimaan-surat', 'layout.penerimaan_surat');

    Route::post('/uploadexcel', [DatabaseexcelController::class, 'uploadexcel'])->name('uploadexcel');
    Route::get('/penerimaan-surat', [DatabaseexcelController::class, 'penerimaansurat'])->name('penerimaansurat');

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
});
