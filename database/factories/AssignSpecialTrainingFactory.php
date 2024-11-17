<?php

namespace Database\Factories;

use App\Models\EmployeeInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssignSpecialTraining>
 */
class AssignSpecialTrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => EmployeeInfo::factory(),
            'special_training' => $this->faker->word,
            'status' => $this->faker->boolean,
        ];
    }
}
