<?php
session_start();
include '../updated/db-conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['student_no']) && isset($_POST['lrn'])) {
        $student_no = $_POST['student_no'];
        $lrn = $_POST['lrn'];

        // Prepare the SQL statement to prevent SQL injection
        $query = "SELECT * FROM users WHERE student_no = ? AND lrn = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $student_no, $lrn);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['student_no'] = $student_no;
            header("Location: ../HTMLphp/home.php"); // Redirect sa homepage
            exit();
        } else {
            $error = "Invalid Student Number or LRN.";
        }

        $stmt->close();
        $conn->close();
    } else {
        $error = "Please enter both Student Number and LRN.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('../Pics/picss.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.85);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }

        h2 {
            margin-bottom: 1rem;
            color: #333;
        }

        label {
            display: block;
            font-weight: bold;
            margin: 10px 0 5px;
            color: #555;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
        }

        input:focus {
            border-color: #2575fc;
            box-shadow: 0 0 5px rgba(37, 117, 252, 0.5);
        }

        button {
            width: 100%;
            padding: 10px;
            background: #2575fc;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background: #1e5bc6;
        }

        .admin-button {
            background: #ff4b4b;
            margin-top: 5px;
        }

        .admin-button:hover {
            background: #c93c3c;
        }

        p {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
        <form action="user-login.php" method="POST">
            <label for="student_no">Student No:</label>
            <input type="text" name="student_no" required>
            
            <label for="lrn">LRN:</label>
            <input type="text" name="lrn" required>

            <button type="submit">Login</button>
        </form>
        
        <!-- Admin Access Button -->
        <button class="admin-button" onclick="window.location.href='http://localhost/GuidanceSystem-main/updated/admin-login.php'">Admin Access</button>
    </div>
</body>
</html>
