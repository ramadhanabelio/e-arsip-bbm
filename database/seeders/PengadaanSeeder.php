<?php

namespace Database\Seeders;

use App\Models\Pengadaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengadaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengadaan::insert([
            [
                'nama_pekerjaan' => 'Pengadaan Barang/Jasa Renewal Lisensi & Support Applikasi PRTG Network Monitor BRK Syariah 2026',
                'nama_penyedia' => 'CV Utama Herti Perkasa',
                'pic' => 'Syarifudin',
                'nilai_pengadaan' => 285913800,
                'jangka_waktu_pekerjaan' => '30 Hari',
                'biaya_anggaran' => 'Divisi Teknologi & Sistem Informasi',
                'keterangan' => null,
                'status' => 'done',
                'tanggal_mulai' => now(),
                'tanggal_berakhir' => now()->addDays(30),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_pekerjaan' => 'Pengadaan Barang/Jasa Imsakiyah Ramadhan Th. 1447 H/2026 M BRK Syariah',
                'nama_penyedia' => 'CV Arias Jaya Utama',
                'pic' => '-',
                'nilai_pengadaan' => 0,
                'jangka_waktu_pekerjaan' => '-',
                'biaya_anggaran' => '-',
                'keterangan' => null,
                'status' => 'done',
                'tanggal_mulai' => null,
                'tanggal_berakhir' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_pekerjaan' => 'Addendum Pertama SPK No.082/SPK/PL.03/DUM/ITL/2025',
                'nama_penyedia' => 'PT Veda Praxis',
                'pic' => '-',
                'nilai_pengadaan' => 0,
                'jangka_waktu_pekerjaan' => '-',
                'biaya_anggaran' => 'Divisi Teknologi & Sistem Informasi',
                'keterangan' => null,
                'status' => 'done',
                'tanggal_mulai' => null,
                'tanggal_berakhir' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_pekerjaan' => 'Addendum Pertama SPK No.077/SPK/PL.03/DUM/ITL/2025',
                'nama_penyedia' => 'PT Multipolar Technology Tbk',
                'pic' => '-',
                'nilai_pengadaan' => 0,
                'jangka_waktu_pekerjaan' => '-',
                'biaya_anggaran' => 'Divisi Teknologi & Sistem Informasi',
                'keterangan' => null,
                'status' => 'done',
                'tanggal_mulai' => null,
                'tanggal_berakhir' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_pekerjaan' => 'Addendum Pertama SPK No.091/ITL/SPK/PL.03/DUM/2025 OS Windows CAL',
                'nama_penyedia' => 'PT Mitra Mandiri Informatika',
                'pic' => '-',
                'nilai_pengadaan' => 0,
                'jangka_waktu_pekerjaan' => '-',
                'biaya_anggaran' => 'Divisi Teknologi & Sistem Informasi',
                'keterangan' => null,
                'status' => 'done',
                'tanggal_mulai' => null,
                'tanggal_berakhir' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_pekerjaan' => 'Addendum Kedua SPK No.068/ITL/SPK/PL.03/DUM/2023 Sewa Space Rak 4 & 5 di GTN BRKS',
                'nama_penyedia' => 'PT Multipolar Technology Tbk',
                'pic' => '-',
                'nilai_pengadaan' => 0,
                'jangka_waktu_pekerjaan' => '-',
                'biaya_anggaran' => 'Divisi Teknologi & Sistem Informasi',
                'keterangan' => null,
                'status' => 'done',
                'tanggal_mulai' => null,
                'tanggal_berakhir' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
