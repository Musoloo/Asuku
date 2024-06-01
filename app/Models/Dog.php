<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis',
        'nama',
        'gender',
        'tanggal_lahir',
        'berat',
        'warna',
        'harga',
        'deskripsi',
        'status_jual',
        'gambar',
    ];

    public function cart()
    {
        return $this->hasMany(Cart::class, 'dog_id', 'id');
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class, 'dog_id', 'id');
    }

}
