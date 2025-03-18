<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Artikel;
use App\Models\Admin\Produk;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    function __invoke()
    {
        // Ambil 4 produk terbaru dari database
        $produk = Produk::latest()->take(4)->get();

        // Kirim data ke view
        return view('front.beranda.index', compact('produk'));
    }
}
