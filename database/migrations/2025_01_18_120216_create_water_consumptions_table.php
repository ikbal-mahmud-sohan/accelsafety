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
            $table->string('month');
            $table->decimal('process_water', 15, 2)->nullable(); // Amount of process water
            $table->decimal('domestic_water', 15, 2)->nullable(); // Amount of domestic water
            $table->decimal('etp_inlet_water', 15, 2)->nullable(); // ETP inlet water
            $table->decimal('etp_outlet_water', 15, 2)->nullable(); // ETP outlet water
            $table->decimal('deviation_of_etp_discharge', 15, 2)->nullable(); // Deviation of ETP discharge
            $table->decimal('dying_re_use_water', 15, 2)->nullable(); // Reused water in dying process
            $table->decimal('rain_water', 15, 2)->nullable(); // Amount of rainwater
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
