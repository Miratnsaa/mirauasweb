@extends('layouts.app')

@section('content')
    <h1>Edit Mata Pelajaran</h1>
    <form action="{{ route('mata_pelajaran.update', $mataPelajaran->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_mata_pelajaran">Nama Mata Pelajaran</label>
            <input type="text" name="nama_mata_pelajaran" class="form-control" value="{{ $mataPelajaran->nama_mata_pelajaran }}" required>
        </div>
        <div class="form-group">
            <label for="sks">SKS</label>
            <input type="number" name="sks" class="form-control" value="{{ $mataPelajaran->sks }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection