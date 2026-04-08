<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Kendaraan;
use App\Models\TransaksiBBM;
use Illuminate\Http\Request;

class TransaksiBBMController extends Controller
{
    public function index(Request $request)
    {
        $query = TransaksiBBM::with('kendaraan');

        if ($request->dari && $request->sampai) {
            $query->whereBetween('tanggal', [$request->dari, $request->sampai]);
        }

        $data = $query->latest()->get();

        return view('transaksi.index', compact('data'));
    }

    public function create()
    {
        $kendaraan = Kendaraan::with('divisi')->get();
        return view('transaksi.create', compact('kendaraan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'kendaraan_id' => 'required',
            'jumlah_liter' => 'required|numeric',
            'harga_per_liter' => 'required|numeric',
            'jenis_bbm' => 'required',
            'foto_nota' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('foto_nota')) {
            $data['foto_nota'] = $request->file('foto_nota')->store('nota', 'public');
        }

        TransaksiBBM::create($data);

        return redirect()->route('transaksi.index')->with('success', 'Data BBM berhasil ditambah');
    }

    public function show(TransaksiBBM $transaksi)
    {
        return view('transaksi.show', compact('transaksi'));
    }

    public function edit(TransaksiBBM $transaksi)
    {
        $kendaraan = Kendaraan::all();
        return view('transaksi.edit', compact('transaksi', 'kendaraan'));
    }

    public function update(Request $request, TransaksiBBM $transaksi)
    {
        $request->validate([
            'tanggal' => 'required',
            'kendaraan_id' => 'required',
            'jumlah_liter' => 'required|numeric',
            'harga_per_liter' => 'required|numeric',
            'jenis_bbm' => 'required',
            'foto_nota' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('foto_nota')) {
            $data['foto_nota'] = $request->file('foto_nota')->store('nota', 'public');
        }

        $transaksi->update($data);

        return redirect()->route('transaksi.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(TransaksiBBM $transaksi)
    {
        $transaksi->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }

    public function exportPdf(Request $request)
    {
        $query = TransaksiBBM::with('kendaraan');

        if ($request->dari && $request->sampai) {
            $query->whereBetween('tanggal', [$request->dari, $request->sampai]);
        }

        $data = $query->get();

        $pdf = Pdf::loadView('transaksi.pdf', compact('data'));

        return $pdf->download('laporan-bbm.pdf');
    }
}
