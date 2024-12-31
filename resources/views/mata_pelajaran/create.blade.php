@extends('layouts.app')

@section('content')
    <h1>Tambah Mata Pelajaran</h1>
    <form action="{{ route('mata_pelajaran.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_mata_pelajaran">Nama Mata Pelajaran</label>
            <input type="text" name="nama_mata_pelajaran" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="sks">SKS</label>
            <input type="number" name="sks" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection