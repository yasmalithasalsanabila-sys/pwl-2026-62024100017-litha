@extends('layouts.app')

@section('title', 'Edit Dokter')

@section('content')
    <h1>Edit Dokter</h1>

    <form action="{{ route('dokter.update', $doctor) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label for="doctor_code">Kode Dokter</label><br>
            <input type="text" name="doctor_code" id="doctor_code"
                   value="{{ old('doctor_code', $doctor->doctor_code) }}">
            @error('doctor_code') <br><small style="color:red">{{ $message }}</small> @enderror
        </p>

        <p>
            <label for="name">Nama</label><br>
            <input type="text" name="name" id="name" value="{{ old('name', $doctor->name) }}">
            @error('name') <br><small style="color:red">{{ $message }}</small> @enderror
        </p>

        <p>
            <label for="specialization">Spesialisasi</label><br>
            <input type="text" name="specialization" id="specialization"
                   value="{{ old('specialization', $doctor->specialization) }}">
            @error('specialization') <br><small style="color:red">{{ $message }}</small> @enderror
        </p>

        <p>
            <label for="phone">Telepon</label><br>
            <input type="text" name="phone" id="phone" value="{{ old('phone', $doctor->phone) }}">
            @error('phone') <br><small style="color:red">{{ $message }}</small> @enderror
        </p>

        <p>
            <label for="poli_id">Poli</label><br>
            <select name="poli_id" id="poli_id">
                <option value="">-- Pilih Poli --</option>
                @foreach ($polis as $poli)
                    <option value="{{ $poli->id }}"
                        @selected(old('poli_id', $doctor->poli_id) == $poli->id)>
                        {{ $poli->name }}
                    </option>
                @endforeach
            </select>
            @error('poli_id') <br><small style="color:red">{{ $message }}</small> @enderror
        </p>

        <button type="submit">Update</button>
        <a href="{{ route('dokter.index') }}">Batal</a>
    </form>
@endsection