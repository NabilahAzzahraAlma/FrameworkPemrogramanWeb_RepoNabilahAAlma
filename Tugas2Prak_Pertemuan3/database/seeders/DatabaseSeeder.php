<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::where('email', 'test@example.com')->delete();

        User::factory()->create([
            'name' => 'Abdee',
            'email' => 'abdee@example.com',
            'password' => ('password'),
            'role' => ('users'),
        ]);
    }
}
