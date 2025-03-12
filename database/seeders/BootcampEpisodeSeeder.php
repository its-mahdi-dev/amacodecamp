<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BootcampEpisode;

class BootcampEpisodeSeeder extends Seeder
{
    public function run()
    {
        BootcampEpisode::create([
            'session_id' => 1,
            'title' => 'Introduction to Laravel',
            'type' => 'video',
            'body' => 'This is an introductory video on Laravel.',
            'start_time' => now(),
            'end_time' => now()->addHour(),
            'order' => 1
        ]);

        BootcampEpisode::create([
            'session_id' => 1,
            'title' => 'Laravel Routes Explained',
            'type' => 'video',
            'body' => 'Learn about defining routes in Laravel.',
            'start_time' => now(),
            'end_time' => now()->addHour(),
            'order' => 2
        ]);
        
        // Add 5-10 more records similarly
    }
}
