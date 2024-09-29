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
        Schema::create('hse_vehicle_safeties', function (Blueprint $table) {
            $table->id();
            $table->string('inspection_date');
            $table->string('mileage');
            $table->string('vehicle_id_no');
            $table->string('vehicle_type');
            $table->string('maker');
            $table->string('place_of_inspection');
            $table->string('inspector');
            $table->string('date_of_last_inspection');
            $table->string('tires')->nullable();
            $table->string('tires_satisfactory')->nullable();
            $table->string('tires_unsatisfactory')->nullable();
            $table->string('foot_brake')->nullable();
            $table->string('foot_brake_satisfactory')->nullable();
            $table->string('foot_brake_unsatisfactory')->nullable();
            $table->string('hand_brake')->nullable();
            $table->string('hand_brake_satisfactory')->nullable();
            $table->string('hand_brake_unsatisfactory')->nullable();
            $table->string('lights')->nullable();
            $table->string('lights_satisfactory')->nullable();
            $table->string('lights_unsatisfactory')->nullable();
            $table->string('turn_indicators')->nullable();
            $table->string('turn_indicators_satisfactory')->nullable();
            $table->string('turn_indicators_unsatisfactory')->nullable();
            $table->string('horn')->nullable();
            $table->string('horn_satisfactory')->nullable();
            $table->string('horn_unsatisfactory')->nullable();
            $table->string('window_glasses')->nullable();
            $table->string('window_glasses_satisfactory')->nullable();
            $table->string('window_glasses_unsatisfactory')->nullable();
            $table->string('engine_oil_level')->nullable();
            $table->string('engine_oil_level_satisfactory')->nullable();
            $table->string('engine_oil_level_unsatisfactory')->nullable();
            $table->string('brake_oil_level')->nullable();
            $table->string('brake_oil_level_satisfactory')->nullable();
            $table->string('brake_oil_level_unsatisfactory')->nullable();
            $table->string('hydraulic_oil_level')->nullable();
            $table->string('hydraulic_oil_level_satisfactory')->nullable();
            $table->string('hydraulic_oil_level_unsatisfactory')->nullable();
            $table->string('engine_coolant_level')->nullable();
            $table->string('engine_coolant_level_satisfactory')->nullable();
            $table->string('engine_coolant_level_unsatisfactory')->nullable();
            $table->string('portable_fire_extinguisher')->nullable();
            $table->string('portable_fire_extinguisher_satisfactory')->nullable();
            $table->string('portable_fire_extinguisher_unsatisfactory')->nullable();
            $table->string('breakdown_kit')->nullable();
            $table->string('breakdown_kit_satisfactory')->nullable();
            $table->string('breakdown_kit_unsatisfactory')->nullable();
            $table->string('first_aid_kit')->nullable();
            $table->string('first_aid_kit_satisfactory')->nullable();
            $table->string('first_aid_kit_unsatisfactory')->nullable();
            $table->string('legal_documents')->nullable();
            $table->string('legal_documents_satisfactory')->nullable();
            $table->string('legal_documents_unsatisfactory')->nullable();
            $table->string('fuel')->nullable();
            $table->string('fuel_satisfactory')->nullable();
            $table->string('fuel_unsatisfactory')->nullable();
            $table->string('signature_of_inspector')->nullable(); 
            $table->string('inspector_name')->nullable(); 
            $table->string('inspector_designation')->nullable();  
            $table->string('signature_of_drivers')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hse_vehicle_safeties');
    }
};
