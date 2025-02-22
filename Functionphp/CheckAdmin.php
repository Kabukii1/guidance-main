<?php
session_start();

// Check if user is admin (you can adjust this logic based on how you determine admin status)
$isAdmin = isset($_SESSION['is_admin']) ? $_SESSION['is_admin'] : false;

// Return JSON response
header('Content-Type: application/json');
echo json_encode(array('is_admin' => $isAdmin));
?>
