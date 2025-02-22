<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile History</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            margin: 0;
        }
        .sidebar {
            width: 250px;
            background-color: #333;
            color: white;
            height: 100vh;
            padding: 20px;
            position: fixed;
        }
        .sidebar h2 {
            text-align: center;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 10px;
            border-bottom: 1px solid #555;
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
        }
        .content {
            margin-left: 270px;
            padding: 20px;
            flex-grow: 1;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Student Services</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Student Housing</a></li>
            <li><a href="#">Food Service</a></li>
            <li><a href="#">Student Discipline</a></li>
            <li><a href="#">History</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>History of Viewed Student Profiles</h2>
        <table>
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Last Viewed</th>
                </tr>
            </thead>
            <tbody id="history-table">
                <tr>
                    <td>2023001</td>
                    <td>John Doe</td>
                    <td>2025-02-20 10:30 AM</td>
                </tr>
                <tr>
                    <td>2023002</td>
                    <td>Jane Smith</td>
                    <td>2025-02-19 3:45 PM</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        function addHistoryEntry(id, name) {
            const table = document.getElementById("history-table");
            const row = table.insertRow(0);
            const idCell = row.insertCell(0);
            const nameCell = row.insertCell(1);
            const timeCell = row.insertCell(2);
            idCell.textContent = id;
            nameCell.textContent = name;
            timeCell.textContent = new Date().toLocaleString();
        }
        // Example: addHistoryEntry("2023003", "Michael Johnson");
    </script>
</body>
</html>
