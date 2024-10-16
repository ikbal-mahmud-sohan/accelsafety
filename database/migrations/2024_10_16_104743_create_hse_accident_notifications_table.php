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
        Schema::create('hse_accident_notifications', function (Blueprint $table) {
            $table->id();
            $table->string('plant_name')->nullable();
            $table->string('date_of_accident')->nullable();
            $table->string('shift')->nullable();
            $table->string('location_of_accident')->nullable();
            $table->string('pn_time')->nullable();
            $table->string('no_of_people_injured')->nullable();
            $table->json('nature_of_accident')->nullable();
            $table->string('injured_party_name')->nullable();
            $table->string('injured_party_address')->nullable();
            $table->string('injured_party_job_title')->nullable();
            $table->string('injured_party_mobile_no')->nullable();
            $table->json('injured_party_victim_type')->nullable();
            $table->string('injured_party_effected_body')->nullable();
            $table->string('injured_party_department')->nullable();
            $table->string('injured_party_age')->nullable();
            $table->json('injured_party_type_Injury')->nullable();
            $table->text('brief_description_of_incident')->nullable();
            $table->text('action_first_Aid_hospitalization')->nullable();
            $table->string('name_of_shift_in_charge')->nullable();
            $table->string('injured_party_designation')->nullable();
            $table->string('injured_party_mobile')->nullable();
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
        Schema::dropIfExists('hse_accident_notifications');
    }
};









