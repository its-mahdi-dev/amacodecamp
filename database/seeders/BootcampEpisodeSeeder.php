<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BootcampEpisode;

class BootcampEpisodeSeeder extends Seeder
{
    public function run()
    {

        //C
        $episodesBySeasonC = [
            1 => [
                'معرفی برنامه نویسی و چرایی زبان ها',
                'الگوریتم و فلوچارت (مفهوم گام‌به‌گام حل مسئله)',
            ],
            2 => [
                'شروع کد زدن با C',
                'کامپایلر چیست و چرا اصن؟؟',
                'مموری و دیتا تایپ ه',
                'مموری و دیتا تایپ ها',
                'مموری و دیتا تایپ ها',
                'عملگرها - شرط ها - حلقه ها',
            ],
            3 => [
                'break & continue',
                'Switch Case',
                'و اما توابع',
                'Variable Scope',
                'آرایه ها',
            ],
            4 => [
                'آرایه دو بعدی (یا حتی ماتریس)',
                'کار با رشته ها (همون متن خودمون)',
                'کار با فایل ها',
                'کار با زمان',
            ],
            5 => [
                'اشاره گرها (Pointers)',
                'Pass by Reference VS Pass by Value',
                'Dynamic Memory',
            ],
        ];

        foreach ($episodesBySeasonC as $seasonId => $titles) {
            foreach ($titles as $order => $title) {
                BootcampEpisode::create([
                    'title' => $title,
                    'order' => $order + 1,
                    'bootcamp_season_id' => $seasonId,
                    'type' => 'video',
                    'body' => '<p>برگزار نشده</p>',
                    'start_time' => now(),
                    'end_time' => now()->addHour(),
                ]);
            }
        }



        //GO
        $episodesBySeasonGO = [
            11 => [
                'go module',
                'file names',
                'variables',
                'fmt',
                'variable names',
                'variable types',
                'constants',
                'functions',
            ],
            12 => [
                'if',
                'switch',
                'for',
                'defer',
                'pointer',
                'type',
                'struct',
            ],
            13 => [
                'functions and receivers',
                'pointer',
                'struct embedding',
                'interface',
                'array',
                'slice',
            ],
            14 => [
                'map',
                'range',
                'closure',
                'go routines',
                'channels',
                'select',
                'context',
                'sync.Mutex/Waitgroup',
            ],
            15 => [
                'HTTP چیست؟',
                'مفهوم RESTFUL API',
                'Echo',
                'ساخت پروژه با Echo',
                'ساخت router و handler',
                'middlewares',
            ],
            16 => [
                'ساخت یک پروژه واقعی در golang',
            ],
        ];

        foreach ($episodesBySeasonGO as $seasonId => $titles) {
            foreach ($titles as $order => $title) {
                BootcampEpisode::create([
                    'title' => $title,
                    'order' => $order + 1,
                    'bootcamp_season_id' => $seasonId,
                    'type' => 'video',
                    'body' => '<p>برگزار نشده</p>',
                    'start_time' => now(),
                    'end_time' => now()->addHour(),
                ]);
            }
        }

        // Python
        $episodesBySeasonPython = [
            6 => [
                'معرفی برنامه نویسی و چرایی زبان ها',
                'الگوریتم و فلوچارت (مفهوم گام‌به‌گام حل مسئله)',
            ],
            7 => [
                'دست به کد شدن، نصب IDE و چیدن میز کار',
                'ایجاد متغیر',
                'نمایش خروجی(کلا اجرای کد)',
                'دیتا تایپ ها',
                'ورودی',
                'توضیح compiler/interpretor و مموری',
            ],
            8 => [
                'عملگرها',
                'if statement',
                'حلقه ها (for, while)',
                'تمرین ماشین حساب',
            ],
            9 => [
                'معرفی توابع',
                'آرایه ها و اسلایس',
                'دیکشنری ها',
            ],
            10 => [
                'کار با رشته ها',
                'کار با فایل',
                'کار با تایم',
            ],
        ];

        foreach ($episodesBySeasonPython as $seasonId => $episodes) {
            foreach ($episodes as $index => $title) {
                BootcampEpisode::create([
                    'bootcamp_season_id' => $seasonId,
                    'type' => 'video',
                    'title' => $title,
                    'order' => $index + 1,
                    'body' => '<p>برگزار نشده</p>',
                    'start_time' => now(),
                    'end_time' => now()->addHour(),
                ]);
            }
        }

        //C++
        $episodesBySeasonCpp = [
            17 => [
                'تفاوت C و C++',
                'مرور تابع، pointer، reference',
                'Namespace و std::',
                'ورودی/خروجی با cin و cout',
                'تابع پیشرفته: overloading، default arguments',
                'مقدمات class و object',
                'Constructor / Destructor',
                'تمرین: ساخت کلاس ساده Student با توابع سازنده',
            ],
            18 => [
                'encapsulation و access modifiers',
                'this pointer',
                'static members',
                'Inheritance (ارث‌بری)',
                'Constructor در ارث‌بری',
                'تمرین: طراحی کلاس Employee و Manager با ارث‌بری و متدهای مخصوص',
            ],
            19 => [
                'Function overriding vs overloading',
                'Virtual functions و virtual table',
                'Abstract class و pure virtual',
                'Dynamic dispatch',
                'تمرین: ساخت یک سیستم ساده حیوانات با کلاس پایه و کلاس مشتق',
            ],
            20 => [
                'New / Delete',
                'Smart pointers (unique_ptr, shared_ptr)',
                'Deep copy vs shallow copy',
                'Rule of Three (copy ctor, assignment, destructor)',
                'Move semantics (intro to C++11 features)',
                'تمرین: پیاده‌سازی کلاس با منابع اختصاصی',
            ],
            21 => [
                'معرفی STL',
                'vector, map, set, pair, stack, queue',
                'Iterators و auto',
                'Lambda functions',
                'Algorithms: sort, find, for_each, ...',
                'Exception handling: try/catch, custom exceptions',
                'تمرین: پروژه کوچیک با استفاده از STL و مدیریت خطا',
            ],
        ];

        foreach ($episodesBySeasonCpp as $seasonId => $titles) {
            foreach ($titles as $index => $title) {
                BootcampEpisode::create([
                    'bootcamp_season_id' => $seasonId,
                    'title' => $title,
                    'type' => 'video',
                    'body' => '<p>برگزار نشده</p>',
                    'start_time' => now(),
                    'end_time' => now()->addHour(),
                    'order' => $index + 1,
                ]);
            }
        }


        //Web
        $episodesBySeason = [
            // فصل 1: معرفی HTML و ساختار صفحه
            22 => [
                'مقدمه‌ای بر HTML و نقش آن در وب',
                'ساختار کلی سند HTML و تگ‌های پایه',
                'تگ‌های متنی: p، h1-h6، strong، em',
                'لیست‌ها و تصاویر',
                'لینک‌ها و ساختار ناوبری ساده',
                'تمرین: ساخت یک صفحه معرفی شخصی',
            ],
            // فصل 2: کار با CSS و استایل‌دهی
            23 => [
                'مقدمه‌ای بر CSS و نحوه اتصال به HTML',
                'Selectorها و اولویت‌ها',
                'رنگ، فونت، background و border',
                'box model و margin/padding',
                'display: block/inline/inline-block',
                'تمرین: استایل دادن به صفحه معرفی',
            ],

            // فصل 3: CSS پیشرفته و معرفی کتابخونه‌ها
            24 => [
                'Flexbox و چیدمان منعطف',
                'Grid layout و تفاوت با Flexbox',
                'pseudo-classes و pseudo-elements',
                'transition و animation ساده',
                'آشنایی با کتابخانه Bootstrap',
                'تمرین: بازطراحی صفحه با Bootstrap',
            ],

            // فصل 4: کار با جاوااسکریپت و DOM
            25 => [
                'مقدمه‌ای بر JavaScript در مرورگر',
                'متغیرها، توابع و شرط‌ها',
                'حلقه‌ها و آرایه‌ها',
                'مقدمه DOM و انتخاب عناصر',
                'تغییر محتوای عناصر و رویدادهای ساده',
                'تمرین: فرم ساده و نمایش داینامیک اطلاعات',
            ],

            // فصل 5: مباحث پیشرفته JS و کار با events
            26 => [
                'Event listeners و انواع آن‌ها',
                'ساخت TODO list ساده با DOM',
                'مقدمه‌ای بر JSON و storage (localStorage)',
                'نحوه ساخت ماژول در JS',
                'اشتباهات رایج و debugging در کنسول',
                'تمرین: ذخیره لیست TODO در مرورگر',
            ],

            // فصل 6: ساخت پروژه واقعی
            27 => [
                'طراحی layout پروژه (با Flexbox/Grid)',
                'ساخت صفحات: Home، About، Contact',
                'ایجاد ناوبری و ساختار ریسپانسیو',
                'اتصال فرم تماس با localStorage',
                'اضافه کردن انیمیشن و تعاملات کاربر',
                'جمع‌بندی و نکات نهایی',
            ],
        ];

        foreach ($episodesBySeason as $seasonId => $titles) {
            foreach ($titles as $index => $title) {
                BootcampEpisode::create([
                    'bootcamp_season_id' => $seasonId,
                    'title' => $title,
                    'type' => 'video',
                    'body' => '<p>برگزار نشده</p>',
                    'start_time' => now(),
                    'end_time' => now()->addHour(),
                    'order' => $index + 1,
                ]);
            }
        }
    }
}
