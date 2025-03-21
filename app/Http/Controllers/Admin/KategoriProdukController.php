<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class KategoriProdukController extends Controller
{
    function index()
    {
        $data['list_kategori'] = KategoriProduk::all();
        return view('admin.kategori-produk.index', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:255',
        ], [
            'judul.required' => 'Nama Kategori Harus Diisi',
            'judul.string' => 'Nama Kategori Harus Berupa String',
            'judul.max' => 'Nama Kategori Maksimal 255 Karakter',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        }

        $kategori = new KategoriProduk();
        $kategori->judul = request('judul');
        $kategori->slug = Str::slug($request->judul, '-');
        $kategori->status = request('status');
        $kategori->save();

        return redirect('admin/kategori-produk')->with('success', 'Data Kategori Produk Berhasil Ditambahkan');
    }

    public function update($id, Request $request)
    {

        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:255',
        ], [
            'judul.required' => 'Nama Kategori Harus Diisi',
            'judul.string' => 'Nama Kategori Harus Berupa String',
            'judul.max' => 'Nama Kategori Maksimal 255 Karakter',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        }

        $kategori = KategoriProduk::find($id);
        if (request('judul')) $kategori->judul = request('judul');
        $kategori->slug = Str::slug($request->judul, '-');
        if (request('status')) $kategori->status = request('status');
        $kategori->save();

        return redirect('admin/kategori-produk')->with('success', 'Data Kategori Produk Berhasil di Edit');
    }

    function destroy($id)
    {
        $kategori = KategoriProduk::find($id);
        $kategori->delete();
        return redirect('admin/kategori-produk')->with('danger', 'Data Berhasil Dihapus');
    }
}
