@extends('layouts.app')

@section('content')
    <h1>Data Nilai</h1>
    <a href="{{ route('nilai.create') }}" class="btn btn-primary">Tambah Nilai</a>
    <table class="table">
        <thead>
            <tr>
                <th>Siswa</th>
                <th>Mata Pelajaran</th>
                <th>Nilai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilais as $n)
                <tr>
                <td>{{ $n->siswa->nama }}</td>
                    <td>{{ $n->mataPelajaran->nama_mata_pelajaran }}</td>
                    <td>{{ $n->nilai }}</td>
                    <td>
                        <a href="{{ route('nilai.edit', $n->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('nilai.destroy', $n->id) }}" method="POST" style="display:inline;">
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