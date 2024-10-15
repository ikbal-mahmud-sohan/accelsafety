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
        Schema::create('hse_first_aid_registers', function (Blueprint $table) {
            $table->id();
            $table->string('first_aid_box_no');
            $table->string('authorized_dept');
            $table->string('authorized_person');

            for ($i = 1; $i <= 15; $i++) {
                $table->string("faid_con_sl_no_$i")->nullable();
                $table->string("faid_con_items_$i")->nullable();
                $table->json("faid_con_quantity_$i")->nullable();
                $table->json("faid_con_item_condition_$i")->nullable();
                $table->json("faid_con_remarks_$i")->nullable();
            }

            for ($i = 1; $i <= 15; $i++) {
                $table->string("first_aid_box_no_$i")->nullable();
                $table->string("location_$i")->nullable();
                $table->json("authorized_dep_$i")->nullable();
                $table->json("authorized_person_$i")->nullable();
                $table->json("contact_no_$i")->nullable();
                $table->json("image_first_aider_$i")->nullable();
            }

            for ($i = 1; $i <= 10; $i++) {
                $table->string("inspection_checklist_$i")->nullable();
            }
            $table->string("name_of_the_inspector")->nullable();
            $table->string("designation")->nullable();
            $table->json("signature_of_the_inspector")->nullable();
            $table->string("date_of_inspection")->nullable();
             
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
        Schema::dropIfExists('hse_first_aid_registers');
    }
};
