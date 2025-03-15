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
            'percent' => null,
            'price' => 20,
            'start_time' => now(),
            'end_time' => now()->addWeek(),
            'amount' => null,
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
