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
        Schema::create('water_consumptions', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('unit_name');
            $table->string('month');
            $table->string('date');
            $table->string('employee_name');
            $table->string('designation');
            $table->decimal('ground_water', 15, 2)->nullable();
            $table->string('ground_water_unit')->nullable();
            $table->string('gw_last_flow_meter')->nullable();
            $table->string('gw_current_flow_meter')->nullable();
            $table->decimal('rain_water', 15, 2)->nullable();
            $table->string('rain_water_unit')->nullable();
            $table->string('rw_last_flow_meter')->nullable();
            $table->string('rw_current_flow_meter')->nullable();
            $table->decimal('domestic_water', 15, 2)->nullable();
            $table->string('domestic_water_unit')->nullable();
            $table->string('dw_last_flow_meter')->nullable();
            $table->string('dw_current_flow_meter')->nullable();
            $table->decimal('process_water', 15, 2)->nullable();
            $table->string('process_water_unit')->nullable();
            $table->string('pw_last_flow_meter')->nullable();
            $table->string('pw_current_flow_meter')->nullable();
            $table->decimal('etp_inlet_water', 15, 2)->nullable();
            $table->string('etp_inlet_water_unit')->nullable();
            $table->string('eiw_last_flow_meter')->nullable();
            $table->string('eiw_current_flow_meter')->nullable();
            $table->decimal('etp_outlet_water', 15, 2)->nullable();
            $table->string('etp_outlet_water_unit')->nullable();
            $table->string('eow_last_flow_meter')->nullable();
            $table->string('eow_current_flow_meter')->nullable();
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('water_consumptions');
    }
};
