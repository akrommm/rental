<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KategoriProdukController;
use App\Http\Controllers\Admin\ManajemenProdukController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;

// Bagian Dashboard
Route::get('dashboard', DashboardController::class);
// Bagian Manajemen Produk
Route::resource('manajemen-produk', ManajemenProdukController::class);
// Bagian Kategori Produk
Route::resource('kategori-produk', KategoriProdukController::class);
// Bagian Profile
Route::resource('profile', ProfileController::class);
