<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request; // Correct Request class for Laravel

class TeamController extends Controller
{
    // Display the team standings
    public function index()
    {
        $teams = Team::orderBy('points', 'desc')
            ->orderBy('goal_difference', 'desc')
            ->get();

        return view('teams.index', compact('teams'));
    }

    // Update team 
    public function store(Request $request)
    {
        Team::create($request->only([
            'name',
            'matches_played',
            'wins',
            'draws',
            'losses',
            'goals_for',
            'goals_against',
            'goal_difference',
            'points',
        ]));

        return response()->json(['message' => 'Team created successfully']);
    }

    public function updateAll(Request $request)
    {
        foreach ($request->teams as $teamData) {
            $team = Team::findOrFail($teamData['id']);
            $team->update([
                'wins' => $teamData['wins'],
                'draws' => $teamData['draws'],
                'losses' => $teamData['losses'],
                'goals_for' => $teamData['goals_for'],
                'goals_against' => $teamData['goals_against'],
                'goal_difference' => $teamData['goals_for'] - $teamData['goals_against'], // Auto calculation
                'points' => ($teamData['wins'] * 3) + ($teamData['draws'] * 1),
            ]);
        }
    
        return redirect()->back()->with('success', 'Teams updated successfully!');
    }
    
}
