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
        Schema::create('hse_noise_intensity_measurements', function (Blueprint $table) {
            $table->id();
            $table->string('area');
            $table->string('location');
            $table->string('location_id');
            $table->string('day_time_reading');
            $table->string('night_time_reading');
            $table->string('date_of_test')->nullable(); 
            $table->string('standar_limit')->nullable(); 
            $table->string('remarks')->nullable(); 
            $table->unsignedBigInteger('approved_by')->nullable(); 
            $table->unsignedBigInteger('updated_by')->nullable();  
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();

            $table->foreign('approved_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hse_noise_intensity_measurements');
    }
};
