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
            for ($i = 1; $i <= 4; $i++) {
                $table->string("investigation_name_$i")->nullable();
                $table->string("investigation_designation_$i")->nullable();
                $table->json("investigation_sign_$i")->nullable();
            }
            $table->json('type_of_employee')->nullable();
            $table->json('type_of_accident')->nullable();
            $table->json('nature_of_injury')->nullable();
            // $table->string('employee_name')->nullable();
            $table->foreignId('employee_id')->constrained('employee_infos')->onDelete('cascade');
            $table->string('employee_department')->nullable();
            $table->string('emp_id')->nullable();
            $table->text('accident_details')->nullable();
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
