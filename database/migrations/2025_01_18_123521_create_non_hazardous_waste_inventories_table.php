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
        Schema::create('non_hazardous_waste_inventories', function (Blueprint $table) {
            $table->id(); 
            $table->string('unit_name');
            $table->string('month');
            $table->string('date');
            $table->string('employee_name');
            $table->string('designation');
            $table->string('waste_name');
            $table->string('waste_type');
            $table->string('item_name');
            $table->string('unit');
            $table->decimal('amount_of_waste', 15, 2)->nullable();
            $table->json('attachement')->nullable(); 
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('non_hazardous_waste_inventories');
    }
};
