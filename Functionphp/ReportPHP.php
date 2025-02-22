<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["report"])) {
    // Process the report data here
    // For demonstration, just echoing the report content
    echo $_POST["report"];
} else {
    echo "Error: Invalid request.";
}
?>
