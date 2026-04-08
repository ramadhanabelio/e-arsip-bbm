<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index()
    {
        $data = Divisi::all();
        return view('divisi.index', compact('data'));
    }

    public function create()
    {
        return view('divisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_divisi' => 'required'
        ]);

        Divisi::create($request->all());

        return redirect()->route('divisi.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(Divisi $divisi)
    {
        return view('divisi.edit', compact('divisi'));
    }

    public function update(Request $request, Divisi $divisi)
    {
        $request->validate([
            'nama_divisi' => 'required'
        ]);

        $divisi->update($request->all());

        return redirect()->route('divisi.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Divisi $divisi)
    {
        $divisi->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
