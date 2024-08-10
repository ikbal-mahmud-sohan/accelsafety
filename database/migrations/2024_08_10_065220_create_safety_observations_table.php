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
        Schema::create('safety_observations', function (Blueprint $table) {
            $table->id();
            $table->string('auditor'); 
            $table->string('plant_name');
            $table->string('location'); 
            $table->date('audit_date'); 
            $table->string('category'); 
            $table->text('problem_description'); 
            $table->json('problematic_progressive_images')->nullable(); 
            $table->text('root_cause'); 
            $table->string('resp_department'); 
            $table->string('owner_department'); 
            $table->text('improvement_actions'); 
            $table->date('due_date'); 
            $table->boolean('status')->default(0); 
            $table->string('priority_type'); 
            $table->text('remarks')->nullable();
            $table->string('corrective_image')->nullable(); 
            $table->string('importance_level')->nullable(); 
            $table->string('work_accomplished_by')->nullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('safety_observations');
    }
};
