<?php

namespace App\Exports;

use App\Models\Pengadaan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PengadaanExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Pengadaan::select(
            'nama_pekerjaan',
            'nama_penyedia',
            'pic',
            'nilai_pengadaan',
            'jangka_waktu_pekerjaan',
            'biaya_anggaran',
            'status',
            'keterangan'
        )->get();
    }

    public function headings(): array
    {
        return [
            'Nama Pekerjaan',
            'Nama Penyedia',
            'PIC',
            'Nilai Pengadaan',
            'Jangka Waktu',
            'Biaya Anggaran',
            'Status',
            'Keterangan',
        ];
    }
}
