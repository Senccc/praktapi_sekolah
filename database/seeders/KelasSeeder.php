<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([
            'kode_kelas' => 'X-MIPA-1',
            'nama_kelas' => 'Kelas 10 MIPA 1'
        ]);

        Kelas::create([
            'kode_kelas' => 'X-IPS-1',
            'nama_kelas' => 'Kelas 10 IPS 1'
        ]);

        Kelas::create([
            'kode_kelas' => 'XII-IBB-1',
            'nama_kelas' => 'Kelas 10 IBB 1'
        ]);
    }
}
