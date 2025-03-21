<?php

namespace App\Models\Admin;

use App\Models\ModelAuthenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Produk extends ModelAuthenticate
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'tipe',
        'harga_perjam',
        'harga_perhari',
        'status',
        'gambar',
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriProduk::class, 'id_kategori', 'id');
    }

    function handleUploadGambar()
    {
        $this->handleDeleteGambar();
        if (request()->hasFile('gambar')) {
            $gambar = request()->file('gambar');
            $destination = "images/gambar-produk";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar->extension();
            $url = $gambar->storeAs($destination, $filename);
            $this->gambar = "app/" . $url;
            $this->save();
        }
    }

    function handleDeleteGambar()
    {
        $gambar = $this->gambar;
        if ($gambar) {
            $path = public_path($gambar);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
