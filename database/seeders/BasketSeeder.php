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
            'bootcamps_id' => [1],
            'quantity' => 1,
            'total_price' => 1234
        ]);

        Basket::create([
            'user_id' => 2,
            'bootcamps_id' => [2],
            'quantity' => 2,
            'cupon_id' => 1,
            'total_price' => 5321
        ]);
    }
}
