@extends('layouts.app')

@section('content')
    <h1>Data Mata Pelajaran</h1>
    <a href="{{ route('mata_pelajaran.create') }}" class="btn btn-primary">Tambah Mata Pelajaran</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Mata Pelajaran</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mataPelajaran as $mp)
                <tr>
                    <td>{{ $mp->nama_mata_pelajaran }}</td>
                    <td>{{ $mp->sks }}</td>
                    <td>
                        <a href="{{ route('mata_pelajaran.edit', $mp->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('mata_pelajaran.destroy', $mp->id) }}" method="POST" style="display:inline;">
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