<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AccidentInvestigation>
 */
class AccidentInvestigationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Investigation details
            'investigation_name_1' => $this->faker->name,
            'investigation_designation_1' => $this->faker->jobTitle,
            'investigation_sign_1' => $this->faker->optional()->randomElement(['sign1.png', 'sign2.jpg']),

            'investigation_name_2' => $this->faker->name,
            'investigation_designation_2' => $this->faker->jobTitle,
            'investigation_sign_2' => $this->faker->optional()->randomElement(['sign3.png', 'sign4.jpg']),

            'investigation_name_3' => $this->faker->name,
            'investigation_designation_3' => $this->faker->jobTitle,
            'investigation_sign_3' => $this->faker->optional()->randomElement(['sign5.png', 'sign6.jpg']),

            'investigation_name_4' => $this->faker->name,
            'investigation_designation_4' => $this->faker->jobTitle,
            'investigation_sign_4' => $this->faker->optional()->randomElement(['sign7.png', 'sign8.jpg']),

            // Employee and accident information
            'type_of_employee' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract']),
            'type_of_accident' => $this->faker->randomElement(['Slip and Fall', 'Equipment Malfunction']),
            'nature_of_injury' => $this->faker->randomElement(['Sprain', 'Fracture', 'Burn']),
            'employee_name' => $this->faker->name,
            'employee_department' => $this->faker->randomElement(['Manufacturing', 'Engineering', 'HR']),
            'employee_id' => $this->faker->unique()->numerify('EMP#####'),

            // Accident details
            'accident_details' => $this->faker->paragraph,
            'taken_action' => $this->faker->sentence,

            // Checkboxes stored as JSON
            'unsafe_acts' => json_encode($this->faker->randomElements(['Not Wearing Safety Shoes', 'Running in Restricted Area'], 2)),
            'unsafe_conditions' => json_encode($this->faker->randomElements(['Wet Floor', 'No Warning Signs'], 2)),
            'management_deficiencies' => json_encode($this->faker->randomElements(['Lack of Safety Training', 'Insufficient Supervision'], 2)),

            // Corrective actions
            'root_cause_1' => $this->faker->sentence,
            'corrective_action_1' => $this->faker->sentence,
            'person_assigned_1' => $this->faker->name,
            'target_date_1' => $this->faker->date(),
            'complete_date_1' => $this->faker->date(),

            'root_cause_2' => $this->faker->sentence,
            'corrective_action_2' => $this->faker->sentence,
            'person_assigned_2' => $this->faker->name,
            'target_date_2' => $this->faker->date(),
            'complete_date_2' => $this->faker->date(),

            'root_cause_3' => $this->faker->sentence,
            'corrective_action_3' => $this->faker->sentence,
            'person_assigned_3' => $this->faker->name,
            'target_date_3' => $this->faker->date(),
            'complete_date_3' => $this->faker->date(),

            // Approval and review details
            'reviewed_by_department_name' => $this->faker->word,
            'reviewed_by_unit_name' => $this->faker->word,
            'approved_by_name' => $this->faker->name,

            'reviewed_by_department_signature' => $this->faker->optional()->randomElement(['dept_sign.png']),
            'reviewed_by_unit_signature' => $this->faker->optional()->randomElement(['unit_sign.png']),
            'approved_by_signature' => $this->faker->optional()->randomElement(['approved_sign.png']),

            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
