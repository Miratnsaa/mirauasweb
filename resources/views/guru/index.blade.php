@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Data Guru</h1>
        <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">Tambah Guru</a>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Mata Pelajaran</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($guru as $g)
                    <tr>
                        <td>{{ $g->nama }}</td>
                        <td>{{ $g->mata_pelajaran }}</td>
                        <td>{{ $g->alamat }}</td>
                        <td>
                            <a href="{{ route('guru.edit', $g->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('guru.destroy', $g->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus guru ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection