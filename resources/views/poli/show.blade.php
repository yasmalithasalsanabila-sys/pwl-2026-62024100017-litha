@extends('layouts.app')

@section('title', 'Detail Poli')

@section('content')
    <h1>Detail {{ $poli->name }}</h1>

    <p>Kode: {{ $poli->code }}</p>
    <p>Deskripsi: {{ $poli->description ?? '-' }}</p>
    <p>Status: {{ $poli->is_active ? 'Aktif' : 'Tidak Aktif' }}</p>

    <h2>Daftar Dokter pada Poli Ini</h2>
    <p>Jumlah dokter: {{ $poli->doctors->count() }}</p>

    <div style="overflow-x: auto;">
        <table border="1" cellpadding="8">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Dokter</th>
                    <th>Nama</th>
                    <th>Spesialisasi</th>
                    <th>Telepon</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($poli->doctors as $doctor)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $doctor->doctor_code }}</td>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->specialization }}</td>
                        <td>{{ $doctor->phone ?? '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Belum ada dokter pada poli ini.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <p><a href="{{ route('poli.index') }}">← Kembali ke Data Poli</a></p>
@endsection