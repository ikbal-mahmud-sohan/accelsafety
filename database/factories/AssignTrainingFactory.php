<?php

namespace Database\Factories;

use App\Models\EmployeeInfo;
use App\Models\TrainingTopics;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssignTraining>
 */
class AssignTrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => EmployeeInfo::factory(), // Generate a random EmployeeInfo ID
            'training_topic_id' => TrainingTopics::factory(), // Generate a random TrainingTopic ID
            'status' => $this->faker->boolean, // Random boolean value for status
            'date' => $this->faker->date, // Random date
        ];
    }
}
