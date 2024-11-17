<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employee_designation>
 */
class EmployeeDesignationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $designation = [
                'Executive Accounts',
                'Senior Executive Accounts',
                'Senior Manager HR, HSE & Admin',
                'Peon (Garde NM 01)',
                'Assistant Executive Facilities Maintenance',
                'Assistant Manager Admin & Facilities',
                'Senior Executive Facilities Services',
                'Assistant Executive IT',
                'Medical Assistant (Grade NM 02)',
                'Medical Assistant (Grade NM 04)',
                'Executive Health, Safety & Environment',
                'Senior Executive HR, IR & Compliance',
                'Assistant Executive HR, IR & Compliance',
                'Security Guard (Grade NM 01)',
                'Security Guard (Grade NM 02)',
                'Assistant Executive Security',
                'Assistant Manager Security',
                'Executive Security',
                'Senior Manager Maintenance',
                'Junior Engineer Electrical (Grade NM 04)',
                'Junior Engineer Electrical (Grade NM 06)',
                'Technician Electrical (Grade NM 02)',
                'Technician Electrical (Grade NM 03)',
                'Junior Engineer Electrical (Grade NM 05)',
                'Technician Generator Operation (Grade NM 04)',
                'Assistant Engineer Electrical',
                'Assistant Manager Electrical',
                'Manager Electrical',
                'Engineer Electrical',
                'Senior Engineer Electrical',
                'Engineer Electrical',
                'Assistant Manager Mechanical',
                'Engineer Mechanical',
                'Senior Engineer Mechanical',
                'Junior Engineer Mechanical (Grade NM 04)',
                'Junior Engineer Mechanical (Grade NM 05)',
                'Junior Engineer Mechanical (Grade NM 07)',
                'Technician Mechanical (Grade NM 06)',
        ];

        return [
            'name' => $this->faker->randomElement($designation),
        ];
    }
    public static function designationNames(): array
    {
        return [
                'Executive Accounts',
                'Senior Executive Accounts',
                'Senior Manager HR, HSE & Admin',
                'Peon (Garde NM 01)',
                'Assistant Executive Facilities Maintenance',
                'Assistant Manager Admin & Facilities',
                'Senior Executive Facilities Services',
                'Assistant Executive IT',
                'Medical Assistant (Grade NM 02)',
                'Medical Assistant (Grade NM 04)',
                'Executive Health, Safety & Environment',
                'Senior Executive HR, IR & Compliance',
                'Assistant Executive HR, IR & Compliance',
                'Security Guard (Grade NM 01)',
                'Security Guard (Grade NM 02)',
                'Assistant Executive Security',
                'Assistant Manager Security',
                'Executive Security',
                'Senior Manager Maintenance',
                'Junior Engineer Electrical (Grade NM 04)',
                'Junior Engineer Electrical (Grade NM 06)',
                'Technician Electrical (Grade NM 02)',
                'Technician Electrical (Grade NM 03)',
                'Junior Engineer Electrical (Grade NM 05)',
                'Technician Generator Operation (Grade NM 04)',
                'Assistant Engineer Electrical',
                'Assistant Manager Electrical',
                'Manager Electrical',
                'Engineer Electrical',
                'Senior Engineer Electrical',
                'Engineer Electrical',
                'Assistant Manager Mechanical',
                'Engineer Mechanical',
                'Senior Engineer Mechanical',
                'Junior Engineer Mechanical (Grade NM 04)',
                'Junior Engineer Mechanical (Grade NM 05)',
                'Junior Engineer Mechanical (Grade NM 07)',
                'Technician Mechanical (Grade NM 06)',
        ];
    }
}
