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
        Schema::create('hse_ladder_self_inspection_checklists', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_the_site')->nullable();
            $table->string('date')->nullable();
            $table->string('person_inspected')->nullable();
            $table->string('position')->nullable();
            for ($i = 1; $i <= 15; $i++) {
                $table->string("hse_ladder_des_$i")->nullable();
                $table->string("is_hse_ladder_des_$i")->nullable();
                $table->string("hse_ladder_des_remarks_$i")->nullable();
            }
            $table->unsignedBigInteger('approved_by')->nullable(); 
            $table->unsignedBigInteger('updated_by')->nullable();  
            $table->unsignedBigInteger('created_by')->nullable();  
            $table->timestamp('approved_date')->nullable(); 
            $table->timestamps();
            
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hse_ladder_self_inspection_checklists');
    }
};
