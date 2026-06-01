<?php

namespace Database\Seeders;

use App\Models\Setting;
        \App\Models\User::factory()->create([
            'name' => 'Admin SDN Kroyolor',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('rahmat123'),
        ]);

        // Set default theme
        Setting::create(['key' => 'theme', 'value' => 'default']);
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::truncate();
        \App\Models\User::factory()->create([
            'name' => 'Admin SDN Kroyolor',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('rahmat123'),
        ]);
    }
}
