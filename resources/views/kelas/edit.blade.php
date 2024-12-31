@extends('layouts.app')

@section('content')
    <h1>Edit Kelas</h1>
    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
        <label for="nama_kelas">Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" value="{{ $kelas->nama_kelas }}" required>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" value="{{ $kelas->jurusan }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>