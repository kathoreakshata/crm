<!-- Database Start-->

<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "bwm_crm";

$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con) {
    echo "not connect";
}


//Start

$User_Name = $_POST['Username'];
$Company_Name = $_POST['Companyname'];
$QC_Report = $_POST['QCreport'];
$csv_file = $_FILES['csv']['tmp_name'];

$csv_data = file_get_contents($csv_file);
$csv_data = mysqli_real_escape_string($con, $csv_data);


$sql = "INSERT INTO `material_sheet`(`Username`, `Companyname`, `QCreport`, `Materialsheet`) VALUES ('$User_Name','$Company_Name','$QC_Report','$csv_data')";


$result = mysqli_query($con, $sql);

if ($result)
{
    echo "data submited";
}

else
{
    echo "query faild..!";
}
?>
<!-- Database End -->