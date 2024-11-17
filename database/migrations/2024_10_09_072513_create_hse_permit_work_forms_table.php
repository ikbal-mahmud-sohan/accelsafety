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
        Schema::create('hse_permit_work_forms', function (Blueprint $table) {
            $table->id();
            $table->string('permit_no');
            $table->string('issue_date');
            $table->string('ptw_time');
            
            $table->string('ptw_from_dept_name');
            $table->string('ptw_to_dept_name');
            $table->string('ptw_work_agency');
            $table->string('ptw_description');

            $table->string('ptw_of_job');

            $table->string('ptw_job');
            $table->string('ptw_issuer');
            $table->json('ptw_lead_signature');
            $table->json('hazards')->nullable();
            $table->json('general_hazards')->nullable();
            $table->json('general_control')->nullable();
            $table->json('work_at_height_hazards')->nullable();
            $table->json('work_at_height_control')->nullable();
            $table->json('confined_space_hazards')->nullable();
            $table->json('confined_space_control')->nullable();
            $table->json('electrical_work_hazards')->nullable();
            $table->json('electrical_work_control')->nullable();
            $table->json('hot_work_hazards')->nullable();
            $table->json('hot_work_control')->nullable();
            $table->json('mechanical_work_hazards')->nullable();
            $table->json('mechanical_work_control')->nullable();
            $table->json('civil_work_hazards')->nullable();
            $table->json('civil_work_control')->nullable();
            $table->string('ppe_please')->nullable();
            $table->string('ppe_isolate')->nullable();
            $table->string('ppe_the')->nullable();
            $table->string('ppe_equipment')->nullable();
            $table->json('ppe_engineer_signature')->nullable();
            $table->json('ppe_lead_signature')->nullable();
            $table->string('ppe_receiver_name')->nullable();
            $table->json('ppe_receiver_signature')->nullable();
            $table->string('ppe_receiver_date')->nullable();
            $table->string('ack_name')->nullable();
            $table->json('ack_signature')->nullable();
            $table->string('ack_dept')->nullable();
            $table->string('ack_supervisor_name')->nullable();
            $table->json('ack_supervisor_signature')->nullable();
            $table->string('ack_supervisor_dept')->nullable();
            $table->json('ack_name_of_workers')->nullable();
            $table->string('ack_approval_name')->nullable();
            $table->json('ack_approval_signature')->nullable();
            $table->string('job_completion_date')->nullable();
            $table->string('job_completion_time')->nullable();
            $table->json('job_completion_signature')->nullable();


            $table->string('ptw_date_1')->nullable();
            $table->string('ptw_work_agency_1')->nullable();
            $table->string('ptw_receiver_1')->nullable();
            $table->string('ptw_location_In_Charge_1')->nullable();
            $table->string('ptw_work_after_6pm_1')->nullable();

            $table->string('ptw_date_2')->nullable();
            $table->string('ptw_work_agency_2')->nullable();
            $table->string('ptw_receiver_2')->nullable();
            $table->string('ptw_location_In_Charge_2')->nullable();
            $table->string('ptw_work_after_6pm_2')->nullable();

            $table->string('ptw_date_3')->nullable();
            $table->string('ptw_work_agency_3')->nullable();
            $table->string('ptw_receiver_3')->nullable();
            $table->string('ptw_location_In_Charge_3')->nullable();
            $table->string('ptw_work_after_6pm_3')->nullable();

            $table->string('ptw_date_4')->nullable();
            $table->string('ptw_work_agency_4')->nullable();
            $table->string('ptw_receiver_4')->nullable();
            $table->string('ptw_location_In_Charge_4')->nullable();
            $table->string('ptw_work_after_6pm_4')->nullable();
            
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
        Schema::dropIfExists('hse_permit_work_forms');
    }
};
