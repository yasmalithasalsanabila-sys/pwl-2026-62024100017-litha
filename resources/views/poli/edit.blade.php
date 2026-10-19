@extends('layouts.app')

@section('title', 'Edit Poli')

@section('content')
    <h1>Edit Poli</h1>

    @if ($errors->any())
        <div style="background:#f8d7da; padding:10px; margin-bottom:10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('poli.update', $poli->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Kode</label><br>
            <input type="text" name="code" value="{{ old('code', $poli->code) }}">
            @error('code')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </p>

        <p>
            <label>Nama</label><br>
            <input type="text" name="name" value="{{ old('name', $poli->name) }}">
            @error('name')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </p>

        <p>
            <label>Deskripsi</label><br>
            <textarea name="description">{{ old('description', $poli->description) }}</textarea>
            @error('description')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </p>

        <p>
            <label>Status</label><br>
            <select name="is_active">
                <option value="1" {{ (string) old('is_active', (int) $poli->is_active) === '1' ? 'selected' : '' }}>Aktif</option>
                <option value="0" {{ (string) old('is_active', (int) $poli->is_active) === '0' ? 'selected' : '' }}>Nonaktif</option>
            </select>
            @error('is_active')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </p>

        <button type="submit">Update</button>
        <a href="{{ route('poli.index') }}">Batal</a>
    </form>
@endsection