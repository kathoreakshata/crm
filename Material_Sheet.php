
<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Material List</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Material Sheet</a></li>
            <li class="breadcrumb-item active" aria-current="page">Material List</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="mb-3">
    <label for="formFile" class="form-label">Download Material Sheet Format</label>
    <a href="Material Sheet Format.csv" class="btn btn-primary" download>Download </a>
</div><br>


<!-- ROW -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Material Sheet Generate</h3>
            </div>
            <div class="card-body">
                <form action="index.php?Material_Sheet" method="post" enctype="multipart/form-data"
                    class="row g-3 needs-validation" novalidate>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">User Name</label>
                            <input type="text" name="username" class="form-control" id="validationCustom01" required>
                            <div class="valid-feedback">
                            User Name
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Company Name</label>
                        <input type="text" name="companyname" class="form-control" id="validationCustom01"  required>
                        <div class="valid-feedback">
                            Company Name
                        </div>
                    </div>

                    <div class="col-4">
                        <label for="formFile" class="form-label">Upload Material Sheet</label>
                        <input class="form-control" type="file" id="formFile" name="csvfile">
                        <br>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" name="upload" value="upload csv">Submit
                            form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ROW CLOSED -->

<!-- Material Sheet Table -->
<div class="row">
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table id="editable-file-datatable" class="table table-nowrap table-bordered wp-100">
                            
                            <tbody>
                                <?php
                                $select_query = "SELECT * FROM mastersheet WHERE csv_file = 'E-waste_1701422237.csv'";
                                $result_query = mysqli_query($con, $select_query);
                                $row = mysqli_fetch_assoc($result_query);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include("connection/connectdb.php");

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
        $sql = "INSERT INTO mastersheet (id, username, company, csv_file) VALUES ('$uniqueId', '$username', '$companyname', '$csvFileName')";
        $con->query($sql);

        echo "<h4 style='color:#047cbc;'>Material Sheet submitted successfully!</h4>";
    } else {
        echo "<h4 style='color:#047cbc;'>Error Material Sheet submitted.</h4>";
    }
} else {
    echo "<h4 style='color:#047cbc;'>Invalid request.</h4>";
}

// Close the database connection if opened
$con->close();
?>

