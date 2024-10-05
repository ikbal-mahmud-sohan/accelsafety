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
        Schema::create('hse_harness_checklists', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_contractor');
            $table->string('checklists_date');
            $table->string('report_no');
            $table->string('locations');
            $table->string('project_name');
            $table->string('harness_no');
            $table->string('date_of_receipt_on_site');
            $table->string('manufacturer');
            for ($i = 1; $i <= 9; $i++) {
                $table->json("harness_image_$i")->nullable();
                $table->string("harness_is_correct_$i")->nullable();
            }
            $table->string('remarks')->nullable();
            $table->string('contractors_representative_name')->nullable();
            $table->json('contractors_representative_signature')->nullable();
            $table->string('contractors_representative_aproved_date')->nullable();
            $table->string('bsrm_representative_name')->nullable();
            $table->json('bsrm_representative_signature')->nullable();
            $table->string('bsrm_representative_aproved_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hse_harness_checklists');
    }
};
