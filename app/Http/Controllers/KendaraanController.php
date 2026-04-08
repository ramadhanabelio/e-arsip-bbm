<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Divisi;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $data = Kendaraan::with('divisi')->get();
        return view('kendaraan.index', compact('data'));
    }

    public function create()
    {
        $divisi = Divisi::all();
        return view('kendaraan.create', compact('divisi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kendaraan' => 'required',
            'no_polisi' => 'required|unique:kendaraans',
        ]);

        $kendaraan = Kendaraan::create($request->all());

        if ($request->divisi_id) {
            $kendaraan->divisi()->sync($request->divisi_id);
        }

        return redirect()->route('kendaraan.index')->with('success', 'Data berhasil ditambah');
    }

    public function show(Kendaraan $kendaraan)
    {
        return view('kendaraan.show', compact('kendaraan'));
    }

    public function edit(Kendaraan $kendaraan)
    {
        $divisi = Divisi::all();
        return view('kendaraan.edit', compact('kendaraan', 'divisi'));
    }

    public function update(Request $request, Kendaraan $kendaraan)
    {
        $request->validate([
            'nama_kendaraan' => 'required',
            'no_polisi' => 'required|unique:kendaraans,no_polisi,' . $kendaraan->id,
        ]);

        $kendaraan->update($request->all());

        if ($request->divisi_id) {
            $kendaraan->divisi()->sync($request->divisi_id);
        }

        return redirect()->route('kendaraan.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
