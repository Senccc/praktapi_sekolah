<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jadwal::create([
            'kelas_id' => 1,
            'mapel_id' => 1,
            'guru_id' => 1,
            'hari' => 'senin',
            'jam_pelajaran' => '07:00:00',
        ]);

        Jadwal::create([
            'kelas_id' => 1,
            'mapel_id' => 2,
            'guru_id' => 1,
            'hari' => 'selasa',
            'jam_pelajaran' => '08:30:00'
        ]);
    }
}
