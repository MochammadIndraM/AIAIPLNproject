<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseexcelController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\cruduserwebController;
use App\Models\surat;

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

Route::get('/', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/cekLogin', [loginController::class, 'cek_login'])->middleware('auth');
Route::get('/logout', [loginController::class, 'logout'])->name('logout');

Route::view('/dashboard', 'layout.dashboard')->middleware('auth');
Route::view('/masterdata', 'layout.masterdata');
Route::view('/masteruser-web', 'layout.masteruser_web');
Route::view('/masteruser-mbl', 'layout.masteruser_mbl');
Route::view('/lap-data', 'layout.lap_data');
Route::view('/proses-klaim-garansi', 'layout.proses_klaimgaransi');
Route::view('/pengiriman-surat', 'layout.pengiriman_surat');
Route::view('/penerimaan-surat', 'layout.penerimaan_surat');
Route::view('/login', 'layout.login');

Route::post('/uploadexcel', [DatabaseexcelController::class, 'uploadexcel'])->name('uploadexcel');
Route::get('/penerimaan-surat', [DatabaseexcelController::class, 'penerimaansurat'] )->name('penerimaansurat');

Route::get('/masteruser-web',[cruduserwebController::class, 'index'])->middleware('auth');
Route::post('/masteruser-web/store',[cruduserwebController::class, 'store'])->name('proses');
Route::post('/masteruser-web/update',[cruduserwebController::class, 'update'])->name('update');
Route::get('/masteruser-web/destroy/{id}',[cruduserwebController::class, 'destroy']);
