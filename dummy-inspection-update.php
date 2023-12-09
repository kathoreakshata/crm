<?php
include("connection/connectdb.php");

if (isset($_GET['Form_Edit_Inspection_Sheet'])) {
    $edit_id = $_GET['Form_Edit_Inspection_Sheet'];

    $get_data = "SELECT * FROM `inspection_sheet_data` WHERE id = $edit_id";
    $result = mysqli_query($con, $get_data);
    $row = mysqli_fetch_assoc($result);

    $Product = $row['Product'];
    $Brand = $row['Brand'];
    $Model = $row['Model'];
    $Power = $row['Power'];
    $Processor_Brand = $row['Processor_Brand'];
    $Processor_Generation = $row['Processor_Generation'];
    $Processor_Status = $row['Processor_Status'];
    $Processor_Damage = $row['Processor_Damage'];
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
}

?>
<style>
    .form-container {
        display: none;
    }

    .form-container.active {
        display: block;
    }
</style>

<div class="row row-sm">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-card">
            <div class="card-body">
                <div class="list-group">
                    
                <form action="" method="post">
                <div class="list-group-item py-4 form-container active" id="form1">
                        <div class="form-heading-1 mb-0 me-2">Select Type Of Product</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <select class="form-select m-2" id="validationCustom14" name="select_product">
                                            <option selected value="<?php echo $Product ?>"><?php echo $Product ?></option>
                                            <option value="laptop">Laptop</option>
                                            <option value="cpu">CPU</option>
                                            <option value="lcd">LCD</option>
                                            <option value="printer">Printer</option>
                                            <option value="server">Server</option>
                                            <option value="switch">Switch</option>
                                            <option value="mobile">Mobile</option>
                                            <option value="projector">Projector/LCD/DLP</option>
                                            <option value="tv">TV</option>
                                            <option value="ups">UPS</option>
                                            <option value="storage">Storage</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <!-- <button class="btn btn-primary m-2 text-center" type="submit">Submit</button> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form2')">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form2">
                        <div class="form-heading-1 mb-0 me-2">Brand</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="dell"><input name="brand_radio" type="radio"
                                                        id="dell" <?php if ($Brand == "Dell") {
                                                            echo "checked";
                                                        } ?>> <span>Dell</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="lenovo"><input name="brand_radio"
                                                        type="radio" id="lenovo" <?php if ($Brand == "Lenovo") {
                                                            echo "checked";
                                                        } ?>> <span>Lenovo</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="acer"><input name="brand_radio" type="radio"
                                                        id="acer" <?php if ($Brand == "Acer") {
                                                            echo "checked";
                                                        } ?>> <span>Acer</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="hp"><input name="brand_radio" type="radio"
                                                        id="hp" <?php if ($Brand == "HP") {
                                                            echo "checked";
                                                        } ?>> <span>HP</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="apple"><input name="brand_radio"
                                                        type="radio" id="apple" <?php if ($Brand == "Apple") {
                                                            echo "checked";
                                                        } ?>> <span>Apple</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="asus"><input name="brand_radio" type="radio"
                                                        id="asus" <?php if ($Brand == "Asus") {
                                                            echo "checked";
                                                        } ?>> <span>Asus</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="other"><input name="brand_radio"
                                                        type="radio" id="other" <?php if ($Brand == "Other") {
                                                            echo "checked";
                                                        } ?>> <span>Other</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-primary m-2 text-center" type="submit">Submit</button> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form1')">Previous</div>
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form3')">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form3">
                        <div class="form-heading-1 mb-0 me-2">Model</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="5300"><input name="model" type="radio"
                                                        id="5300" <?php if ($Model == "5300") {
                                                            echo "checked";
                                                        } ?>> <span>5300</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="5400"><input name="model" type="radio"
                                                        id="5400" <?php if ($Model == "5400") {
                                                            echo "checked";
                                                        } ?>> <span>5400</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="5500"><input name="model" type="radio"
                                                        id="5500" <?php if ($Model == "5500") {
                                                            echo "checked";
                                                        } ?>> <span>5500</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="btn btn-primary m-2 text-center" type="submit">Submit</div> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form2')">Previous</div>
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form4')">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form4">
                        <div class="form-heading-1 mb-0 me-2">Power</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="yes"><input name="power" type="radio"
                                                        id="yes" <?php if ($Power == "Yes") {
                                                            echo "checked";
                                                        } ?>> <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="no"><input name="power" type="radio"
                                                        id="no" <?php if ($Power == "No") {
                                                            echo "checked";
                                                        } ?>> <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="btn btn-primary m-2 text-center" type="submit">Submit</div> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form3')">Previous</div>
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form5')">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form5">
                        <div class="form-heading-1 mb-0 me-2">Processor Brand</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <select class="form-select m-2" name="select_processor">
                                            <option value="<?php echo $Processor_Brand ?>"><?php echo $Processor_Brand ?></option>
                                            <option value="amd">AMD</option>
                                            <option value="atom">Atom</option>
                                            <option value="intel">Intel</option>
                                            <option value="quad_core">Quad Core</option>
                                            <option value="microsoft">Microsoft</option>
                                            <option value="snapdragon">Snapdragon</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-heading-1 mb-0 me-2">Generation</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <select class="form-select m-2" name="select_generation">
                                            <option value="<?php echo $Processor_Generation ?>"><?php echo $Processor_Generation ?></option>
                                            <option value="2gen">2nd Gen</option>
                                            <option value="3gen">3rd Gen</option>
                                            <option value="4gen">4th Gen</option>
                                            <option value="5gen">5th Gen</option>
                                            <option value="6gen">6th Gen</option>
                                            <option value="7gen">7th Gen</option>
                                            <option value="8gen">8th Gen</option>
                                            <option value="9gen">9th Gen</option>
                                            <option value="10gen">10th Gen</option>
                                            <option value="11gen">11th Gen</option>
                                            <option value="12gen">12th Gen</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-heading-1 mb-0 me-2">Processor Status</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="working"><input name="processor_status"
                                                        type="radio" id="working" <?php if ($Processor_Status == "Working") {
                                                            echo "checked";
                                                        } ?>> <span>Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="not-working"><input name="processor_status"
                                                        type="radio" id="not-working" <?php if ($Processor_Status == "Not Working") {
                                                            echo "checked";
                                                        } ?>> <span>Not Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="missing"><input name="processor_status"
                                                        type="radio" id="missing" <?php if ($Processor_Status == "Missing") {
                                                            echo "checked";
                                                        } ?>> <span>Missing</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-heading-1 mb-0 me-2">Processor Damage</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="processor-damage-yes"><input
                                                        name="processor_damage" type="radio" id="processor-damage-yes" <?php if ($Processor_Damage == "Yes") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="processor-damage-no"><input
                                                        name="processor_damage" type="radio" id="processor-damage-no" <?php if ($Processor_Damage == "No") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="btn btn-primary m-2 text-center" type="submit">Submit</div> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form4')">Previous</div>
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form6')">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form6">
                        <div class="form-heading-1 mb-0 me-2">Battery Status</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="battery-status-working"><input
                                                        name="battery_status" type="radio" id="battery-status-working" <?php if ($Battery_Status == "Working") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="battery-status-not-working"><input
                                                        name="battery_status" type="radio"
                                                        id="battery-status-not-working" <?php if (
                                                            $Battery_Status == "Not
                                                        Working"
                                                        ) {
                                                            echo "checked";
                                                        } ?>> <span>Not
                                                        Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="battery-status-missing"><input
                                                        name="battery_status" type="radio" id="battery-status-missing" <?php if ($Battery_Status == "Missing") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Missing</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-heading-1 mb-0 me-2">Battery Damage</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="battery-damage-yes"><input
                                                        name="battery_damage" type="radio" id="battery-damage-yes" <?php if ($Battery_Damage == "Yes") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="battery-damage-no"><input
                                                        name="battery_damage" type="radio" id="battery-damage-no" <?php if ($Battery_Damage == "No") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="btn btn-primary m-2 text-center" type="submit">Submit</div> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form5')">Previous</div>
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form7')">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form7">
                        <div class="form-heading-1 mb-0 me-2">Motherboard Status</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="motherboard-status-working">
                                                    <input name="motherboard_status" type="radio" id="motherboard-status-working" <?php if ($Motherboard_Status == "Working") {
                                                        echo "checked";
                                                    } ?>> <span>Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="motherboard-status-not-working">
                                                    <input name="motherboard_status" type="radio" id="motherboard-status-not-working" <?php if ($Motherboard_Status == "Not Working") {
                                                        echo "checked";
                                                    } ?>> <span>Not Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="motherboard-status-missing">
                                                    <input name="motherboard_status" type="radio" id="motherboard-status-missing" <?php if ($Motherboard_Status == "Missing") {
                                                        echo "checked";
                                                    } ?>> <span>Missing</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-heading-1 mb-0 me-2">Motherboard Damage</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="motherboard-damage-yes"><input
                                                        name="motherboard_damage" type="radio"
                                                        id="motherboard-damage-yes" <?php if ($Motherboard_Damage == "Yes") {
                                                            echo "checked";
                                                        } ?>> <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="motherboard-damage-no"><input
                                                        name="motherboard_damage" type="radio"
                                                        id="motherboard-damage-no" <?php if ($Motherboard_Damage == "No") {
                                                            echo "checked";
                                                        } ?>> <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="btn btn-primary m-2 text-center" type="submit">Submit</div> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form6')">Previous</div>
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form8')">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form8">
                        <div class="form-heading-1 mb-0 me-2">Keyboard Status</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="keyboard-status-working"><input
                                                        name="keyboard_status" type="radio"
                                                        id="keyboard-status-working" <?php if ($Keyboard_Status == "Working") {
                                                            echo "checked";
                                                        } ?>> <span>Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="keyboard-status-not-working"><input
                                                        name="keyboard_status" type="radio"
                                                        id="keyboard-status-not-working" <?php if (
                                                            $Keyboard_Status == "Not
                                                        Working"
                                                        ) {
                                                            echo "checked";
                                                        } ?>> <span>Not
                                                        Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="keyboard-status-missing"><input
                                                        name="keyboard_status" type="radio"
                                                        id="keyboard-status-missing" <?php if ($Keyboard_Status == "Missing") {
                                                            echo "checked";
                                                        } ?>> <span>Missing</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-heading-1 mb-0 me-2">Keyboard Damage</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="keyboard-damage-yes"><input
                                                        name="keyboard_damage" type="radio" id="keyboard-damage-yes" <?php if ($Keyboard_Damage == "Yes") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="keyboard-damage-no"><input
                                                        name="keyboard_damage" type="radio" id="keyboard-damage-no" <?php if ($Keyboard_Damage == "No") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="btn btn-primary m-2 text-center" type="submit">Submit</div> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form7')">Previous</div>
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form9')">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form9">
                        <div class="form-heading-1 mb-0 me-2">Touchpad Status</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="touchpad-status-working"><input
                                                        name="touchpad_status" type="radio"
                                                        id="touchpad-status-working" <?php if ($Touchpad_Status == "Working") {
                                                            echo "checked";
                                                        } ?>> <span>Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="touchpad-status-not-working"><input
                                                        name="touchpad_status" type="radio"
                                                        id="touchpad-status-not-working" <?php if ($Touchpad_Status == "Not Working") {
                                                            echo "checked";
                                                        } ?>> <span>Not
                                                        Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="touchpad-status-missing"><input
                                                        name="touchpad_status" type="radio"
                                                        id="touchpad-status-missing" <?php if ($Touchpad_Status == "Missing") {
                                                            echo "checked";
                                                        } ?>> <span>Missing</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-heading-1 mb-0 me-2">Touchpad Damage</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="touchpad-damage-yes"><input
                                                        name="touchpad_damage" type="radio" id="touchpad-damage-yes" <?php if ($Touchpad_Damage == "Yes") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="touchpad-damage-no"><input
                                                        name="touchpad_damage" type="radio" id="touchpad-damage-no" <?php if ($Touchpad_Damage == "No") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="btn btn-primary m-2 text-center" type="submit">Submit</div> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form8')">Previous</div>
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form10')">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form10">
                        <div class="form-heading-1 mb-0 me-2">HDD Status</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="hdd-status-working"><input name="hdd_status"
                                                        type="radio" id="hdd-status-working" <?php if ($HDD_Status == "Working") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="hdd-status-not-working"><input
                                                        name="hdd_status" type="radio" id="hdd-status-not-working" <?php if ($HDD_Status == "Not Working") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Not Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="hdd-status-missing"><input name="hdd_status"
                                                        type="radio" id="hdd-status-missing" <?php if ($HDD_Status == "Missing") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Missing</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-heading-1 mb-0 me-2">HDD Storage</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="hdd-storage-250gb"><input name="hdd_storage"
                                                        type="radio" id="hdd-storage-250gb" <?php if ($HDD_Storage == "250 GB") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>250 GB</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="hdd-storage-500gb"><input name="hdd_storage"
                                                        type="radio" id="hdd-storage-500gb" <?php if ($HDD_Storage == "500 GB") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>500 GB</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="hdd-storage-256gbssd"><input
                                                        name="hdd_storage" type="radio" id="hdd-storage-256gbssd" <?php if ($HDD_Storage == "256 GB SSD") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>256 GB SSD</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="hdd-storage-512gbssd"><input
                                                        name="hdd_storage" type="radio" id="hdd-storage-512gbssd" <?php if ($HDD_Storage == "512 GB SSD") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>512 GB SSD</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-heading-1 mb-0 me-2">HDD Damage</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="hdd-damage-yes"><input name="hdd_damage"
                                                        type="radio" id="hdd-damage-yes" <?php if ($HDD_Damage == "Yes") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="hdd-damage-no"><input name="hdd_damage"
                                                        type="radio" id="hdd-damage-no" <?php if ($HDD_Damage == "No") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="btn btn-primary m-2 text-center" type="submit">Submit</div> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form9')">Previous</div>
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form11')">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form11">
                        <div class="form-heading-1 mb-0 me-2">RAM Status</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-status-working"><input name="ram_status"
                                                        type="radio" id="ram-status-working" <?php if ($RAM_Status == "Working") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-status-not-working"><input
                                                        name="ram_status" type="radio" id="ram-status-not-working" <?php if ($RAM_Status == "Not Working") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Not Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-status-missing"><input name="ram_status"
                                                        type="radio" id="ram-status-missing" <?php if ($RAM_Status == "Missing") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Missing</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-heading-1 mb-0 me-2">RAM Type</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-type-ddr3"><input name="ram_type"
                                                        type="radio" id="ram-type-ddr3" <?php if ($RAM_Type == "DDR 3") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>DDR 3</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-type-ddr4"><input name="ram_type"
                                                        type="radio" id="ram-type-ddr4" <?php if ($RAM_Type == "DDR 4") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>DDR 4</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-heading-1 mb-0 me-2">RAM Storage</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-storage-4gb"><input name="ram_storage"
                                                        type="radio" id="ram-storage-4gb" <?php if ($RAM_Storage == "4 GB") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>4 GB</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-storage-8gb"><input name="ram_storage"
                                                        type="radio" id="ram-storage-8gb" <?php if ($RAM_Storage == "8 GB") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>8 GB</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-storage-16gb"><input name="ram_storage"
                                                        type="radio" id="ram-storage-16gb" <?php if ($RAM_Storage == "16 GB") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>16 GB</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-storage-32gb"><input name="ram_storage"
                                                        type="radio" id="ram-storage-32gb" <?php if ($RAM_Storage == "32 GB") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>32 GB</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-storage-64gb"><input name="ram_storage"
                                                        type="radio" id="ram-storage-64gb" <?php if ($RAM_Storage == "64 GB") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>64 GB</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-heading-1 mb-0 me-2">RAM Damage</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-damage-yes"><input name="ram_damage"
                                                        type="radio" id="ram-damage-yes" <?php if ($RAM_Damage == "Yes") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-damage-no"><input name="ram_damage"
                                                        type="radio" id="ram-damage-no" <?php if ($RAM_Damage == "No") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="btn btn-primary m-2 text-center" type="submit">Submit</div> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form10')">Previous</div>
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form12')">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form12">
                        <div class="form-heading-1 mb-0 me-2">Panel A Damage</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-a-damage-yes"><input
                                                        name="panel_a_damage" type="radio" id="panel-a-damage-yes" <?php if ($Panel_A_Damage == "Yes") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-a-damage-no"><input
                                                        name="panel_a_damage" type="radio" id="panel-a-damage-no" <?php if ($Panel_A_Damage == "No") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="btn btn-primary m-2 text-center" type="submit">Submit</div> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form11')">Previous</div>
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form13')">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form13">
                        <div class="form-heading-1 mb-0 me-2">Panel B1 Status</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b1-status-working"><input
                                                        name="panel_b1_status" type="radio"
                                                        id="panel-b1-status-working" <?php if ($Panel_B1_Status == "Working") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b1-status-not-working"><input
                                                        name="panel_b1_status" type="radio"
                                                        id="panel-b1-status-not-working" <?php if ($Panel_B1_Status == "Not Working") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Not Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b1-status-missing"><input
                                                        name="panel_b1_status" type="radio"
                                                        id="panel-b1-status-missing" <?php if ($Panel_B1_Status == "Missing") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Missing</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-heading-1 mb-0 me-2">Panel B1 Size</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b1-size-12-5"><input
                                                        name="panel_b1_size" type="radio" id="panel-b1-size-12-5" <?php if ($Panel_B1_Size == "12.5 Inch") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>12.5 Inch</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b1-size-13"><input
                                                        name="panel_b1_size" type="radio" id="panel-b1-size-13" <?php if ($Panel_B1_Size == "13 Inch") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>13 Inch</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b1-size-14"><input
                                                        name="panel_b1_size" type="radio" id="panel-b1-size-14" <?php if ($Panel_B1_Size == "14 Inch") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>14 Inch</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b1-size-15-6"><input
                                                        name="panel_b1_size" type="radio" id="panel-b1-size-15-6" <?php if ($Panel_B1_Size == "15.6 Inch") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>15.6 Inch</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b1-size-17"><input
                                                        name="panel_b1_size" type="radio" id="panel-b1-size-17" <?php if ($Panel_B1_Size == "17 Inch") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>17 Inch</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-heading-1 mb-0 me-2">Panel B1 Damage</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b1-damage-spot"><input
                                                        name="panel_b1_damage" type="radio" id="panel-b1-damage-spot" <?php if ($Panel_B1_Damage == "Spot") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Spot</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b1-damage-lining"><input
                                                        name="panel_b1_damage" type="radio" id="panel-b1-damage-lining" <?php if ($Panel_B1_Damage == "Lining") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Lining</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="btn btn-primary m-2 text-center" type="submit">Submit</div> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form12')">Previous</div>
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form14')">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form14">
                        <div class="form-heading-1 mb-0 me-2">Panel B2 Damage</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b2-damage-yes"><input
                                                        name="panel_b2_damage" type="radio" id="panel-b2-damage-yes" <?php if ($Panel_B2_Damage == "Yes") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b2-damage-no"><input
                                                        name="panel_b2_damage" type="radio" id="panel-b2-damage-no" <?php if ($Panel_B2_Damage == "No") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="btn btn-primary m-2 text-center" type="submit">Submit</div> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form13')">Previous</div>
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form15')">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form15">
                        <div class="form-heading-1 mb-0 me-2">Panel C1 Damage</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-c1-damage-yes"><input
                                                        name="panel_c1_damage" type="radio" id="panel-c1-damage-yes" <?php if ($Panel_C1_Damage == "Yes") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-c1-damage-no"><input
                                                        name="panel_c1_damage" type="radio" id="panel-c1-damage-no" <?php if ($Panel_C1_Damage == "No") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="btn btn-primary m-2 text-center" type="submit">Submit</div> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form14')">Previous</div>
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form16')">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form16">
                        <div class="form-heading-1 mb-0 me-2">Panel C2 Damage</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-c2-damage-yes"><input
                                                        name="panel_c2_damage" type="radio" id="panel-c2-damage-yes" <?php if ($Panel_C2_Damage == "Yes") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-c2-damage-no"><input
                                                        name="panel_c2_damage" type="radio" id="panel-c2-damage-no" <?php if ($Panel_C2_Damage == "No") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="btn btn-primary m-2 text-center" type="submit">Submit</div> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form15')">Previous</div>
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form17')">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form17">
                        <div class="form-heading-1 mb-0 me-2">Panel C3 Status</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-c3-status-working"><input
                                                        name="panel_c3_status" type="radio"
                                                        id="panel-c3-status-working" <?php if ($Panel_C3_Status == "Working") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-c3-status-not-working"><input
                                                        name="panel_c3_status" type="radio"
                                                        id="panel-c3-status-not-working" <?php if ($Panel_C3_Status == "Not Working") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Not Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-c3-status-missing"><input
                                                        name="panel_c3_status" type="radio"
                                                        id="panel-c3-status-missing" <?php if ($Panel_C3_Status == "Missing") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Missing</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-heading-1 mb-0 me-2">Panel C3 Damage
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-c3-damage-yes"><input
                                                        name="panel_c3_damage" type="radio" id="panel-c3-damage-yes" <?php if ($Panel_C3_Damage == "Yes") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-c3-damage-no"><input
                                                        name="panel_c3_damage" type="radio" id="panel-c3-damage-no" <?php if ($Panel_C3_Damage == "No") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="btn btn-primary m-2 text-center" type="submit">Submit</div> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form16')">Previous</div>
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form18')">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form18">
                        <div class="form-heading-1 mb-0 me-2">Panel C4 Status</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-c4-status-working"><input
                                                        name="panel_c4_status" type="radio"
                                                        id="panel-c4-status-working" <?php if ($Panel_C4_Status == "Working") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-c4-status-not-working"><input
                                                        name="panel_c4_status" type="radio"
                                                        id="panel-c4-status-not-working" <?php if ($Panel_C4_Status == "Not Working") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Not Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-c4-status-missing"><input
                                                        name="panel_c4_status" type="radio"
                                                        id="panel-c4-status-missing"  <?php if ($Panel_C4_Status == "Missing") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Missing</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-heading-1 mb-0 me-2">Panel C4 Damage
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-c4-damage-yes"><input
                                                        name="panel_c4_damage" type="radio" id="panel-c4-damage-yes" <?php if ($Panel_C4_Damage == "Yes") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-c4-damage-no"><input
                                                        name="panel_c4_damage" type="radio" id="panel-c4-damage-no" <?php if ($Panel_C4_Damage == "No") {
                                                            echo "checked";
                                                        } ?>>
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="btn btn-primary m-2 text-center" type="submit">Submit</div> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form17')">Previous</div>
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form19')">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form19">
                        <div class="form-heading-1 mb-0 me-2">Remark</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <label for="validationTextarea" class="form-label"></label>
                                                    <div class="col-lg">
                                                        <textarea class="form-control mb-4"
                                                            placeholder="Write remark here if any..."
                                                            rows="3" name="remark"></textarea>
                                                    </div>
                                    </div>
                                    <!-- <div class="btn btn-primary m-2 text-center" type="submit">Submit</div> -->
                                    <div class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form18')">Previous</div>
                                        <button type="submit" class="btn btn-primary m-2 text-center" name="update" onclick="submitForm()">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function nextForm(nextFormId) {
        const currentForm = document.querySelector('.form-container.active');
        const nextForm = document.getElementById(nextFormId);

        if (currentForm && nextForm) {
            currentForm.classList.remove('active');
            nextForm.classList.add('active');
        }
    }

    function previousForm(previousFormId) {
        const currentForm = document.querySelector('.form-container.active');
        const previousForm = document.getElementById(previousFormId);

        if (currentForm && previousForm) {
            currentForm.classList.remove('active');
            previousForm.classList.add('active');
        }
    }

    // function submitForm() {
    //     // Perform form submission logic here
    //     alert('Form submitted!');
    // }
