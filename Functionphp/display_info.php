<?php

// Initialize variables
$student_no = 'N/A';
$lrn = 'N/A';

// Check if session variables are set
if (isset($_SESSION['student_no']) && isset($_SESSION['lrn'])) {
    // Get student number and LRN from session variables
    $student_no = $_SESSION['student_no'];
    $lrn = $_SESSION['lrn'];
}

// Output the values
echo '<script>';
echo 'var studentNo = "' . $student_no . '";';
echo 'var lrn = "' . $lrn . '";';
echo '</script>';
?>
