<?php
include("connection/connectdb.php");

if (isset($_GET['Form_Edit_Inspection_Sheet'])) {
    $edit_id = $_GET['Form_Edit_Inspection_Sheet'];

    $get_data = "SELECT * FROM  inspection_sheet_data WHERE id = $edit_id";
    $result = mysqli_query($con, $get_data);
    $row = mysqli_fetch_assoc($result);

    $fetch_product = $row['Product'];
    $fetch_brand = $row['Brand'];
    $fetch_model = $row['Model'];
    $fetch_power = $row['Power'];
    $fetch_processor_brand = $row['Processor_Brand'];
    $fetch_processor_generation = $row['Processor_Generation'];
    $fetch_processor_status = $row['Processor_Status'];
    $fetch_processor_damage = $row['Processor_Damage'];
    $fetch_battery_status = $row['Battery_Status'];
    $fetch_battery_damage = $row['Battery_Damage'];
    $fetch_motherboard_status = $row['Motherboard_Status'];
    $fetch_motherboard_damage = $row['Motherboard_Damage'];
    $fetch_keyboard_status = $row['Keyboard_Status'];
    $fetch_keyboard_damage = $row['Keyboard_Damage'];
    $fetch_touchpad_status = $row['Touchpad_Status'];
    $fetch_touchpad_damage = $row['Touchpad_Damage'];
    $fetch_hdd_status = $row['HDD_Status'];
    $fetch_hdd_storage = $row['HDD_Storage'];
    $fetch_hdd_damage = $row['HDD_Damage'];
    $fetch_ram_status = $row['RAM_Status'];
    $fetch_ram_type = $row['RAM_Type'];
    $fetch_ram_storage = $row['RAM_Storage'];
    $fetch_ram_damage = $row['RAM_Damage'];
    $fetch_panel_a_damage = $row['Panel_A_Damage'];
    $fetch_panel_b1_status = $row['Panel_B1_Status'];
    $fetch_panel_b1_size = $row['Panel_B1_Size'];
    $fetch_panel_b1_damage = $row['Panel_B1_Damage'];
    $fetch_panel_b2_damage = $row['Panel_B2_Damage'];
    $fetch_panel_c1_damage = $row['Panel_C1_Damage'];
    $fetch_panel_c2_damage = $row['Panel_C2_Damage'];
    $fetch_panel_c3_status = $row['Panel_C3_Status'];
    $fetch_panel_c3_damage = $row['Panel_C3_Damage'];
    $fetch_panel_c4_status = $row['Panel_C4_Status'];
    $fetch_panel_c4_damage = $row['Panel_C4_Damage'];
    $fetch_remark = $row['Remark'];
}

