<?php

namespace App\Models;

use App\Models\Divisi;
use App\Models\TransaksiBBM;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraans';

    protected $fillable = [
        'nama_kendaraan',
        'no_polisi',
        'tahun',
        'jenis'
    ];

    public function divisi()
    {
        return $this->belongsToMany(Divisi::class, 'kendaraan_divisis');
    }

    public function transaksi()
    {
        return $this->hasMany(TransaksiBBM::class);
    }
}
