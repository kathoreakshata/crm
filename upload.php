<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file is selected
    if (isset($_FILES["file"])) {
        $file = $_FILES["file"];

        // Check if the file is a CSV file
        $fileType = pathinfo($file["name"], PATHINFO_EXTENSION);
        if (strtolower($fileType) == "csv") {
            // Move the uploaded file to a directory on the server
            $uploadDir = 'uploads/';
            $uploadPath = $uploadDir . basename($file["name"]);

            if (move_uploaded_file($file["tmp_name"], $uploadPath)) {
                // Get additional input values
                $username = $conn->real_escape_string($_POST["username"]);
                $company = $conn->real_escape_string($_POST["company_name"]);

                // Insert file path into the database
                $sql = "INSERT INTO demo (username, company, csv_path) VALUES ('$username', '$company', '$uploadPath')";
                $result = $conn->query($sql);

                if (!$result) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                } else {
                    echo "CSV file and data have been successfully inserted into the database.";
                }
            } else {
                echo "Error uploading the file.";
            }
        } else {
            echo "Error: Only CSV files are allowed.";
        }
    } else {
        echo "Error: No file selected.";
    }
}

// Close the database connection
$conn->close();
?>
