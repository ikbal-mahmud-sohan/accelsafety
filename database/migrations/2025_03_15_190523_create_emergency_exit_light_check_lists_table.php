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
        Schema::create('emergency_exit_light_check_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('emergency_exit_light_id');
            $table->boolean('power_supply')->default(false);
            $table->boolean('light_condition')->default(false);
            $table->boolean('beam_direction_and_coverage')->default(false);
            $table->boolean('activation_test')->default(false);
            $table->boolean('battery_backup')->default(false);
            $table->boolean('name_plate_and_operating_instruction')->default(false);
            $table->boolean('physical_damage')->default(false);
            $table->string('last_maintenance_date')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergency_exit_light_check_lists');
    }
};
