<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BootcampSeason;

class BootcampSeasonSeeder extends Seeder
{
    public function run()
    {
        BootcampSeason::create([
            'bootcamp_id' => 1,
            'title' => 'ورود به دنیای برنامه نویسی',
            'order' => 1
        ]);

        BootcampSeason::create([
            'bootcamp_id' => 1,
            'title' => 'دست به کد شدن',
            'order' => 2
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 1,
            'title' => 'توابع و آرایه ها',
            'order' => 3
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 1,
            'title' => 'کار با ماتریس ها، رشته ها، فایل و زمان',
            'order' => 4
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 1,
            'title' => 'پوینتر و مموری داینامیک',
            'order' => 5
        ]);

        BootcampSeason::create([
            'bootcamp_id' => 2,
            'title' => 'ورود به دنیای برنامه نویسی',
            'order' => 1
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 2,
            'title' => 'دست به کد شدن',
            'order' => 2
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 2,
            'title' => 'شرط ها و حلقه ها',
            'order' => 3
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 2,
            'title' => 'توابع و آرایه‌ها',
            'order' => 4
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 2,
            'title' => 'کار با رشته‌ها، فایل و تایم',
            'order' => 5
        ]);

        BootcampSeason::create([
            'bootcamp_id' => 3,
            'title' => 'شروع برنامه نویسی با گو',
            'order' => 1
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 3,
            'title' => 'شرط‌ها و حلقه‌ها',
            'order' => 2
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 3,
            'title' => 'استراکت و اینترفیس',
            'order' => 3
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 3,
            'title' => 'مباحث پیشرفته گو',
            'order' => 4
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 3,
            'title' => 'شروع API',
            'order' => 5
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 3,
            'title' => 'ساخت پروژه واقعی',
            'order' => 6
        ]);

        //C++
        BootcampSeason::create([
            'bootcamp_id' => 4,
            'title' => 'C VS C++',
            'order' => 1
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 4,
            'title' => 'شی گرایی',
            'order' => 2
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 4,
            'title' => 'Polymorphism',
            'order' => 3
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 4,
            'title' => 'مدیریت حافظه و مباحث تکمیلی',
            'order' => 4
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 4,
            'title' => 'STL و مقدمه ای بر ساختمان داده',
            'order' => 5
        ]);

        //html css js
        BootcampSeason::create([
            'bootcamp_id' => 5,
            'title' => 'معرفی HTML و ساختار صفحه',
            'order' => 1
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 5,
            'title' => 'کار با CSS و استایل دهی',
            'order' => 2
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 5,
            'title' => 'CSS پیشرفته و معرفی کتابخونه ها',
            'order' => 3
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 5,
            'title' => 'کار با جاوااسکریپت و DOM',
            'order' => 4
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 5,
            'title' => 'مباحث پیشرفته جاوااسکریپت و کار با events',
            'order' => 5
        ]);
        BootcampSeason::create([
            'bootcamp_id' => 5,
            'title' => 'ساخت پروژه واقعی',
            'order' => 6
        ]);
        
    }
}
