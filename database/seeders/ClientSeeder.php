<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run()
    {
        Client::create(['gym_id' => 1, 'name' => 'Mike Ross', 'email' => 'mike.ross@example.com', 'phone' => '555123456']);
        Client::create(['gym_id' => 2, 'name' => 'Rachel Zane', 'email' => 'rachel.zane@example.com', 'phone' => '555987654']);
    }
}
