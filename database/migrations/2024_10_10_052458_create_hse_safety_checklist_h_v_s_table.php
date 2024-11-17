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
        Schema::create('hse_safety_checklist_h_v_s', function (Blueprint $table) {
            $table->id();
            $table->string('hv_des_1')->nullable();
            $table->string('is_hv_complied_1')->nullable();
            $table->string('hv_remarks_1')->nullable();
            $table->string('hv_des_2')->nullable();
            $table->string('is_hv_complied_2')->nullable();
            $table->string('hv_remarks_2')->nullable();
            $table->string('hv_des_3')->nullable();
            $table->string('is_hv_complied_3')->nullable();
            $table->string('hv_remarks_3')->nullable();
            $table->string('hv_des_4')->nullable();
            $table->string('is_hv_complied_4')->nullable();
            $table->string('hv_remarks_4')->nullable();
            $table->string('hv_des_5')->nullable();
            $table->string('is_hv_complied_5')->nullable();
            $table->string('hv_remarks_5')->nullable();
            $table->string('hv_des_6')->nullable();
            $table->string('is_hv_complied_6')->nullable();
            $table->string('hv_remarks_6')->nullable();
            $table->string('hv_des_7')->nullable();
            $table->string('is_hv_complied_7')->nullable();
            $table->string('hv_remarks_7')->nullable();
            $table->string('hv_des_8')->nullable();
            $table->string('is_hv_complied_8')->nullable();
            $table->string('hv_remarks_8')->nullable();
            $table->string('hv_des_9')->nullable();
            $table->string('is_hv_complied_9')->nullable();
            $table->string('hv_remarks_9')->nullable();
            $table->string('hv_des_10')->nullable();
            $table->string('is_hv_complied_10')->nullable();
            $table->string('hv_remarks_10')->nullable();
            $table->string('hv_des_11')->nullable();
            $table->string('is_hv_complied_11')->nullable();
            $table->string('hv_remarks_11')->nullable();
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
        Schema::dropIfExists('hse_safety_checklist_h_v_s');
    }
};
