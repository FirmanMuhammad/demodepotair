<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','nama', 'jenis', 'jumlah', 'harga', 'tgl_penjualan','alamat','noHp'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
