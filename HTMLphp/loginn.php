<?php
session_start();

include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //check if user exist
    $query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

        if ($password === $user['password']) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;

            header('Location: index.php');
            exit;
        } else {
            $error = "Invalid username or password!";
        }
    } else {
        $error = "Invalid username or password!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
            overflow: hidden;
        }

        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('school.jpg'); 
            background-size: cover;
            background-position: center;
            filter: blur(5px);
            z-index: -1;
        }

        .container {
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .logo {
            width: 180px;
            height: 180px;
            background: url('logo.png') no-repeat center/cover;
            margin: 0 auto 20px;
            animation: spin 10s linear infinite;
            cursor: pointer;
            transition: opacity 1s ease-out;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .login-form {
            display: none;
            opacity: 0;
            animation: fadeIn 1s forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .login-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 40px;
            padding-right: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .submit-button {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        .submit-button:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="container">
        <div class="logo"></div>
        <div class="login-form">
            <div class="login-container">
                <h2>Login</h2>
                <?php if (!empty($error)): ?>
                    <p class="error-message"><?php echo $error; ?></p>
                <?php endif; ?>
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit" class="submit-button">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.logo').addEventListener('click', function() {
            const logo = document.querySelector('.logo');
            const loginForm = document.querySelector('.login-form');

            logo.style.opacity = '0';
            setTimeout(() => {
                logo.style.display = 'none';
                loginForm.style.display = 'block';
                loginForm.style.opacity = '1';
            }, 1000);
        });
    </script>
</body>
</html>



