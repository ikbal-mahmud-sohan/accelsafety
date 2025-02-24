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
        Schema::create('hira_lites_assessments', function (Blueprint $table) {
            $table->id();
            $table->string('site_location')->nullable();
            $table->string('activity_or_task')->nullable();
            $table->string('risk_assessment_conducted_by')->nullable();
            $table->string('date_conducted')->nullable();
            $table->string('process_owner_or_department')->nullable();
            $table->string('next_review_date')->nullable()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hira_lites_assessments');
    }
};
