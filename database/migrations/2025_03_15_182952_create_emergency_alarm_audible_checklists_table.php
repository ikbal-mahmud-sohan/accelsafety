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
        Schema::create('emergency_alarm_audible_checklists', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('emergency_alarm_audible_id');
            $table->boolean('sound_condition')->default(false);
            $table->boolean('make_of_position')->default(false);
            $table->boolean('alarm_sensor')->default(false);
            $table->boolean('battery_backup_condition')->default(false);
            $table->boolean('record_of_alarm')->default(false);
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
        Schema::dropIfExists('emergency_alarm_audible_checklists');
    }
};
