<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table='layanan';
    protected $fillable = [
        'nama',
        'keterangan',
        'gambar',
    ];

  public function details()
    {
        return $this->hasMany(LayananDetail::class, 'layanan_id');
    }
}
