<?php

namespace App\Http\Controllers;

class PatientController extends Controller
{
    public function index()
    {
        $patients = [
            ['id' => 1, 'nama' => 'Melati', 'alamat' => 'Kudus'],
            ['id' => 2, 'nama' => 'Mawar',  'alamat' => 'Jepara'],
            ['id' => 3, 'nama' => 'Lily',   'alamat' => 'Pati'],
        ];

        return view('pasien.index', compact('patients'));
    }

    public function show($id)
    {
        return 'Menampilkan pasien dengan ID: ' . $id;
    }
}