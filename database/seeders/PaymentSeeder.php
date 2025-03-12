<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    public function run()
    {
        Payment::create([
            'user_id' => 1,
            'amount' => 500,
            'authority' => 'testauth',
            'status' => 'paid',
            'referenceId' => 'TX123456',
            'paid_at' => now(),
        ]);

        Payment::create([
            'user_id' => 2,
            'amount' => 200,
            'authority' => 'auth2',
            'status' => 'pending',
            'referenceId' => 'TX654321',
            'paid_at' => null,
        ]);
    }
}

