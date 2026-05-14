<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengadaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pekerjaan',
        'nama_penyedia',
        'pic',
        'nilai_pengadaan',
        'jangka_waktu_pekerjaan',
        'biaya_anggaran',
        'keterangan',
        'status',
        'tanggal_mulai',
        'tanggal_berakhir'
    ];
}
