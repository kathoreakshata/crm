<?php
include("connection/connectdb.php");
?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Inspection Sheet</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Inspection</a></li>
            <li class="breadcrumb-item active" aria-current="page">Inspection Sheet</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<!-- Row -->
<div class="row">
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table id="editable-file-datatable" class="table table-nowrap table-bordered wp-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product</th>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Power</th>
                                    <th>Processor</th>
                                    <th>RAM</th>
                                    <th>Hard Disk</th>
                                    <th>Screen Size</th>
                                    <th>External Graphic Card</th>
                                    <th>Functionality</th>
                                    <th>Age of device</th>
                                    <th>Screen Condition</th>
                                    <th>Physical Condition</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select_query = "SELECT * FROM `inspection_sheet_data_cashify_model`";
                                $result_query = mysqli_query($con, $select_query);
                                while($row = mysqli_fetch_assoc($result_query)){
                                    $id = $row['id'];
                                    $Product = $row['Product'];
                                    $Brand = $row['Brand'];
                                    $Model = $row['Model'];
                                    $Power = $row['Power'];
                                    $Processor = $row['Processor'];
                                    $RAM = $row['RAM'];
                                    $Hard_Disk = $row['Hard_Disk'];
                                    $Screen_Size = $row['Screen_Size'];
                                    $External_Graphic_Card = $row['External_Graphic_Card'];
                                    $Functionality = $row['Functionality'];
                                    $Age_of_device = $row['Age_of_device'];
                                    $Screen_Condition = $row['Screen_Condition'];
                                    $Physical_Condition = $row['Physical_Condition'];
                                    echo "<tr>
                                    <td>$id</td>
                                    <td>$Product</td>
                                    <td>$Brand</td>
                                    <td>$Model</td>
                                    <td>$Power</td>
                                    <td>$Processor</td>
                                    <td>$RAM</td>
                                    <td>$Hard_Disk</td>
                                    <td>$Screen_Size</td>
                                    <td>$External_Graphic_Card</td>
                                    <td>$Functionality</td>
                                    <td>$Age_of_device</td>
                                    <td>$Screen_Condition</td>
                                    <td>$Physical_Condition</td>
                                    <td style='width: 100px'>
                                        <a href='index.php?Form_Edit_Inspection_Sheet2=$id' class='btn btn-primary fs-14 text-white edit-icn' title='Edit'>
                                            <i class='fe fe-edit'></i>
                                        </a>
                                    </td>
                                </tr>";
                                }
                                ?>
                                <!-- <tr data-id="1">
                                    <td>1</td>
                                    <td>Laptop</td>
                                    <td>HP</td>
                                    <td>Pavilion Series</td>
                                    <td>Yes</td>
                                    <td>Intel Core 2 Duo</td>
                                    <td>512 GB</td>
                                    <td>60 GB HDD</td>
                                    <td>10 - 11 Inch</td>
                                    <td>Graphic Card Available</td>
                                    <td>Keyboard not Working; keys missing/not Working</td>
                                    <td>Less than 1 year</td>
                                    <td>Flawless</td>
                                    <td>Flawless</td>
                                    <td style="width: 100px">
                                        <a href="index.php?Form_Edit_Inspection_Sheet2" class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr data-id="2">
                                    <td>2</td>
                                    <td>Laptop</td>
                                    <td>Samsung</td>
                                    <td>Samsung N Series</td>
                                    <td>Yes</td>
                                    <td>AMD A-Series</td>
                                    <td>768 MB</td>
                                    <td>80 GB HDD</td>
                                    <td>12-13 Inch</td>
                                    <td>Graphic Card Not Available</td>
                                    <td>CD/DVD Drive Not Working</td>
                                    <td>Between 1 and 3 year</td>
                                    <td>Good</td>
                                    <td>Good</td>
                                    <td style="width: 100px">
                                        <a href="index.php?Form_Edit_Inspection_Sheet2" class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr data-id="3">
                                    <td>3</td>
                                    <td>Laptop</td>
                                    <td>Lenovo</td>
                                    <td>IdeaPad 300 Series</td>
                                    <td>No</td>
                                    <td>AMD A10</td>
                                    <td>1 GB</td>
                                    <td>100 GB HDD</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="width: 100px">
                                        <a href="index.php?Form_Edit_Inspection_Sheet2" class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr data-id="4">
                                    <td>4</td>
                                    <td>Laptop</td>
                                    <td>Dell</td>
                                    <td>Inspiron Series</td>
                                    <td>Yes</td>
                                    <td>AMD A4</td>
                                    <td>1.5 GB</td>
                                    <td>120 GB HDD</td>
                                    <td>14-15 Inch</td>
                                    <td>Graphic Card Not Working</td>
                                    <td>Touchpad Not Working:Left/Right click faulty</td>
                                    <td>More than 3 year</td>
                                    <td>Average</td>
                                    <td>Average</td>
                                    <td style="width: 100px">
                                        <a href="index.php?Form_Edit_Inspection_Sheet2" class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->