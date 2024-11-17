<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrainingTopics>
 */
class TrainingTopicsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $topics = [
            'Accident /Incident Investigation',
            'Chemical Management System',
            'Emergency Preparedness & Response',
            'Electrical Work Safety',
            'HIRA',
            'Hot Work Safety',
            'HSE Handbook',
            'Material Handling',
            'Melting Shop Safety',
            'Preparing SOP & HIRA',
            'Introduction of Fire Fighting Equipment and Operating Procedure',
            'First Aid',
            'Mechanical Work Safety',
            'Machine Guarding',
            'HSE SOP (PTW & LOTO)',
            'Scrap & Goods Movement',
            'HSE SOP & Relevent Guidelines & PTW',
            'Fire Fighter & Rescue Training',
            'Near Miss Reporting',
            'IOSH Managing Safely',
            'Safety Violation and Progressive Consequence Management',
        ];

        return [
            'name' => $this->faker->randomElement($topics),
            'descriptions' => $this->faker->sentence(),
        ];
    }

    /**
     * Get all training topics names.
     *
     * @return array<string>
     */
    public static function topicNames(): array
    {
        return [
            'Accident /Incident Investigation',
            'Chemical Management System',
            'Emergency Preparedness & Response',
            'Electrical Work Safety',
            'HIRA',
            'Hot Work Safety',
            'HSE Handbook',
            'Material Handling',
            'Melting Shop Safety',
            'Preparing SOP & HIRA',
            'Introduction of Fire Fighting Equipment and Operating Procedure',
            'First Aid',
            'Mechanical Work Safety',
            'Machine Guarding',
            'HSE SOP (PTW & LOTO)',
            'Scrap & Goods Movement',
            'HSE SOP & Relevent Guidelines & PTW',
            'Fire Fighter & Rescue Training',
            'Near Miss Reporting',
            'IOSH Managing Safely',
            'Safety Violation and Progressive Consequence Management',
        ];
    }
}
