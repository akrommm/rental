<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Produk;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index(Request $request)
    {

        $produk = Produk::all();

        return view('front.rental.index', compact('produk'));
    }
}
