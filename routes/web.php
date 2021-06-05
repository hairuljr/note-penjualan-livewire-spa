<?php

use App\Http\Controllers\BarangController;
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
    return view('welcome');
});

Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');

    Route::get('/barang', [ BarangController::class, "index_view" ])->name('barang');
    Route::view('/barang/new', "pages.barang.barang-new")->name('barang.new');
    Route::view('/barang/edit/{barangId}', "pages.barang.barang-edit")->name('barang.edit');
});