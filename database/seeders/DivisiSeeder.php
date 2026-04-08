<?php

namespace Database\Seeders;

use App\Models\Divisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisis = [
            'Divisi Umum',
            'Divisi Sekper',
            'Divisi TSI',
            'Divisi Kepatuhan',
            'Divisi Operasional',
            'Divisi Konsumer',
            'Divisi Dana & Digital Banking',
            'Divisi Treasury',
            'Divisi Hukum',
            'Divisi SPSO',
            'Divisi Menrisk',
            'Divisi MKM',
            'Divisi Renstra',
            'Divisi MSDI',
            'Divisi SAM',
            'Divisi Komersil',
            'DIVISI D2B',
            'DIVISI RENKEU'
        ];

        foreach ($divisis as $d) {
            Divisi::create(['nama_divisi' => $d]);
        }
    }
}
