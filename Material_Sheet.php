<?php
function get_html($csv_file)
{
    $html = '<table border="1">';
    $file = fopen($csv_file, 'r');
    $header_arr = fgetcsv($file);
    $html .= '<thead>';

    foreach ($header_arr as $k => $v) {
        $html .= '<th>' . $v . '</th>';
    }

    $html .= '<thead>';

    $html .= '<tbody>';

    while ($line = fgetcsv($file)) {
        $html .= '<tr>';
        foreach ($line as $k => $v) {
            $html .= '<td>' . $v . '</td>';
        }
        $html .= '</tr>';
    }

    $html .= '</tbody>';

    $html .= '</thead>';
    return $html;
}

//test


?>


<?php

$display_table = '';
if (isset($_POST['upload']) && $_POST['upload'] == 'upload csv') {

    $upload_dir = getcwd() . DIRECTORY_SEPARATOR . '/uploads';
    if ($_FILES['csv']['error'] == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['csv']['tmp_name'];
        $name = basename($_FILES['csv']['name']);
        $csvfile = $upload_dir . '/' . $name;
        move_uploaded_file($tmp_name, $csvfile);
        echo 'uploaded';
        $display_table = get_html($csvfile);
    }
}

?>


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

<div class="mb-3">
    <form action="" method="post" enctype="multipart/form-data">
        <label for="formFile" class="form-label">Upload Material Sheet</label>
        <input class="form-control" type="file" id="formFile" name="csv">
        <br>
        <input type="submit" name="upload" value="upload csv" />
    </form>

</div>

<caption>Material List</caption>

<div>
    <?php
    if (strlen($display_table) > 0) {
        echo $display_table;
    }
    ?>
</div>