<?php

namespace App\Http\Controllers;

use App\Exports\LisensiExport;
use App\Http\Controllers\Controller;
use App\Models\Lisensi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LisensiController extends Controller
{
    public function index()
    {
        $data = Lisensi::latest()->get();

        return view('lisensi.index', compact('data'));
    }

    public function create()
    {
        return view('lisensi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required',
            'brand_nama_lisensi' => 'required',
            'status' => 'required',
        ]);

        Lisensi::create($request->all());

        return redirect()
            ->route('lisensi.index')
            ->with('success', 'Data lisensi berhasil ditambahkan');
    }

    public function show(Lisensi $lisensi)
    {
        return view('lisensi.show', compact('lisensi'));
    }

    public function edit(Lisensi $lisensi)
    {
        return view('lisensi.edit', compact('lisensi'));
    }

    public function update(Request $request, Lisensi $lisensi)
    {
        $request->validate([
            'jenis' => 'required',
            'brand_nama_lisensi' => 'required',
            'status' => 'required',
        ]);

        $lisensi->update($request->all());

        return redirect()
            ->route('lisensi.index')
            ->with('success', 'Data lisensi berhasil diperbarui');
    }

    public function destroy(Lisensi $lisensi)
    {
        $lisensi->delete();

        return back()->with('success', 'Data berhasil dihapus');
    }

    public function exportPdf()
    {
        $data = Lisensi::latest()->get();

        $pdf = Pdf::loadView('lisensi.pdf', compact('data'))
            ->setPaper('A4', 'landscape');

        return $pdf->download('laporan-lisensi.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(
            new LisensiExport,
            'laporan-lisensi.xlsx'
        );
    }
}
