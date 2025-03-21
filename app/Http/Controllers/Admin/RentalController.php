<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\KategoriProduk;
use App\Models\Admin\Produk;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index(Request $request)
    {


        $list_kategori = KategoriProduk::all();

        if ($request->has('id_kategori')) {
            $produk = Produk::where('id_kategori', $request->id_kategori)
                ->paginate(8);
        } else {
            $produk = Produk::all();
        }

        return view('front.rental.index', compact('produk', 'list_kategori'));
    }
}
