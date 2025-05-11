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
            'first_name' => 'مهدی',
            'last_name' => 'رسول زاده',
            'email' => 'info@itsmahdi.com',
            'role' => 'مربی',
            'avatar' => 'mahdi.webp',
        ]);

        Teacher::create([
            'first_name' => 'امیرحسین',
            'last_name' => 'معصومی',
            'email' => 'hello@itsamir.com',
            'role' => 'مربی',
            'avatar' => 'amir.webp',
        ]);
        Teacher::create([
            'first_name' => 'ملیکا',
            'last_name' => 'دریابک',
            'role' => 'طراح',
            'avatar' => 'melika.webp',
        ]);
        Teacher::create([
            'first_name' => 'امیرحسین',
            'last_name' => 'زمان زاده',
            'role' => 'دوست پسر نهال',
            'avatar' => 'amir-zaman.webp',
        ]);

    }
}
