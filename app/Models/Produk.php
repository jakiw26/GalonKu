<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\DetailPesanan;

class Produk extends Model
{
    protected $table = 'produk';

    protected $fillable = [
        'nama_produk',
        'jenis_galon',
        'jenis_air',
        'gambar',
        'harga',
        'deskripsi'
    ];

     public function detailPesanan()
    {
        return $this->hasMany(
            DetailPesanan::class,
            'produk_id'
        );
    }
}
