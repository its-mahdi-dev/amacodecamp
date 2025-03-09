<?php

namespace Database\Seeders;

use App\Models\BootcampUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BootcampUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BootcampUser::create([
            "user_id" => 1,
            "bootcamp_id" => 2
        ]);
    }
}
