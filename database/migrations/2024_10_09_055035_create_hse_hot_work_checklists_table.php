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
        Schema::create('hse_hot_work_checklists', function (Blueprint $table) {
            $table->id();
            $table->string('location_of_work');
            $table->string('equipment_number');
            $table->string('purpose_of_work');
            $table->string('no_person_work');
            $table->string('name_fire_person');
            $table->string('supervisor_name')->nullable();
            $table->json('supervisor_signature')->nullable();
            $table->string('hw_fire_extinguishers')->nullable();
            $table->string('hw_equipment')->nullable();
            $table->string('hw_liquids_dust')->nullable();
            $table->string('hw_atmosphere')->nullable();
            $table->string('hw_surface_area')->nullable();
            $table->string('hw_floors')->nullable();
            $table->string('hw_surface_areas')->nullable();
            $table->string('hw_access')->nullable();
            $table->string('hw_uv')->nullable();
            $table->string('hw_enclosed_equipment')->nullable();
            $table->string('hw_containers')->nullable();
            $table->string('hw_coffee_lunch')->nullable();
            $table->string('hw_extinguishing_devices')->nullable();
            $table->string('hw_raising_alarm')->nullable();
            $table->string('hw_adjoining_areas')->nullable();
            $table->string('hw_monitored')->nullable();
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
        Schema::dropIfExists('hse_hot_work_checklists');
    }
};


