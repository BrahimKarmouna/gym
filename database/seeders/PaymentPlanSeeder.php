<?php
namespace Database\Seeders;

use App\Models\PaymentPlan;
use Illuminate\Database\Seeder;

class PaymentPlanSeeder extends Seeder
{
    public function run()
    {
        PaymentPlan::create(['name' => 'Monthly Plan', 'price' => 50, 'duration' => '1 month']);
        PaymentPlan::create(['name' => 'Yearly Plan', 'price' => 500, 'duration' => '1 year']);
    }
}
