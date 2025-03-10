<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cupon;

class CuponSeeder extends Seeder
{
    public function run()
    {
        Cupon::create([
            'code' => 'SAVE10',
            'description' => 'Get 10% off',
            'amount' => 100,
            'start_time' => now(),
            'end_time' => now()->addMonth(),
            'percent' => 10,
            'min_pay' => 200
        ]);

        Cupon::create([
            'code' => 'EARLYBIRD',
            'description' => 'Get 15% off',
            'start_time' => now(),
            'end_time' => now()->addMonth(),
            'percent' => 15,
            'price' => 70,
            'min_pay' => 100
        ]);
        
        // Add 5-10 more records similarly
    }
}

