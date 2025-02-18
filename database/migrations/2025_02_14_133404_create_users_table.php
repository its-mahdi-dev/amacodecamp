<?php
// database/migrations/2023_01_01_000000_create_users_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Basic user info
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            // We'll store the avatar as an integer referencing e.g. 1.png, 2.png ...
            $table->unsignedInteger('avatar')->default(1);

            // Phone-based login
            $table->string('phone')->unique();
            // We won't store password if purely OTP-based, or store it if you want fallback:
            // $table->string('password')->nullable();

            $table->string('email')->nullable()->unique();

            // For roles, you can store a single role or pivot table for many roles
            $table->enum('role', ['admin','teacher','student'])->default('student');

            // Wishlists, baskets, etc. typically go in pivot or separate tables
            // We'll keep it minimal here

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};

