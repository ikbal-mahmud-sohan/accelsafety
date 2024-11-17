<?php

namespace Database\Factories;

use App\Models\EmployeeInfo;
use App\Models\TrainingTopics;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrainingAttendence>
 */
class TrainingAttendenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'serial_number' => $this->faker->unique()->numerify('SN#####'),
            'training_topic_id' => TrainingTopics::factory()->create()->id,
            'iso_standard' => $this->faker->word,
            'venue' => $this->faker->city,
            'facilitator' => $this->faker->name,
            'training_date' => $this->faker->optional()->date(),
            'training_duration' => $this->faker->word,
            'emp_id' => EmployeeInfo::factory()->create()->id,
            'title' => $this->faker->word,
            'function' => $this->faker->word,
            'business' => $this->faker->company,
            'signature' => $this->faker->optional()->word,
        ];
    }
}
