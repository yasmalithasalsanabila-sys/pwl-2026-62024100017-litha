<?php

namespace App\Http\Controllers;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = [
            ['nama' => 'dr. Andi',  'spesialisasi' => 'Umum',           'status' => 'aktif'],
            ['nama' => 'dr. Budi',  'spesialisasi' => 'Anak',           'status' => 'aktif'],
            ['nama' => 'dr. Citra', 'spesialisasi' => 'Gigi',           'status' => 'cuti'],
            ['nama' => 'dr. Dewi',  'spesialisasi' => 'Kandungan',      'status' => 'aktif'],
            ['nama' => 'dr. Eko',   'spesialisasi' => 'Penyakit Dalam', 'status' => 'cuti'],
        ];

        return view('dokter.index', compact('doctors'));
    }
}