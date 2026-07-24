<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lisensi;
use App\Models\Pengadaan;

class HomeController extends Controller
{
    public function index()
    {
        $totalPengadaan = Pengadaan::count();

        $pengadaanDone = Pengadaan::where('status', 'done')->count();
        $pengadaanRenewal = Pengadaan::where('status', 'renewal')->count();
        $pengadaanExpired = Pengadaan::where('status', 'expired')->count();

        $totalLisensi = Lisensi::count();

        $lisensiActive = Lisensi::where('status', 'active')->count();
        $lisensiRenewal = Lisensi::where('status', 'renewal')->count();
        $lisensiExpired = Lisensi::where('status', 'expired')->count();

        return view('home', compact(
            'totalPengadaan',
            'pengadaanDone',
            'pengadaanRenewal',
            'pengadaanExpired',
            'totalLisensi',
            'lisensiActive',
            'lisensiRenewal',
            'lisensiExpired'
        ));
    }
}
