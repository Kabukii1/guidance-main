<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $student_no = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '';
    $lrn = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';

    // Define credentials for admin access
    $admin_student_no = 'JRC-SHS-23-345678';
    $admin_lrn = '136800120064';

    // Validate student number format
    if (!preg_match('/^JRC-(SHS|JHS)-\d{2}-\d{6}$/', $student_no)) {
        // Invalid format, return error response
        $response = array('success' => false, 'message' => 'Invalid student number format');
    } elseif (strlen($lrn) != 12) {
        // LRN length validation: LRN must be exactly 12 characters long
        $response = array('success' => false, 'message' => 'LRN must be exactly 12 characters long');
    } else {
        // Check if the submitted credentials match the admin credentials
        if ($student_no === $admin_student_no && $lrn === $admin_lrn) {
            // Redirect admin user to the admin interface page
            $_SESSION['is_admin'] = true;
            $_SESSION['student_no'] = $student_no;
            $_SESSION['lrn'] = $lrn;
            $response = array('success' => true, 'message' => 'Login successful', 'is_admin' => true);
        } else {
            // Store relevant information in session variables if login is successful for regular users
            $_SESSION['is_admin'] = false;
            $_SESSION['student_no'] = $student_no;
            $_SESSION['lrn'] = $lrn;
            // Return success response
            $response = array('success' => true, 'message' => 'Login successful', 'is_admin' => false);
        }
    }

    // Output the response as JSON
    echo json_encode($response);
} else {
    // If the request method is not POST, return an error response
    $response = array('success' => false, 'message' => 'Form submission method not allowed');

    // Output the response as JSON
    echo json_encode($response);
}
?>
