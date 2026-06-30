<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class AlamatCust extends Model
{
    protected $table = 'alamatcust';


    protected $fillable = [
        'user_id',
        'nama_alamat',
        'alamat'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
