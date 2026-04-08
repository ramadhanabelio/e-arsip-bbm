<?php

namespace App\Models;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $table = 'divisis';

    protected $fillable = [
        'nama_divisi'
    ];

    public function kendaraan()
    {
        return $this->belongsToMany(Kendaraan::class, 'kendaraan_divisis');
    }
}
