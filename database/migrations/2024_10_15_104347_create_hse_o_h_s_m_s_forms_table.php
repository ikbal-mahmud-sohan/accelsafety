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
        Schema::create('hse_o_h_s_m_s_forms', function (Blueprint $table) {
            $table->id();
            $table->string('factory_name');
            $table->string('date');
            $table->string('location');
            $table->string('ohsmsf_sign_1')->nullable();
            $table->string('ohsmsf_sign_2')->nullable();
            $table->string('ohsmsf_sign_3')->nullable();
            $table->string('ohsmsf_sign_4')->nullable();
            $table->string('ohsmsf_sign_5')->nullable();
            $table->string('ohsmsf_sign_6')->nullable();
            $table->string('ohsmsf_sign_7')->nullable();
            $table->string('ohsmsf_sign_8')->nullable();
            $table->string('ohsmsf_sign_9')->nullable();
            $table->string('ohsmsf_sign_10')->nullable();
            $table->string('ohsmsf_sign_11')->nullable();
            $table->string('ohsmsf_sign_12')->nullable();
            $table->string('ohsmsf_sign_13')->nullable();
            $table->string('ohsmsf_sign_14')->nullable();
            $table->string('ohsmsf_sign_15')->nullable();
            $table->unsignedBigInteger('approved_by')->nullable(); 
            $table->unsignedBigInteger('updated_by')->nullable();  
            $table->unsignedBigInteger('created_by')->nullable();  
            $table->timestamp('approved_date')->nullable(); 
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hse_o_h_s_m_s_forms');
    }
};
