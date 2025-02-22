<?php
// Include database connection
include '../updated/db-conn.php';

// Query to fetch student consultation records
$sql = "SELECT id, name, preferred_date FROM consultation_requests ORDER BY preferred_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Student Profiling</title>
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

        .student-list {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 20px;
        }

        .student-list table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 18px;
        }

        .student-list th, .student-list td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .student-list th {
            background-color: #1e1e2d;
            color: white;
        }

        /* Popup styles */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            width: 400px;
            text-align: center;
        }

        .popup button {
            margin-top: 10px;
            padding: 8px 15px;
            border: none;
            background: #1e1e2d;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .popup button:hover {
            background: #ffcc00;
            color: black;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1;
        }
    </style>
</head>
<body>
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
    </div>

    <div class="content">
    <h2>Student Consultation List</h2>

    <div class="student-list">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Consultation Date</th>
                    <th>Approval</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td><span class='name' data-id='" . $row["id"] . "'>" . $row["name"] . "</span></td>";
                        echo "<td>" . $row["preferred_date"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Overlay for Popup -->
<div class="overlay" id="overlay"></div>

<!-- Popup Window -->
<div class="popup" id="consultationPopup">
    <h2>Consultation Details</h2>
    <div id="consultationDetails"></div>
    <button onclick="closePopup()">Close</button>
</div>

<script>
$(document).ready(function(){
    $(".name").click(function(){
        var studentId = $(this).data("id");

        $.ajax({
            url: "fetch_consultation.php",
            type: "POST",
            data: { id: studentId },
            success: function(response){
                $("#consultationDetails").html(response);
                $("#overlay").fadeIn();
                $("#consultationPopup").fadeIn();
            }
        });
    });

    $("#overlay").click(function(){
        closePopup();
    });
});

function closePopup() {
    $("#consultationPopup").fadeOut();
    $("#overlay").fadeOut();
}
</script>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>