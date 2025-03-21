<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\KategoriProduk;
use App\Models\Admin\Produk;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ManajemenProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        $list_kategori = KategoriProduk::all();
        return view('admin.produk.index', compact('produk', 'list_kategori'));
    }

    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.produk.show', compact('produk'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'harga_perhari' => 'required',
            'harga_perhari' => 'required',
            'id_kategori' => 'required',
            'status' => 'required',
            'gambar' => 'image|mimes:png,jpg,jpeg|max:5120',
        ], [
            'nama.required' => 'Nama Harus Diisi',
            'nama.string' => 'Nama Harus Berupa Kalimat',
            'nama.max' => 'Nama Maksimal 255 Karakter',
            'harga_perhari.required' => 'Harga Perjam Harus Diisi',
            'harga_perhari.required' => 'Harga Perhari Harus Diisi',
            'id_kategori.required' => 'id_kategori Harus Dipilih',
            'status.required' => 'Status Harus Dipilih',
            'gambar.image' => 'Gambar Harus Berupa Image',
            'gambar.mimes' => 'Gambar Harus Berekstensi png, jpg, atau jpeg',
            'gambar.max' => 'Gambar Tidak Boleh Lebih Dari 5 MB',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        }

        $produk = new Produk();
        $produk->nama = request('nama');
        $produk->id_kategori = request('id_kategori');
        $produk->harga_perjam = request('harga_perjam');
        $produk->harga_perhari = request('harga_perhari');
        $produk->status = request('status');
        $produk->save();

        $produk->handleUploadGambar();

        return redirect('admin/manajemen-produk')->with('success', 'Produk Berhasil Ditambahkan');
    }

    public function update($id, Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'harga_perhari' => 'required',
            'harga_perhari' => 'required',
            'id_kategori' => 'required',
            'status' => 'required',
            'gambar' => 'image|mimes:png,jpg,jpeg|max:5120',
        ], [
            'nama.required' => 'Nama Harus Diisi',
            'nama.string' => 'Nama Harus Berupa Kalimat',
            'nama.max' => 'Nama Maksimal 255 Karakter',
            'harga_perhari.required' => 'Harga Perjam Harus Diisi',
            'harga_perhari.required' => 'Harga Perhari Harus Diisi',
            'id_kategori.required' => 'id_kategori Harus Dipilih',
            'status.required' => 'Status Harus Dipilih',
            'gambar.image' => 'Gambar Harus Berupa Image',
            'gambar.mimes' => 'Gambar Harus Berekstensi png, jpg, atau jpeg',
            'gambar.max' => 'Gambar Tidak Boleh Lebih Dari 5 MB',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        }

        $produk = Produk::find($id);
        if (request('nama')) $produk->nama = request('nama');
        if (request('id_kategori')) $produk->id_kategori = request('id_kategori');
        if (request('harga_perhari')) $produk->harga_perhari = request('harga_perhari');
        if (request('harga_perjam')) $produk->harga_perjam = request('harga_perjam');
        if (request('status')) $produk->status = request('status');
        $produk->save();

        if (request('gambar')) $produk->handleUploadGambar();

        return redirect('admin/manajemen-produk')->with('success', 'Produk Berhasil di Edit');
    }

    function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->handleDeleteGambar();
        $produk->delete();

        return redirect('admin/manajemen-produk')->with('danger', 'Produk Berhasil Dihapus');
    }
}
