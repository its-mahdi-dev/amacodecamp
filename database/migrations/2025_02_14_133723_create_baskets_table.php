<?php
// database/migrations/2023_01_02_000004_create_baskets_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('baskets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('bootcamps_id')->default('[]');
            $table->unsignedInteger('quantity')->default(1);
            $table->foreignId('cupon_id')->nullable()->constrained()->onDelete('cascade');
            $table->integer('total_price');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('baskets');
    }
};
