<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KendaraanDivisi extends Model
{
    use HasFactory;

    protected $table = 'kendaraan_divisis';

    protected $fillable = [
        'kendaraan_id',
        'divisi_id'
    ];
}
