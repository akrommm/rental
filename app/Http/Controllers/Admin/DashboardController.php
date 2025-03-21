<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\KategoriProduk;
use App\Models\Admin\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __invoke()
    {
        $totalProduk = Produk::count();
        $totalKategori = KategoriProduk::count();
        return view('admin.dashboard.index', compact('totalProduk', 'totalKategori'));
    }
}
