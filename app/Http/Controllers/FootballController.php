<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class FootballController extends Controller
{
    public function getTeamBadge()
    {
        
        // Initialize Guzzle HTTP client
        $client = new Client();
        
        // Send GET request to TheSportsDB API for "Arsenal"
        $response = $client->get('https://www.thesportsdb.com/api/v1/json/3/searchteams.php?t=Arsenal');
        
        // Decode the JSON response
        $data = json_decode($response->getBody(), true);
        
        // Extract the team badge URL
        $badge = $data['teams'][0]['strBadge'] ?? 'Badge not found';
        
        // Return the view with the badge URL
        return view('Teams.Api', compact('badge'));
    }
}
