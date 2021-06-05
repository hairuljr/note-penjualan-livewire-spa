<?php

use App\Http\Controllers\{BarangController, DashboardController, PembelianController, PenjualanController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::get('/dashboard', [ DashboardController::class, "index" ])->name('dashboard');

    Route::get('/barang', [ BarangController::class, "index_view" ])->name('barang');
    Route::view('/barang/new', "pages.barang.barang-new")->name('barang.new');
    Route::view('/barang/edit/{barangId}', "pages.barang.barang-edit")->name('barang.edit');

    Route::get('/penjualan', [ PenjualanController::class, "index_view" ])->name('penjualan');
    Route::view('/penjualan/new', "pages.penjualan.penjualan-new")->name('penjualan.new');
    Route::view('/penjualan/edit/{penjualanId}', "pages.penjualan.penjualan-edit")->name('penjualan.edit');
    Route::view('/penjualan/show/{penjualanId}', "pages.penjualan.penjualan-show")->name('penjualan.show');
    
    Route::get('/pembelian', [ PembelianController::class, "index_view" ])->name('pembelian');
    Route::view('/pembelian/new', "pages.pembelian.pembelian-new")->name('pembelian.new');
    Route::view('/pembelian/edit/{pembelianId}', "pages.pembelian.pembelian-edit")->name('pembelian.edit');
    Route::view('/pembelian/show/{pembelianId}', "pages.pembelian.pembelian-show")->name('pembelian.show');
});
