<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Sukron',
            'induk' => '1121121',
            'email' => 'sukron@gmail.com',
            'password' => bcrypt('password123'),
        ]);

        User::factory()->create([
            'name' => 'Stevani',
            'induk' => '1123233',
            'email' => 'stevani@gmail.com',
            'password' => bcrypt('password123'),
        ]);
    }
}
