<?php
include_once("csv.php");

$display_table='';
if (isset($_POST['upload']) && $_POST['upload'] == 'upload csv')
 {

    $upload_dir=getcwd().DIRECTORY_SEPARATOR.'/uploads';
    if($_FILES['csv']['error']==UPLOAD_ERR_OK)
    {
        $tmp_name=$_FILES['csv']['tmp_name'];
        $name=basename($_FILES['csv']['name']);
        $csvfile = $upload_dir.'/'.$name;
        move_uploaded_file($tmp_name,$csvfile);
        echo 'uploaded';
        $display_table=get_html($csvfile);
    }
}

?>
<html>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="csv" />
        <input type="submit" name="upload" value="upload csv" />
    </form>
    <div>
        <?php
        if(strlen($display_table)>0)
        {
         echo $display_table;
        }
          ?>
    </div>
</body>

</html>