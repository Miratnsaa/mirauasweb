@extends('layouts.app')

@section('content')
    <h1>Edit Nilai</h1>
    <form action="{{ route('nilai.update', $nilai->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="siswa_id">Siswa</label>
            <select name="siswa_id" class="form-control" required>
                @foreach ($siswa as $s)
                    <option value="{{ $s->id }}" {{ $s->id == $nilai->siswa_id ? 'selected' : '' }}>{{ $s->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="mata_pelajaran_id">Mata Pelajaran</label>
            <select name="mata_pelajaran_id" class="form-control" required>
                @foreach ($mataPelajaran as $mp)
                    <option value="{{ $mp->id }}" {{ $mp->id == $nilai->mata_pelajaran_id ? 'selected' : '' }}>{{ $mp->nama_mata_pelajaran }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nilai">Nilai</label>
            <input type="number" name="nilai" class="form-control" value="{{ $nilai->nilai }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection