<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Off;

class OffSeeder extends Seeder
{
    public function run()
    {
        Off::create([
            'bootcamp_id' => 1,
            'percent' => 10,
            'price' => 100,
            'start_time' => now(),
            'end_time' => now()->addWeek(),
            'amount' => 50,
            'description' => 'Limited time discount.'
        ]);

        Off::create([
            'bootcamp_id' => 2,
            'percent' => 15,
            'amount' => 30,
            'description' => 'Early bird discount.'
        ]);
        
        // Add 5-10 more records similarly
    }
}
