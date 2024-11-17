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
        Schema::create('hse_lifting_equipments', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('name_of_equipment');
            $table->string('specification');
            $table->string('capacity_ton');
            $table->string('safe_working_load');
            $table->string('last_inspection_done_on');
            $table->string('last_load_done_on');
            $table->string('agency');
            $table->boolean('status')->default(0); 
            $table->string('remarks')->nullable();
            
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
        Schema::dropIfExists('hse_lifting_equipments');
    }
};
