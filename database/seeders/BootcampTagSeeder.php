<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BootcampTag;

class BootcampTagSeeder extends Seeder
{
    public function run()
    {
        BootcampTag::create([
            'tag_id' => 1,
            'bootcamp_id' => 1
        ]);

        BootcampTag::create([
            'tag_id' => 2,
            'bootcamp_id' => 1
        ]);
        
        // Add 5-10 more records similarly
    }
}

