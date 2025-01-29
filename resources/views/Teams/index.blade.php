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
        }

        .stats-card:hover {
            transform: translateY(-5px);
        }

        .stats-icon {
            font-size: 2rem;
            color: var(--bs-primary);
        }

        /* Responsive adjustments */
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
                    <p class="h2 mb-0 fw-bold text-primary">6</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card p-4 text-center">
                    <i class="bi bi-graph-up stats-icon mb-3"></i>
                    <h3 class="h5 mb-2">Total Goals</h3>
                    <p class="h2 mb-0 fw-bold text-primary">158</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card p-4 text-center">
                    <i class="bi bi-people stats-icon mb-3"></i>
                    <h3 class="h5 mb-2">Teams</h3>
                    <p class="h2 mb-0 fw-bold text-primary">32</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card p-4 text-center">
                    <i class="bi bi-flag stats-icon mb-3"></i>
                    <h3 class="h5 mb-2">Groups</h3>
                    <p class="h2 mb-0 fw-bold text-primary">8</p>
                </div>
            </div>
        </div>

        <!-- Standings Card -->
        <div class="standings-card p-4">
            <div class="d-flex justify-content-between align-items-center mb-4"> 
                <div class="btn-group">
                    <button class="btn btn-outline-primary" onclick="sortTable()">
                        <i class="bi bi-arrow-up-down me-2"></i>Sort
                    </button>
                </div>
            </div>

            <div class="table-responsive">
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
                    <tbody>
                        @foreach ($teams as $index => $team)
                            <tr data-team-id="{{ $team->id }}">
                                <td class="ps-4">
                                    <div class="position-badge">{{ $index + 1 }}</div>
                                </td>
                                <td class="team-cell d-flex align-items-center">
                                    <img src="{{ $team->img_url }}" class="team-logo me-2" alt="{{ $team->name }}">
                                    <span class="fw-semibold">{{ $team->name }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="stats-badge bg-light">{{ $team->matches_played }}</span>
                                </td>
                                <td class="text-center">
                                    <input type="number" class="stats-input" value="{{ $team->wins }}"
                                        onchange="updateStats()">
                                </td>
                                <td class="text-center">
                                    <input type="number" class="stats-input" value="{{ $team->draws }}"
                                        onchange="updateStats()">
                                </td>
                                <td class="text-center">
                                    <input type="number" class="stats-input" value="{{ $team->losses }}"
                                        onchange="updateStats()">
                                </td>
                                <td class="text-center">
                                    <input type="number" class="stats-input" value="{{ $team->goals_for }}"
                                        onchange="updateStats()">
                                </td>
                                <td class="text-center">
                                    <input type="number" class="stats-input" value="{{ $team->goals_against }}"
                                        onchange="updateStats()">
                                </td>
                                <td class="text-center">
                                    <input type="number" class="stats-input" value="{{ $team->goal_difference }}"
                                        disabled>
                                </td>
                                <td class="text-center pe-4">
                                    <input type="number" class="stats-input" value="{{ $team->points }}"
                                        onchange="updateStatsFromPts()">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>


    </div>

    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 text-center text-md-start mb-4 mb-md-0">
                    <img src="https://img.uefa.com/imgml/uefacom/app/logo_ucl.png" alt="UEFA Logo"
                        class="footer-logo mb-3">
                    <p class="text-white-50 mb-0">The official website of the UEFA Champions League</p>
                </div>
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <div class="d-flex justify-content-center gap-4">
                        <img src="https://img.uefa.com/imgml/uefacom/elements/logos/competitions/dark/euro2024.svg"
                            alt="Euro 2024" class="footer-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/d/d4/Champions_League_logo.svg"
                            alt="Champions League" class="footer-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/UEFA_Logo.svg" alt="UEFA Logo"
                            class="footer-logo">
                    </div>
                </div>
                <div class="col-md-4 text-center text-md-end">
                    <div class="d-flex justify-content-center justify-content-md-end gap-3">
                        <a href="#" class="btn btn-outline-light">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light">
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
        // Function to update stats based on changes
        function updateStats() {
            let rows = Array.from(document.querySelectorAll('#standingsTable tr')).slice(1); // Ignore header row

            rows.forEach(row => {
                // Get the values from inputs
                let matchesPlayed = parseInt(row.cells[2].querySelector('input').value) || 0; // Matches Played
                let wins = parseInt(row.cells[3].querySelector('input').value) || 0;
                let draws = parseInt(row.cells[4].querySelector('input').value) || 0;
                let losses = parseInt(row.cells[5].querySelector('input').value) || 0;
                let goalsFor = parseInt(row.cells[6].querySelector('input').value) || 0;
                let goalsAgainst = parseInt(row.cells[7].querySelector('input').value) || 0;

                // Calculate Goal Difference
                let goalDifference = goalsFor - goalsAgainst;
                row.cells[8].querySelector('input').value = goalDifference;

                // Calculate Points (Wins * 3 + Draws)
                let points = (wins * 3) + draws;
                row.cells[9].querySelector('input').value = points;

                // Get team ID
                let teamId = row.getAttribute(
                    'data-team-id'); // Team ID should be added in data attributes of each row

                // Send data to the server using AJAX
                $.ajax({
                    url: '/update-team-stats',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        team_id: teamId,
                        matches_played: matchesPlayed,
                        wins: wins,
                        draws: draws,
                        losses: losses,
                        goals_for: goalsFor,
                        goals_against: goalsAgainst,
                        goal_difference: goalDifference,
                        points: points
                    },
                    success: function(response) {
                        console.log(response.message);
                    },
                    error: function(xhr) {
                        console.error('Error:', xhr.responseText);
                    }
                });

            });

            // Re-sort and reassign positions after the update
            sortTable(rows);
        }




        // Function to prevent manual changes to Points (Pts)
        function updateStatsFromPts() {
            let rows = document.querySelectorAll('#standingsTable tr');

            rows.forEach(row => {
                // Get the values from the inputs
                let wins = parseInt(row.cells[3].querySelector('input').value) || 0;
                let draws = parseInt(row.cells[4].querySelector('input').value) || 0;
                let losses = parseInt(row.cells[5].querySelector('input').value) || 0;

                // Recalculate Points (Wins * 3 + Draws)
                let calculatedPoints = (wins * 3) + (draws);

                // If the manually entered value doesn't match the calculated points, reset it
                let pointsInput = row.cells[9].querySelector('input');
                if (parseInt(pointsInput.value) !== calculatedPoints) {
                    pointsInput.value = calculatedPoints; // Reset to calculated value
                }
            });

            // Re-sort the table based on updated stats
            sortTable();
        }

        // Function to sort the table based on points, goal difference, and goals scored
        function sortTable(rows) {
            rows.sort((a, b) => {
                let pointsA = parseInt(a.cells[9].querySelector('input').value) || 0;
                let pointsB = parseInt(b.cells[9].querySelector('input').value) || 0;

                if (pointsA !== pointsB) return pointsB - pointsA; // Sort by Points
                let goalDiffA = parseInt(a.cells[8].querySelector('input').value) || 0;
                let goalDiffB = parseInt(b.cells[8].querySelector('input').value) || 0;
                if (goalDiffA !== goalDiffB) return goalDiffB - goalDiffA; // Sort by Goal Difference
                let winsA = parseInt(a.cells[3].querySelector('input').value) || 0;
                let winsB = parseInt(b.cells[3].querySelector('input').value) || 0;
                return winsB - winsA; // Sort by Wins
            });

            // Re-order the table rows based on the sorting
            const tbody = document.querySelector('#standingsTable tbody');
            rows.forEach(row => tbody.appendChild(row));

            // Reassign positions after sorting
            rows.forEach((row, index) => {
                row.cells[0].querySelector('.position-badge').textContent = index + 1;
            });
        }
    </script>
</body>

</html>
