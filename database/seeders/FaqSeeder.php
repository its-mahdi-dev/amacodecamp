<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run()
    {
        Faq::create([
            'question' => 'What is Laravel?',
            'answer' => 'Laravel is a web application framework with expressive, elegant syntax.',
        ]);

        Faq::create([
            'question' => 'How do I start with Laravel?',
            'answer' => 'You can start by installing Laravel using Composer and setting up your environment.',
        ]);
    }
}

