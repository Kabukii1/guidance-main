<?php
require '../vendor/autoload.php'; // Include Composer's autoloader for libraries

use Endroid\QrCode\QrCode;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Endroid\QrCode\Writer\PngWriter;

if (isset($_POST['submit'])) {
    // Sanitize and validate the report text
    $reportText = isset($_POST['report']) ? htmlspecialchars(trim($_POST['report'])) : '';

    // Sanitize and validate the office field
    $office = isset($_POST['office']) ? htmlspecialchars(trim($_POST['office'])) : 'Unspecified';
    $nature = isset($_POST['nature']) ? htmlspecialchars(trim($_POST['nature'])) : 'Unspecified';

    if (!empty($_POST['incidentDate'])) {
        $incidentDate = $_POST['incidentDate'];
        // Validate format: YYYY-MM-DD
        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $incidentDate)) {
            die("Invalid date format. Please select a valid date.");
        }
    } else {
        die("Please select an incident date.");
    }

    // Handle file uploads safely
    $files = $_FILES['files'];

    // Validate inputs
    if (empty($reportText) && empty($files['name'][0])) {
        echo '<p>Error: Please fill out at least one field (report text or file).</p>';
        exit;
    }

    // Generate unique ticket details
    $ticketNumber = time() . rand(1000, 9999);
    $ticketNature = $_POST['nature'];
    $ticketDate = date('Y-m-d');
    $filename = "../Tickets/Ticket_{$ticketNumber}.php";

    // Prepare directory for uploaded files
    $uploadDir = "../UploadedFiles/{$ticketNumber}/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Initialize uploaded files array
    $uploadedFiles = [];

    // Handle file uploads
    if (!empty($files['name'][0])) {
        foreach ($files['tmp_name'] as $key => $tmpName) {
            $originalName = $files['name'][$key];
            $fileExtension = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));
            $filePath = $uploadDir . basename($originalName);

            // Ensure unique file names
            $fileCounter = 1;
            while (file_exists($filePath)) {
                $filePath = $uploadDir . pathinfo($originalName, PATHINFO_FILENAME) . "_{$fileCounter}." . pathinfo($originalName, PATHINFO_EXTENSION);
                $fileCounter++;
            }

            // Validate file extension
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'docx']; // Add allowed extensions
            if (!in_array($fileExtension, $allowedExtensions)) {
                echo '<p>Error: Invalid file type uploaded.</p>';
                exit;
            }

            // Check for file size (max 100MB)
            if ($files['size'][$key] > 10485760) { // 100MB limit
                echo '<p>Error: File is too large. Maximum size is 100MB.</p>';
                 exit;
            }

            // Move the uploaded file
            if (move_uploaded_file($tmpName, $filePath)) {
                $uploadedFiles[] = $filePath;
            }
        }
    }

    // Flag for dependency availability
    $barcodeEnabled = class_exists('Picqer\Barcode\BarcodeGeneratorPNG');

    // Initialize the message for missing dependencies (optional)
    $missingDependenciesMessage = '';

    // Check if the BarcodeGeneratorPNG class exists before proceeding
    if (class_exists('Picqer\Barcode\BarcodeGeneratorPNG')) {
        // Generate barcode for ticket number
        try {
            $barcodeGenerator = new BarcodeGeneratorPNG();
            $barcode = $barcodeGenerator->getBarcode($ticketNumber, $barcodeGenerator::TYPE_CODE_128);
            $barcodePath = "{$uploadDir}barcode.png";
            file_put_contents($barcodePath, $barcode);
        } catch (Exception $e) {
            // Optionally, handle any exceptions during barcode generation
            echo "Error generating barcode: " . $e->getMessage();
        }
    } else {
        // Handle missing barcode dependency
        echo "Barcode generation is unavailable. Dependencies are missing.";
    }

    if (!empty($missingDependenciesMessage)) {
        echo $missingDependenciesMessage;  // Optionally show a message about the missing dependencies
    }

    // Continue with other ticket processing without stopping
    echo "Ticket processing continues as usual.";

    // Generate ticket content
    $uploadedFilesHTML = '';
    foreach ($uploadedFiles as $filePath) {
        $fileName = basename($filePath);
        $uploadedFilesHTML .= "<p><a href=\"../UploadedFiles/{$ticketNumber}/{$fileName}\" target=\"_blank\">View File: {$fileName}</a></p>";

        // Add preview for images
        $fileExtension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
        if (in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif'])) {
            $uploadedFilesHTML .= "<img src=\"../UploadedFiles/{$ticketNumber}/{$fileName}\" alt=\"Uploaded Image\" style=\"max-width: 200px; display: block; margin-bottom: 10px;\">";
        }
    }

    $htmlContent = "
    <?php include '../Partphp/RH.php'; ?>
    <h1>Ticket Details</h1>
    <p><strong>Ticket Number:</strong> $ticketNumber</p>
    <p><strong>Ticket Nature:</strong> $ticketNature</p>
    <p><strong>Date:</strong> $ticketDate</p>
    <p><strong>Incident Date:</strong> $incidentDate</p>
    <p><strong>Office:</strong> $office</p>
    <p><strong>Report Nature:</strong> $nature</p>
    <p><strong>Report Text:</strong> 
        <br>
        $reportText
    </p>
    <h2>Uploaded Files:</h2>
        $uploadedFilesHTML
    <h2>Ticket Barcode</h2>
    <img src=\"$barcodePath\" alt=\"Barcode\">
    <?php include '../Partphp/RF.php'; ?>
    ";
    
    error_log("Ticket file created successfully: " . $filename);

    // Save ticket file
    if (file_put_contents($filename, $htmlContent)) {
        // Save ticket info to registry
        $ticketRegistryFile = 'tickets.json';
        $newTicket = [
            'number' => $ticketNumber,
            'nature' => $ticketNature,
            'date' => $ticketDate,
            'office' => $office,
            'Idate' => $incidentDate,
        ];

        if (file_exists($ticketRegistryFile)) {
            $ticketData = json_decode(file_get_contents($ticketRegistryFile), true);
        } else {
            $ticketData = [];
        }

        $ticketData[] = $newTicket;
        file_put_contents($ticketRegistryFile, json_encode($ticketData));

        // Redirect to the ticket page
        error_log("Redirecting to: " . $filename);
        header('Location: ' . $filename);
        exit;

    } else {
        echo '<p>Error saving the ticket. Please try again later.</p>';
        error_log("Error saving ticket: $filename");
        if (file_exists($filename)) {
            unlink($filename);
        }
    }
}