<?php

namespace App\Http\Controllers;

class PoliController extends Controller
{
    public function index()
    {
        $polis = ['Umum', 'Anak', 'Gigi', 'Kandungan'];

        return view('poli.index', compact('polis'));
    }
}