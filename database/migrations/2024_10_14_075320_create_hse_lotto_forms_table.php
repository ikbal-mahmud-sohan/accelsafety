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
        Schema::create('hse_lotto_forms', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('date');
            $table->string('work_performed');
            $table->string('contact_person_name');
            $table->string('designation');
            $table->json('energy')->nullable();
            $table->boolean('lag_out_des1')->default(0);
            $table->boolean('lag_out_des2')->default(0);
            $table->boolean('lag_out_des3')->default(0);
            $table->boolean('lag_out_des4')->default(0);
            $table->boolean('lag_out_des5')->default(0);
            $table->boolean('lag_out_des6')->default(0);
            $table->boolean('lag_out_des7')->default(0);
            $table->boolean('lag_out_des8')->default(0);
            $table->boolean('lag_out_des9')->default(0);
            $table->boolean('lag_out_des10')->default(0);
            $table->string('lag_out_name')->nullable();
            $table->string('lag_out_designation')->nullable();
            $table->string('lag_out_date')->nullable();
            $table->string('tag_out_name')->nullable();
            $table->string('tag_out_designation')->nullable();
            $table->string('tag_out_date')->nullable();

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
        Schema::dropIfExists('hse_lotto_forms');
    }
};
