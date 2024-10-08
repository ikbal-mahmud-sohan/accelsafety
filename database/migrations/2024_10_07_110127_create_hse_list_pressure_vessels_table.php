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
        Schema::create('hse_list_pressure_vessels', function (Blueprint $table) {
            $table->id();
            $table->string('vessel_type');
            $table->string('purpose');
            $table->string('medium');
            $table->string('location');
            $table->string('capacity_m3');
            $table->string('quantity_nos');
            $table->string('working_pressure_bar');
            $table->boolean('relief_valve')->default(0);
            $table->string('prv_set_point_bar');
            $table->string('last_hydro');
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hse_list_pressure_vessels');
    }
};
