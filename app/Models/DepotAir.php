<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepotAir extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_depot';

    protected $fillable =[
        'nama_depot',
        'alamat_depot',
        'no_telepon',
        'foto',
        'stok'
    ];
}
