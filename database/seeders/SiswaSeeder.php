<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::create([
            'nis' => '1234567890',
            'nama' => 'Andi',
            'gender' => 'laki-laki',
            'tempat_lahir' => 'Depok',
            'tgl_lahir' => '2008-01-01',
            'email' => 'andi@example.com',
            'nama_ortu' => 'Waliman',
            'alamat' => 'Jl. Melati No. 5',
            'phone_number' => '0811111111',
            'kelas_id' => 1
        ]);
    }
}
