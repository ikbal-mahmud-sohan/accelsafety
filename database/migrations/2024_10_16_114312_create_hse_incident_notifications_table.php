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
        Schema::create('hse_incident_notifications', function (Blueprint $table) {
            $table->id();
            $table->string('shift_incharge_facility_name');
            $table->string('shift_incharge_date_of_incident');
            $table->string('shift_incharge_time');
            $table->string('shift_incharge_shift');
            $table->string('shift_incharge_location_of_incident');
            $table->string('involved_party_name');
            $table->string('involved_party_department');
            $table->string('involved_party_job_title');
            $table->boolean('involved_party_property_damaged')->default(0);
            $table->string('involved_party_employee_id');
            $table->string('involved_party_age');
            $table->string('involved_party_mobile_no');
            $table->string('involved_party_property_name');
            $table->string('involved_party_adress');
            $table->string('involved_party_approximate_cost');
            $table->text('brief_description');
            $table->text('immediate_action_taken');
            $table->text('name_of_shift_in_charge');
            $table->text('name_of_shift_in_charge_mobile');
            $table->text('list_of_witness_name_1')->nullable();
            $table->text('list_of_witness_designation_1')->nullable();
            $table->text('list_of_witness_phone_number_1')->nullable();
            $table->text('list_of_witness_name_2')->nullable();
            $table->text('list_of_witness_designation_2')->nullable();
            $table->text('list_of_witness_phone_number_2')->nullable();
            $table->text('comment_if_any)')->nullable();
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
        Schema::dropIfExists('hse_incident_notifications');
    }
};
