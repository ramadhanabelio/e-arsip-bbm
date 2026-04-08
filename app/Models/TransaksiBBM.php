<?php

namespace App\Models;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiBBM extends Model
{
    use HasFactory;

    protected $table = 'transaksi_bbm';

    protected $fillable = [
        'tanggal',
        'kendaraan_id',
        'jumlah_liter',
        'jenis_bbm',
        'harga_per_liter',
        'total',
        'no_nota',
        'foto_nota',
        'keterangan'
    ];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    protected static function booted()
    {
        static::saving(function ($model) {
            $model->total = $model->jumlah_liter * $model->harga_per_liter;
        });
    }
}
