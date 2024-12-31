<?php

namespace App\Http\Controllers;

use App\Models\Nilai; // Pastikan Anda memiliki model Nilai
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    // Menampilkan daftar nilai
    public function index()
    {
        $nilais = Nilai::all(); // Ambil semua data nilai
        return view('nilai.index', compact('nilais')); // Pastikan Anda memiliki view untuk menampilkan nilai
    }

    // Menampilkan form untuk menambah nilai
    public function create()
    {
        return view('nilai.create'); // Pastikan Anda memiliki view untuk form tambah nilai
    }

    // Menyimpan nilai baru
    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id', // Pastikan siswa_id valid
            'mata_pelajaran_id' => 'required|exists:mata_pelajarans,id', // Pastikan mata_pelajaran_id valid
            'nilai' => 'required|numeric|min:0|max:100', // Validasi nilai
        ]);

        Nilai::create($request->all()); // Simpan data nilai
        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit nilai
    public function edit(Nilai $nilai)
    {
        return view('nilai.edit', compact('nilai')); // Pastikan Anda memiliki view untuk form edit nilai
    }

    // Memperbarui nilai
    public function update(Request $request, Nilai $nilai)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'mata_pelajaran_id' => 'required|exists:mata_pelajarans,id',
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        $nilai->update($request->all()); // Update data nilai
        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil diperbarui.');
    }

    // Menghapus nilai
    public function destroy(Nilai $nilai)
    {
        $nilai->delete(); // Hapus data nilai
        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil dihapus.');
    }
}