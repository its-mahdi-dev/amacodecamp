<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BootcampSeason;

class BootcampSeasonSeeder extends Seeder
{
    public function run()
    {
        BootcampSeason::create([
            'bootcamp_id' => 1,
            'title' => 'Season 1: Getting Started',
            'order' => 1
        ]);

        BootcampSeason::create([
            'bootcamp_id' => 1,
            'title' => 'Season 2: Advanced Topics',
            'order' => 2
        ]);
        
        // Add 5-10 more records similarly
    }
}
