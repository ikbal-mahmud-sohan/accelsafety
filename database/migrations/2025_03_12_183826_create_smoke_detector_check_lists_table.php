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
        Schema::create('smoke_detector_check_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('smoke_detector_id');
            $table->boolean('placement')->default(false);
            $table->boolean('power_source')->default(false);
            $table->boolean('battery_check')->default(false);
            $table->boolean('test_button')->default(false);
            $table->boolean('cleanliness')->default(false);
            $table->boolean('sensitivity')->default(false);
            $table->boolean('interconnection_with_repeater')->default(false);
            $table->string('last_calibration_date')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smoke_detector_check_lists');
    }
};
