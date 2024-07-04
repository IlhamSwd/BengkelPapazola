<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MontirController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\StokController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome2');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('customer', CustomerController::class);
Route::resource('stok', StokController::class);
Route::resource('montir', MontirController::class);
Route::resource('riwayat', RiwayatController::class);
Route::resource('pembayaran', PembayaranController::class);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard') ->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
