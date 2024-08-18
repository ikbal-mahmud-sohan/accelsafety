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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number');
            $table->string('employee_name');
            $table->string('designation');
            $table->string('department');
            $table->string('special_training_need');
            $table->string('employee_type');
            $table->boolean('status')->default(0);  

            // First training
            $table->string('first_training_topic')->nullable();
            $table->date('first_training_date')->nullable();
            $table->boolean('first_training_status')->default(0);

            // Second training
            $table->string('second_training_topic')->nullable();
            $table->date('second_training_date')->nullable();
            $table->boolean('second_training_status')->default(0);

            // Third training
            $table->string('third_training_topic')->nullable();
            $table->date('third_training_date')->nullable();
            $table->boolean('third_training_status')->default(0);

            // Fourth training
            $table->string('fourth_training_topic')->nullable();
            $table->date('fourth_training_date')->nullable();
            $table->boolean('fourth_training_status')->default(0);

            // Fifth training
            $table->string('fifth_training_topic')->nullable();
            $table->date('fifth_training_date')->nullable();
            $table->boolean('fifth_training_status')->default(0);

            // Additional Resources
            $table->string('additional_resources')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
