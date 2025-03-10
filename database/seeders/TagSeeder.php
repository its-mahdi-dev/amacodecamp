<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    public function run()
    {
        Tag::create([
            'name' => 'Laravel',
            'type' => 'bootcamp'
        ]);

        Tag::create([
            'name' => 'PHP',
            'type' => 'bootcamp'
        ]);

        // Add 5-10 more tags similarly
    }
}
