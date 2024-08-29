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
        Schema::create('assign_trainings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employee_infos')->onDelete('cascade');
            $table->foreignId('training_topic_id')->constrained('training_topics')->onDelete('cascade');
            $table->boolean('status')->default(0);
            $table->date('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assign_trainings');
    }
};
