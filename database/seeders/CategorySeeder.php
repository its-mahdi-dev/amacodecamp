<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Web Development'
        ]);

        Category::create([
            'name' => 'Machine Learning'
        ]);
        
        // Add 5-10 more categories similarly
    }
}
