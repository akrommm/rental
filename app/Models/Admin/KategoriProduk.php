<?php

namespace App\Models\Admin;

use App\Models\ModelAuthenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriProduk extends ModelAuthenticate
{
    use HasFactory;

    protected $table = 'kategori';
    protected $primaryKey = 'id';

    protected $fillable = [
        'judul',
        'slug',
        'status'
    ];

    public function produk(): HasMany
    {
        return $this->hasMany(Produk::class, 'id_kategori', 'id');
    }
}
