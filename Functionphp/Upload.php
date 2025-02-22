<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["files"]["name"])) {
    $targetDir = "../uploads/";
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'mp4', 'avi', 'mov');
    $files = array_filter($_FILES["files"]["name"]);
    $uploadedFiles = array();
    
    foreach ($files as $key => $value) {
        $fileName = basename($_FILES["files"]["name"][$key]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                $uploadedFiles[] = $fileName;
            }
        }
    }
    
    echo json_encode($uploadedFiles);
} else {
    echo json_encode(array('error' => 'Invalid request.'));
}
?>
