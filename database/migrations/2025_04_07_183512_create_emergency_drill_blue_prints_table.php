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
        Schema::create('emergency_drill_blue_prints', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('title')->nullable();
            $table->string('emergency_simulation')->nullable();
            $table->string('location')->nullable();
            $table->string('incident_initiator')->nullable();
            $table->string('emergency_communication')->nullable();
            $table->string('observers')->nullable();
            $table->json('location_data')->nullable();
            $table->string('fire_scenario')->nullable();
            $table->longText('site_main_controller_responsibility')->nullable();
            $table->longText('site_incident_controller_responsibility')->nullable();
            $table->longText('emergency_response_team_responsibility')->nullable();
            $table->longText('employees_responsibility')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergency_drill_blue_prints');
    }
};
