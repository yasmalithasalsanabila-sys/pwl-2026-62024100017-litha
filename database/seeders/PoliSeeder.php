<?php

namespace Database\Seeders;

use App\Models\Poli;
use Illuminate\Database\Seeder;

class PoliSeeder extends Seeder
{
    public function run(): void
    {
        $polis = [
            ['code' => 'UMU', 'name' => 'Poli Umum',      'description' => 'Pemeriksaan kesehatan umum', 'is_active' => true],
            ['code' => 'ANK', 'name' => 'Poli Anak',      'description' => 'Pemeriksaan kesehatan anak', 'is_active' => true],
            ['code' => 'GIG', 'name' => 'Poli Gigi',      'description' => 'Perawatan gigi dan mulut',   'is_active' => true],
            ['code' => 'KDG', 'name' => 'Poli Kandungan', 'description' => 'Kehamilan dan kandungan',    'is_active' => true],
            ['code' => 'MTA', 'name' => 'Poli Mata',      'description' => null,                         'is_active' => false],
        ];

        foreach ($polis as $poli) {
            Poli::create($poli);
        }
    }
}