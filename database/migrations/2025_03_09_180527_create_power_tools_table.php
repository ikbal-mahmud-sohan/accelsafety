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
        Schema::create('power_tools', function (Blueprint $table) {
            $table->id();
            $table->string('unit_name')->nullable();
            $table->string('tool_id_number')->unique();
            $table->string('tool_name')->nullable();
            $table->string('tool_type')->nullable();
            $table->string('tool_manufacturer')->nullable();
            $table->string('tool_last_calibration_date')->nullable();
            $table->string('tool_last_maintenance_date')->nullable();
            $table->string('tool_enlistment_date')->nullable();
            $table->string('tool_user')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('power_tools');
    }
};
