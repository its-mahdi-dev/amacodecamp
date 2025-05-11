<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Bootcamp;
use App\Models\Category; // Ensure to import Category model

class BootcampSeeder extends Seeder
{
    public function run()
    {

        Bootcamp::create([
            'slug' => 'c-basic-programming',
            'title' => 'مبانی برنامه نویسی با سی (C)',
            'category_id' => 1, 
            'thumbnail' => 'c-basic-programming.webp',
            'cover' => 'c-basic-programming.webp',
            'intro' => 'شروعی قدرتمند برای ورود به دنیای برنامه‌نویسی با یکی از پایه‌ای‌ترین و پرکاربردترین زبان‌ها: C.',
            'body' => '
               <div class="course-overview-card bg-white p-4 rounded shadow-sm" dir="rtl">

                <p class="fs-15 pb-2">
                    🚀 اگه همیشه می‌خواستی برنامه‌نویسی رو شروع کنی اما نمی‌دونستی از کجا، این بوت‌کمپ دقیقاً برای تو طراحی شده! ما با زبان C شروع می‌کنیم، چون پایه‌ای‌ترین مفاهیم رو شفاف و عمیق آموزش می‌ده — چیزی که آینده‌ت رو در هر زبان دیگه‌ای تضمین می‌کنه.
                </p>

                <div class="bg-gray p-4 rounded mt-4">
                    <h3 class="fs-24 font-weight-semi-bold pb-3">🔍 چه چیزهایی این بوت‌کمپ رو متفاوت می‌کنه؟</h3>
                    <ul class="generic-list-item overview-list-item">
                    <li><i class="la la-check me-1 text-black"></i> آموزش از پایه با مثال‌های واقعی و کاربردی</li>
                    <li><i class="la la-check me-1 text-black"></i> تمرین‌های عملی و پروژه‌هایی که واقعاً به کارت میان</li>
                    <li><i class="la la-check me-1 text-black"></i> پشتیبانی مستقیم از منتورها برای رفع اشکال</li>
                    <li><i class="la la-check me-1 text-black"></i> محتوای به‌روز و استاندارد مطابق نیاز بازار کار</li>
                    </ul>
                </div>

                <div class="alert alert-info mt-4 rounded-3 text-center">
                    📌 یادگیری C یعنی ساختن مغز برنامه‌نویسیت! <br>
                    حتی اگه بخوای بعدش بری سمت وب، هوش مصنوعی یا امنیت، اینجا پایه‌ت شکل می‌گیره.
                </div>

                <div class="course-overview-card mt-4">
                    <h3 class="fs-24 font-weight-semi-bold pb-3">🔥 چرا الان باید ثبت‌نام کنی؟</h3>
                    <ul class="generic-list-item generic-list-item-bullet fs-15">
                    <li>ظرفیت محدود و پر شدن سریع دوره‌ها</li>
                    <li>دسترسی مادام‌العمر به منابع بوت‌کمپ</li>
                    <li>تجربه‌ای تیمی، تعاملی و سرگرم‌کننده</li>
                    </ul>
                </div>

                </div>
            ',
            'level' => 'beginner',
            'duration' => '5 هفته',
            'start_time' => now(),
            'end_time' => now()->addMonth(),
            'capacity' => 50,
            'lessons' => 5,
            'quizzes' => 15,
            'certification' => true,
            'intro_video' => 'storage/videos/intro-laravel.mp4',
            'price' => 2300000,
        ]);


        Bootcamp::create([
            'slug' => 'python-basic-programming',
            'title' => 'مبانی برنامه نویسی با پایتون',
            'category_id' => 1, 
            'thumbnail' => 'python-basic-programming.webp',
            'cover' => 'python-basic-programming.webp',
            'intro' => 'شروع برنامه‌نویسی با یکی از ساده‌ترین و قدرتمندترین زبان‌های دنیا — پایتون',
            'body' => '
               <div class="course-overview-card bg-white p-4 rounded shadow-sm" dir="rtl">
                            
                <p class="fs-15 pb-2">
                    🐍 پایتون یه زبان ساده، روان و فوق‌العاده پرکاربرده که هم مبتدی‌ها عاشقش می‌شن، هم حرفه‌ای‌ها! توی این بوت‌کمپ، قراره برنامه‌نویسی رو از پایه با پایتون یاد بگیریم — بدون نیاز به هیچ پیش‌زمینه‌ای.
                </p>

                <div class="bg-gray p-4 rounded mt-4">
                    <h3 class="fs-24 font-weight-semi-bold pb-3">💡 چرا این بوت‌کمپ خاصه؟</h3>
                    <ul class="generic-list-item overview-list-item">
                    <li><i class="la la-check me-1 text-black"></i> آموزش مفهومی و مرحله‌به‌مرحله از صفر مطلق</li>
                    <li><i class="la la-check me-1 text-black"></i> پروژه‌های واقعی مثل ماشین‌حساب، بازی حدس عدد و تحلیل داده ساده</li>
                    <li><i class="la la-check me-1 text-black"></i> ترکیب تئوری و تمرین برای درک عمیق‌تر</li>
                    <li><i class="la la-check me-1 text-black"></i> امکان یادگیری با سرعت خودت و بازبینی ویدیوها</li>
                    </ul>
                </div>

                <div class="alert alert-success mt-4 rounded-3 text-center">
                    🌱 برنامه‌نویسی رو با پایتون شروع کن و پایه‌ی ورودت به دنیای هوش مصنوعی، وب، تحلیل داده و اتوماسیون رو بچین.
                </div>

                <div class="course-overview-card mt-4">
                    <h3 class="fs-24 font-weight-semi-bold pb-3">🚀 چرا نباید این فرصت رو از دست بدی؟</h3>
                    <ul class="generic-list-item generic-list-item-bullet fs-15">
                    <li>یادگیری سریع با روش آموزشی کاربردی</li>
                    <li>دریافت فایل‌های تمرین، اسلاید و منابع تکمیلی</li>
                    <li>فرصت پرسش و پاسخ مستقیم با مدرس</li>
                    </ul>
                </div>

                </div>

            ',
            'level' => 'beginner',
            'duration' => '5 هفته',
            'start_time' => now(),
            'end_time' => now()->addMonth(),
            'capacity' => 50,
            'lessons' => 5,
            'quizzes' => 15,
            'certification' => true,
            'intro_video' => 'storage/videos/intro-laravel.mp4',
            'price' => 2300000,
        ]);

        Bootcamp::create([
            'slug' => 'golang-programming',
            'title' => 'برنامه نویسی فشرده golang',
            'category_id' => 4, 
            'thumbnail' => 'golang-programming.webp',
            'cover' => 'golang-programming.webp',
            'intro' => 'یادگیری فشرده و حرفه‌ای زبان Go — مخصوص علاقه‌مندان به سیستم‌های مقیاس‌پذیر و بک‌اند حرفه‌ای 🚀🐹',
            'body' => '
               <div class="course-overview-card bg-white p-4 rounded shadow-sm" dir="rtl">

                <p class="fs-15 pb-2">
                    زبان Go (یا Golang) توسط گوگل طراحی شده تا سریع، ساده و قدرتمند باشه — یه انتخاب محبوب برای ساخت سرویس‌های بک‌اند، APIهای مقیاس‌پذیر، ابزارهای خط فرمان و حتی سرویس‌های Cloud-Native. تو این بوت‌کمپ فشرده، با تمرکز بالا و در زمان کم، به دنیای Go وارد می‌شی. 🐹⚡
                </p>

                <div class="bg-gray p-4 rounded mt-4">
                    <h3 class="fs-24 font-weight-semi-bold pb-3">💡 چرا این بوت‌کمپ خاصه؟</h3>
                    <ul class="generic-list-item overview-list-item">
                    <li><i class="la la-check me-1 text-black"></i> آموزش سریع و کاربردی Go برای ورود به پروژه‌های واقعی</li>
                    <li><i class="la la-check me-1 text-black"></i> ساخت میکروسرویس واقعی با Go و RESTful API</li>
                    <li><i class="la la-check me-1 text-black"></i> یادگیری concurrent programming به ساده‌ترین شکل</li>
                    <li><i class="la la-check me-1 text-black"></i> کار با ابزارهای حرفه‌ای مثل go mod، go test، و بیشتر</li>
                    </ul>
                </div>

                <div class="alert alert-primary mt-4 rounded-3 text-center">
                    ⏱️ این یه بوت‌کمپ سریع اما عمیقه — مخصوص کسایی که می‌خوان توی مدت کوتاه، حرفه‌ای‌تر از همیشه باشن.
                </div>

                <div class="course-overview-card mt-4">
                    <h3 class="fs-24 font-weight-semi-bold pb-3">🎯 مناسب برای چه کساییه؟</h3>
                    <ul class="generic-list-item generic-list-item-bullet fs-15">
                    <li>برنامه‌نویس‌هایی که می‌خوان Go رو در عمل یاد بگیرن</li>
                    <li>افرادی که به توسعه میکروسرویس‌ها و معماری مدرن علاقه‌مند هستن</li>
                    <li>کسانی که زمان کمی دارن اما دنبال یه شروع جدی هستن</li>
                    </ul>
                </div>

                </div>

            ',
            'level' => 'medium',
            'duration' => '6 هفته',
            'start_time' => now(),
            'end_time' => now()->addMonth(),
            'capacity' => 40,
            'lessons' => 6,
            'quizzes' => 25,
            'certification' => true,
            'intro_video' => 'storage/videos/intro-laravel.mp4',
            'price' => 3500000,
        ]);

        Bootcamp::create([
            'slug' => 'cpp-advanced-programming',
            'title' => 'برنامه نویسی پیشرفته با C++',
            'category_id' => 3, 
            'thumbnail' => 'cpp-advanced-programming.webp',
            'cover' => 'cpp-advanced-programming.webp',
            'intro' => 'در دنیای حرفه‌ای‌ها با C++ پیشرفته قدم بگذار — از مفاهیم شی‌گرایی تا مدیریت حافظه و طراحی سیستم‌های پیچیده 🧠⚙️',
            'body' => '
              <div class="course-overview-card bg-white p-4 rounded shadow-sm" dir="rtl">

                <p class="fs-15 pb-2">
                    C++ فقط یک زبان نیست، یه ابزار قدرتمنده برای ساخت سیستم‌عامل‌ها، موتورهای بازی، نرم‌افزارهای صنعتی و هر چیزی که به سرعت و کنترل بالا نیاز داره. توی این بوت‌کمپ پیشرفته، قراره مفاهیم عمیق‌تر رو یاد بگیری، پروژه‌محور جلو بریم، و با ساختارهای پیچیده کدنویسی آشنا شی. 🚀💻
                </p>

                <div class="bg-gray p-4 rounded mt-4">
                    <h3 class="fs-24 font-weight-semi-bold pb-3">💡 چرا این بوت‌کمپ خاصه؟</h3>
                    <ul class="generic-list-item overview-list-item">
                    <li><i class="la la-check me-1 text-black"></i> آموزش عمیق مفاهیم شی‌گرایی (OOP) در سطح پیشرفته</li>
                    <li><i class="la la-check me-1 text-black"></i> مدیریت حافظه، پوینترهای هوشمند و تفاوت‌های stack vs heap</li>
                    <li><i class="la la-check me-1 text-black"></i> آشنایی با Design Pattern های پرکاربرد در C++</li>
                    <li><i class="la la-check me-1 text-black"></i> کدنویسی Multi-thread با استفاده از C++11 به بعد</li>
                    <li><i class="la la-check me-1 text-black"></i> پروژه واقعی در پایان بوت‌کمپ برای تثبیت مطالب</li>
                    </ul>
                </div>

                <div class="alert alert-warning mt-4 rounded-3 text-center">
                    🧠 این دوره برای کساییه که از چالش استقبال می‌کنن و می‌خوان کنترل کامل روی برنامه‌هاشون داشته باشن.
                </div>

                <div class="course-overview-card mt-4">
                    <h3 class="fs-24 font-weight-semi-bold pb-3">🎯 این بوت‌کمپ برای کیه؟</h3>
                    <ul class="generic-list-item generic-list-item-bullet fs-15">
                    <li>برنامه‌نویس‌هایی که C++ مقدماتی رو بلدن و دنبال رشد جدی هستن</li>
                    <li>دانشجویان رشته مهندسی نرم‌افزار یا برق که با پروژه‌های سطح پایین سروکار دارن</li>
                    <li>علاقه‌مندان به حوزه Embedded، بازی‌سازی یا توسعه سیستم‌های پیچیده</li>
                    </ul>
                </div>

                </div>

            ',
            'level' => 'advanced',
            'duration' => '5 هفته',
            'start_time' => now(),
            'end_time' => now()->addMonth(),
            'capacity' => 40,
            'lessons' => 5,
            'quizzes' => 20,
            'certification' => true,
            'intro_video' => 'storage/videos/intro-laravel.mp4',
            'price' => 2700000,
        ]);
        
        Bootcamp::create([
            'slug' => 'web-development',
            'title' => 'توسعه وب فشرده',
            'category_id' => 4, 
            'thumbnail' => 'web-development.webp',
            'cover' => 'web-development.webp',
            'intro' => 'آموزش کامل و فشرده توسعه وب با HTML، CSS و JavaScript — شروعی قدرتمند برای ورود به دنیای وب و طراحی سایت‌های حرفه‌ای 🌐🚀',
            'body' => '
              <div class="course-overview-card bg-white p-4 rounded shadow-sm" dir="rtl">

                <p class="fs-15 pb-2">
                    اگر می‌خواهی وارد دنیای طراحی وب بشی و مهارت‌های طراحی صفحات وب رو از پایه یاد بگیری، این بوت‌کمپ برای توست. با یادگیری HTML، CSS و JavaScript به‌صورت فشرده، می‌تونی سایت‌های پویا و جذاب بسازی و به سرعت وارد بازار کار بشی. 💻🎨
                </p>

                <div class="bg-gray p-4 rounded mt-4">
                    <h3 class="fs-24 font-weight-semi-bold pb-3">💡 چرا این بوت‌کمپ خاصه؟</h3>
                    <ul class="generic-list-item overview-list-item">
                    <li><i class="la la-check me-1 text-black"></i> آموزش فشرده HTML و CSS با تمرکز بر طراحی ریسپانسیو و UX/UI</li>
                    <li><i class="la la-check me-1 text-black"></i> آشنایی کامل با JavaScript و نحوه ایجاد تعاملات در صفحات وب</li>
                    <li><i class="la la-check me-1 text-black"></i> ساخت پروژه‌های واقعی مثل صفحه فرود و وب‌سایت‌های پویا</li>
                    <li><i class="la la-check me-1 text-black"></i> یادگیری اصول مهم توسعه وب، مانند دسترسی‌پذیری و بهینه‌سازی سایت</li>
                    </ul>
                </div>

                <div class="alert alert-success mt-4 rounded-3 text-center">
                    🏃‍♂️ این بوت‌کمپ برای کسانیه که می‌خواهند در کمترین زمان ممکن به یک توسعه‌دهنده وب حرفه‌ای تبدیل بشن.
                </div>

                <div class="course-overview-card mt-4">
                    <h3 class="fs-24 font-weight-semi-bold pb-3">🎯 این بوت‌کمپ برای کیه؟</h3>
                    <ul class="generic-list-item generic-list-item-bullet fs-15">
                    <li>افرادی که هیچ تجربه‌ای در برنامه‌نویسی ندارند و می‌خواهند از صفر شروع کنند</li>
                    <li>دانشجویان رشته‌های مهندسی نرم‌افزار یا علوم کامپیوتر که به دنبال یک مهارت جدید هستند</li>
                    <li>علاقه‌مندان به طراحی وب و کسانی که می‌خواهند به دنیای توسعه وب وارد بشن</li>
                    </ul>
                </div>

                </div>

            ',
            'level' => 'medium',
            'duration' => '6 هفته',
            'start_time' => now(),
            'end_time' => now()->addMonth(),
            'capacity' => 40,
            'lessons' => 6,
            'quizzes' => 20,
            'certification' => true,
            'intro_video' => 'storage/videos/intro-laravel.mp4',
            'price' => 3200000,
        ]);

    }
}

