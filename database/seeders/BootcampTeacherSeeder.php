<?php

namespace Database\Seeders;

use App\Models\BootcampTeacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BootcampTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BootcampTeacher::create([
            "bootcamp_id" => 1,
            "teacher_id" => 1
        ]);
        BootcampTeacher::create([
            "bootcamp_id" => 1,
            "teacher_id" => 2
        ]);
        BootcampTeacher::create([
            "bootcamp_id" => 2,
            "teacher_id" => 1
        ]);
    }
}
