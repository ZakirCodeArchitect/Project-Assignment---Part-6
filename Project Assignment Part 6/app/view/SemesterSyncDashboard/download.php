<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "semestersyncusersdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the 'file' parameter is set in the URL
if (isset($_GET['file'])) {
    // Fetch the file content from the database based on the file name
    $fileName = $_GET['file'];
    $sql = "SELECT File FROM files WHERE fileName = '$fileName'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Retrieve the file content
        $row = $result->fetch_assoc();
        $fileContent = $row['File'];

        // Set the appropriate headers for file download
        header('Content-Type: application/pdf'); // Change the content type based on the file type
        header('Content-Disposition: attachment; filename="' . $fileName . '"');
        header('Content-Length: ' . strlen($fileContent));

        // Output the file content
        echo $fileContent;
    } else {
        echo "File not found.";
    }
} else {
    echo "Invalid request.";
}

mysqli_close($conn);
