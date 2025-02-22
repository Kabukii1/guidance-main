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

        .profile-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 20px;
        }

        .student-form {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: space-between;
        }

        .student-form input {
            flex: 1;
            min-width: 300px;
            padding: 14px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 18px;
        }

        .student-form button {
            flex: 1;
            min-width: 300px;
            padding: 14px;
            background: #1e1e2d;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }

        .student-form button:hover {
            background: #ffcc00;
            color: black;
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

        .view-profile-btn, .delete-btn {
            background-color: #1e1e2d;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .view-profile-btn:hover, .delete-btn:hover {
            background-color: #ffcc00;
            color: black;
        }

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
    </style>
</head>
<body>
<div class="sidebar">
        <img src="../CSS/LogoAU.png" alt="Profile">
        <h2>Guidance System</h2>
        
        <ul>
            <li class="active"><a href="adminn.php"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="referra.php"><i class="fas fa-user-plus"></i> Referral List</a></li>
            <li><a href="profiling.php"><i class="fas fa-users"></i> Student Profiling</a></li>
            <li><a href="counseling.php"><i class="fas fa-comments"></i> Counseling</a></li>
            <li><a href="records.php"><i class="fas fa-comments"></i> Record</a></li>
        </ul>
    </div>

<main class="content">
    <div class="profile-container">
        <h2>Student Profiling</h2>
        <form class="student-form">
            <input type="text" id="name" placeholder="Name">
            <input type="text" id="lrn" placeholder="LRN">
            <input type="text" id="strand" placeholder="Strand">
            <input type="text" id="grade" placeholder="Grade Level">
            <input type="text" id="section" placeholder="Section">
            <button type="button" onclick="saveProfile()">Save Profile</button>
        </form>
    </div>
    <div class="student-list">
        <h3>Student List</h3>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>LRN</th>
                    <th>Strand</th>
                    <th>Grade</th>
                    <th>Section</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="student-table-body"></tbody>
        </table>
    </div>
</main>

<div id="popup" class="popup">
    <h3>Student Profile</h3>
    <p id="popup-content"></p>
    <button onclick="closePopup()">Close</button>
</div>

<script>
    function saveProfile() {
        let name = document.getElementById('name').value;
        let lrn = document.getElementById('lrn').value;
        let strand = document.getElementById('strand').value;
        let grade = document.getElementById('grade').value;
        let section = document.getElementById('section').value;
        
        if (name && lrn && strand && grade && section) {
            let table = document.getElementById('student-table-body');
            let row = document.createElement('tr');
            row.innerHTML = `
                <td>${name}</td>
                <td>${lrn}</td>
                <td>${strand}</td>
                <td>${grade}</td>
                <td>${section}</td>
                <td>
                    <button class='view-profile-btn' onclick='viewProfile(this)'>View</button>
                    <button class='delete-btn' onclick='deleteRow(this)'>Delete</button>
                </td>
            `;
            table.appendChild(row);
        }
    }

    function viewProfile(button) {
        let row = button.parentElement.parentElement;
        let details = `Name: ${row.cells[0].innerText}<br>LRN: ${row.cells[1].innerText}<br>Strand: ${row.cells[2].innerText}<br>Grade: ${row.cells[3].innerText}<br>Section: ${row.cells[4].innerText}`;
        document.getElementById('popup-content').innerHTML = details;
        document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('popup').style.display = 'none';
    }

    function deleteRow(button) {
        button.parentElement.parentElement.remove();
    }
</script>
</body>
</html>
