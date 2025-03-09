<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Bootcamp;
use App\Models\Category; // Ensure to import Category model

class BootcampSeeder extends Seeder
{
    public function run()
    {
        // Fetch a category to assign to the bootcamp (you can modify this to create a new category if needed)
        $category = Category::first(); // Use the first category or default to category ID 1

        Bootcamp::create([
            'slug' => 'laravel-for-beginners',
            'title' => 'Laravel for Beginners',
            'category_id' => $category ? $category->id : 1, // Default to category 1 if no categories exist
            'thumbnail' => 'storage/thumbnails/laravel-beginner.jpg',
            'cover' => 'storage/covers/laravel-beginner-cover.jpg',
            'intro' => 'Learn the basics of Laravel, a powerful PHP framework for web development.',
            'body' => '
                <div class="bootcamp-description">
                    <h2>About This Bootcamp</h2>
                    <p>This bootcamp is designed for individuals who want to learn <strong>Laravel</strong>, one of the most popular PHP frameworks used for modern web development. Whether you\'re a beginner or an experienced developer, this bootcamp will guide you through the essential concepts of Laravel.</p>

                    <h3>What You Will Learn</h3>
                    <ul>
                        <li><strong>Introduction to Laravel</strong>: Understand the Laravel framework and its architecture.</li>
                        <li><strong>Routing</strong>: Learn how to define and manage routes in Laravel.</li>
                        <li><strong>Controllers</strong>: Create and manage controllers to handle HTTP requests.</li>
                        <li><strong>Models and Eloquent ORM</strong>: Work with Laravel’s Eloquent ORM to interact with databases.</li>
                        <li><strong>Blade Templating</strong>: Build dynamic user interfaces with the Blade templating engine.</li>
                        <li><strong>Authentication and Authorization</strong>: Implement user authentication and roles within your app.</li>
                        <li><strong>Testing and Debugging</strong>: Learn how to write tests and debug your Laravel applications effectively.</li>
                    </ul>

                    <h3>Bootcamp Structure</h3>
                    <p>This bootcamp consists of the following modules:</p>
                    <ol>
                        <li><strong>Module 1</strong>: Laravel Basics – Learn the fundamentals of Laravel.</li>
                        <li><strong>Module 2</strong>: Advanced Laravel – Dive deeper into more complex Laravel features.</li>
                        <li><strong>Module 3</strong>: Real-World Projects – Build real applications using Laravel.</li>
                    </ol>

                    <h3>What You Need</h3>
                    <p>This bootcamp is suitable for anyone with basic programming knowledge. For the best experience, you should have a basic understanding of HTML, CSS, and JavaScript.</p>

                    <h3>Prerequisites</h3>
                    <ul>
                        <li>Basic understanding of PHP</li>
                        <li>Familiarity with databases and SQL</li>
                        <li>A passion for learning and improving your skills</li>
                    </ul>

                    <h3>Enroll Now</h3>
                    <p>Ready to take your skills to the next level? <strong>Enroll today</strong> and start your journey to becoming a Laravel expert!</p>
                </div>
            ',
            'level' => 'beginner',
            'duration' => '4 weeks',
            'capacity' => 30,
            'lessons' => 10,
            'quizzes' => 3,
            'certification' => true,
            'intro_video' => 'storage/videos/intro-laravel.mp4',
            'price' => 100,
        ]);

        Bootcamp::create([
            'slug' => 'advanced-laravel-techniques',
            'title' => 'Advanced Laravel Techniques',
            'category_id' => $category ? $category->id : 1,
            'thumbnail' => 'storage/thumbnails/advanced-laravel.jpg',
            'cover' => 'storage/covers/advanced-laravel-cover.jpg',
            'intro' => 'Dive deep into advanced Laravel techniques for web developers with experience.',
            'body' => '
                <div class="bootcamp-description">
                    <h2>About This Bootcamp</h2>
                    <p>This bootcamp is aimed at experienced developers who want to master advanced Laravel techniques and deepen their understanding of the Laravel ecosystem.</p>

                    <h3>What You Will Learn</h3>
                    <ul>
                        <li><strong>Advanced Routing</strong>: Working with complex routes, route groups, and route model binding.</li>
                        <li><strong>Queueing and Broadcasting</strong>: Handle large tasks asynchronously and broadcast events in real time.</li>
                        <li><strong>Unit Testing and Debugging</strong>: Master testing and debugging techniques in Laravel.</li>
                        <li><strong>Custom Middleware</strong>: Create and manage custom middleware to filter HTTP requests.</li>
                        <li><strong>Optimizing Laravel Performance</strong>: Learn best practices for optimizing performance in Laravel applications.</li>
                    </ul>

                    <h3>Bootcamp Structure</h3>
                    <p>This bootcamp consists of the following modules:</p>
                    <ol>
                        <li><strong>Module 1</strong>: Advanced Routing and Middleware – Explore routing techniques and how to use middleware.</li>
                        <li><strong>Module 2</strong>: Queues and Broadcasting – Handle asynchronous tasks and broadcast real-time events.</li>
                        <li><strong>Module 3</strong>: Laravel Performance Tuning – Learn techniques to optimize the performance of your application.</li>
                    </ol>

                    <h3>Prerequisites</h3>
                    <ul>
                        <li>Intermediate knowledge of Laravel</li>
                        <li>Experience with databases and SQL</li>
                        <li>Familiarity with modern PHP development practices</li>
                    </ul>

                    <h3>Enroll Now</h3>
                    <p>If you want to advance your Laravel skills, <strong>enroll today</strong> and become an expert in the Laravel framework!</p>
                </div>
            ',
            'level' => 'advanced',
            'duration' => '6 weeks',
            'capacity' => 25,
            'lessons' => 12,
            'quizzes' => 4,
            'certification' => true,
            'intro_video' => 'storage/videos/intro-advanced-laravel.mp4',
            'price' => 200,
        ]);
    }
}

