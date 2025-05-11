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
            'percent' => 35,
            'start_time' => null,
            'end_time' => null,
            'amount' => 100,
            'description' => 'Limited time discount.'
        ]);
        Off::create([
            'bootcamp_id' => 2,
            'percent' => 45,
            'start_time' => null,
            'end_time' => null,
            'amount' => 100,
            'description' => 'Limited time discount.'
        ]);
        Off::create([
            'bootcamp_id' => 3,
            'percent' => 35,
            'start_time' => null,
            'end_time' => null,
            'amount' => 100,
            'description' => 'Limited time discount.'
        ]);
        Off::create([
            'bootcamp_id' => 4,
            'percent' => 35,
            'start_time' => null,
            'end_time' => null,
            'amount' => 100,
            'description' => 'Limited time discount.'
        ]);
        Off::create([
            'bootcamp_id' => 5,
            'percent' => 35,
            'start_time' => null,
            'end_time' => null,
            'amount' => 100,
            'description' => 'Limited time discount.'
        ]);

        // Add 5-10 more records similarly
    }
}
