<?php

namespace Database\Seeders;

use App\Models\Divisi;
use App\Models\Kendaraan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KendaraanDivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mapping = [
            'BM 1913 NO' => 'DIVISI D2B',
            'BM 1920 NO' => 'DIVISI D2B',
            'BM 1172 NQ' => 'DIVISI D2B',
            'BM 1914 NO' => 'DIVISI RENKEU',
            'BM 1918 NO' => 'Divisi Hukum',
            'BM 1925 NO' => 'Divisi Sekper',
            'BM 1917 NO' => 'Divisi SAM',
            'BM 1921 NO' => 'Divisi SAM',
            'BM 1923 NO' => 'Divisi SAM',
            'BM 1924 NO' => 'Divisi SAM',
        ];

        foreach ($mapping as $no_polisi => $nama_divisi) {
            $kendaraan = Kendaraan::where('no_polisi', $no_polisi)->first();
            $divisi = Divisi::where('nama_divisi', $nama_divisi)->first();

            if ($kendaraan && $divisi) {
                $kendaraan->divisi()->syncWithoutDetaching([$divisi->id]);
            }
        }
    }
}
