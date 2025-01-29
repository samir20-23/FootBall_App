<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    public function run()
    {
        Team::create([
            'name' => 'Liverpool',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/nGfV05dipbAc7zzojivKew_48x48.png',
            'matches_played' => 7,
            'wins' => 7,
            'draws' => 0,
            'losses' => 0,
            'goals_for' => 21,
            'goals_against' => 13,
            'goal_difference' => 13,
            'points' => 21,
        ]);

        Team::create([
            'name' => 'Barcelona',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/paYnEE8hcrP96neHRNofhQ_48x48.png',
            'matches_played' => 7,
            'wins' => 6,
            'draws' => 0,
            'losses' => 1,
            'goals_for' => 18,
            'goals_against' => 15,
            'goal_difference' => 15,
            'points' => 18,
        ]);

        Team::create([
            'name' => 'Arsenal',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/4us2nCgl6kgZc0t3hpW75Q_48x48.png',
            'matches_played' => 7,
            'wins' => 5,
            'draws' => 1,
            'losses' => 1,
            'goals_for' => 16,
            'goals_against' => 12,
            'goal_difference' => 12,
            'points' => 16,
        ]);

        Team::create([
            'name' => 'Inter Milan',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/l2-icwsMhIvsbRw8AwC1yg_48x48.png',
            'matches_played' => 7,
            'wins' => 5,
            'draws' => 1,
            'losses' => 1,
            'goals_for' => 16,
            'goals_against' => 7,
            'goal_difference' => 7,
            'points' => 16,
        ]);

        Team::create([
            'name' => 'Atletico Madrid',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/pEqmA7CL-VRo4Llq3rwIPA_48x48.png',
            'matches_played' => 7,
            'wins' => 5,
            'draws' => 0,
            'losses' => 2,
            'goals_for' => 15,
            'goals_against' => 5,
            'goal_difference' => 5,
            'points' => 15,
        ]);

        Team::create([
            'name' => 'AC Milan',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/0E1JciuKLW0EbG48I5cFRQ_48x48.png',
            'matches_played' => 7,
            'wins' => 5,
            'draws' => 0,
            'losses' => 2,
            'goals_for' => 15,
            'goals_against' => 4,
            'goal_difference' => 4,
            'points' => 15,
        ]);

        Team::create([
            'name' => 'Atalanta',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/0XmrZHobvb6ua5tgMOnTEA_48x48.png',
            'matches_played' => 7,
            'wins' => 4,
            'draws' => 2,
            'losses' => 1,
            'goals_for' => 14,
            'goals_against' => 14,
            'goal_difference' => 14,
            'points' => 14,
        ]);

        Team::create([
            'name' => 'Bayer Leverkusen',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/0zIcXiwD_JGY482DFC28Lw_48x48.png',
            'matches_played' => 7,
            'wins' => 4,
            'draws' => 1,
            'losses' => 2,
            'goals_for' => 13,
            'goals_against' => 6,
            'goal_difference' => 6,
            'points' => 13,
        ]);

        Team::create([
            'name' => 'Aston Villa',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/uyNNelfnFvCEnsLrUL-j2Q_48x48.png',
            'matches_played' => 7,
            'wins' => 4,
            'draws' => 1,
            'losses' => 2,
            'goals_for' => 13,
            'goals_against' => 5,
            'goal_difference' => 5,
            'points' => 13,
        ]);

        Team::create([
            'name' => 'Monaco',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/RX0XTi5Dtg4joMtuHNmYKg_48x48.png',
            'matches_played' => 7,
            'wins' => 4,
            'draws' => 1,
            'losses' => 2,
            'goals_for' => 13,
            'goals_against' => 3,
            'goal_difference' => 3,
            'points' => 13,
        ]);

        Team::create([
            'name' => 'Feyenoord',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/36g41WN3WdjCRsSFiurazw_48x48.png',
            'matches_played' => 7,
            'wins' => 4,
            'draws' => 1,
            'losses' => 2,
            'goals_for' => 13,
            'goals_against' => 2,
            'goal_difference' => 2,
            'points' => 13,
        ]);

        Team::create([
            'name' => 'Lille',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/D2AQe8qoyPIP4K8MzLvwuA_48x48.png',
            'matches_played' => 7,
            'wins' => 4,
            'draws' => 1,
            'losses' => 2,
            'goals_for' => 13,
            'goals_against' => 2,
            'goal_difference' => 2,
            'points' => 13,
        ]);

        Team::create([
            'name' => 'Brest',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/HNqZwlu71GHXo60XjYrPxg_48x48.png',
            'matches_played' => 7,
            'wins' => 4,
            'draws' => 1,
            'losses' => 2,
            'goals_for' => 13,
            'goals_against' => 2,
            'goal_difference' => 2,
            'points' => 13,
        ]);

        Team::create([
            'name' => 'Borussia Dortmund',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/FZnTSH2rbHFos4BnlWAItw_48x48.png',
            'matches_played' => 7,
            'wins' => 4,
            'draws' => 0,
            'losses' => 3,
            'goals_for' => 13,
            'goals_against' => 8,
            'goal_difference' => 8,
            'points' => 12,
        ]);

        Team::create([
            'name' => 'Bayern Munich',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/-_cmntP5q_pHL7g5LfkRiw_48x48.png',
            'matches_played' => 7,
            'wins' => 4,
            'draws' => 0,
            'losses' => 3,
            'goals_for' => 13,
            'goals_against' => 6,
            'goal_difference' => 6,
            'points' => 12,
        ]);

        Team::create([
            'name' => 'Real Madrid',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/Th4fAVAZeCJWRcKoLW7koA_48x48.png',
            'matches_played' => 7,
            'wins' => 4,
            'draws' => 0,
            'losses' => 3,
            'goals_for' => 13,
            'goals_against' => 5,
            'goal_difference' => 5,
            'points' => 12,
        ]);

        Team::create([
            'name' => 'Juventus',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/6lal-0xwWtos5HI99HRvuQ_48x48.png',
            'matches_played' => 7,
            'wins' => 3,
            'draws' => 3,
            'losses' => 1,
            'goals_for' => 13,
            'goals_against' => 4,
            'goal_difference' => 4,
            'points' => 12,
        ]);

        Team::create([
            'name' => 'Celtic',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/2d1R7XIFALAHj2A9ECBJeA_48x48.png',
            'matches_played' => 7,
            'wins' => 3,
            'draws' => 3,
            'losses' => 1,
            'goals_for' => 13,
            'goals_against' => 1,
            'goal_difference' => 1,
            'points' => 12,
        ]);

        Team::create([
            'name' => 'PSV Eindhoven',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/FylTPR72JXIGFzqwQocSAQ_48x48.png',
            'matches_played' => 7,
            'wins' => 3,
            'draws' => 2,
            'losses' => 2,
            'goals_for' => 13,
            'goals_against' => 3,
            'goal_difference' => 3,
            'points' => 11,
        ]);

        Team::create([
            'name' => 'Club Bruges',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/5FQBXpID1LAQJb0BOnmTpw_48x48.png',
            'matches_played' => 7,
            'wins' => 3,
            'draws' => 2,
            'losses' => 2,
            'goals_for' => 13,
            'goals_against' => -2,
            'goal_difference' => -2,
            'points' => 11,
        ]);

        Team::create([
            'name' => 'Benfica',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/nFwABZ-4n_A3BGXT9A7Adg_48x48.png',
            'matches_played' => 7,
            'wins' => 3,
            'draws' => 1,
            'losses' => 3,
            'goals_for' => 13,
            'goals_against' => 2,
            'goal_difference' => 2,
            'points' => 10,
        ]);

        Team::create([
            'name' => 'Paris Saint-Germain',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/mcpMspef1hwHwi9qrfp4YQ_48x48.png',
            'matches_played' => 7,
            'wins' => 3,
            'draws' => 1,
            'losses' => 3,
            'goals_for' => 13,
            'goals_against' => 2,
            'goal_difference' => 2,
            'points' => 10,
        ]);

        Team::create([
            'name' => 'Sporting CP',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/58doDuhR0wW3WZE9PdODUw_48x48.png',
            'matches_played' => 7,
            'wins' => 3,
            'draws' => 1,
            'losses' => 3,
            'goals_for' => 13,
            'goals_against' => 1,
            'goal_difference' => 1,
            'points' => 10,
        ]);

        Team::create([
            'name' => 'VfB Stuttgart',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/Qc_eb6-lZEDR8ojQmZxFhQ_48x48.png',
            'matches_played' => 7,
            'wins' => 3,
            'draws' => 1,
            'losses' => 3,
            'goals_for' => 13,
            'goals_against' => -1,
            'goal_difference' => -1,
            'points' => 10,
        ]);

        Team::create([
            'name' => 'Manchester City',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/z44l-a0W1v5FmgPnemV6Xw_48x48.png',
            'matches_played' => 7,
            'wins' => 2,
            'draws' => 2,
            'losses' => 3,
            'goals_for' => 13,
            'goals_against' => 2,
            'goal_difference' => 2,
            'points' => 8,
        ]);

        Team::create([
            'name' => 'Dinamo Zagreb',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/izGdPix_nDr8lff08dKicA_48x48.png',
            'matches_played' => 7,
            'wins' => 2,
            'draws' => 2,
            'losses' => 3,
            'goals_for' => 13,
            'goals_against' => -8,
            'goal_difference' => -8,
            'points' => 8,
        ]);

        Team::create([
            'name' => 'Shakhtar Donetsk',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/3rx1dndeeE1gb97w6et-GA_48x48.png',
            'matches_played' => 7,
            'wins' => 2,
            'draws' => 1,
            'losses' => 4,
            'goals_for' => 13,
            'goals_against' => -6,
            'goal_difference' => -6,
            'points' => 7,
        ]);

        Team::create([
            'name' => 'Bologna',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/WnKdNmw06v2lz7HjhqPRPw_48x48.png',
            'matches_played' => 7,
            'wins' => 1,
            'draws' => 2,
            'losses' => 4,
            'goals_for' => 13,
            'goals_against' => -5,
            'goal_difference' => -5,
            'points' => 5,
        ]);

        Team::create([
            'name' => 'Sparta Prague',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/fVL-ka8BmNfPNZWDYElVLw_48x48.png',
            'matches_played' => 7,
            'wins' => 1,
            'draws' => 1,
            'losses' => 5,
            'goals_for' => 13,
            'goals_against' => -12,
            'goal_difference' => -12,
            'points' => 4,
        ]);

        Team::create([
            'name' => 'RB Leipzig',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/R7-Lqc_SDxd97uWgoeUQ-g_48x48.png',
            'matches_played' => 7,
            'wins' => 1,
            'draws' => 0,
            'losses' => 6,
            'goals_for' => 13,
            'goals_against' => -6,
            'goal_difference' => -6,
            'points' => 3,
        ]);

        Team::create([
            'name' => 'Girona',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/sHiSmLm_rA0BOC5MfrNt8A_48x48.png',
            'matches_played' => 7,
            'wins' => 1,
            'draws' => 0,
            'losses' => 6,
            'goals_for' => 13,
            'goals_against' => -7,
            'goal_difference' => -7,
            'points' => 3,
        ]);

        Team::create([
            'name' => 'FK Crvena Zvezda',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/i26ntB7bZFvS6GkKj_gGcQ_48x48.png',
            'matches_played' => 7,
            'wins' => 1,
            'draws' => 0,
            'losses' => 6,
            'goals_for' => 13,
            'goals_against' => -10,
            'goal_difference' => -10,
            'points' => 3,
        ]);

        Team::create([
            'name' => 'Sturm Graz',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/A5aNjxC7AJ2C__lAkU9Plg_48x48.png',
            'matches_played' => 7,
            'wins' => 1,
            'draws' => 0,
            'losses' => 6,
            'goals_for' => 13,
            'goals_against' => -10,
            'goal_difference' => -10,
            'points' => 3,
        ]);

        Team::create([
            'name' => 'Salzburg',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/vQhr4NoE_4Yg1IhUZvbRNw_48x48.png',
            'matches_played' => 7,
            'wins' => 1,
            'draws' => 0,
            'losses' => 6,
            'goals_for' => 13,
            'goals_against' => -19,
            'goal_difference' => -19,
            'points' => 3,
        ]);

        Team::create([
            'name' => 'Slovan Bratislava',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/At_RY6yVgrmSW0hTKQ6X6Q_48x48.png',
            'matches_played' => 7,
            'wins' => 0,
            'draws' => 0,
            'losses' => 7,
            'goals_for' => 13,
            'goals_against' => -18,
            'goal_difference' => -18,
            'points' => 0,
        ]);

        Team::create([
            'name' => 'BSC Young Boys',
            'img_url' => 'https://ssl.gstatic.com/onebox/media/sports/logos/XL7qUB8QiLkk4w8K3jAMBg_48x48.png',
            'matches_played' => 7,
            'wins' => 0,
            'draws' => 0,
            'losses' => 7,
            'goals_for' => 13,
            'goals_against' => -20,
            'goal_difference' => -20,
            'points' => 0,
        ]);
    }
}
