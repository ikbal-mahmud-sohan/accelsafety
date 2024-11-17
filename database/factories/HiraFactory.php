<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hira>
 */
class HiraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'process' => $this->faker->word(),
            'activity' => $this->faker->sentence(),
            'location' => $this->faker->city(),
            'type_of_activity' => json_encode($this->faker->randomElement([['maintenance'], ['inspection'], ['operation']])), // Encoding JSON
            'occupations' => json_encode($this->faker->randomElement([['technician'], ['supervisor'], ['operator']])), // Encoding JSON
            'event' => $this->faker->sentence(),
            'cause' => $this->faker->sentence(),
            'impact' => $this->faker->sentence(),
            'hazard_type' => $this->faker->word(),
            'likelihood' => $this->faker->numberBetween(1, 5),
            'impact_rating_factors' => $this->faker->sentence(),
            'impact_score' => $this->faker->numberBetween(1, 10),
            'overall_risk_score' => $this->faker->numberBetween(1, 10),
            'operational_control_elimination' => json_encode($this->faker->optional()->randomElement([['procedure change'], ['automation']])), // Encoding JSON
            'operational_control_substitution' => json_encode($this->faker->optional()->randomElement([['alternative material'], ['safer method']])), // Encoding JSON
            'operational_control_engineering' => json_encode($this->faker->optional()->randomElement([['guard rails'], ['ventilation']])), // Encoding JSON
            'operational_control_administrative' => json_encode($this->faker->optional()->randomElement([['training'], ['signage']])), // Encoding JSON
            'ppe' => json_encode($this->faker->optional()->randomElement([['gloves'], ['helmets'], ['masks']])), // Encoding JSON
            'risk_evaluation_control_type' => $this->faker->randomElement(['engineering', 'administrative', 'ppe']),
            'risk_evaluation_effectiveness' => $this->faker->randomElement(['effective', 'moderate', 'ineffective']),
            'risk_evaluation_likelihood' => $this->faker->numberBetween(1, 5),
            'risk_evaluation_impact_score' => $this->faker->numberBetween(1, 10),
            'risk_evaluation_overall_risk_score' => $this->faker->numberBetween(1, 10),
            'risk_evaluation_level_of_significance' => $this->faker->randomElement(['low', 'medium', 'high']),
            'mitigation' => $this->faker->optional()->sentence(),
            'type_of_mitigation' => $this->faker->optional()->randomElement(['engineering', 'administrative', 'ppe']),
            'status' => $this->faker->randomElement(['open', 'closed', 'in progress']),
            'remarks' => $this->faker->optional()->sentence(),
        ];
    }
}
