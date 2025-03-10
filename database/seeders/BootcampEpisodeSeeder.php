<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BootcampEpisode;

class BootcampEpisodeSeeder extends Seeder
{
    public function run()
    {
        BootcampEpisode::create([
            'bootcamp_season_id' => 1,
            'title' => 'Introduction to Laravel',
            'type' => 'text',
            'body' => '<p>This is an introductory video on Laravel.</p>',
            'start_time' => now(),
            'end_time' => now()->addHour(),
            'order' => 1
        ]);

        BootcampEpisode::create([
            'bootcamp_season_id' => 1,
            'title' => 'Laravel Routes Explained',
            'type' => 'link',
            'body' => '<a href="https://google.com">"Learn about defining routes in Laravel.</a>',
            'start_time' => now(),
            'end_time' => now()->addHour(),
            'order' => 2
        ]);
        
        // Add 5-10 more records similarly
    }
}
