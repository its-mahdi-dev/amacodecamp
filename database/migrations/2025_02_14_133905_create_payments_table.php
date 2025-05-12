<?php
// database/migrations/2023_01_02_000009_create_payments_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('basket_id')->constrained()->onDelete('cascade');
            $table->string('authority')->nullable(); // ZarinPal authority code
            $table->integer('amount')->nullable();
            $table->string('referenceId')->nullable();
            $table->string('cardPan')->nullable();
            $table->enum('status', ['pending','paid','failed'])->default('pending');
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
