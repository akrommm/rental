<?php

use App\Http\Controllers\Admin\RentalController;
use App\Http\Controllers\Front\BerandaController;
use Illuminate\Support\Facades\Route;

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
    return view('components.app');
});

// Bagian Admin
Route::prefix('admin')->group(function () {
    include "_/admin.php";
});

Route::get('beranda', BerandaController::class);
Route::resource('rental', RentalController::class);
