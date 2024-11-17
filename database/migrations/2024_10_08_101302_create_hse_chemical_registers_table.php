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
        Schema::create('hse_chemical_registers', function (Blueprint $table) {
            $table->id();
            $table->string('material_name');
            $table->string('appearance');
            $table->string('uom');
            $table->string('weight');
            $table->string('user_dept')->nullable();
            $table->json('hazard_symbols')->nullable();
            $table->string('hazard_statement')->nullable();
            $table->string('physical_hazards')->nullable();
            $table->string('disposal_procedure')->nullable();
            $table->string('fire_rating')->nullable();
            $table->boolean('msds_available')->default(0);
            $table->string('remarks')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hse_chemical_registers');
    }
};
