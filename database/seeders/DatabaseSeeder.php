<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        
        User::factory()->create([
            'name' => 'Admin SDN Kroyolor',
            'email' => 'admin@sdnkroyolor.sch.id',
            'password' => Hash::make('SDNKroyolor26'),
        ]);

        if (Setting::where('key', 'theme')->doesntExist()) {
            Setting::create(['key' => 'theme', 'value' => 'default']);
        }
    }
}
