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
        Schema::create('training_attendences', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number');
            $table->string('training_topic');
            $table->string('iso_standard');
            $table->string('venue');
            $table->string('facilitator');
            $table->date('training_date')->nullable();
            $table->string('training_duration');
            $table->string('name');
            $table->string('title');
            $table->string('function');
            $table->string('business');
            $table->string('signature')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_attendences');
    }
};
