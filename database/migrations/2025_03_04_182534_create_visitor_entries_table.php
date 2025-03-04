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
        Schema::create('visitor_entries', function (Blueprint $table) {
            $table->id();
            $table->string('unit_name')->nullable();
            $table->string('visitor_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('whom_to_meet')->nullable();
            $table->text('visit_purpose')->nullable();
            $table->string('temp_id_card_no')->nullable();
            $table->timestamp('time_of_entry')->nullable();
            $table->timestamp('time_of_exit')->nullable();
            $table->string('signature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_entries');
    }
};
