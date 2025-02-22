<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records - Guidance System</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

        .tabs {
            display: flex;
            margin-bottom: 20px;
        }

        .tab {
            padding: 10px 20px;
            background: #1e1e2d;
            color: white;
            cursor: pointer;
            border-radius: 5px 5px 0 0;
            margin-right: 5px;
        }

        .tab.active {
            background: #ffcc00;
            color: black;
        }

        .filter-section {
            background: white;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .filter-section label {
            margin-right: 10px;
        }

        .record-table {
            background: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #1e1e2d;
            color: white;
        }

        .view-btn {
            background: #1e1e2d;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .view-btn:hover {
            background: #ffcc00;
            color: black;
        }

        .details-section {
            display: none;
            background: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
        }

        .print-btn {
            background: #ffcc00;
            color: black;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <img src="../CSS/LogoAU.png" alt="Profile">
    <h2>Guidance System</h2>
    <ul>
    <ul>
    <li class="active"><a href="adminn.php"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="counseling.php"><i class="fas fa-comments"></i> Counseling</a></li>
            <li><a href="record.php"><i class="fas fa-comments"></i> Record</a></li>
            <li><a href="repord-admin.php"><i class="fas fa-comments"></i> Report</a></li>
            <li><a href="consult.php"><i class="fas fa-comments"></i> Consult</a></li>
        </ul>
</div>

<div class="content">
    <h2>Student Records</h2>

    <div class="tabs">
        <div class="tab active" data-tab="reports">Reports</div>
        <div class="tab" data-tab="counseling">Counseling</div>
        <div class="tab" data-tab="referrals">Referrals</div>
    </div>

    <div class="filter-section">
        <label>Date: <input type="date"></label>
        <label id="office-filter">Office: <input type="text"></label>
        <label>Reason: <input type="text"></label>
        <label id="strand-filter">Strand: <input type="text"></label>
        <label id="grade-filter">Grade: <input type="text"></label>
        <label id="urgency-filter" style="display:none;">Urgency: <input type="text"></label>
        <label id="source-filter" style="display:none;">Source: <input type="text"></label>
    </div>

    <div class="record-table">
        <table>
            <tr>
                <th>Student Name</th>
                <th>Type</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>Juan Dela Cruz</td>
                <td>Report</td>
                <td>2025-02-19</td>
                <td><button class="view-btn" onclick="viewDetails('Juan Dela Cruz')">View</button></td>
            </tr>
            <tr>
                <td>Maria Santos</td>
                <td>Counseling</td>
                <td>2025-02-19</td>
                <td><button class="view-btn" onclick="viewDetails('Maria Santos')">View</button></td>
            </tr>
        </table>
    </div>

    <div class="details-section" id="details-section">
        <h3>Record Details</h3>
        <p id="record-details"></p>
        <button class="print-btn" onclick="window.print()">Print</button>
    </div>
</div>

<script>
    function viewDetails(name) {
        document.getElementById("record-details").innerText = "Details of " + name;
        document.getElementById("details-section").style.display = "block";
    }

    $(".tab").click(function () {
        $(".tab").removeClass("active");
        $(this).addClass("active");
    });
</script>

</body>
</html>
