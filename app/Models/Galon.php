<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galon extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis', 'merk', 'liter_air', 'stok', 'tarif'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
