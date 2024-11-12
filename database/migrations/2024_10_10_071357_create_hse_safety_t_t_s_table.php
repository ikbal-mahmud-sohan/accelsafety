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
        Schema::create('hse_safety_t_t_s', function (Blueprint $table) {
            $table->id();
            $table->string('stt_1_complied')->nullable();
            $table->text('stt_1_descriptions')->nullable();
            $table->string('stt_1_remarks')->nullable();
            $table->string('stt_2_complied')->nullable();
            $table->text('stt_2_descriptions')->nullable();
            $table->string('stt_2_remarks')->nullable();
            $table->string('stt_3_complied')->nullable();
            $table->text('stt_3_descriptions')->nullable();
            $table->string('stt_3_remarks')->nullable();
            $table->string('stt_4_complied')->nullable();
            $table->text('stt_4_descriptions')->nullable();
            $table->string('stt_4_remarks')->nullable();
            $table->string('stt_5_complied')->nullable();
            $table->text('stt_5_descriptions')->nullable();
            $table->string('stt_5_remarks')->nullable();
            $table->string('stt_6_complied')->nullable();
            $table->text('stt_6_descriptions')->nullable();
            $table->string('stt_6_remarks')->nullable();
            $table->string('stt_7_complied')->nullable();
            $table->text('stt_7_descriptions')->nullable();
            $table->string('stt_7_remarks')->nullable();
            $table->string('stt_8_complied')->nullable();
            $table->text('stt_8_descriptions')->nullable();
            $table->string('stt_8_remarks')->nullable();
            $table->string('stt_9_complied')->nullable();
            $table->text('stt_9_descriptions')->nullable();
            $table->string('stt_9_remarks')->nullable();
            $table->string('stt_10_complied')->nullable();
            $table->text('stt_10_descriptions')->nullable();
            $table->string('stt_10_remarks')->nullable();
            $table->string('stt_11_complied')->nullable();
            $table->text('stt_11_descriptions')->nullable();
            $table->string('stt_11_remarks')->nullable();
            $table->string('stt_12_complied')->nullable();
            $table->text('stt_12_descriptions')->nullable();
            $table->string('stt_12_remarks')->nullable();
            $table->string('stt_13_complied')->nullable();
            $table->text('stt_13_descriptions')->nullable();
            $table->string('stt_13_remarks')->nullable();
            $table->string('stt_14_complied')->nullable();
            $table->text('stt_14_descriptions')->nullable();
            $table->string('stt_14_remarks')->nullable();
            $table->string('stt_15_complied')->nullable();
            $table->text('stt_15_descriptions')->nullable();
            $table->string('stt_15_remarks')->nullable();
            $table->string('stt_16_complied')->nullable();
            $table->text('stt_16_descriptions')->nullable();
            $table->string('stt_16_remarks')->nullable();
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
        Schema::dropIfExists('hse_safety_t_t_s');
    }
};
