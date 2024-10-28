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
        Schema::create('isgec_backhoe_loaders', function (Blueprint $table) {
            $table->id();
            $table->string('project_name')->nullable();
            $table->string('project_code')->nullable();
            $table->string('checklist_no')->nullable();
            $table->string('date')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->boolean('isgec')->default(0);
            $table->boolean('hired')->default(0);
            $table->boolean('contractor')->default(0);
            for ($i = 1; $i <= 14; $i++) {
                $table->boolean("is_des_$i")->default(0);
                $table->string("des_remarks_$i")->nullable();
            }
            $table->boolean('is_fit')->default(0);
            $table->boolean('is_partially_fit')->default(0);
            $table->boolean('is_unfit')->default(0);
            $table->string('inspected_by_name')->nullable();
            $table->string('inspected_by_signature')->nullable();
            $table->string('inspected_by_date')->nullable();
            $table->string('reviewed_by_name')->nullable();
            $table->string('reviewed_by_signature')->nullable();
            $table->string('reviewed_by_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('isgec_backhoe_loaders');
    }
};


