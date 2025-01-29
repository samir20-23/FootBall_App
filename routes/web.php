<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\FootballController;
use App\Models\Team; // Corrected the namespace
use Illuminate\Http\Request; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('Table', [TeamController::class, 'index'])->name('index');
// Route::get('/api', [FootballController::class, 'getTeamBadge']);


Route::post('/update-team-stats', [TeamController::class, 'updateStats']);


Route::post('/update-team-stats', [TeamController::class, 'updateStats']);
Route::post('/update-team-stats', function (Request $request) {
    // Assuming the request contains team ID and the updated stats
    $team = Team::find($request->team_id);

    if ($team) {
        // Update team stats based on the incoming request data
        $team->wins = $request->wins;
        $team->draws = $request->draws;
        $team->losses = $request->losses;
        $team->goals_for = $request->goals_for;
        $team->goals_against = $request->goals_against;
        $team->goal_difference = $request->goal_difference;
        $team->points = $request->points;
        $team->save();

        return response()->json(['status' => 'success']);
    } else {
        return response()->json(['status' => 'error', 'message' => 'Team not found']);
    }
});
