<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lisensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis',
        'brand_nama_lisensi',
        'contract_serial_number',
        'start_date',
        'end_date',
        'kebutuhan_maintenance',
        'pic',
        'vendor',
        'keterangan',
        'status'
    ];
}
