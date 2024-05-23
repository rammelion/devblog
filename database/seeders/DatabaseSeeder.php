<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Posts;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Kereszthidi Gábor',
            'email' => 'kereszthidi.g@rammelion.hu',
            'email_verified_at' => NULL, 
            'password' => '$2y$12$yHZpTZqilksbTKa/EDtotuL7nLTOfV3N/sT9EQZSUuThJvetoC4aW',
            'remember_token' => NULL,
            'created_at' => '2024-05-19 12:42:56',
            'updated_at' => '2024-05-19 12:42:56',
        ]);

        User::factory(9)->create();
        Posts::factory(10)->create();
    }
}
