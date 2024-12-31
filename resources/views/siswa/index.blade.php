@extends('layouts.app')

@section('content')
    <h1>Data Siswa</h1>
    <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Siswa</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $s)
                <tr>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->tanggal_lahir }}</td>
                    <td>{{ $s->alamat }}</td>
                    <td>
                        <a href="{{ route('siswa.edit', $s->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection