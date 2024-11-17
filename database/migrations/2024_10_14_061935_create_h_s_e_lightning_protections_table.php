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
        Schema::create('h_s_e_lightning_protections', function (Blueprint $table) {
            $table->id();
            $table->string('equipment_details');
            $table->string('lightning_protector');
            $table->string('last_measured_date');
            $table->string('next_measuring_date');
            $table->string('check_points');
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('h_s_e_lightning_protections');
    }
};
