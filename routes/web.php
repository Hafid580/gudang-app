<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

// Halaman beranda (opsional)
Route::get('/', function () {
    return redirect()->route('barang.index');
});

// Route resource untuk BarangController
Route::resource('barang', BarangController::class);
