<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    public function index()
    {
        $mataPelajaran = MataPelajaran::all();
        return view('mata_pelajaran.index', compact('mataPelajaran'));
    }

    public function create()
    {
        return view('mata_pelajaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mata_pelajaran' => 'required',
            'sks' => 'required|integer',
        ]);

        MataPelajaran::create($request->all());
        return redirect()->route('mata_pelajaran.index')->with('success', 'Mata Pelajaran berhasil ditambahkan.');
    }

    public function edit(MataPelajaran $mataPelajaran)
    {
        return view('mata_pelajaran.edit', compact('mataPelajaran'));
    }

    public function update(Request $request, MataPelajaran $mataPelajaran)
    {
        $request->validate([
            'nama_mata_pelajaran' => 'required',
            'sks' => 'required|integer',
        ]);

        $mataPelajaran->update($request->all());
        return redirect()->route('mata_pelajaran.index')->with('success', 'Mata Pelajaran berhasil diperbarui.');
    }

    public function destroy(MataPelajaran $mataPelajaran)
    {
        $mataPelajaran->delete();
        return redirect()->route('mata_pelajaran.index')->with('success', 'Mata Pelajaran berhasil dihapus.');
    }
}