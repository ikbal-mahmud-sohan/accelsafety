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
        Schema::create('boom_placers', function (Blueprint $table) {
            $table->id();
            $table->string('project_name')->nullable();
            $table->string('project_code')->nullable();
            $table->string('checklist_no')->nullable();
            $table->string('date')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('isgec')->nullable();
            $table->text('boom_placer_des_1')->nullable();
            $table->text('boom_placer_des_2')->nullable();
            $table->text('boom_placer_des_3')->nullable();
            $table->text('boom_placer_des_4')->nullable();
            $table->text('boom_placer_des_5')->nullable();
            $table->text('boom_placer_des_6')->nullable();
            $table->text('boom_placer_des_7')->nullable();
            $table->text('boom_placer_des_8')->nullable();
            $table->text('boom_placer_des_9')->nullable();
            $table->text('boom_placer_des_10')->nullable();
            $table->text('boom_placer_des_11')->nullable();
            $table->text('boom_placer_des_12')->nullable();
            $table->text('boom_placer_des_13')->nullable();
            $table->text('boom_placer_des_14')->nullable();
            $table->text('boom_placer_des_15')->nullable();
            $table->text('boom_placer_des_16')->nullable();
            $table->text('boom_placer_des_17')->nullable();
            $table->text('boom_placer_des_18')->nullable();
            $table->text('is_boom_placer_1')->nullable();
            $table->text('is_boom_placer_2')->nullable();
            $table->text('is_boom_placer_3')->nullable();
            $table->text('is_boom_placer_4')->nullable();
            $table->text('is_boom_placer_5')->nullable();
            $table->text('is_boom_placer_6')->nullable();
            $table->text('is_boom_placer_7')->nullable();
            $table->text('is_boom_placer_8')->nullable();
            $table->text('is_boom_placer_9')->nullable();
            $table->text('is_boom_placer_10')->nullable();
            $table->text('is_boom_placer_11')->nullable();
            $table->text('is_boom_placer_12')->nullable();
            $table->text('is_boom_placer_13')->nullable();
            $table->text('is_boom_placer_14')->nullable();
            $table->text('is_boom_placer_15')->nullable();
            $table->text('is_boom_placer_16')->nullable();
            $table->text('is_boom_placer_17')->nullable();
            $table->text('is_boom_placer_18')->nullable();
            $table->text('boom_placer_remarks_1')->nullable();
            $table->text('boom_placer_remarks_2')->nullable();
            $table->text('boom_placer_remarks_3')->nullable();
            $table->text('boom_placer_remarks_4')->nullable();
            $table->text('boom_placer_remarks_5')->nullable();
            $table->text('boom_placer_remarks_6')->nullable();
            $table->text('boom_placer_remarks_7')->nullable();
            $table->text('boom_placer_remarks_8')->nullable();
            $table->text('boom_placer_remarks_9')->nullable();
            $table->text('boom_placer_remarks_10')->nullable();
            $table->text('boom_placer_remarks_11')->nullable();
            $table->text('boom_placer_remarks_12')->nullable();
            $table->text('boom_placer_remarks_13')->nullable();
            $table->text('boom_placer_remarks_14')->nullable();
            $table->text('boom_placer_remarks_15')->nullable();
            $table->text('boom_placer_remarks_16')->nullable();
            $table->text('boom_placer_remarks_17')->nullable();
            $table->text('boom_placer_remarks_18')->nullable();
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
        Schema::dropIfExists('boom_placers');
    }
};
