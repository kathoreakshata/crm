<?php
function get_html($csv_file)
{
    $html = '<table border="1">';
    $file = fopen($csv_file, 'r');
    $header_arr = fgetcsv($file);
    $html .= '<thead>';
    $html .= '<tr>'; // Add a row for the header

    foreach ($header_arr as $k => $v) {
        $html .= '<th>' . $v . '</th>';
    }

    $html .= '</tr>'; // Close the header row
    $html .= '</thead>';

    $html .= '<tbody>';

    while ($line = fgetcsv($file)) {
        $html .= '<tr>';
        foreach ($line as $k => $v) {
            $html .= '<td>' . $v . '</td>';
        }
        $html .= '</tr>';
    }

    $html .= '</tbody>';

    $html .= '</table>'; // Close the table
    return $html;
}

//test
?>

<?php
$display_table = '';
if (isset($_POST['upload']) && $_POST['upload'] == 'upload csv') {
    $upload_dir = getcwd() . DIRECTORY_SEPARATOR . 'uploads';
    if ($_FILES['csv']['error'] == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['csv']['tmp_name'];
        $name = basename($_FILES['csv']['name']);
        $csvfile = $upload_dir . DIRECTORY_SEPARATOR . $name;
        move_uploaded_file($tmp_name, $csvfile);
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


<!-- ROW -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Material Sheet Generate</h3>
            </div>
            <div class="card-body">
                <form action="index.php?Material_Sheet" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">User Name</label>
                            <ul>
                                <li class="select-client">
                                    <select class="form-control select2-style1" data-placeholder="Choose One">
                                        <option label="Choose one"></option>
                                        <option value="1">Angeline Julliet</option>
                                        <option value="2">Helena Rose</option>
                                        <option value="13">Daniel Obrien</option>
                                        <option value="15">Jorah Randy</option>
                                        <option value="3" selected>Emma Watson</option>
                                        <option value="5">Bonny Benett</option>
                                        <option value="7">Jessie Spears</option>
                                        <option value="9">Skyler Hilda</option>
                                        <option value="11">Randy Orton</option>
                                        <option value="14">Benjamin Button</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">QR Report</label>
                        <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">1</option>
                            <option value="1">2</option>
                            <option value="2">3</option>
                            <option value="13">4</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="formFile" class="form-label">Upload Material Sheet</label>
                        <input class="form-control" type="file" id="formFile" name="csv">
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

<!-- Row -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-header border-bottom">
                <h3 class="card-title" b>Material Sheet</h3>
            </div>
            <div class="card-body">
                <!-- <p class="text-muted">Add borders on all sides of the table and cells.</p> -->
                <div class="table-responsive">
                    <table class="table text-nowrap text-md-nowrap table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    <?php
                                    if (strlen($display_table) > 0) {
                                        echo $display_table;
                                    }
                                    ?>
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->