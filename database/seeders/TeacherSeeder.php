<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'first_name' => 'teacher',
            'last_name' => 'test',
            'phone' => '09301234567',
            'email' => 'john.doe@example.com',
        ]);

        Teacher::create([
            'first_name' => 'new teacher',
            'last_name' => 'tue',
            'phone' => '09201234567',
            'email' => 'test.last@example.com',
            'bio' => 'bio'
        ]);
    }
}
