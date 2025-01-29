<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="https://img.uefa.com/imgml/uefacom/app/logo_ucl.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEFA Champions League Standings</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --bs-primary: #00235e;
            --bs-secondary: #c89b3c;
        }
    
        input {
            width: 50px;
        }
    
        body {
            background: #f0f2f5;
            font-family: 'Arial', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
    
        .hero-section {
            background: linear-gradient(135deg, var(--bs-primary), #001233);
            min-height: 40vh;
            position: relative;
            overflow: hidden;
        }
    
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://img.uefa.com/imgml/uefacom/app/logo_ucl.png') center/300px;
            opacity: 0.05;
            animation: rotate 60s linear infinite;
        }
    
        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
    
        .hero-content {
            position: relative;
            z-index: 1;
            color: #fff;
            padding: 40px;
        }
    
        .header-logo {
            width: 120px;
            filter: drop-shadow(0 0 15px rgba(255, 255, 255, 0.2));
            animation: pulse 2s infinite;
        }
    
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }
    
        .standings-card {
            margin-top: -100px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
    
        .table-responsive {
            border-radius: 15px;
            overflow: hidden;
        }
    
        .standings-table th {
            background: var(--bs-primary);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            border: none;
            white-space: nowrap;
        }
    
        .standings-table td {
            vertical-align: middle;
            border-color: #f0f2f5;
        }
    
        .team-cell {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.8rem;
        }
    
        .team-logo {
            width: 40px;
            height: 40px;
            object-fit: contain;
            transition: transform 0.3s;
        }
    
        tr:hover .team-logo {
            transform: scale(1.1);
        }
    
        .stats-badge {
            font-size: 0.9rem;
            font-weight: 600;
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
        }
    
        .position-badge {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: bold;
        }
    
        /* Top 4 positions styling */
        tr:nth-child(-n+4) .position-badge {
            background: var(--bs-primary);
            color: white;
        }
    
        .footer-section {
            background: linear-gradient(135deg, var(--bs-primary), #001233);
            padding: 3rem 0;
        }
    
        .footer-logo {
            width: 50px;
            opacity: 0.8;
            transition: all 0.3s;
        }
    
        .footer-logo:hover {
            opacity: 1;
            transform: scale(1.1);
        }
    
        /* Stats Cards */
        .stats-card {
            background: white;
            border-radius: 15px;
            transition: transform 0.3s;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
    
        .stats-card:hover {
            transform: translateY(-5px);
        }
    
        .stats-icon {
            font-size: 2rem;
            color: var(--bs-primary);
        }
    
        /* Responsive adjustments */
        @media (max-width: 1024px) {
            .hero-section {
                min-height: 35vh;
            }
            .header-logo {
                width: 100px;
            }
        }
    
        @media (max-width: 768px) {
            .standings-card {
                margin-top: -50px;
            }
    
            .hero-section {
                min-height: 30vh;
            }
    
            .header-logo {
                width: 80px;
            }
    
            .team-logo {
                width: 35px;
                height: 35px;
            }
    
            .stats-badge {
                font-size: 0.8rem;
                padding: 0.3rem 0.6rem;
            }
    
            .footer-logo {
                width: 40px;
            }
    
            .footer-section {
                padding: 2rem 0;
            }
        }
    
        @media (max-width: 576px) {
            .footer-section {
                padding: 1.5rem 0;
            }
    
            .footer-logo {
                width: 35px;
            }
    
            .header-logo {
                width: 70px;
            }
        }
    </style>
    

</head>

<body>
    <!-- Hero Section -->
    <div class="hero-section d-flex align-items-center text-white py-5">
        <div class="container hero-content text-center">
            <img src="https://img.uefa.com/imgml/uefacom/app/logo_ucl.png" alt="UEFA Champions League Logo"
                class="header-logo mb-4">
            <h1 class="display-4 fw-bold mb-3">Champions League</h1>
            <p class="lead mb-0">Group Stage Standings 2023/24</p>
        </div>
    </div>







    
    <!-- Main Content -->
    <div class="container position-relative mb-5">
        <!-- Quick Stats Cards -->
        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="stats-card p-4 text-center">
                    <i class="bi bi-trophy stats-icon mb-3"></i>
                    <h3 class="h5 mb-2">Matchday</h3>
                    <p class="h2 mb-0 fw-bold text-primary" id="matchdayStat">6</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card p-4 text-center">
                    <i class="bi bi-graph-up stats-icon mb-3"></i>
                    <h3 class="h5 mb-2">Total Goals</h3>
                    <p class="h2 mb-0 fw-bold text-primary" id="totalGoalsStat">158</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card p-4 text-center">
                    <i class="bi bi-people stats-icon mb-3"></i>
                    <h3 class="h5 mb-2">Teams</h3>
                    <p class="h2 mb-0 fw-bold text-primary" id="teamsStat">32</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card p-4 text-center">
                    <i class="bi bi-flag stats-icon mb-3"></i>
                    <h3 class="h5 mb-2">Groups</h3>
                    <p class="h2 mb-0 fw-bold text-primary" id="groupsStat">8</p>
                </div>
            </div>
        </div>
        <!-- Standings Card -->

        <div class="standings-card p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="btn-group">
                </div>
            </div>

            <div class="table-responsive">
                <form action="{{ route('teams.updateAll') }}" method="POST">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-primary btn-create" id="addTeam">Update ⬆</button>
                    
                    <table class="table table-bordered table-striped" id="standingsTable">
                        <thead>
                            <tr>
                                <th class="ps-4">Position</th>
                                <th>Team</th>
                                <th class="text-center">Matches Played</th>
                                <th class="text-center">Wins</th>
                                <th class="text-center">Draws</th>
                                <th class="text-center">Losses</th>
                                <th class="text-center">Goals For</th>
                                <th class="text-center">Goals Against</th>
                                <th class="text-center">Goal Difference</th>
                                <th class="text-center pe-4">Points</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            @foreach ($teams as $index => $team)
                                <tr data-team-id="{{ $team->id }}">
                                    <td class="ps-4">
                                        <div class="position-badge">{{ $index + 1 }}</div>
                                    </td>
                                    <td class="team-cell d-flex align-items-center">
                                        <img src="{{ $team->img_url }}" class="team-logo me-2" alt="{{ $team->name }}">
                                        <input type="hidden" name="teams[{{ $team->id }}][id]" value="{{ $team->id }}">
                                        <span class="fw-semibold">{{ $team->name }}</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="stats-badge bg-light">{{ $team->matches_played }}</span>
                                        <input type="hidden" name="teams[{{ $team->id }}][matches_played]" value="{{ $team->matches_played }}">
                                    </td>
                                    <td class="text-center">
                                        <input type="number" name="teams[{{ $team->id }}][wins]" value="{{ $team->wins }}" class="stats-input">
                                    </td>
                                    <td class="text-center">
                                        <input type="number" name="teams[{{ $team->id }}][draws]" value="{{ $team->draws }}" class="stats-input">
                                    </td>
                                    <td class="text-center">
                                        <input type="number" name="teams[{{ $team->id }}][losses]" value="{{ $team->losses }}" class="stats-input">
                                    </td>
                                    <td class="text-center">
                                        <input type="number" name="teams[{{ $team->id }}][goals_for]" value="{{ $team->goals_for }}" class="stats-input">
                                    </td>
                                    <td class="text-center">
                                        <input type="number" name="teams[{{ $team->id }}][goals_against]" value="{{ $team->goals_against }}" class="stats-input">
                                    </td>
                                    <td class="text-center">
                                        <input type="number" class="stats-input" value="{{ $team->goal_difference }}" disabled>
                                    </td>
                                    <td class="text-center pe-4">
                                        <input type="number" name="teams[{{ $team->id }}][points]" value="{{ $team->points }}" class="stats-input">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
                
            </div>
        </div>


    </div>











    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo Section -->
                <div class="col-md-4 text-center text-md-start mb-4 mb-md-0">
                    <a href="#" aria-label="UEFA Official Website">
                        <img src="https://img.uefa.com/imgml/uefacom/app/logo_ucl.png"
                            alt="UEFA Champions League Logo" class="footer-logo mb-3">
                    </a>
                    <p class="text-white-50 mb-0">The official website of the UEFA Champions League</p>
                </div>

                <!-- Logo and Competitions Section -->
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <div class="d-flex justify-content-center gap-4">
                        <a href="#" aria-label="Euro 2024 Official Website">
                            <img src="https://img.uefa.com/imgml/uefacom/elements/logos/competitions/dark/euro2024.svg"
                                alt="Euro 2024 Logo" class="footer-logo">
                        </a>
                        <a href="#" aria-label="Champions League Official Website">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d4/Champions_League_logo.svg"
                                alt="Champions League Logo" class="footer-logo">
                        </a>
                        <a href="#" aria-label="UEFA Official Website">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/UEFA_Logo.svg"
                                alt="UEFA Logo" class="footer-logo">
                        </a>
                    </div>
                </div>

                <!-- Social Media Links Section -->
                <div class="col-md-4 text-center text-md-end">
                    <div class="d-flex justify-content-center justify-content-md-end gap-3">
                        <a href="#" class="btn btn-outline-light" aria-label="Follow UEFA on Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light" aria-label="Follow UEFA on Twitter">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light" aria-label="Follow UEFA on Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="border-light opacity-25 my-4">
            <p class="text-center text-white-50 mb-0">© UEFA Champions League 2024. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const tableBody = document.querySelector('#standingsTable tbody');

            function updateTableStats() {
                const rows = tableBody.querySelectorAll('tr');
                rows.forEach(row => {
                    const inputs = row.querySelectorAll('input[type="number"]');

                    const wins = parseInt(inputs[0].value) || 0;
                    const draws = parseInt(inputs[1].value) || 0;
                    const losses = parseInt(inputs[2].value) || 0;
                    const goalsFor = parseInt(inputs[3].value) || 0;
                    const goalsAgainst = parseInt(inputs[4].value) || 0;

                    const matchesPlayed = wins + draws + losses;
                    row.querySelector('.stats-badge').textContent = matchesPlayed;

                    const goalDifference = goalsFor - goalsAgainst;
                    inputs[5].value = goalDifference;

                    const points = (wins * 3) + draws;
                    inputs[6].value = points;

                    row.dataset.points = points;
                    row.dataset.gd = goalDifference;
                    row.dataset.gf = goalsFor;
                });
                sortChampionsLeagueTable();
                const arrayTotals = [
                    document.querySelector('#matchdayStat').textContent, // Matchday value
                    document.querySelector('#totalGoalsStat').textContent, // Total Goals value
                    document.querySelector('#teamsStat').textContent, // Teams count
                    document.querySelector('#groupsStat').textContent // Groups count
                ];

                updateQuickStats(arrayTotals);
            }

            function sortChampionsLeagueTable() {
                const rows = Array.from(tableBody.getElementsByTagName('tr'));
                rows.sort((a, b) => {
                    const pointsDiff = (parseInt(b.dataset.points) || 0) - (parseInt(a.dataset.points) ||
                        0);
                    if (pointsDiff !== 0) return pointsDiff;

                    const gdDiff = (parseInt(b.dataset.gd) || 0) - (parseInt(a.dataset.gd) || 0);
                    if (gdDiff !== 0) return gdDiff;

                    return (parseInt(b.dataset.gf) || 0) - (parseInt(a.dataset.gf) || 0);
                });

                rows.forEach((row, index) => {
                    row.querySelector('.position-badge').textContent = index + 1;
                    tableBody.appendChild(row);
                    row.classList.remove('bg-success-subtle', 'bg-warning-subtle');
                    if (index < 2) row.classList.add('bg-success-subtle');
                    else if (index === 2) row.classList.add('bg-warning-subtle');
                });
            }

            tableBody.addEventListener('input', (e) => {
                if (e.target.matches('input[type="number"]')) {
                    if (e.target.value < 0) e.target.value = 0;
                    updateTableStats();
                }
            });

            document.getElementById('addTeam').addEventListener('click', () => {
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                <td class="ps-4"><div class="position-badge">0</div></td>
                <td class="team-cell d-flex align-items-center">
                    <img src="/api/placeholder/40/40" class="team-logo me-2" alt="New Team">
                    <span class="fw-semibold"><input type="text" class="team-name" placeholder="Enter team name" value="New Team"></span>
                </td>
                <td class="text-center"><span class="stats-badge bg-light">0</span></td>
                <td class="text-center"><input type="number" class="stats-input" value="0"></td>
                <td class="text-center"><input type="number" class="stats-input" value="0"></td>
                <td class="text-center"><input type="number" class="stats-input" value="0"></td>
                <td class="text-center"><input type="number" class="stats-input" value="0"></td>
                <td class="text-center"><input type="number" class="stats-input" value="0"></td>
                <td class="text-center"><input type="number" class="stats-input" value="0" disabled></td>
                <td class="text-center pe-4"><input type="number" class="stats-input" value="0" disabled></td>
             `;
                tableBody.appendChild(newRow);
                updateTableStats();
            });

            document.getElementById('sortButton').addEventListener('click', () => {
                sortChampionsLeagueTable();
            });

            updateTableStats();
        });

        function updateStats() {
            const rows = document.querySelectorAll('#standingsTable tbody tr');

            rows.forEach(row => {
                const inputs = row.querySelectorAll('input[type="number"]');

                const wins = parseInt(inputs[0].value) || 0;
                const draws = parseInt(inputs[1].value) || 0;
                const losses = parseInt(inputs[2].value) || 0;
                const goalsFor = parseInt(inputs[3].value) || 0;
                const goalsAgainst = parseInt(inputs[4].value) || 0;

                const matchesPlayed = wins + draws + losses;
                row.querySelector('.stats-badge').textContent = matchesPlayed;

                const goalDifference = goalsFor - goalsAgainst;
                inputs[5].value = goalDifference;

                const points = (wins * 3) + draws;
                inputs[6].value = points;

                row.dataset.points = points;
                row.dataset.gd = goalDifference;
                row.dataset.gf = goalsFor;
            });

            sortChampionsLeagueTable();
        }


        function updateStatsFromPts() {
            const rows = document.querySelectorAll('#standingsTable tbody tr');

            rows.forEach(row => {
                const pointsInput = row.querySelector('input[type="number"]:last-child');
                const points = parseInt(pointsInput.value) || 0;

                const wins = Math.floor(points /
                    3); // Rough estimate for wins (assuming all wins were earned with 3 points each)
                const draws = points % 3; // Remaining points could represent draws (0, 1, or 2)

                const inputs = row.querySelectorAll('input[type="number"]');
                inputs[0].value = wins; // Update Wins
                inputs[1].value = draws; // Update Draws

                updateStats();
            });
        }

        function updateQuickStats(arrayTotals) {
            if (!arrayTotals[0] || !arrayTotals[1] || !arrayTotals[2] || !arrayTotals[3]) {
                arrayTotals = [6, 158, 32, 8]; // Default values (matchday, totalGoals, teamsCount, groupsCount)
            }

            document.getElementById('matchdayStat').textContent = arrayTotals[0];
            document.getElementById('totalGoalsStat').textContent = arrayTotals[1];
            document.getElementById('teamsStat').textContent = arrayTotals[2];
            document.getElementById('groupsStat').textContent = arrayTotals[3];
        }
    </script>

</body>

</html>