</script>

<!-- Submit Form Code -->
<?php
if (isset($_POST['update'])) {
    $Product_post = $_POST['select_product'];
    $Brand_post = $_POST['brand_radio'];
    $Model_post = $_POST['model'];
    $Power_post = $_POST['power'];
    $Processor_Brand_post = $_POST['select_processor'];
    $Processor_Generation_post = $_POST['select_generation'];
    $Processor_Status_post = $_POST['processor_status'];
    $Processor_Damage_post = $_POST['processor_damage'];
    $Battery_Status_post = $_POST['battery_status'];
    $Battery_Damage_post = $_POST['battery_damage'];
    $Motherboard_Status_post = $_POST['motherboard_status'];
    $Motherboard_Damage_post = $_POST['motherboard_damage'];
    $Keyboard_Status_post = $_POST['keyboard_status'];
    $Keyboard_Damage_post = $_POST['keyboard_damage'];
    $Touchpad_Status_post = $_POST['touchpad_status'];
    $Touchpad_Damage_post = $_POST['touchpad_damage'];
    $HDD_Status_post = $_POST['hdd_status'];
    $HDD_Storage_post = $_POST['hdd_storage'];
    $HDD_Damage_post = $_POST['hdd_damage'];
    $RAM_Status_post = $_POST['ram_status'];
    $RAM_Type_post = $_POST['ram_type'];
    $RAM_Storage_post = $_POST['ram_storage'];
    $RAM_Damage_post = $_POST['ram_damage'];
    $Panel_A_Damage_post = $_POST['panel_a_damage'];
    $Panel_B1_Status_post = $_POST['panel_b1_status'];
    $Panel_B1_Size_post = $_POST['panel_b1_size'];
    $Panel_B1_Damage_post = $_POST['panel_b1_damage'];
    $Panel_B2_Damage_post = $_POST['panel_b2_damage'];
    $Panel_C1_Damage_post = $_POST['panel_c1_damage'];
    $Panel_C2_Damage_post = $_POST['panel_c2_damage'];
    $Panel_C3_Status_post = $_POST['panel_c3_status'];
    $Panel_C3_Damage_post = $_POST['panel_c3_damage'];
    $Panel_C4_Status_post = $_POST['panel_c4_status'];
    $Panel_C4_Damage_post = $_POST['panel_c4_damage'];
    $Remark_post = $_POST['remark'];

    // Update query
    $update = "UPDATE `inspection_sheet_data` SET Product = '$Product_post',
                                                            Brand = '$Brand_post',
                                                            Model = '$Model_post',
                                                            Power = '$Power_post', 
                                                            Processor_Brand = '$Processor_Brand_post', 
                                                            Processor_Status = '$Processor_Status_post', 
                                                            Processor_Damage = '$Processor_Damage_post', 
                                                            Processor_Generation = '$Processor_Generation_post', 
                                                            Battery_Status = '$Battery_Status_post', 
                                                            Battery_Damage = '$Battery_Damage_post', 
                                                            Motherboard_Status = '$Motherboard_Status_post', 
                                                            Motherboard_Damage = '$Motherboard_Damage_post', 
                                                            Keyboard_Status = '$Keyboard_Status_post', 
                                                            Keyboard_Damage = '$Keyboard_Damage_post', 
                                                            Touchpad_Status = '$Touchpad_Status_post', 
                                                            Touchpad_Damage = '$Touchpad_Damage_post', 
                                                            HDD_Status = '$HDD_Status_post', 
                                                            HDD_Storage = '$HDD_Storage_post', 
                                                            HDD_Damage = '$HDD_Damage_post', 
                                                            RAM_Status = '$RAM_Status_post', 
                                                            RAM_Type = '$RAM_Type_post', 
                                                            RAM_Storage = '$RAM_Storage_post', 
                                                            RAM_Damage = '$RAM_Damage_post', 
                                                            Panel_A_Damage = '$Panel_A_Damage_post', 
                                                            Panel_B1_Status = '$Panel_B1_Status_post', 
                                                            Panel_B1_Size = '$Panel_B1_Size_post', 
                                                            Panel_B1_Damage = '$Panel_B1_Damage_post', 
                                                            Panel_B2_Damage = '$Panel_B2_Damage_post', 
                                                            Panel_C1_Damage = '$Panel_C1_Damage_post', 
                                                            Panel_C2_Damage = '$Panel_C2_Damage_post', 
                                                            Panel_C3_Status = '$Panel_C3_Status_post', 
                                                            Panel_C3_Damage = '$Panel_C3_Damage_post', 
                                                            Panel_C4_Status = '$Panel_C4_Status_post', 
                                                            Panel_C4_Damage = '$Panel_C4_Damage_post', 
                                                            Remark = '$Remark_post' 
                                                            WHERE id = $edit_id";
    $result_update = mysqli_query($con, $update);
    if ($result_update) {
        echo "
        <script>
            function submitForm() {
                alert('Form submitted!');
            }</script>
        ";
    }
}
?>

<!-- <button class="btn btn-primary m-2 text-center" onclick="submitForm()">Submit</button> -->