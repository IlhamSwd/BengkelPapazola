<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MontirController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\StokController;
// use App\Models\Customer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.main');
});
Route::resource('customer',CustomerController::class);
Route::resource('stok', StokController::class);
Route::resource('montir', MontirController::class);
Route::resource('riwayat', RiwayatController::class);
Route::resource('pembayaran', PembayaranController::class);