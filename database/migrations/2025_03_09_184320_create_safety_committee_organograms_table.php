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
        Schema::create('safety_committee_organograms', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the employee (e.g. President, Vice President, etc.)
            $table->string('position'); // Position (e.g. President, Vice President, etc.)
            $table->string('additional_name')->nullable(); // Additional name field if any
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('safety_committee_organograms');
    }
};
