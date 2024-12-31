@extends('layouts.app')

@section('content')
    <h1>Tambah Nilai</h1>
    <form action="{{ route('nilai.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="siswa_id">Siswa</label>
            <select name="siswa_id" class="form-control" required>
                @foreach ($siswas as $s)
                    <option value="{{ $s->id }}">{{ $s->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="mata_pelajaran_id">Mata Pelajaran</label>
            <select name="mata_pelajaran_id" class="form-control" required>
                @foreach ($mataPelajarans as $mp)
                    <option value="{{ $mp->id }}">{{ $mp->nama_mata_pelajaran }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nilai">Nilai</label>
            <input type="number" name="nilai" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection