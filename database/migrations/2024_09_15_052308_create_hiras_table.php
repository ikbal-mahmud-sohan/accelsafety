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
        Schema::create('hiras', function (Blueprint $table) {
            $table->id();
            $table->string('process');
            $table->string('activity');
            $table->string('location');
            $table->json('type_of_activity')->nullable();
            $table->json('occupations')->nullable();
            $table->string('event');
            $table->string('cause');
            $table->string('impact');
            $table->string('hazard_type');
            $table->integer('likelihood');
            $table->string('impact_rating_factors_regulatory');
            $table->string('impact_rating_factors_safety');
            $table->integer('impact_score');
            $table->integer('overall_risk_score');
            $table->json('operational_control_elimination')->nullable();
            $table->json('operational_control_substitution')->nullable();
            $table->json('operational_control_engineering')->nullable();
            $table->json('operational_control_administrative')->nullable();
            $table->json('ppe')->nullable();
            $table->string('risk_evaluation_control_type');
            $table->string('risk_evaluation_effectiveness');
            $table->integer('risk_evaluation_likelihood');
            $table->integer('risk_evaluation_impact_score');
            $table->integer('risk_evaluation_overall_risk_score');
            $table->string('risk_evaluation_level_of_significance');
            $table->string('mitigation')->nullable();
            $table->string('type_of_mitigation')->nullable();
            $table->string('status')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hiras');
    }
};


