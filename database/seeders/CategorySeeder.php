<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'مبانی برنامه نویسی'
        ]);

        Category::create([
            'name' => 'توسعه وب'
        ]);

        Category::create([
            'name' => 'برنامه نویسی پیشرفته'
        ]);

        Category::create([
            'name' => 'بوت‌کمپ های فشرده'
        ]);
        
    }
}
