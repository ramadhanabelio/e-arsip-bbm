<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\PengadaanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Pengadaan;
use Illuminate\Http\Request;
use App\Mail\PengadaanNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class PengadaanController extends Controller
{
    public function index()
    {
        $data = Pengadaan::latest()->get();

        return view('pengadaan.index', compact('data'));
    }

    public function create()
    {
        return view('pengadaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pekerjaan' => 'required',
            'nama_penyedia' => 'required',
            'pic' => 'required',
            'nilai_pengadaan' => 'required|numeric',
            'jangka_waktu_pekerjaan' => 'required',
            'status' => 'required'
        ]);

        $pengadaan = Pengadaan::create($request->all());

        Mail::to(Auth::user()->email)
            ->send(new PengadaanNotification(
                $pengadaan,
                'ditambahkan'
            ));

        return redirect()
            ->route('pengadaan.index')
            ->with('success', 'Data pengadaan berhasil ditambahkan');
    }

    public function show(Pengadaan $pengadaan)
    {
        return view('pengadaan.show', compact('pengadaan'));
    }

    public function edit(Pengadaan $pengadaan)
    {
        return view('pengadaan.edit', compact('pengadaan'));
    }

    public function update(Request $request, Pengadaan $pengadaan)
    {
        $request->validate([
            'nama_pekerjaan' => 'required',
            'nama_penyedia' => 'required',
            'pic' => 'required',
            'nilai_pengadaan' => 'required|numeric',
            'jangka_waktu_pekerjaan' => 'required',
            'status' => 'required'
        ]);

        $pengadaan->update($request->all());

        Mail::to(Auth::user()->email)
            ->send(new PengadaanNotification(
                $pengadaan,
                'diupdate'
            ));

        return redirect()
            ->route('pengadaan.index')
            ->with('success', 'Data pengadaan berhasil diupdate');
    }

    public function destroy(Pengadaan $pengadaan)
    {
        $pengadaan->delete();

        return back()->with('success', 'Data berhasil dihapus');
    }

    public function exportPdf()
    {
        $data = Pengadaan::latest()->get();

        $pdf = Pdf::loadView('pengadaan.pdf', compact('data'))
            ->setPaper('A4', 'landscape');

        return $pdf->download('laporan-pengadaan.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(
            new PengadaanExport,
            'laporan-pengadaan.xlsx'
        );
    }
}
