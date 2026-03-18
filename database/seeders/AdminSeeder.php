<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'type' => 'admin',
            'username' => 'admin1',
            'password' => Hash::make('password')
        ]);

        User::create([
            'type' => 'guru',
            'username' => 'budi',
            'password' => Hash::make('password')
        ]);
    }
}
