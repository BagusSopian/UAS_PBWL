<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BpenjualanController;
use App\Http\Controllers\JpenjualanController;
use App\Http\Controllers\MpenjualanController;
use App\Http\Controllers\TpenjualanController;
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
    return redirect('login');
});

Auth::routes();
Route::resource('/master-penjualan', MpenjualanController::class)->except(['show']);
Route::resource('/barang-penjualan', BpenjualanController::class)->except(['show']);
Route::resource('/jenis-penjualan', JpenjualanController::class)->except(['show']);
Route::resource('/transaksi-penjualan', TpenjualanController::class)->except(['show']);
Route::get('/transaksi-penjualan/reset', [TpenjualanController::class, 'reset'])->name('transaksi-penjualan.reset');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
