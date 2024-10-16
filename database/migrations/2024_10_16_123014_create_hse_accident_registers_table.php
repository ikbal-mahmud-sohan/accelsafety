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
        Schema::create('hse_accident_registers', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('types_of_accident');
            $table->string('department');
            $table->string('victims_name_with_position');
            $table->string('type_of_employee');
            $table->string('description_of_accident');
            $table->string('location');
            $table->string('effected_body_part');
            $table->string('type_of_injury');
            $table->string('immediate_cause');
            $table->string('immediate_action_taken');
            $table->string('investigation_report');
            $table->string('action_party_with_position');
            $table->string('time_frame');
            $table->string('action_status');
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hse_accident_registers');
    }
};
