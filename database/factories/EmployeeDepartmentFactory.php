<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employee_department>
 */
class EmployeeDepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departments = [
            'HR & IR',
            'Admin & Facilities',
            'HSE',
            'Security',
            'MML',
            'QCM',
            'SMS',
            'CCM',
            'Electrical',
            'Mechanical',
            'Finance & Account',
            'HR HSE Admin',
            'Plant Op.',
            'Maintenance',
        ];

        return [
            'name' => $this->faker->randomElement($departments),
        ];
    }
    
    public static function departmentNames(): array
    {
        return [
            'HR & IR',
            'Admin & Facilities',
            'HSE',
            'Security',
            'MML',
            'QCM',
            'SMS',
            'CCM',
            'Electrical',
            'Mechanical',
            'Finance & Account',
            'HR HSE Admin',
            'Plant Op.',
            'Maintenance',
        ];
    }
}
