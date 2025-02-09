<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accel_safety_words', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->string('version')->nullable();
            $table->string('title')->nullable();
            $table->string('records_date')->nullable();
            $table->text('descriptions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accel_safety_words');
    }
};
