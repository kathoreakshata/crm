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
                                    <th>Processor Brand</th>
                                    <th>Processor Status</th>
                                    <th>Processor Damage</th>
                                    <th>Processor Generation</th>
                                    <th>Battery Status</th>
                                    <th>Battery Damage</th>
                                    <th>Motherboard Status</th>
                                    <th>Motherboard Damage</th>
                                    <th>Keyboard Status</th>
                                    <th>Keyboard Damage</th>
                                    <th>Touchpad Status</th>
                                    <th>Touchpad Damage</th>
                                    <th>HDD Status</th>
                                    <th>HDD Storage</th>
                                    <th>HDD Damage</th>
                                    <th>RAM Status</th>
                                    <th>RAM Type</th>
                                    <th>RAM Storage</th>
                                    <th>RAM Damage</th>
                                    <th>Panel A Damage</th>
                                    <th>Panel B1 Status</th>
                                    <th>Panel B1 Size</th>
                                    <th>Panel B1 Damage</th>
                                    <th>Panel B2 Damage</th>
                                    <th>Panel C1 Damage</th>
                                    <th>Panel C2 Damage</th>
                                    <th>Panel C3 Status</th>
                                    <th>Panel C3 Damage</th>
                                    <th>Panel C4 Status</th>
                                    <th>Panel C4 Damage</th>
                                    <th>Remark</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select_query = "SELECT * FROM `inspection_sheet_data`";
                                $result_query = mysqli_query($con, $select_query);
                                while ($row = mysqli_fetch_assoc($result_query)){
                                    $id = $row['id'];
                                    $Product = $row['Product'];
                                    $Brand = $row['Brand'];
                                    $Model = $row['Model'];
                                    $Power = $row['Power'];
                                    $Processor_Brand = $row['Processor_Brand'];
                                    $Processor_Status = $row['Processor_Status'];
                                    $Processor_Damage = $row['Processor_Damage'];
                                    $Processor_Generation = $row['Processor_Generation'];
                                    $Battery_Status = $row['Battery_Status'];
                                    $Battery_Damage = $row['Battery_Damage'];
                                    $Motherboard_Status = $row['Motherboard_Status'];
                                    $Motherboard_Damage = $row['Motherboard_Damage'];
                                    $Keyboard_Status = $row['Keyboard_Status'];
                                    $Keyboard_Damage = $row['Keyboard_Damage'];
                                    $Touchpad_Status = $row['Touchpad_Status'];
                                    $Touchpad_Damage = $row['Touchpad_Damage'];
                                    $HDD_Status = $row['HDD_Status'];
                                    $HDD_Storage = $row['HDD_Storage'];
                                    $HDD_Damage = $row['HDD_Damage'];
                                    $RAM_Status = $row['RAM_Status'];
                                    $RAM_Type = $row['RAM_Type'];
                                    $RAM_Storage = $row['RAM_Storage'];
                                    $RAM_Damage = $row['RAM_Damage'];
                                    $Panel_A_Damage = $row['Panel_A_Damage'];
                                    $Panel_B1_Status = $row['Panel_B1_Status'];
                                    $Panel_B1_Size = $row['Panel_B1_Size'];
                                    $Panel_B1_Damage = $row['Panel_B1_Damage'];
                                    $Panel_B2_Damage = $row['Panel_B2_Damage'];
                                    $Panel_C1_Damage = $row['Panel_C1_Damage'];
                                    $Panel_C2_Damage = $row['Panel_C2_Damage'];
                                    $Panel_C3_Status = $row['Panel_C3_Status'];
                                    $Panel_C3_Damage = $row['Panel_C3_Damage'];
                                    $Panel_C4_Status = $row['Panel_C4_Status'];
                                    $Panel_C4_Damage = $row['Panel_C4_Damage'];
                                    $Remark = $row['Remark'];
                                    echo"<tr>
                                    <td>$id</td>
                                    <td>$Product</td>
                                    <td>$Brand</td>
                                    <td>$Model</td>
                                    <td>$Power</td>
                                    <td>$Processor_Brand</td>
                                    <td>$Processor_Status</td>
                                    <td>$Processor_Damage</td>
                                    <td>$Processor_Generation</td>
                                    <td>$Battery_Status</td>
                                    <td>$Battery_Damage</td>
                                    <td>$Motherboard_Status</td>
                                    <td>$Motherboard_Damage</td>
                                    <td>$Keyboard_Status</td>
                                    <td>$Keyboard_Damage</td>
                                    <td>$Touchpad_Status</td>
                                    <td>$Touchpad_Damage</td>
                                    <td>$HDD_Status</td>
                                    <td>$HDD_Storage</td>
                                    <td>$HDD_Damage</td>
                                    <td>$RAM_Status</td>
                                    <td>$RAM_Type</td>
                                    <td>$RAM_Storage</td>
                                    <td>$RAM_Damage</td>
                                    <td>$Panel_A_Damage</td>
                                    <td>$Panel_B1_Status</td>
                                    <td>$Panel_B1_Size</td>
                                    <td>$Panel_B1_Damage</td>
                                    <td>$Panel_B2_Damage</td>
                                    <td>$Panel_C1_Damage</td>
                                    <td>$Panel_C2_Damage</td>
                                    <td>$Panel_C3_Status</td>
                                    <td>$Panel_C3_Damage</td>
                                    <td>$Panel_C4_Status</td>
                                    <td>$Panel_C4_Damage</td>
                                    <td>$Remark</td>
                                    <td style='width: 100px'>
                                        <a href='index.php?Form_Edit_Inspection_Sheet' class='btn btn-primary fs-14 text-white edit-icn' title='Edit'>
                                            <i class='fe fe-edit'></i>
                                        </a>
                                    </td>
                                </tr>";
                                }
                                ?>
                                <!-- <tr data-id="1">
                                    <td>1</td>
                                    <td>Laptop</td>
                                    <td>Dell</td>
                                    <td>5300</td>
                                    <td>Yes</td>
                                    <td>Intel</td>
                                    <td>Working</td>
                                    <td>No</td>
                                    <td>Intel Core i7</td>
                                    <td>Working</td>
                                    <td>No</td>
                                    <td>Not-working</td>
                                    <td>No</td>
                                    <td>Not-Working</td>
                                    <td>Yes</td>
                                    <td>Working</td>
                                    <td>No</td>
                                    <td>Working</td>
                                    <td>256 GB SSD</td>
                                    <td>No</td>
                                    <td>Working</td>
                                    <td>DDR-3</td>
                                    <td>16 GB</td>
                                    <td>No</td>
                                    <td>No</td>
                                    <td>Working</td>
                                    <td>14 Inch</td>
                                    <td>Spot</td>
                                    <td>YES</td>
                                    <td>No</td>
                                    <td>NO</td>
                                    <td>Working</td>
                                    <td>Yes</td>
                                    <td>Not-working</td>
                                    <td>No</td>
                                    <td>No Remark</td>
                                    <td style="width: 100px">
                                        <a href="index.php?Form_Edit_Inspection_Sheet" class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr data-id="2">
                                    <td>2</td>
                                    <td>Laptop</td>
                                    <td>Dell</td>
                                    <td>5300</td>
                                    <td>Yes</td>
                                    <td>Intel</td>
                                    <td>Working</td>
                                    <td>No</td>
                                    <td>Intel Core i7</td>
                                    <td>Working</td>
                                    <td>No</td>
                                    <td>Not-working</td>
                                    <td>No</td>
                                    <td>Not-Working</td>
                                    <td>Yes</td>
                                    <td>Working</td>
                                    <td>No</td>
                                    <td>Working</td>
                                    <td>256 GB SSD</td>
                                    <td>No</td>
                                    <td>Working</td>
                                    <td>DDR-3</td>
                                    <td>16GB</td>
                                    <td>No</td>
                                    <td>No</td>
                                    <td>Working</td>
                                    <td>14 Inch</td>
                                    <td>Spot</td>
                                    <td>YES</td>
                                    <td>No</td>
                                    <td>NO</td>
                                    <td>Working</td>
                                    <td>Yes</td>
                                    <td>Not-working</td>
                                    <td>No</td>
                                    <td>No Remark</td>
                                    <td style="width: 100px">
                                        <a href="index.php?Form_Edit_Inspection_Sheet" class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr data-id="3">
                                    <td>3</td>
                                    <td>Laptop</td>
                                    <td>Dell</td>
                                    <td>5300</td>
                                    <td>Yes</td>
                                    <td>Intel</td>
                                    <td>Working</td>
                                    <td>No</td>
                                    <td>Intel Core i7</td>
                                    <td>Working</td>
                                    <td>No</td>
                                    <td>Not-working</td>
                                    <td>No</td>
                                    <td>Not-Working</td>
                                    <td>Yes</td>
                                    <td>Working</td>
                                    <td>No</td>
                                    <td>Working</td>
                                    <td>256 GB SSD</td>
                                    <td>No</td>
                                    <td>Working</td>
                                    <td>DDR-3</td>
                                    <td>16GB</td>
                                    <td>No</td>
                                    <td>No</td>
                                    <td>Working</td>
                                    <td>14 Inch</td>
                                    <td>Spot</td>
                                    <td>YES</td>
                                    <td>No</td>
                                    <td>NO</td>
                                    <td>Working</td>
                                    <td>Yes</td>
                                    <td>Not-working</td>
                                    <td>No</td>
                                    <td>No Remark</td>
                                    <td style="width: 100px">
                                        <a href="index.php?Form_Edit_Inspection_Sheet" class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr data-id="4">
                                    <td>4</td>
                                    <td>Laptop</td>
                                    <td>Dell</td>
                                    <td>5300</td>
                                    <td>Yes</td>
                                    <td>Intel</td>
                                    <td>Working</td>
                                    <td>No</td>
                                    <td>Intel Core i7</td>
                                    <td>Working</td>
                                    <td>No</td>
                                    <td>Not-working</td>
                                    <td>No</td>
                                    <td>Not-Working</td>
                                    <td>Yes</td>
                                    <td>Working</td>
                                    <td>No</td>
                                    <td>Working</td>
                                    <td>256 GB SSD</td>
                                    <td>No</td>
                                    <td>Working</td>
                                    <td>DDR-3</td>
                                    <td>16GB</td>
                                    <td>No</td>
                                    <td>No</td>
                                    <td>Working</td>
                                    <td>14 Inch</td>
                                    <td>Spot</td>
                                    <td>YES</td>
                                    <td>No</td>
                                    <td>NO</td>
                                    <td>Working</td>
                                    <td>Yes</td>
                                    <td>Not-working</td>
                                    <td>No</td>
                                    <td>No Remark</td>
                                    <td style="width: 100px">
                                        <a href="index.php?Form_Edit_Inspection_Sheet" class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr data-id="5">
                                    <td>5</td>
                                    <td>Laptop</td>
                                    <td>Dell</td>
                                    <td>5300</td>
                                    <td>Yes</td>
                                    <td>Intel</td>
                                    <td>Working</td>
                                    <td>No</td>
                                    <td>Intel Core i7</td>
                                    <td>Working</td>
                                    <td>No</td>
                                    <td>Not-working</td>
                                    <td>No</td>
                                    <td>Not-Working</td>
                                    <td>Yes</td>
                                    <td>Working</td>
                                    <td>No</td>
                                    <td>Working</td>
                                    <td>256 GB SSD</td>
                                    <td>No</td>
                                    <td>Working</td>
                                    <td>DDR-3</td>
                                    <td>16GB</td>
                                    <td>No</td>
                                    <td>No</td>
                                    <td>Working</td>
                                    <td>14 Inch</td>
                                    <td>Spot</td>
                                    <td>YES</td>
                                    <td>No</td>
                                    <td>NO</td>
                                    <td>Working</td>
                                    <td>Yes</td>
                                    <td>Not-working</td>
                                    <td>No</td>
                                    <td>No Remark</td>
                                    <td style="width: 100px">
                                        <a href="index.php?Form_Edit_Inspection_Sheet" class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr data-id="6">
                                    <td>6</td>
                                    <td>Laptop</td>
                                    <td>Dell</td>
                                    <td>5300</td>
                                    <td>Yes</td>
                                    <td>Intel</td>
                                    <td>Working</td>
                                    <td>No</td>
                                    <td>Intel Core i7</td>
                                    <td>Working</td>
                                    <td>No</td>
                                    <td>Not-working</td>
                                    <td>No</td>
                                    <td>Not-Working</td>
                                    <td>Yes</td>
                                    <td>Working</td>
                                    <td>No</td>
                                    <td>Working</td>
                                    <td>256 GB SSD</td>
                                    <td>No</td>
                                    <td>Working</td>
                                    <td>DDR-3</td>
                                    <td>16GB</td>
                                    <td>No</td>
                                    <td>No</td>
                                    <td>Working</td>
                                    <td>14 Inch</td>
                                    <td>Spot</td>
                                    <td>YES</td>
                                    <td>No</td>
                                    <td>NO</td>
                                    <td>Working</td>
                                    <td>Yes</td>
                                    <td>Not-working</td>
                                    <td>No</td>
                                    <td>No Remark</td>
                                    <td style="width: 100px">
                                        <a href="index.php?Form_Edit_Inspection_Sheet" class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
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