<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HseVehicleSafety>
 */
class HseVehicleSafetyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'inspection_date' => '2024-09-01',
            'mileage' => '10000',
            'vehicle_id_no' => 'XYZ123456',
            'vehicle_type' => 'Truck',
            'maker' => 'Toyota',
            'place_of_inspection' => 'Dhaka',
            'inspector' => 'John Doe',
            'date_of_last_inspection' => '2024-06-15',
            'tires' => 'Good',
            'tires_satisfactory' => 'yes',
            'foot_brake' => 'Functional',
            'foot_brake_satisfactory' => 'yes',
            'hand_brake' => 'Functional',
            'hand_brake_satisfactory' => 'yes',
            'lights' => 'Operational',
            'lights_satisfactory' => 'yes',
            'turn_indicators' => 'Operational',
            'turn_indicators_satisfactory' => 'yes',
            'horn' => 'Working',
            'horn_satisfactory' => 'yes',
            'window_glasses' => 'Clean',
            'window_glasses_satisfactory' => 'yes',
            'engine_oil_level' => 'Full',
            'engine_oil_level_satisfactory' => 'yes',
            'brake_oil_level' => 'Full',
            'brake_oil_level_satisfactory' => 'yes',
            'hydraulic_oil_level' => 'Full',
            'hydraulic_oil_level_satisfactory' => 'yes',
            'engine_coolant_level' => 'Normal',
            'engine_coolant_level_satisfactory' => 'yes',
            'portable_fire_extinguisher' => 'Available',
            'portable_fire_extinguisher_satisfactory' => 'yes',
            'breakdown_kit' => 'Available',
            'breakdown_kit_satisfactory' => 'yes',
            'first_aid_kit' => 'Available',
            'first_aid_kit_satisfactory' => 'yes',
            'legal_documents' => 'Valid',
            'legal_documents_satisfactory' => 'yes',
            'fuel' => 'Full',
            'fuel_satisfactory' => 'yes',
            'signature_of_inspector' => 'John Doe',
            'inspector_name' => 'John Doe',
            'inspector_designation' => 'Safety Officer',
            'signature_of_drivers' => 'Jane Smith'
        ];
    }
}




           