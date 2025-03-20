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
        Schema::create('fire_extinguisher_t_o_n_checklists', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('fire_extinguisher_ton_id');
            $table->boolean('fe_pressure_gauge_condition')->default(false);
            $table->boolean('placed_in_position')->default(false);
            $table->boolean('safety_seal_or_pin')->default(false);
            $table->boolean('handle_trigger_condition')->default(false);
            $table->boolean('hose_connection_secured_belt')->default(false);
            $table->boolean('name_plate_and_operating_instruction')->default(false);
            $table->boolean('physical_damage')->default(false);
            $table->boolean('corrosion')->default(false);
            $table->boolean('leakage')->default(false);
            $table->string('refilling_date')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fire_extinguisher_t_o_n_checklists');
    }
};
