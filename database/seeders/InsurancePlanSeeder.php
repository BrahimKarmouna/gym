<?php

namespace Database\Seeders;

use App\Models\InsurancePlan;
use Illuminate\Database\Seeder;

class InsurancePlanSeeder extends Seeder
{
    public function run()
    {
        InsurancePlan::create(['name' => 'Basic Insurance', 'price' => 20]);
        InsurancePlan::create(['name' => 'Premium Insurance', 'price' => 50]);
    }
}
