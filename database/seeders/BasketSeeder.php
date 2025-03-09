<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Basket;

class BasketSeeder extends Seeder
{
    public function run()
    {
        Basket::create([
            'user_id' => 1,
            'bootcamp_id' => 1,
            'quantity' => 1,
        ]);

        Basket::create([
            'user_id' => 2,
            'bootcamp_id' => 2,
            'quantity' => 2,
            'cupon_id' => 1
        ]);
    }
}
