<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "guidance_system");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST["name"];
    $student_no = $_POST["student_no"];
    $lrn = $_POST["lrn"];
    $grade_level = $_POST["grade_level"];
    $strand = $_POST["strand"];
    $section = $_POST["section"];
    $email = $_POST["email"];
    $reason = $_POST["reason_for_consultation"];
    $other_reason = isset($_POST["other_reason"]) ? $_POST["other_reason"] : "";
    $preferred_date = $_POST["preferred_date"];
    $preferred_time = $_POST["preferred_time"];
    $additional_info = $_POST["additional_info"];

    // File upload handling
    $file_name = "";
    if (!empty($_FILES["supporting_file"]["name"])) {
        $target_dir = "uploads/";
        $file_name = basename($_FILES["supporting_file"]["name"]);
        $target_file = $target_dir . $file_name;
        move_uploaded_file($_FILES["supporting_file"]["tmp_name"], $target_file);
    }

    $stmt = $conn->prepare("INSERT INTO consultation_requests (name, student_no, lrn, grade_level, strand, section, email, reason_for_consultation, other_reason, preferred_date, preferred_time, additional_info, supporting_file) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssss", $name, $student_no, $lrn, $grade_level, $strand, $section, $email, $reason, $other_reason, $preferred_date, $preferred_time, $additional_info, $file_name);

    if ($stmt->execute()) {
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
