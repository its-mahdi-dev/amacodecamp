<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'phone' => '09301234567',
            'email' => 'john.doe@example.com',
        ]);

        User::create([
            'first_name' => 'test',
            'last_name' => 'last',
            'phone' => '09201234567',
            'email' => 'test.last@example.com',
        ]);
    }
}
