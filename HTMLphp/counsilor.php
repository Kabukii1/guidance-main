<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Student Profiling</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f4f4;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background: #1e1e2d;
            color: white;
            padding-top: 20px;
            position: fixed;
        }

        .sidebar img {
            display: block;
            margin: 10px auto;
            width: 100px;
        }

        .sidebar h2 {
            text-align: center;
            font-size: 20px;
            margin-top: 10px;
        }

        .sidebar ul {
            list-style: none;
            padding: 10px;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            transition: 0.3s;
        }

        .sidebar ul li a:hover {
            background: #ffcc00;
            color: black;
            border-radius: 5px;
        }

        .content {
            flex-grow: 1;
            margin-left: 270px;
            padding: 20px;
            background: #f4f4f4;
            min-height: 100vh;
        }

        .dashboard-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 20px;
            text-align: center;
        }

        .dashboard-card h3 {
            font-size: 24px;
            color: #333;
        }

        .dashboard-stats {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .stat-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
            width: 30%;
        }

        .stat-box h4 {
            font-size: 20px;
            color: #333;
        }

        .chart-container {
            margin-top: 20px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #1e1e2d;
            color: white;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <img src="../CSS/LogoAU.png" alt="Profile">
        <h2>Counselor</h2>
        <ul>
        <li><a href="counsilor.php"><i class="fas fa-comments"></i> Counselor</a></li>
            <li><a href="consul.php"><i class="fas fa-comments"></i> Consult</a></li>
            <li><a href="reportt.php"><i class="fas fa-comments"></i> Report</a></li>
            <li><a href="counselingpage.php"><i class="fas fa-comments"></i> Counseling</a></li>
            <li><a href="recordd.php"><i class="fas fa-comments"></i> Record</a></li>
        </ul>
    </div>

    <div class="content" id="main-content">
        <div class="dashboard-card">
            <h3>Dashboard</h3>
            <div class="chart-container">
                <canvas id="reportChart"></canvas>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Dela Cruz</td>
                        <td>Report</td>
                        <td>Feb 20, 2025</td>
                    </tr>
                    <tr>
                        <td>Maria Santos</td>
                        <td>Consultation</td>
                        <td>Feb 19, 2025</td>
                    </tr>
                    <tr>
                        <td>James Villanueva</td>
                        <td>Counseling</td>
                        <td>Feb 18, 2025</td>
                    </tr>
                    <tr>
                        <td>Anna Reyes</td>
                        <td>Consultation</td>
                        <td>Feb 17, 2025</td>
                    </tr>
                    <tr>
                        <td>Mark Gonzales</td>
                        <td>Report</td>
                        <td>Feb 16, 2025</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function generateChart() {
            const ctx = document.getElementById('reportChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Reports', 'Consultations', 'Counseling'],
                    datasets: [{
                        label: 'Count',
                        data: [120, 85, 45],
                        backgroundColor: ['#ff6384', '#36a2eb', '#ffce56']
                    }]
                }
            });
        }

        generateChart();
    </script>
</body>
</html>
