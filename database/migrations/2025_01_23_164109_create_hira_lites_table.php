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
        Schema::create('hira_lites', function (Blueprint $table) {
            $table->id();
            $table->string('site_location');
            $table->string('activity_or_task');
            $table->string('risk_assessment_conducted_by');
            $table->string('date_conducted');
            $table->string('process_owner_or_department');
            $table->string('next_review_date')->nullable();
            $table->string('activity');
            $table->string('hazard');
            $table->string('existing_control_measures');
            $table->string('risk_rating_likelihood');
            $table->string('risk_rating_severity');
            $table->string('risk_rating_overall');
            $table->string('additional_control_measures')->nullable();
            $table->string('revised_risk_rating_likelihood');
            $table->string('revised_risk_rating_severity');
            $table->string('revised_risk_rating_overall');
            $table->string('person_responsible');
            $table->string('completion_date');
            // $table->string('approved_by');
            // $table->json('approved_by_signature')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hira_lites');
    }
};