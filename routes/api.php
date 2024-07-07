<?php

use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\MontirController;
use App\Http\Controllers\API\PembayaranController;
use App\Http\Controllers\API\RiwayatController;
use App\Http\Controllers\API\StokController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('stok', [StokController::class, 'index']);
Route::post('stok', [StokController::class, 'store']);
Route::patch('stok/{id}', [StokController::class, 'update']);
Route::delete('stok/{id}', [StokController::class, 'destroy']);

Route::get('customer', [CustomerController::class, 'index']);
Route::post('customer', [StokController::class, 'store']);
Route::patch('customer/{id}', [CustomerController::class, 'update']);
Route::delete('customer/{id}', [CustomerController::class, 'destroy']);

Route::get('montir', [MontirController::class, 'index']);
Route::post('montir', [MontirController::class, 'store']);
Route::patch('montir/{id}', [MontirController::class, 'update']);
Route::delete('montir/{id}', [MontirController::class, 'destroy']);

Route::get('pembayaran', [PembayaranController::class, 'index']);
Route::post('pembayaran', [PembayaranController::class, 'store']);
Route::patch('pembayaran/{id}', [PembayaranController::class, 'update']);
Route::delete('pembayaran/{id}', [PembayaranController::class, 'destroy']);

Route::get('riwayat', [RiwayatController::class, 'index']);
Route::post('riwayat', [RiwayatController::class, 'store']);
Route::patch('riwayat/{id}', [RiwayatController::class, 'update']);
Route::delete('riwayat/{id}', [RiwayatController::class, 'destroy']);