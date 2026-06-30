<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Pesanan;
use App\Models\Pengiriman;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;
    protected $fillable = [

        'name',
        'email',
        'phone',
        'role',
        'password'

    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function pesanan()
    {

        return $this->hasMany(Pesanan::class,'user_id');
    }

    // Kurir → banyak pengiriman
    public function pengiriman()
    {
        return $this->hasMany(Pengirim::class,'kurir_id');
    }

    public function alamat()
    {

        return $this->hasMany(Alamatcust::class,'user_id');
    }
    
}
