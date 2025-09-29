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
            'name' => 'Abdee Admin',
            'email' => 'abdee@example.com',
            'password' => ('password'),
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'ownerUser',
            'email' => 'owner@example.com',
            'password' => 'ps1', // password di-hash
            'role' => 'owner', // set role owner
        ]);
    }
}
