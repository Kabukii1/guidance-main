<?php
session_start();
$_SESSION['username'] = 'Counselor';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Consultation List</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
    body { background-color: #f4f4f4; }

    header {
      background-color: #1a1a2e;
      color: #fff;
      padding: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .user-info { font-size: 0.9rem; opacity: 0.9; }

    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh; 
      width: 250px; 
      background-color: #1a1a2e; 
      z-index: 1000; 
      overflow-y: auto; 
    }

    .sidebar img {
      display: block;
      margin: 10px auto;
      width: 100px;
    }
    .sidebar h2 { text-align: center; font-size: 20px; margin-top: 10px; }
    .sidebar ul { list-style: none; padding: 10px; }
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
      margin-left: 270px;
      padding: 20px;
      background: #f4f4f4;
      min-height: 100vh;
    }
    .content h2 { margin-bottom: 1rem; color: #333; font-size: 1.3rem; }
    
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
    th { background: #1e1e2d; color: white; }
  </style>
</head>
<body>

<header>
  <h1>Consultation List</h1>
  <span class="user-info">You are logged in as <?php echo htmlspecialchars($_SESSION['username']); ?></span>
</header>

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

<div class="content">
  <h2>Consultation List</h2>
  <table>
    <thead>
      <tr>
        <th>Date</th>
        <th>Student Name</th>
        <th>Topic</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>February 21, 2025</td><td>Ilis Luls Pogi</td><td>Academic Concerns</td></tr>
      <tr><td>February 21, 2025</td><td>Jeda Sayo Selga</td><td>Personal Growth</td></tr>
      <tr><td>February 21, 2025</td><td>Lisa Pagibig Santos</td><td>Career Guidance</td></tr>
      <tr><td>February 20, 2025</td><td>Mark Cruz</td><td>Emotional Support</td></tr>
      <tr><td>February 20, 2025</td><td>Rhea Delos Reyes</td><td>Peer Conflict</td></tr>
    </tbody>
  </table>
</div>

</body>
</html>
