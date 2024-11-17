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
        Schema::create('hse_entry_confined_checklists', function (Blueprint $table) {
            $table->id();
            $table->text('confined_descriptions')->nullable();
            $table->string('ptw_no')->nullable();
            $table->string('hazards_introduced')->nullable();
            $table->string('authorized_name')->nullable();
            $table->string('authorized_contact_no')->nullable();
            $table->string('safety_attendant_name')->nullable();
            $table->string('safety_attendant_contact_no')->nullable();
            $table->boolean('hazards_stf')->default(0); 
            $table->boolean('hazards_fem')->default(0); 
            $table->boolean('hazards_ppvf')->default(0); 
            $table->boolean('hazards_ppuol')->default(0); 
            $table->boolean('hazards_ptg')->default(0); 
            $table->boolean('hazards_ppah')->default(0); 
            $table->string('electrical_hazards')->nullable();
            $table->string('mechanical_hazards')->nullable();
            $table->string('temperature_extremes')->nullable();
            $table->string('others_specify')->nullable();
            $table->boolean('energy_isolation_required')->default(0);
            $table->boolean('energy_isolation_completed')->default(0);
            $table->boolean('lines_broken_required')->default(0);
            $table->boolean('lines_broken_completed')->default(0);
            $table->boolean('purging_flushing_required')->default(0);
            $table->boolean('purging_flushing_completed')->default(0);
            $table->boolean('space_ventilation_required')->default(0);
            $table->boolean('space_ventilation_completed')->default(0);
            $table->boolean('secure_area_required')->default(0);
            $table->boolean('secure_area_completed')->default(0);
            $table->boolean('GFCI_protected_required')->default(0);
            $table->boolean('GFCI_protected_completed')->default(0);
            $table->boolean('trailing_ropes_required')->default(0);
            $table->boolean('trailing_ropes_completed')->default(0);
            $table->boolean('retrieval_tripod_required')->default(0);
            $table->boolean('retrieval_tripod_completed')->default(0);
            $table->boolean('lifelines_secured_required')->default(0);
            $table->boolean('lifelines_secured_completed')->default(0);
            $table->boolean('exit_required')->default(0);
            $table->boolean('exit_completed')->default(0);
            $table->boolean('fire_extinguisher_required')->default(0);
            $table->boolean('fire_extinguisher_completed')->default(0);
            $table->boolean('special_lighting_required')->default(0);
            $table->boolean('special_lighting_completed')->default(0);
            $table->boolean('personal_protective_required')->default(0);
            $table->boolean('personal_protective_completed')->default(0);
            $table->boolean('means_communication_required')->default(0);
            $table->boolean('means_communication_completed')->default(0);
            $table->string('other_name')->nullable();
            $table->boolean('other_completed')->default(0);
            $table->string('indicate_isolated')->nullable();
            $table->string('PPE_required_above')->nullable();
            $table->string('communication_rescue')->nullable();
            $table->string('communication_entrant')->nullable();
            $table->string('percent_oxygen')->nullable();
            $table->string('percent_lel')->nullable();
            $table->string('carbon_monoxide')->nullable();
            $table->string('hydrogen_sulfide')->nullable();
            $table->string('air_monitoring_remarks')->nullable();
            $table->string('gas_equipment_name')->nullable();
            $table->string('gas_model')->nullable();
            $table->string('gas_id_no')->nullable();
            $table->string('gas_date_calibrated')->nullable();
            $table->unsignedBigInteger('approved_by')->nullable(); 
            $table->unsignedBigInteger('updated_by')->nullable();  
            $table->unsignedBigInteger('created_by')->nullable();  
            $table->timestamp('approved_date')->nullable(); 
            
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hse_entry_confined_checklists');
    }
};
