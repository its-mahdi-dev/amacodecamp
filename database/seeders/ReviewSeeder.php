<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        Review::create([
            'user_id' => 1,
            'bootcamp_id' => 1,
            'rate' => 5,
            'comment' => 'Excellent bootcamp, learned a lot!',
        ]);

        Review::create([
            'user_id' => 2,
            'bootcamp_id' => 2,
            'rate' => 4,
            'comment' => 'Great content but could use more examples.',
        ]);
    }
}
