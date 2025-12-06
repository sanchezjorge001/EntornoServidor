<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Usuario admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('12345678'),
            'rol' => 'admin'
        ]);

        // Usuario normal
        User::create([
            'name' => 'Jorge',
            'email' => 'jorge@test.com',
            'password' => Hash::make('12345678'),
            'rol' => 'user'
        ]);

        // Otro usuario normal
        User::create([
            'name' => 'Maria',
            'email' => 'maria@test.com',
            'password' => Hash::make('12345678'),
            'rol' => 'user'
        ]);
    }
}