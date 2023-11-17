<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV Form</title>
</head>
<body>
    <form action="process.php" method="post" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="companyname">Company Name:</label>
        <input type="text" name="companyname" required><br>

        <label for="csvfile">CSV File:</label>
        <input type="file" name="csvfile" accept=".csv" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
