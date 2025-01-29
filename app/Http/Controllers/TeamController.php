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

    // Update team stats via AJAX
    public function updateStats(Request $request)
    {
        // Validate request data
        $request->validate([
            'team_id' => 'required|exists:teams,id',
            'matches_played' => 'required|integer',
            'wins' => 'required|integer',
            'draws' => 'required|integer',
            'losses' => 'required|integer',
            'goals_for' => 'required|integer',
            'goals_against' => 'required|integer',
            'goal_difference' => 'required|integer',
            'points' => 'required|integer',
        ]);

        // Find and update the team
        $team = Team::find($request->team_id);
        if ($team) {
            $team->update([
                'matches_played' => $request->matches_played,
                'wins' => $request->wins,
                'draws' => $request->draws,
                'losses' => $request->losses,
                'goals_for' => $request->goals_for,
                'goals_against' => $request->goals_against,
                'goal_difference' => $request->goal_difference,
                'points' => $request->points
            ]);

            return response()->json(['status' => 'success', 'message' => 'Team stats updated successfully!']);
        }

        return response()->json(['status' => 'error', 'message' => 'Team not found!'], 404);
    }
}
