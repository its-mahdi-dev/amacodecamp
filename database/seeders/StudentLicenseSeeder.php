<?php

namespace Database\Seeders;

use App\Models\StudentLicense;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentLicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudentLicense::create([
            "bootcamp_id" => 2,
            "user_id" => 1,
            "license" => "testLisence"
        ]);
    }
}
