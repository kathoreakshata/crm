<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV File Upload</title>
</head>
<body>
    <h2>Upload CSV File</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Choose CSV File:</label>
        <input type="file" name="file" id="file" accept=".csv" required>
        <br>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="company_name">Company Name:</label>
        <input type="text" name="company_name" id="company_name" required>
        <br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
