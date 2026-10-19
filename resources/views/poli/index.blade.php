@extends('layouts.app')

@section('title', 'Data Poli')

@section('content')
    <h1>Data Poli</h1>

    @if (session('success'))
        <div style="background:#d1e7dd; padding:10px; margin-bottom:10px;">
            {{ session('success') }}
        </div>
    @endif

    <p><a href="{{ route('poli.create') }}">+ Tambah Poli</a></p>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($polis as $poli)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $poli->code }}</td>
                    <td>{{ $poli->name }}</td>
                    <td>{{ $poli->description ?? '-' }}</td>
                    <td>{{ $poli->is_active ? 'Aktif' : 'Nonaktif' }}</td>
                    <td>
                        <a href="{{ route('poli.edit', $poli->id) }}">Edit</a>

                        <form action="{{ route('poli.destroy', $poli->id) }}"
                              method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    onclick="return confirm('Hapus data poli?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Belum ada data poli.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection