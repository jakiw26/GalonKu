<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\DetailPesanan;
use App\Models\Pembayaran;
use App\Models\Pengirim;
use App\Models\Review;

class Pesanan extends Model
{
    protected $table = 'pesanan';

    protected $fillable = [
        'user_id',
        'tanggal_pesan',
        'metode_pengambilan',
        'alamat',
        'catatan',
        'status',
        'total_harga'
    ];

    public function user()
    {
        return $this->belongsTo(
            User::class
        );
    }

    public function detail()
    {
        return $this->hasMany(
            DetailPesanan::class,
            'pesanan_id'
        );
    }

    public function pembayaran()
    {
        return $this->hasOne(
            Pembayaran::class,
            'pesanan_id'
        );
    }
    public function pengiriman()
    {
        return $this->hasOne(
            Pengirim::class,
            'pesanan_id'
        );
    }
    public function review()
    {
        return $this->hasOne(
            Review::class,
            'pesanan_id'
        );
    }
}
