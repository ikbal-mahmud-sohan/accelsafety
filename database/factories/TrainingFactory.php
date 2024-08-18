<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Training>
 */
class TrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'serial_number' => $this->faker->unique()->numberBetween(1000, 9999), // Generating a unique serial number
            'employee_name' => $this->faker->name(), // Random employee name
            'designation' => $this->faker->jobTitle(), // Random job title as designation
            'department' => $this->faker->randomElement(['HR', 'Engineering', 'Finance', 'Sales']), // Example departments
            'special_training_need' => $this->faker->sentence(), // Random sentence for training need
            'employee_type' => $this->faker->randomElement(['full-time', 'part-time', 'contract']), // Example employee types
            'status' => $this->faker->boolean(), // Random boolean for status

            // First training
            'first_training_topic' => $this->faker->word(), // Random word for training topic
            'first_training_date' => $this->faker->optional()->date(), // Random date or null
            'first_training_status' => $this->faker->boolean(), // Random boolean for training status

            // Second training
            'second_training_topic' => $this->faker->optional()->word(), // Random word or null
            'second_training_date' => $this->faker->optional()->date(), // Random date or null
            'second_training_status' => $this->faker->boolean(), // Random boolean for status

            // Third training
            'third_training_topic' => $this->faker->optional()->word(), // Random word or null
            'third_training_date' => $this->faker->optional()->date(), // Random date or null
            'third_training_status' => $this->faker->boolean(), // Random boolean for status

            // Fourth training
            'fourth_training_topic' => $this->faker->optional()->word(), // Random word or null
            'fourth_training_date' => $this->faker->optional()->date(), // Random date or null
            'fourth_training_status' => $this->faker->boolean(), // Random boolean for status

            // Fifth training
            'fifth_training_topic' => $this->faker->optional()->word(), // Random word or null
            'fifth_training_date' => $this->faker->optional()->date(), // Random date or null
            'fifth_training_status' => $this->faker->boolean(), // Random boolean for status

            // Additional resources
            'additional_resources' => $this->faker->optional()->sentence(), // Random sentence or null
        ];
    }
}
