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
        Schema::create('hse_safety_inspection_reports', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('date_of_inspection');
            $table->string('ins_reports_des_1')->nullable();
            $table->string('ins_reports_des_2')->nullable();
            $table->string('ins_reports_des_3')->nullable();
            $table->string('ins_reports_des_4')->nullable();
            $table->string('ins_reports_des_5')->nullable();
            $table->string('ins_reports_des_6')->nullable();
            $table->string('ins_reports_des_7')->nullable();
            $table->string('ins_reports_des_8')->nullable();
            $table->string('ins_reports_des_9')->nullable();
            $table->string('ins_reports_des_10')->nullable();
            $table->string('ins_reports_des_11')->nullable();
            $table->string('ins_reports_des_12')->nullable();
            $table->string('ins_reports_des_13')->nullable();
            $table->string('ins_reports_des_remarks_1')->nullable();
            $table->string('ins_reports_des_remarks_2')->nullable();
            $table->string('ins_reports_des_remarks_3')->nullable();
            $table->string('ins_reports_des_remarks_4')->nullable();
            $table->string('ins_reports_des_remarks_5')->nullable();
            $table->string('ins_reports_des_remarks_6')->nullable();
            $table->string('ins_reports_des_remarks_7')->nullable();
            $table->string('ins_reports_des_remarks_8')->nullable();
            $table->string('ins_reports_des_remarks_9')->nullable();
            $table->string('ins_reports_des_remarks_10')->nullable();
            $table->string('ins_reports_des_remarks_11')->nullable();
            $table->string('ins_reports_des_remarks_12')->nullable();
            $table->string('ins_reports_des_remarks_13')->nullable();
            $table->string('name_of_inspector')->nullable();
            $table->string('designation')->nullable();
            $table->json('signature')->nullable();
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
        Schema::dropIfExists('hse_safety_inspection_reports');
    }
};
