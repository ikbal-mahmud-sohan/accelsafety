<?php

namespace Database\Factories;

use App\Models\EmployeeDepartment;
use App\Models\EmployeeDesignation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeInfo>
 */
class EmployeeInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'emp_id' => fake()->unique()->numerify('EMP###'), // Generates a unique employee ID like EMP001
            'emp_email' => fake()->email(),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'unit_name' => fake()->word(),
            'location' => fake()->city(),
            'name' =>fake()->name(),
            'designation' => EmployeeDesignation::factory()->create()->name,
            'department' => EmployeeDepartment::factory()->create()->name,
            'employee_type' =>fake()->name(),
        ];
    }
}
