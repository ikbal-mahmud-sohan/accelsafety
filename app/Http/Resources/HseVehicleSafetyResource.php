<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseVehicleSafetyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'inspection_date' => $this->inspection_date,
            'mileage' => $this->mileage,
            'vehicle_id_no' => $this->vehicle_id_no,
            'vehicle_type' => $this->vehicle_type,
            'maker' => $this->maker,
            'place_of_inspection' => $this->place_of_inspection,
            'inspector' => $this->inspector,
            'date_of_last_inspection' => $this->date_of_last_inspection,
            'tires' => $this->tires,
            'tires_satisfactory' => $this->tires_satisfactory,
            'tires_unsatisfactory' => $this->tires_unsatisfactory,
            'foot_brake' => $this->foot_brake,
            'foot_brake_satisfactory' => $this->foot_brake_satisfactory,
            'foot_brake_unsatisfactory' => $this->foot_brake_unsatisfactory,
            'hand_brake' => $this->hand_brake,
            'hand_brake_satisfactory' => $this->hand_brake_satisfactory,
            'hand_brake_unsatisfactory' => $this->hand_brake_unsatisfactory,
            'lights' => $this->lights,
            'lights_satisfactory' => $this->lights_satisfactory,
            'lights_unsatisfactory' => $this->lights_unsatisfactory,
            'turn_indicators' => $this->turn_indicators,
            'turn_indicators_satisfactory' => $this->turn_indicators_satisfactory,
            'turn_indicators_unsatisfactory' => $this->turn_indicators_unsatisfactory,
            'horn' => $this->horn,
            'horn_satisfactory' => $this->horn_satisfactory,
            'horn_unsatisfactory' => $this->horn_unsatisfactory,
            'window_glasses' => $this->window_glasses,
            'window_glasses_satisfactory' => $this->window_glasses_satisfactory,
            'window_glasses_unsatisfactory' => $this->window_glasses_unsatisfactory,
            'engine_oil_level' => $this->engine_oil_level,
            'engine_oil_level_satisfactory' => $this->engine_oil_level_satisfactory,
            'engine_oil_level_unsatisfactory' => $this->engine_oil_level_unsatisfactory,
            'brake_oil_level' => $this->brake_oil_level,
            'brake_oil_level_satisfactory' => $this->brake_oil_level_satisfactory,
            'brake_oil_level_unsatisfactory' => $this->brake_oil_level_unsatisfactory,
            'hydraulic_oil_level' => $this->hydraulic_oil_level,
            'hydraulic_oil_level_satisfactory' => $this->hydraulic_oil_level_satisfactory,
            'hydraulic_oil_level_unsatisfactory' => $this->hydraulic_oil_level_unsatisfactory,
            'engine_coolant_level' => $this->engine_coolant_level,
            'engine_coolant_level_satisfactory' => $this->engine_coolant_level_satisfactory,
            'engine_coolant_level_unsatisfactory' => $this->engine_coolant_level_unsatisfactory,
            'portable_fire_extinguisher' => $this->portable_fire_extinguisher,
            'portable_fire_extinguisher_satisfactory' => $this->portable_fire_extinguisher_satisfactory,
            'portable_fire_extinguisher_unsatisfactory' => $this->portable_fire_extinguisher_unsatisfactory,
            'breakdown_kit' => $this->breakdown_kit,
            'breakdown_kit_satisfactory' => $this->breakdown_kit_satisfactory,
            'breakdown_kit_unsatisfactory' => $this->breakdown_kit_unsatisfactory,
            'first_aid_kit' => $this->first_aid_kit,
            'first_aid_kit_satisfactory' => $this->first_aid_kit_satisfactory,
            'first_aid_kit_unsatisfactory' => $this->first_aid_kit_unsatisfactory,
            'legal_documents' => $this->legal_documents,
            'legal_documents_satisfactory' => $this->legal_documents_satisfactory,
            'legal_documents_unsatisfactory' => $this->legal_documents_unsatisfactory,
            'fuel' => $this->fuel,
            'fuel_satisfactory' => $this->fuel_satisfactory,
            'fuel_unsatisfactory' => $this->fuel_unsatisfactory,
            'signature_of_inspector' => $this->signature_of_inspector,
            'inspector_name' => $this->inspector_name,
            'inspector_designation' => $this->inspector_designation,
            'signature_of_drivers' => $this->signature_of_drivers,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
