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
        Schema::create('accidents', function (Blueprint $table) {
            $table->id();
            $table->string('month');
            $table->date('date');
            $table->string('name');
            $table->string('designation');
            $table->string('supervisor');
            $table->string('department');
            $table->string('type_of_accident');
            $table->text('description');
            $table->string('zone_location');
            $table->string('precise_location');
            $table->string('injury_type');
            $table->string('affected_body_parts');
            $table->boolean('property_damaged');
            $table->text('root_cause');
            $table->text('action');
            $table->integer('days_lost');
            $table->text('remarks')->nullable();
            $table->string('type_of_victim_employee');
            $table->string('responsible_name');
            $table->date('deadline');
            $table->boolean('status')->default(0);
            $table->string('verified_image')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accidents');
    }
};
