<?php
// database/migrations/2023_01_02_000000_create_courses_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bootcamps', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique(); // for /bootcamps/{slug}
            $table->string('title');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('thumbnail')->nullable(); // path to thumbnail image
            $table->string('cover')->nullable();     // larger image for course
            $table->text('intro')->nullable();
            $table->text('body')->nullable();
            $table->enum('level' , ['beginner' , 'medium' , 'advanced'])->nullable();  // e.g. beginner, advanced
            $table->string('duration')->nullable(); // e.g. "4 weeks", "30 hours"
            $table->integer('capacity');
            $table->timestamp("start_time")->nullable();
            $table->timestamp("end_time")->nullable();
            $table->unsignedInteger('lessons')->default(0);
            $table->unsignedInteger('quizzes')->default(0);
            $table->boolean('certification')->default(false);
            $table->text('intro_video')->nullable();
            $table->integer('price')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bootcamps');
    }
};

