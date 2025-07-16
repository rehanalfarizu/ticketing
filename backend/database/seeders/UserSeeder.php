<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@ticketing.com',
            'email_verified_at' => now(), // ✅ Tambahkan ini
            'password' => Hash::make('password123'),
            'is_admin' => true,
        ]);

        // User biasa
        User::create([
            'name' => 'User',
            'email' => 'user@ticketing.com',
            'email_verified_at' => now(), // ✅ Tambahkan ini
            'password' => Hash::make('password'),
            'is_admin' => false,
        ]);
    }
}
