<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* CSS Reset and Root Variables */
        :root {
            --sidebar-width: 250px;
            --primary-color: #2c3e50; /* Unused in this version */
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --text-primary: #333;
            --background-light: #f4f4f4;
            --background-dark: #1e1e2d;
            --text-light: #fff;
            --feed-bg-color: #f9f9f9;
            --feed-border-color: #eee;
            --feed-text-color: #555;
        }

        /* Basic Reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            text-decoration: none;
        }

        body {
            display: flex;
            height: 100vh;
            background: var(--background-light);
            overflow: hidden;
        }

        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            background: var(--background-dark);
            color: white;
            padding-top: 20px;
            position: fixed;
            text-align: center;
        }

        /* Improved Image Styling */
        .sidebar img {
            display: block;
            margin: 15px auto; /* Adjusted top/bottom margin */
            width: 120px; /* Slightly larger width */
            border-bottom: 1px solid rgba(255, 255, 255, 0.2); /* Added line */
            padding-bottom: 15px; /* Spacing below the line */
        }

        /* Improve Heading Alignment */
        .sidebar h2 {
            text-align: center;
            font-size: 20px;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 12px 20px;
            transition: 0.3s;
            text-align: left;
        }

        .sidebar ul li a i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .sidebar ul li a:hover {
            background: #ffcc00;
            color: black;
            border-radius: 5px;
        }

        /* Content Styles */
        .content {
            flex-grow: 1;
            margin-left: var(--sidebar-width);
            padding: 20px;
            background: var(--background-light);
            min-height: 100vh;
            overflow: auto; /* Allows scrolling within the content area */
        }

        /* "Feed" Styles */
        .feed-container {
            background: var(--feed-bg-color);
            border: 1px solid var(--feed-border-color);
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .feed-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .feed-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid var(--feed-border-color);
            color: var(--feed-text-color);
            cursor: pointer;
        }

        .feed-item:last-child {
            border-bottom: none;
        }

        .feed-item i {
            margin-right: 10px;
            color: var(--secondary-color); /* Icon color */
            width: 20px;
            text-align: center;
        }

        .feed-item .feed-label {
            flex-grow: 1;
            text-align: left;
        }

        .feed-item .feed-value {
            font-weight: bold;
        }

        /* Chart Styles - Resized */
        .charts {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .chart-container {
            width: 45%;
            min-width: 300px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
            margin-bottom: 20px;
            height: 300px;
        }

        .chart-container canvas {
            width: 100% !important;
            height: 100% !important;
        }

        @media (max-width: 768px) {
            .chart-container {
                width: 100%;
            }
        }

        /* Landing Page Styles */
        .landing-page {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--background-dark);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 1000;
            animation: fadeOut 2s ease-in-out forwards;
        }

        .landing-page h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            animation: slideIn 1.5s ease-in-out;
        }

        .landing-page p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.8);
            animation: slideIn 1.5s ease-in-out 0.5s;
            opacity: 0;
            animation-fill-mode: forwards;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                visibility: hidden;
            }
        }

    </style>
</head>
<body>

    <!-- Landing Page -->
    <div class="landing-page">
        <h1>Welcome To Admin Panel</h1>
        <p>Manage student profiles ┃ counseling sessions ┃ referrals ┃ analytical efficiency</p>
    </div>

    <!-- New Sidebar -->
    <div class="sidebar">
        <img src="../CSS/LogoAU.png" alt="Profile">
        <h2>Guidance System</h2>
        
        <ul>
        <li class="active"><a href="adminn.php"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="counseling.php"><i class="fas fa-comments"></i> Counseling</a></li>
            <li><a href="record.php"><i class="fas fa-comments"></i> Record</a></li>
            <li><a href="repord-admin.php"><i class="fas fa-comments"></i> Report</a></li>
            <li><a href="consult.php"><i class="fas fa-comments"></i> Consult</a></li>
        </ul>

        <a href="/GuidanceSystem-main/updated/user-login.php">
    <button class="log-out-btn">Log Out</button>
</a>
    </div>
    <div class="content">
        <h1>Admin Dashboard</h1>
        <p>Overview of System Statistics</p>

        <!-- "Feed" Section -->
        <div class="feed-container">
            <ul class="feed-list">
                <li class="feed-item" onclick="updateCharts([120, 10, 5, 2, 50, 100])">
                    <i class="fas fa-calendar-alt"></i>
                    <span class="feed-label">Number of Appointments</span>
                    <span class="feed-value">20</span>
                </li>
                <li class="feed-item" onclick="updateCharts([45, 8, 3, 1, 25, 50])">
                    <i class="fas fa-check-circle"></i>
                    <span class="feed-label">Number of Completed</span>
                    <span class="feed-value">6</span>
                </li>
                <li class="feed-item" onclick="updateCharts([30, 12, 7, 4, 30, 60])">
                    <i class="fas fa-book"></i>
                    <span class="feed-label">Number of Courses</span>
                    <span class="feed-value">10</span>
                </li>
                <li class="feed-item" onclick="updateCharts([25, 5, 2, 1, 15, 30])">
                    <i class="fas fa-users"></i>
                    <span class="feed-label">Number of Students</span>
                    <span class="feed-value">50</span>
                </li>
                 <li class="feed-item" onclick="updateCharts([100, 20, 10, 5, 60, 120])">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span class="feed-label">Number of Reasons for Referral</span>
                    <span class="feed-value">23</span>
                </li>
            </ul>
        </div>

        <div class="charts">
            <div class="chart-container"><canvas id="pieChart"></canvas></div>
            <div class="chart-container"><canvas id="barChart"></canvas></div>
        </div>

    

    <script>
        // Chart.js Configuration
        const dataValues = [120, 45, 30, 25, 100, 200];
        const labels = ["Referrals", "Appointments", "Indiv. Counseling", "Group Counseling", "Completed Cases", "Website Visits"];
        const colors = ["#FF6384", "#36A2EB", "#FFCE56", "#4BC0C0", "#9966FF", "#FF9F40"];

        // Chart initialization
        let pieChart, barChart;

        function initializeCharts(data) {
            pieChart = new Chart(document.getElementById("pieChart"), {
                type: "pie",
                data: { labels: labels, datasets: [{ data: data, backgroundColor: colors }] },
                options: { maintainAspectRatio: false } // Allow manual resizing
            });

            barChart = new Chart(document.getElementById("barChart"), {
                type: "bar",
                data: { labels: labels, datasets: [{ label: "Count", data: data, backgroundColor: colors }] },
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // Allow manual resizing
                    scales: { y: { beginAtZero: true } }
                }
            });
        }

        // Function to update chart data
        function updateCharts(data) {
             if (pieChart && barChart) {
                pieChart.data.datasets[0].data = data;
                barChart.data.datasets[0].data = data;
                pieChart.update();
                barChart.update();
            }
        }

        // Initialize Charts
        initializeCharts(dataValues);

        // Remove Landing Page After Animation
        setTimeout(() => {
            const landingPage = document.querySelector('.landing-page');
            if (landingPage) {
              landingPage.style.display = 'none';
            }
        }, 2000);
    </script>
</body>
</html>

