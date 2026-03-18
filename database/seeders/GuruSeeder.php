<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::create([
            'user_id' => 2,
            'nip' => '1987654321',
            'nama' => 'Putra Anwar',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '1985-05-10',
            'gender' => 'laki-laki',
            'phone_number' => '081234567890',
            'email' => 'putra@example.com',
            'alamat' => 'Jl. Mawar No. 10',
            'pendidikan' => 'S1 Pendidikan',
        ]);
    }
}
