<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Campaign;

class CampaignSeeder extends Seeder
{
    public function run()
    {
        Campaign::create([
            'phone' => '123-456-7890',
            'name' => 'example1@example.com'
        ]);

        Campaign::create([
            'phone' => '987-654-3210',
            'name' => 'example2@example.com'
        ]);
        
        // Add 5-10 more records similarly
    }
}
