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
        Schema::create('energy_records', function (Blueprint $table) {
            $table->id();
            $table->string('unit_name');
            $table->string('month');
            $table->string('date');
            $table->string('employee_name');
            $table->string('designation');
            $table->string('item_name');
            $table->string('item_code');
            $table->string('type');
            $table->string('energy_used');  // Adjust precision if needed
            $table->decimal('input_numeric', 15, 2); // Adjust precision if needed
            $table->json('attachement')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('energy_records');
    }
};
