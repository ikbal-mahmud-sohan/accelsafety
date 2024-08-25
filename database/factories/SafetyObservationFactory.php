<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SafetyObservation>
 */
class SafetyObservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'auditor' => $this->faker->name,
            'plant_name' => $this->faker->company,
            'location' => $this->faker->city,
            'audit_date' => $this->faker->date,
            'category' => $this->faker->word,
            'problem_description' => $this->faker->paragraph,
            'problematic_progressive_images' => $this->faker->optional()->randomElements(['image1.jpg', 'image2.png', 'image3.gif']),
            'root_cause' => $this->faker->paragraph,
            'resp_department' => $this->faker->word,
            'owner_department' => $this->faker->word,
            'improvement_actions' => $this->faker->paragraph,
            'due_date' => $this->faker->date,
            'status' => $this->faker->boolean,
            'priority_type' => $this->faker->word,
            'remarks' => $this->faker->optional()->paragraph,
            'corrective_image' => $this->faker->optional()->randomElements(['image1.jpg', 'image2.png', 'image3.gif']),
            'importance_level' => $this->faker->optional()->word,
            'work_accomplished_by' => $this->faker->optional()->name,
        ];
    }
}
