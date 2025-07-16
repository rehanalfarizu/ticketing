<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ✅ Admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@ticketing.com',
            'password' => Hash::make('password123'), // default password: password
            'is_admin' => true,
        ]);

        // ✅ Regular user
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
            'is_admin' => false,
        ]);
    }
}
