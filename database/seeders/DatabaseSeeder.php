<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PaymentPlanSeeder::class,
            InsurancePlanSeeder::class,
            GymSeeder::class,
            MemberSeeder::class,
            ClientSeeder::class,
            BillSeeder::class,
            ProductSeeder::class,
            GymEnhancementSeeder::class,
        ]);
        
    }
}
