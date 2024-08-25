<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accident>
 */
class AccidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'month' => $this->faker->monthName,
            'date' => $this->faker->date,
            'name' => $this->faker->name,
            'designation' => $this->faker->jobTitle,
            'supervisor' => $this->faker->name,
            'department' => $this->faker->word,
            'type_of_accident' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'zone_location' => $this->faker->word,
            'precise_location' => $this->faker->word,
            'injury_type' => $this->faker->word,
            'affected_body_parts' => $this->faker->word,
            'property_damaged' => $this->faker->boolean,
            'root_cause' => $this->faker->paragraph,
            'action' => $this->faker->paragraph,
            'days_lost' => $this->faker->numberBetween(0, 30),
            'remarks' => $this->faker->optional()->paragraph,
            'type_of_victim_employee' => $this->faker->word,
            'responsible_name' => $this->faker->name,
            'deadline' => $this->faker->date,
            'status' => $this->faker->boolean,
            'verified_image' => $this->faker->optional()->randomElements(['image1.jpg', 'image2.png', 'image3.gif']),
        ];
    }
}
