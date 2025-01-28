<?php

namespace Database\Seeders;
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    public function run()
    {
        Team::create([
            'name' => 'Team A',
            'matches_played' => 5,
            'wins' => 3,
            'draws' => 1,
            'losses' => 1,
            'goals_for' => 10,
            'goals_against' => 6,
            'goal_difference' => 4,
            'points' => 10,
        ]);

        Team::create([
            'name' => 'Team B',
            'matches_played' => 5,
            'wins' => 2,
            'draws' => 2,
            'losses' => 1,
            'goals_for' => 8,
            'goals_against' => 7,
            'goal_difference' => 1,
            'points' => 8,
        ]);
        // Add more teams as needed
    }
}
