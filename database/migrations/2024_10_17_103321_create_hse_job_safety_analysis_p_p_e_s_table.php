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
        Schema::create('hse_job_safety_analysis_p_p_e_s', function (Blueprint $table) {
            $table->id();
            $table->string('issue_date');
            $table->string('issue_no');
            $table->string('revision_date');
            $table->string('revision_no');
            $table->string('jsa_id');
            $table->string('process');
            $table->string('activity');
            $table->string('task');
            $table->string('hazards');
            $table->string('controls');
            $table->string('ppe');
            $table->string('recommended_trainings');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hse_job_safety_analysis_p_p_e_s');
    }
};
