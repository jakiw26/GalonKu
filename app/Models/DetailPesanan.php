<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pesanan;
use App\Models\Produk;


class DetailPesanan extends Model
{
    protected $table = 'detailpesanan';

    protected $fillable = [
        'pesanan_id',
        'produk_id',
        'jumlah',
        'harga',
        'subtotal'
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
