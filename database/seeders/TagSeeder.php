<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    public function run()
    {

        //1
        Tag::create([
            'name' => 'دانشگاهی',
            'type' => 'bootcamp'
        ]);

        //2
        Tag::create([
            'name' => 'وب',
            'type' => 'bootcamp'
        ]);

        //3
        Tag::create([
            'name' => 'پیشرفته',
            'type' => 'bootcamp'
        ]);

        //4
        Tag::create([
            'name' => 'مقدماتی',
            'type' => 'bootcamp'
        ]);

        //5
        Tag::create([
            'name' => 'فشرده',
            'type' => 'bootcamp'
        ]);

        //6
        Tag::create([
            'name' => 'بازار_کار',
            'type' => 'bootcamp'
        ]);

        //7
        Tag::create([
            'name' => 'جمع_بندی',
            'type' => 'bootcamp'
        ]);

        //8
        Tag::create([
            'name' => 'پایان_ترم',
            'type' => 'bootcamp'
        ]);

        //9
        Tag::create([
            'name' => 'python',
            'type' => 'bootcamp'
        ]);

        //10
        Tag::create([
            'name' => 'c',
            'type' => 'bootcamp'
        ]);

        //11
        Tag::create([
            'name' => 'cpp',
            'type' => 'bootcamp'
        ]);

        //12
        Tag::create([
            'name' => 'c++',
            'type' => 'bootcamp'
        ]);

        //13
        Tag::create([
            'name' => 'go',
            'type' => 'bootcamp'
        ]);

        //14
        Tag::create([
            'name' => 'golang',
            'type' => 'bootcamp'
        ]);

        //15
        Tag::create([
            'name' => 'web',
            'type' => 'bootcamp'
        ]);

        //16
        Tag::create([
            'name' => 'frontend',
            'type' => 'bootcamp'
        ]);
        Tag::create([
            'name' => 'فرانت_اند',
            'type' => 'bootcamp'
        ]);
        Tag::create([
            'name' => 'بک_اند',
            'type' => 'bootcamp'
        ]);
        Tag::create([
            'name' => 'backend',
            'type' => 'bootcamp'
        ]);
        Tag::create([
            'name' => 'الگوریتم',
            'type' => 'bootcamp'
        ]);
        Tag::create([
            'name' => 'html',
            'type' => 'bootcamp'
        ]);
        Tag::create([
            'name' => 'css',
            'type' => 'bootcamp'
        ]);
        Tag::create([
            'name' => 'js',
            'type' => 'bootcamp'
        ]);
        Tag::create([
            'name' => 'جاوااسکریپت',
            'type' => 'bootcamp'
        ]);
        Tag::create([
            'name' => 'javascript',
            'type' => 'bootcamp'
        ]);

        

    }
}