if(isset($_POST['']))
?>
<style>
    .form-container {
        display: none;
        transition: opacity 1s ease-in-out;
        opacity: 0;
    }

    .form-container.active {
        display: block;
        opacity: 1;
    }
    /* .form-group {
        opacity: 0;
        height: 0;
        overflow: hidden;
        transition: opacity 1s ease-in-out;
    }
    .form-group.show {
        opacity: 1;
        height: auto;
    } */
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
                                                <option selected value="<?php echo $fetch_product ?>"><?php echo $fetch_product ?></option>
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
                                        <div class="btn btn-primary m-2 text-center continue">Next</div>
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
                                                    <label class="rdiobox" for="dell"><input name="brand_radio" type="radio" id="dell" <?php if ($fetch_brand == "Dell") {
                                                        echo "checked";
                                                    } ?>><span>Dell</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="lenovo"><input name="brand_radio" type="radio" id="lenovo" <?php if ($fetch_brand == "Lenovo") {
                                                        echo "checked";
                                                    } ?>><span>Lenovo</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="acer"><input name="brand_radio" type="radio" id="acer" <?php if ($fetch_brand == "Acer") {
                                                        echo "checked";
                                                    } ?>><span>Acer</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="hp"><input name="brand_radio" type="radio" id="hp" <?php if ($fetch_brand == "HP") {
                                                        echo "checked";
                                                    } ?>><span>HP</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="apple"><input name="brand_radio" type="radio" id="apple" <?php if ($fetch_brand == "Apple") {
                                                        echo "checked";
                                                    } ?>><span>Apple</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="asus"><input name="brand_radio" type="radio" id="asus" <?php if ($fetch_brand == "Asus") {
                                                        echo "checked";
                                                    } ?>><span>Asus</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="other"><input name="brand_radio" type="radio" id="other" <?php if ($fetch_brand == "Other") {
                                                        echo "checked";
                                                    } ?>><span>Other</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary m-2 text-center back">Previous</div>
                                        <div class="btn btn-primary m-2 text-center continue">Next</div>
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
                                                    <label class="rdiobox" for="5300"><input name="model" type="radio" id="5300" <?php if ($fetch_model == "5300") {
                                                            echo "checked";
                                                        } ?>><span>5300</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="5400"><input name="model" type="radio" id="5400" <?php if ($fetch_model == "5400") {
                                                            echo "checked";
                                                        } ?>><span>5400</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="5500"><input name="model" type="radio" id="5500" <?php if ($fetch_model == "5500") {
                                                            echo "checked";
                                                        } ?>><span>5500</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary m-2 text-center back">Previous</div>
                                        <div class="btn btn-primary m-2 text-center continue">Next</div>
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
                                                    <label class="rdiobox" for="yes"><input name="power" type="radio" id="yes" <?php if ($fetch_power == "Yes") {
                                                            echo "checked";
                                                        } ?>><span>Yes</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="no"><input name="power" type="radio" id="no" <?php if ($fetch_power == "No") {
                                                            echo "checked";
                                                        } ?>> <span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary m-2 text-center back">Previous</div>
                                        <div class="btn btn-primary m-2 text-center continue">Next</div>
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
                                                <option value="<?php echo $fetch_processor_brand ?>" selected><?php echo $fetch_processor_brand ?></option>
                                                <option value="intel">Intel</option>
                                                <option value="mac">MAC</option>
                                                <option value="other">Other</option>
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
                                                <option value="<?php echo $fetch_processor_generation ?>" selected><?php echo $fetch_processor_generation ?></option>
                                                <option value="1gen">1st Gen</option>
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
                                                    <label class="rdiobox" for="working"><input name="processor_status" type="radio" id="working" <?php if ($fetch_processor_status == "Working") { echo "checked"; } ?>> <span>Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="not-working"><input name="processor_status" type="radio" id="not-working" <?php if ($fetch_processor_status == "Not Working") { echo "checked"; } ?>> <span>Not Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="missing"><input name="processor_status" type="radio" id="missing" <?php if ($fetch_processor_status == "Missing") { echo "checked"; } ?>> <span>Missing</span></label>
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
                                                    <label class="rdiobox" for="processor-damage-yes"><input name="processor_damage" type="radio" id="processor-damage-yes" <?php if ($fetch_processor_damage == "Yes") { echo "checked"; } ?>> <span>Yes</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="processor-damage-no"><input name="processor_damage" type="radio" id="processor-damage-no" <?php if ($fetch_processor_damage == "No") { echo "checked"; } ?>> <span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary m-2 text-center back">Previous</div>
                                        <div class="btn btn-primary m-2 text-center continue">Next</div>
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
                                                    <label class="rdiobox" for="battery-status-working"><input name="battery_status" type="radio" id="battery-status-working" <?php if ($fetch_battery_status == "Working") { echo "checked"; } ?>><span>Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="battery-status-not-working"><input name="battery_status" type="radio" id="battery-status-not-working" <?php if ($fetch_battery_status == "Not Working") { echo "checked"; } ?>> <span>Not Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="battery-status-missing"><input name="battery_status" type="radio" id="battery-status-missing" <?php if ($fetch_battery_status == "Missing") { echo "checked"; } ?>><span>Missing</span></label>
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
                                                    <label class="rdiobox" for="battery-damage-yes"><input name="battery_damage" type="radio" id="battery-damage-yes" <?php if ($fetch_battery_damage == "Yes") { echo "checked"; } ?>><span>Yes</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="battery-damage-no"><input name="battery_damage" type="radio" id="battery-damage-no" <?php if ($fetch_battery_damage == "No") { echo "checked"; } ?>><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary m-2 text-center back">Previous</div>
                                        <div class="btn btn-primary m-2 text-center continue">Next</div>
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
                                                    <label class="rdiobox" for="motherboard-status-working"><input name="motherboard_status" type="radio" id="motherboard-status-working" <?php if ($fetch_motherboard_status == "Working") { echo "checked"; } ?>><span>Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="motherboard-status-not-working"><input name="motherboard_status" type="radio" id="motherboard-status-not-working" <?php if ($fetch_motherboard_status == "Not Working") { echo "checked"; } ?>><span>Not Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="motherboard-status-missing"><input name="motherboard_status" type="radio" id="motherboard-status-missing" <?php if ($fetch_motherboard_status == "Missing") { echo "checked"; } ?>><span>Missing</span></label>
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
                                                    <label class="rdiobox" for="motherboard-damage-yes"><input name="motherboard_damage" type="radio" id="motherboard-damage-yes" <?php if ($fetch_motherboard_damage == "Yes") { echo "checked"; } ?>><span>Yes</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="motherboard-damage-no"><input name="motherboard_damage" type="radio" id="motherboard-damage-no" <?php if ($fetch_motherboard_damage == "No") { echo "checked"; } ?>><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary m-2 text-center back">Previous</div>
                                        <div class="btn btn-primary m-2 text-center continue">Next</div>
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
                                                    <label class="rdiobox" for="keyboard-status-working"><input name="keyboard_status" type="radio" id="keyboard-status-working" <?php if ($fetch_keyboard_status == "Working") { echo "checked"; } ?>> <span>Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="keyboard-status-not-working"><input name="keyboard_status" type="radio" id="keyboard-status-not-working" <?php if ($fetch_keyboard_status == "Not Working") { echo "checked"; } ?>><span>Not Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="keyboard-status-missing"><input name="keyboard_status" type="radio" id="keyboard-status-missing" <?php if ($fetch_keyboard_status == "Missing") { echo "checked"; } ?>><span>Missing</span></label>
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
                                                    <label class="rdiobox" for="keyboard-damage-yes"><input name="keyboard_damage" type="radio" id="keyboard-damage-yes" <?php if ($fetch_keyboard_damage == "Yes") { echo "checked"; } ?>><span>Yes</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="keyboard-damage-no"><input name="keyboard_damage" type="radio" id="keyboard-damage-no" <?php if ($fetch_keyboard_damage == "No") { echo "checked"; } ?>><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary m-2 text-center back">Previous</div>
                                        <div class="btn btn-primary m-2 text-center continue">Next</div>
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
                                                    <label class="rdiobox" for="touchpad-status-working"><input name="touchpad_status" type="radio" id="touchpad-status-working" <?php if ($fetch_touchpad_status == "Working") { echo "checked"; } ?>> <span>Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="touchpad-status-not-working"><input name="touchpad_status" type="radio" id="touchpad-status-not-working" <?php if ($fetch_touchpad_status == "Not Working") { echo "checked"; } ?>><span>Not Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="touchpad-status-missing"><input name="touchpad_status" type="radio" id="touchpad-status-missing" <?php if ($fetch_touchpad_status == "Missing") { echo "checked"; } ?>> <span>Missing</span></label>
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
                                                    <label class="rdiobox" for="touchpad-damage-yes"><input name="touchpad_damage" type="radio" id="touchpad-damage-yes"  <?php if ($fetch_touchpad_damage == "Yes") { echo "checked"; } ?>><span>Yes</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="touchpad-damage-no"><input name="touchpad_damage" type="radio" id="touchpad-damage-no"  <?php if ($fetch_touchpad_damage == "No") { echo "checked"; } ?>><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary m-2 text-center back">Previous</div>
                                        <div class="btn btn-primary m-2 text-center continue">Next</div>
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
                                                    <label class="rdiobox" for="hdd-status-working"><input name="hdd_status" type="radio" id="hdd-status-working" <?php if ($fetch_hdd_status == "Working") { echo "checked"; } ?>><span>Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="hdd-status-not-working"><input name="hdd_status" type="radio" id="hdd-status-not-working" <?php if ($fetch_hdd_status == "Not Working") { echo "checked"; } ?>><span>Not Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="hdd-status-missing"><input name="hdd_status" type="radio" id="hdd-status-missing" <?php if ($fetch_hdd_status == "Missing") { echo "checked"; } ?>><span>Missing</span></label>
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
                                                    <label class="rdiobox" for="hdd-storage-250gb"><input name="hdd_storage" type="radio" id="hdd-storage-250gb" <?php if ($fetch_hdd_storage == "250 GB") { echo "checked"; } ?>><span>250 GB</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="hdd-storage-500gb"><input name="hdd_storage" type="radio" id="hdd-storage-500gb" <?php if ($fetch_hdd_storage == "500 GB") { echo "checked"; } ?>><span>500 GB</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="hdd-storage-256gbssd"><input name="hdd_storage" type="radio" id="hdd-storage-256gbssd" <?php if ($fetch_hdd_storage == "256 GB SSD") { echo "checked"; } ?>><span>256 GB SSD</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="hdd-storage-512gbssd"><input name="hdd_storage" type="radio" id="hdd-storage-512gbssd" <?php if ($fetch_hdd_storage == "512 GB SSD") { echo "checked"; } ?>><span>512 GB SSD</span></label>
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
                                                    <label class="rdiobox" for="hdd-damage-yes"><input name="hdd_damage" type="radio" id="hdd-damage-yes" <?php if ($fetch_hdd_damage == "Yes") { echo "checked"; } ?>><span>Yes</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="hdd-damage-no"><input name="hdd_damage" type="radio" id="hdd-damage-no" <?php if ($fetch_hdd_damage == "No") { echo "checked"; } ?>><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary m-2 text-center back">Previous</div>
                                        <div class="btn btn-primary m-2 text-center continue">Next</div>
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
                                                    <label class="rdiobox" for="ram-status-working"><input name="ram_status" type="radio" id="ram-status-working" <?php if ($fetch_ram_status == "Working") { echo "checked"; } ?>><span>Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="ram-status-not-working"><input name="ram_status" type="radio" id="ram-status-not-working" <?php if ($fetch_ram_status == "Not Working") { echo "checked"; } ?>><span>Not Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="ram-status-missing"><input name="ram_status" type="radio" id="ram-status-missing" <?php if ($fetch_ram_status == "Missing") { echo "checked"; } ?>><span>Missing</span></label>
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
                                                    <label class="rdiobox" for="ram-type-ddr3"><input name="ram_type" type="radio" id="ram-type-ddr3" <?php if ($fetch_ram_type == "DDR 3") { echo "checked"; } ?>><span>DDR 3</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="ram-type-ddr4"><input name="ram_type" type="radio" id="ram-type-ddr4" <?php if ($fetch_ram_type == "DDR 4") { echo "checked"; } ?>><span>DDR 4</span></label>
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
                                                    <label class="rdiobox" for="ram-storage-4gb"><input name="ram_storage" type="radio" id="ram-storage-4gb" <?php if ($fetch_ram_storage == "4 GB") { echo "checked"; } ?>><span>4 GB</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="ram-storage-8gb"><input name="ram_storage" type="radio" id="ram-storage-8gb" <?php if ($fetch_ram_storage == "8 GB") { echo "checked"; } ?>><span>8 GB</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="ram-storage-16gb"><input name="ram_storage" type="radio" id="ram-storage-16gb" <?php if ($fetch_ram_storage == "16 GB") { echo "checked"; } ?>><span>16 GB</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="ram-storage-32gb"><input name="ram_storage" type="radio" id="ram-storage-32gb" <?php if ($fetch_ram_storage == "32 GB") { echo "checked"; } ?>><span>32 GB</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="ram-storage-64gb"><input name="ram_storage" type="radio" id="ram-storage-64gb" <?php if ($fetch_ram_storage == "64 GB") { echo "checked"; } ?>><span>64 GB</span></label>
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
                                                    <label class="rdiobox" for="ram-damage-yes"><input name="ram_damage" type="radio" id="ram-damage-yes" <?php if ($fetch_ram_damage == "Yes") { echo "checked"; } ?>><span>Yes</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="ram-damage-no"><input name="ram_damage" type="radio" id="ram-damage-no" <?php if ($fetch_ram_damage == "No") { echo "checked"; } ?>><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary m-2 text-center back">Previous</div>
                                        <div class="btn btn-primary m-2 text-center continue">Next</div>
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
                                                    <label class="rdiobox" for="panel-a-damage-yes"><input name="panel_a_damage" type="radio" id="panel-a-damage-yes" <?php if ($fetch_panel_a_damage == "Yes") { echo "checked"; } ?>><span>Yes</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-a-damage-no"><input name="panel_a_damage" type="radio" id="panel-a-damage-no" <?php if ($fetch_panel_a_damage == "No") { echo "checked"; } ?>><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary m-2 text-center back">Previous</div>
                                        <div class="btn btn-primary m-2 text-center continue">Next</div>
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
                                                    <label class="rdiobox" for="panel-b1-status-working"><input name="panel_b1_status" type="radio" id="panel-b1-status-working" <?php if ($fetch_panel_b1_status == "Working") { echo "checked"; } ?>><span>Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-b1-status-not-working"><input name="panel_b1_status" type="radio" id="panel-b1-status-not-working" <?php if ($fetch_panel_b1_status == "Not Working") { echo "checked"; } ?>><span>Not Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-b1-status-missing"><input name="panel_b1_status" type="radio" id="panel-b1-status-missing" <?php if ($fetch_panel_b1_status == "Missing") { echo "checked"; } ?>><span>Missing</span></label>
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
                                                    <label class="rdiobox" for="panel-b1-size-12-5"><input name="panel_b1_size" type="radio" id="panel-b1-size-12-5" <?php if ($fetch_panel_b1_size == "12.5 Inch") { echo "checked"; } ?>><span>12.5 Inch</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-b1-size-13"><input name="panel_b1_size" type="radio" id="panel-b1-size-13" <?php if ($fetch_panel_b1_size == "13 Inch") { echo "checked"; } ?>><span>13 Inch</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-b1-size-14"><input name="panel_b1_size" type="radio" id="panel-b1-size-14" <?php if ($fetch_panel_b1_size == "14 Inch") { echo "checked"; } ?>><span>14 Inch</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-b1-size-15-6"><input name="panel_b1_size" type="radio" id="panel-b1-size-15-6" <?php if ($fetch_panel_b1_size == "15.6 Inch") { echo "checked"; } ?>><span>15.6 Inch</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-b1-size-17"><input name="panel_b1_size" type="radio" id="panel-b1-size-17" <?php if ($fetch_panel_b1_size == "17 Inch") { echo "checked"; } ?>><span>17 Inch</span></label>
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
                                                    <label class="rdiobox" for="panel-b1-damage-spot"><input name="panel_b1_damage" type="radio" id="panel-b1-damage-spot" <?php if ($fetch_panel_b1_damage == "Spot") { echo "checked"; } ?>><span>Spot</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-b1-damage-lining"><input name="panel_b1_damage" type="radio" id="panel-b1-damage-lining" <?php if ($fetch_panel_b1_damage == "Lining") { echo "checked"; } ?>><span>Lining</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-b1-damage-no-damage"><input name="panel_b1_damage" type="radio" id="panel-b1-damage-no-damage" <?php if ($fetch_panel_b1_damage == "No Damage") { echo "checked"; } ?>><span>No Damage</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary m-2 text-center back">Previous</div>
                                        <div class="btn btn-primary m-2 text-center continue">Next</div>
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
                                                    <label class="rdiobox" for="panel-b2-damage-yes"><input name="panel_b2_damage" type="radio" id="panel-b2-damage-yes" <?php if ($fetch_panel_b2_damage == "Yes") { echo "checked"; } ?>><span>Yes</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-b2-damage-no"><input name="panel_b2_damage" type="radio" id="panel-b2-damage-no" <?php if ($fetch_panel_b2_damage == "No") { echo "checked"; } ?>><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary m-2 text-center back">Previous</div>
                                        <div class="btn btn-primary m-2 text-center continue">Next</div>
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
                                                    <label class="rdiobox" for="panel-c1-damage-yes"><input name="panel_c1_damage" type="radio" id="panel-c1-damage-yes" <?php if ($fetch_panel_c1_damage == "Yes") { echo "checked"; } ?>><span>Yes</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-c1-damage-no"><input name="panel_c1_damage" type="radio" id="panel-c1-damage-no" <?php if ($fetch_panel_c1_damage == "No") { echo "checked"; } ?>><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary m-2 text-center back">Previous</div>
                                        <div class="btn btn-primary m-2 text-center continue">Next</div>
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
                                                    <label class="rdiobox" for="panel-c2-damage-yes"><input name="panel_c2_damage" type="radio" id="panel-c2-damage-yes" <?php if ($fetch_panel_c2_damage == "Yes") { echo "checked"; } ?>><span>Yes</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-c2-damage-no"><input name="panel_c2_damage" type="radio" id="panel-c2-damage-no" <?php if ($fetch_panel_c2_damage == "No") { echo "checked"; } ?>><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary m-2 text-center back">Previous</div>
                                        <div class="btn btn-primary m-2 text-center continue">Next</div>
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
                                                    <label class="rdiobox" for="panel-c3-status-working"><input name="panel_c3_status" type="radio" id="panel-c3-status-working" <?php if ($fetch_panel_c3_status == "Working") { echo "checked"; } ?>><span>Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-c3-status-not-working"><input name="panel_c3_status" type="radio" id="panel-c3-status-not-working" <?php if ($fetch_panel_c3_status == "Not Working") { echo "checked"; } ?>><span>Not Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-c3-status-missing"><input name="panel_c3_status" type="radio" id="panel-c3-status-missing" <?php if ($fetch_panel_c3_status == "Missing") { echo "checked"; } ?>><span>Missing</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-heading-1 mb-0 me-2">Panel C3 Damage</div>
                            <div class="col-lg-12 col-md-12">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-c3-damage-yes"><input name="panel_c3_damage" type="radio" id="panel-c3-damage-yes" <?php if ($fetch_panel_c3_damage == "Yes") { echo "checked"; } ?>><span>Yes</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-c3-damage-no"><input name="panel_c3_damage" type="radio" id="panel-c3-damage-no" <?php if ($fetch_panel_c3_damage == "No") { echo "checked"; } ?>><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary m-2 text-center back">Previous</div>
                                        <div class="btn btn-primary m-2 text-center continue">Next</div>
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
                                                    <label class="rdiobox" for="panel-c4-status-working"><input name="panel_c4_status" type="radio" id="panel-c4-status-working" <?php if ($fetch_panel_c4_status == "Working") { echo "checked"; } ?>><span>Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-c4-status-not-working"><input name="panel_c4_status" type="radio" id="panel-c4-status-not-working" <?php if ($fetch_panel_c4_status == "Not Working") { echo "checked"; } ?>><span>Not Working</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-c4-status-missing"><input name="panel_c4_status" type="radio" id="panel-c4-status-missing" <?php if ($fetch_panel_c4_status == "Missing") { echo "checked"; } ?>><span>Missing</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-heading-1 mb-0 me-2">Panel C4 Damage</div>
                            <div class="col-lg-12 col-md-12">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-c4-damage-yes"><input name="panel_c4_damage" type="radio" id="panel-c4-damage-yes" <?php if ($fetch_panel_c4_damage == "Yes") { echo "checked"; } ?>><span>Yes</span></label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="rdiobox" for="panel-c4-damage-no"><input name="panel_c4_damage" type="radio" id="panel-c4-damage-no" <?php if ($fetch_panel_c4_damage == "No") { echo "checked"; } ?>><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary m-2 text-center back">Previous</div>
                                        <div class="btn btn-primary m-2 text-center continue">Next</div>
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
                                                <textarea class="form-control mb-4" placeholder="Write remark here if any..." rows="3" name="remark" value="<?php echo $fetch_remark ?>"><?php echo $fetch_remark ?></textarea>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary m-2 text-center" onclick="previousForm('form18')">Previous</div>
                                        <button type="submit" class="btn btn-primary m-2 text-center" name="update">Submit</button>
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
    document.addEventListener("DOMContentLoaded", function () {
        const steps = document.querySelectorAll('.form-container');
        let currentStep = 0;

        function showStep(index) {
            steps.forEach((step, i) => {
                step.classList.toggle('active', i === index);
            });
        }

        function nextStep() {
            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        }

        // Add event listeners for all steps dynamically
        steps.forEach((step, index) => {
            const continueButton = step.querySelector(`.continue`);
            const backButton = step.querySelector(`.back`);

            if (continueButton) {
                continueButton.addEventListener("click", function () {
                    nextStep();
                });
            }

            if (backButton) {
                backButton.addEventListener("click", function () {
                    prevStep();
                });
            }
        });
    });
</script>