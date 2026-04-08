<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use App\Models\TransaksiBBM;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalTransaksi = TransaksiBBM::count();
        $totalPengeluaran = TransaksiBBM::sum('total');
        $totalLiter = TransaksiBBM::sum('jumlah_liter');
        $totalKendaraan = Kendaraan::count();

        $perBulan = TransaksiBBM::select(
            DB::raw('MONTH(tanggal) as bulan'),
            DB::raw('SUM(total) as total')
        )
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->get();

        $bulanLabels = [];
        $bulanTotal = [];

        foreach ($perBulan as $d) {
            $bulanLabels[] = date("F", mktime(0, 0, 0, $d->bulan, 1));
            $bulanTotal[] = $d->total;
        }

        $liter = TransaksiBBM::select(
            DB::raw('MONTH(tanggal) as bulan'),
            DB::raw('SUM(jumlah_liter) as total')
        )
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->get();

        $literLabels = [];
        $literTotal = [];

        foreach ($liter as $d) {
            $literLabels[] = date("F", mktime(0, 0, 0, $d->bulan, 1));
            $literTotal[] = $d->total;
        }

        $kendaraan = TransaksiBBM::join('kendaraans', 'kendaraans.id', '=', 'transaksi_bbm.kendaraan_id')
            ->select('kendaraans.no_polisi', DB::raw('SUM(transaksi_bbm.total) as total'))
            ->groupBy('kendaraans.no_polisi')
            ->get();

        $kendaraanLabel = $kendaraan->pluck('no_polisi');
        $kendaraanTotal = $kendaraan->pluck('total');

        $divisi = DB::table('transaksi_bbm')
            ->join('kendaraans', 'kendaraans.id', '=', 'transaksi_bbm.kendaraan_id')
            ->join('kendaraan_divisis', 'kendaraan_divisis.kendaraan_id', '=', 'kendaraans.id')
            ->join('divisis', 'divisis.id', '=', 'kendaraan_divisis.divisi_id')
            ->select('divisis.nama_divisi', DB::raw('SUM(transaksi_bbm.total) as total'))
            ->groupBy('divisis.nama_divisi')
            ->get();

        $divisiLabel = $divisi->pluck('nama_divisi');
        $divisiTotal = $divisi->pluck('total');

        return view('dashboard', compact(
            'totalTransaksi',
            'totalPengeluaran',
            'totalLiter',
            'totalKendaraan',
            'bulanLabels',
            'bulanTotal',
            'literLabels',
            'literTotal',
            'kendaraanLabel',
            'kendaraanTotal',
            'divisiLabel',
            'divisiTotal'
        ));
    }
}
