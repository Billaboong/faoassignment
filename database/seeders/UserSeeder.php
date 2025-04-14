<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

ini_set('memory_limit','5120M'); //To prevent memory timeout 
class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
        User::factory()
            ->count(1000000) //Change value to your designed 
            ->create();
    }
}
