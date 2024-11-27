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
        Schema::create('fire_extinguishers', function (Blueprint $table) {
            $table->id();
            $table->string('project_name')->nullable();
            $table->string('project_code')->nullable();
            $table->string('checklist_no')->nullable();
            $table->string('date')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('isgec')->nullable();
            $table->text('fire_extinguisher_des_1')->nullable();
            $table->text('fire_extinguisher_des_2')->nullable();
            $table->text('fire_extinguisher_des_3')->nullable();
            $table->text('fire_extinguisher_des_4')->nullable();
            $table->text('fire_extinguisher_des_5')->nullable();
            $table->text('fire_extinguisher_des_6')->nullable();
            $table->text('fire_extinguisher_des_7')->nullable();
            $table->text('fire_extinguisher_des_8')->nullable();
            $table->text('is_fire_extinguisher_1')->nullable();
            $table->text('is_fire_extinguisher_2')->nullable();
            $table->text('is_fire_extinguisher_3')->nullable();
            $table->text('is_fire_extinguisher_4')->nullable();
            $table->text('is_fire_extinguisher_5')->nullable();
            $table->text('is_fire_extinguisher_6')->nullable();
            $table->text('is_fire_extinguisher_7')->nullable();
            $table->text('is_fire_extinguisher_8')->nullable();
            $table->text('fire_extinguisher_remarks_1')->nullable();
            $table->text('fire_extinguisher_remarks_2')->nullable();
            $table->text('fire_extinguisher_remarks_3')->nullable();
            $table->text('fire_extinguisher_remarks_4')->nullable();
            $table->text('fire_extinguisher_remarks_5')->nullable();
            $table->text('fire_extinguisher_remarks_6')->nullable();
            $table->text('fire_extinguisher_remarks_7')->nullable();
            $table->text('fire_extinguisher_remarks_8')->nullable();
            $table->string('fit')->nullable(); 
            $table->string('checked_by')->nullable(); 
            $table->string('reviewed_by')->nullable(); 
            $table->string('checked_by_date')->nullable(); 
            $table->string('reviewed_by_date')->nullable(); 
            $table->json('checked_by_signature')->nullable(); 
            $table->json('reviewed_by_signature')->nullable();
            
            $table->unsignedBigInteger('approved_by')->nullable(); 
            $table->unsignedBigInteger('updated_by')->nullable();  
            $table->unsignedBigInteger('created_by')->nullable();  
            $table->timestamp('approved_date')->nullable(); 
            $table->timestamps();
            
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fire_extinguishers');
    }
};
