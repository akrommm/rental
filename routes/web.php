<?php

use App\Http\Controllers\Admin\RentalController;
use App\Http\Controllers\AuthController;
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
    return redirect('beranda');
});

// login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Bagian Admin
Route::prefix('admin')->middleware('auth')->group(function () {
    include "_/admin.php";
});

Route::get('beranda', BerandaController::class);
Route::resource('rental', RentalController::class);
