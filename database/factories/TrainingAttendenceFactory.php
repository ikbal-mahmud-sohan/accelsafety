<?php

namespace Database\Factories;

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
            'training_topic' => $this->faker->word,
            'iso_standard' => $this->faker->word,
            'venue' => $this->faker->city,
            'facilitator' => $this->faker->name,
            'training_date' => $this->faker->optional()->date(),
            'training_duration' => $this->faker->word,
            'name' => $this->faker->name,
            'title' => $this->faker->word,
            'function' => $this->faker->word,
            'business' => $this->faker->company,
            'signature' => $this->faker->optional()->word,
        ];
    }
}
