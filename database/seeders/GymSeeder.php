<?php

namespace Database\Seeders;

use App\Models\Gym;
use Illuminate\Database\Seeder;

class GymSeeder extends Seeder
{
    public function run()
    {
        Gym::create(['name' => 'Elite Gym', 'location' => 'Downtown']);
        Gym::create(['name' => 'Fitness Pro', 'location' => 'City Center']);
    }
}

