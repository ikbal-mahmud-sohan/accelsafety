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
        Schema::create('employee_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('emp_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('unit_name');
            $table->string('location');
            $table->string('designation');
            $table->string('department');
            $table->string('employee_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_infos');
    }
};

