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
        Schema::create('hse_earthing_pit_conditions', function (Blueprint $table) {
            $table->id();
            $table->string('doc_no')->nullable();
            $table->string('issue_no')->nullable();
            $table->string('issue_date')->nullable();
            $table->string('revision_no')->nullable();
            $table->string('revision_date')->nullable();
            $table->string('equipment_details');
            $table->string('specification');
            $table->string('last_measured_date');
            $table->string('next_measuring_date');
            $table->string('check_points');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hse_earthing_pit_conditions');
    }
};
