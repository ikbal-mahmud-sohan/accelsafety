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
        Schema::create('hazardous_waste_inventories', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('month'); // Month field
            $table->decimal('dust', 15, 2)->nullable(); // Amount of dust
            $table->decimal('chemical_contaminated', 15, 2)->nullable(); // Chemical contaminated waste
            $table->decimal('chemical_drum', 15, 2)->nullable(); // Chemical drums
            $table->decimal('burn_oil', 15, 2)->nullable(); // Burn oil
            $table->decimal('dyeing_waste', 15, 2)->nullable(); // Dyeing waste
            $table->decimal('electrical_waste', 15, 2)->nullable(); // Electrical waste
            $table->decimal('tube_light', 15, 2)->nullable(); // Tube lights
            $table->decimal('toner', 15, 2)->nullable(); // Toner waste
            $table->decimal('battery', 15, 2)->nullable(); // Batteries
            $table->decimal('medical_waste', 15, 2)->nullable(); // Medical waste
            $table->decimal('sludge', 15, 2)->nullable(); // Sludge waste
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hazardous_waste_inventories');
    }
};
