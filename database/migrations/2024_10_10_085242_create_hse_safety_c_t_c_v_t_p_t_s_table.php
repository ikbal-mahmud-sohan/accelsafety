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
        Schema::create('hse_safety_c_t_c_v_t_p_t_s', function (Blueprint $table) {
            $table->id();
            $table->string('stt_1_complied')->nullable();
            $table->string('stt_1_remarks')->nullable();
            $table->string('stt_2_complied')->nullable();
            $table->string('stt_2_remarks')->nullable();
            $table->string('stt_3_complied')->nullable();
            $table->string('stt_3_remarks')->nullable();
            $table->string('stt_4_complied')->nullable();
            $table->string('stt_4_remarks')->nullable();
            $table->string('stt_5_complied')->nullable();
            $table->string('stt_5_remarks')->nullable();
            $table->string('stt_6_complied')->nullable();
            $table->string('stt_6_remarks')->nullable();
            $table->string('stt_7_complied')->nullable();
            $table->string('stt_7_remarks')->nullable();
            $table->string('stt_8_complied')->nullable();
            $table->string('stt_8_remarks')->nullable();
            $table->string('stt_9_complied')->nullable();
            $table->string('stt_9_remarks')->nullable();
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
        Schema::dropIfExists('hse_safety_c_t_c_v_t_p_t_s');
    }
};
