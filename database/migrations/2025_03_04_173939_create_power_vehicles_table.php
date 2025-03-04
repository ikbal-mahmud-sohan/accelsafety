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
        Schema::create('power_vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('unit_name')->nullable();
            $table->string('vehicle_id')->nullable();
            $table->string('vehicle_owner')->nullable();
            $table->string('manufacturer_company_name')->nullable();
            $table->string('type_of_vehicle')->nullable();
            $table->string('capacity')->nullable();
            $table->string('last_maintenance_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('power_vehicles');
    }
};
