<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ManajemenProdukController;
use Illuminate\Support\Facades\Route;

// Bagian Dashboard
Route::get('dashboard', DashboardController::class);
// Bagian Manajemen Produk
Route::resource('manajemen-produk', ManajemenProdukController::class);
