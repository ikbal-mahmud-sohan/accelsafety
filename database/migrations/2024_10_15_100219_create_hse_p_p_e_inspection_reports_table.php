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
        Schema::create('hse_p_p_e_inspection_reports', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('time');
            $table->string('area');
            $table->string('locations');
            $table->string('mandetory_ppe');
            $table->string('employee_type')->nullable();
            $table->string('total_employee')->nullable();
            $table->string('helmet_issued')->nullable();
            $table->string('helmet_in_place')->nullable();
            $table->string('helmet_damaged')->nullable();   
            $table->string('shoe_issued')->nullable();
            $table->string('shoe_in_place')->nullable();
            $table->string('shoe_damaged')->nullable();
            $table->string('gloves_issued')->nullable();
            $table->string('gloves_in_place')->nullable();
            $table->string('gloves_damaged')->nullable();
            $table->string('mask_issued')->nullable();
            $table->string('mask_in_place')->nullable();
            $table->string('mask_damaged')->nullable();
            $table->string('googles_issued')->nullable();
            $table->string('googles_in_place')->nullable();
            $table->string('googles_damaged')->nullable();
            $table->string('face_shield_issued')->nullable();
            $table->string('face_shield_in_place')->nullable();
            $table->string('face_shield_damaged')->nullable();
            $table->string('ear_plug_issued')->nullable();
            $table->string('ear_plug_in_place')->nullable();
            $table->string('ear_plug_damaged')->nullable();
            $table->string('full_body_issued')->nullable();
            $table->string('full_body_in_place')->nullable();
            $table->string('full_body_damaged')->nullable();
            $table->string('action_taken_damaged_ppe')->nullable();
            $table->string('checked_by')->nullable();
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
        Schema::dropIfExists('hse_p_p_e_inspection_reports');
    }
};
