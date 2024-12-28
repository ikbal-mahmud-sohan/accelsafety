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
        Schema::create('accident_investigations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('accident_id')->constrained('accidents')->onDelete('cascade');
            for ($i = 1; $i <= 4; $i++) {
                $table->string("investigation_name_$i")->nullable();
                $table->string("investigation_designation_$i")->nullable();
                $table->json("investigation_sign_$i")->nullable();
            }
            $table->string('name_of_the_factory')->nullable();
            $table->string('date_of_accident')->nullable();
            $table->string('accident_time')->nullable();
            $table->string('accident_shift')->nullable();
            $table->string('effected_body_part')->nullable();
            $table->json('type_of_employee')->nullable();
            $table->json('type_of_accident')->nullable();
            $table->json('nature_of_injury')->nullable();
            // $table->string('employee_name')->nullable();
            $table->foreignId('employee_id')->nullable()->constrained('employee_infos')->onDelete('cascade');
            $table->string('employee_department')->nullable();
            $table->string('emp_id')->nullable();
            $table->string('employee_job_title')->nullable();
            $table->string('employee_age')->nullable();
            $table->string('employee_phone_no')->nullable();
            $table->string('employee_address')->nullable();
            $table->string('employee_experience')->nullable();
            $table->string('area_in_charge_name')->nullable();
            $table->string('area_in_charge_phone_no')->nullable();
            $table->string('witness_name')->nullable();
            $table->string('witness_phone_no')->nullable();
            $table->text('accident_exact_location')->nullable();
            $table->text('accident_details')->nullable();
            $table->text('accident_initiatives')->nullable();
            $table->text('taken_action')->nullable();
            $table->json('unsafe_acts')->nullable();
            $table->json('unsafe_conditions')->nullable();
            $table->json('management_deficiencies')->nullable();
            for ($i = 1; $i <= 3; $i++) {
                $table->string("root_cause_$i")->nullable();
                $table->string("corrective_action_$i")->nullable();
                $table->string("person_assigned_$i")->nullable();
                $table->date("target_date_$i")->nullable();
                $table->date("complete_date_$i")->nullable();
            }
            $table->string('reviewed_by_department_name')->nullable();
            $table->string('reviewed_by_unit_name')->nullable();
            $table->string('approved_by_name')->nullable();
            $table->json('reviewed_by_department_signature')->nullable();
            $table->json('reviewed_by_unit_signature')->nullable();
            $table->json('approved_by_signature')->nullable();
            $table->string("unsafe_acts_title")->nullable();
            $table->string("unsafe_conditions_title")->nullable();
            $table->string("management_deficiency_title")->nullable();
            $table->string("root_cause_des1")->nullable();
            $table->string("root_cause_des2")->nullable();
            $table->string("root_cause_des3")->nullable();
            for ($i = 1; $i <= 5; $i++) {
                $table->text("unsafe_acts_why_therefore_$i")->nullable();
                $table->text("unsafe_conditions_why_therefore_$i")->nullable();
                $table->text("management_deficiency_why_therefore_$i")->nullable();
            }
            $table->enum('status', ['Assigned', 'Reviewed', 'Approved', 'change_request'])->default('Assigned');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accident_investigations');
    }
};
