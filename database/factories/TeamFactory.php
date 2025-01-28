<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company, // Fake company name
            'matches_played' => $this->faker->numberBetween(0, 50), // Random number of matches played
            'wins' => $this->faker->numberBetween(0, 50), // Random number of wins
            'draws' => $this->faker->numberBetween(0, 50), // Random number of draws
            'losses' => $this->faker->numberBetween(0, 50), // Random number of losses
            'goals_for' => $this->faker->numberBetween(0, 100), // Random number of goals scored
            'goals_against' => $this->faker->numberBetween(0, 100), // Random number of goals conceded
            'goal_difference' => function (array $attributes) {
                // Calculate goal difference dynamically
                return $attributes['goals_for'] - $attributes['goals_against'];
            },
            'points' => function (array $attributes) {
                // Calculate points dynamically (e.g., 3 points per win, 1 point per draw)
                return ($attributes['wins'] * 3) + ($attributes['draws'] * 1);
            },
        ];
    }
}