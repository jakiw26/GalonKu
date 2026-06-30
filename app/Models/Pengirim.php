<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengirim extends Model
{
    protected $table = 'pengirimans';

    protected $fillable = [
        'pesanan_id',
        'kurir_id',
        'tanggal_kirim',
        'status_pengiriman',
        'bukti_foto'
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class,'pesanan_id');
    }
    public function kurir()
    {
        return $this->belongsTo(User::class,'kurir_id');
    }
}
