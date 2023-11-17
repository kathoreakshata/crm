<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST["username"];
    $companyname = $_POST["companyname"];

    // Generate a unique identifier based on username and timestamp
    $uniqueId = $companyname . "_" . time();

    // Process CSV file
    $csvFileName = $uniqueId . ".csv";
    $csvTempName = $_FILES["csvfile"]["tmp_name"];

    // Check if a file was uploaded
    if (is_uploaded_file($csvTempName)) {
        // Read CSV file content
        $csvContent = file_get_contents($csvTempName);

        // Append data to CSV file (you may want to customize the file path)
        $filePath = "uploads/" . $csvFileName;
        file_put_contents($filePath, $csvContent, FILE_APPEND);

        // Store other form data in the CSV file
        $dataToStore = "ID,Username,Company\n"; // Header for CSV file
        $dataToStore .= "$uniqueId,$username,$companyname\n"; // Data to be stored
        file_put_contents($filePath, $dataToStore, FILE_APPEND);

        // If you are using a database, you can insert data here
        // For example:
        $sql = "INSERT INTO demo (id, username, company, csv_file) VALUES ('$uniqueId', '$username', '$companyname', '$csvFileName')";
        $conn->query($sql);

        echo "Form submitted successfully!";
    } else {
        echo "Error uploading the CSV file.";
    }
} else {
    echo "Invalid request.";
}

// Close the database connection if opened
$conn->close();
?>
