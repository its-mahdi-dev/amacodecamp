<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wishlist;

class WishlistSeeder extends Seeder
{
    public function run()
    {
        Wishlist::create([
            'user_id' => 1,
            'bootcamp_id' => 1,
        ]);

        Wishlist::create([
            'user_id' => 2,
            'bootcamp_id' => 2,
        ]);
    }
}

