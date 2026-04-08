<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kendaraans = [
            ['nama_kendaraan' => 'Innova G Luxury 2014', 'no_polisi' => 'BM 1913 NO'],
            ['nama_kendaraan' => 'Innova G Luxury 2014', 'no_polisi' => 'BM 1914 NO'],
            ['nama_kendaraan' => 'Innova G Luxury 2014', 'no_polisi' => 'BM 1922 NO'],
            ['nama_kendaraan' => 'Innova G Luxury 2014', 'no_polisi' => 'BM 1925 NO'],
            ['nama_kendaraan' => 'Innova G Luxury 2014', 'no_polisi' => 'BM 1172 NQ'],
            ['nama_kendaraan' => 'Innova G Luxury 2014', 'no_polisi' => 'BM 1924 NO'],
            ['nama_kendaraan' => 'Innova G Luxury 2014', 'no_polisi' => 'BM 1042 NQ'],
            ['nama_kendaraan' => 'Innova G Luxury 2014', 'no_polisi' => 'BM 1915 NO'],
            ['nama_kendaraan' => 'Innova G Luxury 2014', 'no_polisi' => 'BM 1916 NO'],
            ['nama_kendaraan' => 'Innova G Luxury 2014', 'no_polisi' => 'BM 1918 NO'],
            ['nama_kendaraan' => 'Innova G Luxury 2014', 'no_polisi' => 'BM 1920 NO'],
            ['nama_kendaraan' => 'Innova G Luxury 2014', 'no_polisi' => 'BM 1921 NO'],
            ['nama_kendaraan' => 'Innova G Luxury 2014', 'no_polisi' => 'BM 1923 NO'],
            ['nama_kendaraan' => 'Innova G Luxury 2014', 'no_polisi' => 'BM 1917 NO'],
            ['nama_kendaraan' => 'Innova G Luxury 2014', 'no_polisi' => 'BM 1926 NO'],

            // Reborn
            ['nama_kendaraan' => 'Innova Reborn 2021', 'no_polisi' => 'BM 1644 OC'],
            ['nama_kendaraan' => 'Innova Reborn 2021', 'no_polisi' => 'BM 1055 OC'],
            ['nama_kendaraan' => 'Innova Reborn 2021', 'no_polisi' => 'BM 1660 OC'],
            ['nama_kendaraan' => 'Innova Reborn 2021', 'no_polisi' => 'BM 1882 OB'],
        ];

        foreach ($kendaraans as $k) {
            Kendaraan::create($k);
        }
    }
}
