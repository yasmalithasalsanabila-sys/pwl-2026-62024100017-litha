@extends('layouts.app')

@section('title', 'Data Poli')

@section('content')
<h1>Data Poli</h1>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Poli</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($polis as $poli)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $poli }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="2">Belum ada data poli.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection