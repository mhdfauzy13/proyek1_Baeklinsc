<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananDetail extends Model
{
    use HasFactory;

    protected $table='layanan_detail';
    protected $fillable = [
        'nama',
        'harga',
    ];
}
