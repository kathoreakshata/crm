<?php
include("connection/connectdb.php");
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
                    <div class="list-group-item py-4 form-container active" id="form1">
                        <div class="form-heading-1 mb-0 me-2">Select Type Of Product</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <select class="form-select m-2" id="validationCustom14" name="select_product">
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
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form2')">Next</button>
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
                                                        id="dell"> <span>Dell</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="lenovo"><input name="brand_radio"
                                                        type="radio" id="lenovo"> <span>Lenovo</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="acer"><input name="brand_radio" type="radio"
                                                        id="acer"> <span>Acer</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="hp"><input name="brand_radio" type="radio"
                                                        id="hp"> <span>HP</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="apple"><input name="brand_radio"
                                                        type="radio" id="apple"> <span>Apple</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="asus"><input name="brand_radio" type="radio"
                                                        id="asus"> <span>Asus</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="other"><input name="brand_radio"
                                                        type="radio" id="other"> <span>Other</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-primary m-2 text-center" type="submit">Submit</button> -->
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form1')">Previous</button>
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form3')">Next</button>
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
                                                        id="5300"> <span>5300</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="5400"><input name="model" type="radio"
                                                        id="5400"> <span>5400</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="5500"><input name="model" type="radio"
                                                        id="5500"> <span>5500</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-primary m-2 text-center" type="submit">Submit</button> -->
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form2')">Previous</button>
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form4')">Next</button>
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
                                                        id="yes"> <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="no"><input name="power" type="radio"
                                                        id="no"> <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-primary m-2 text-center" type="submit">Submit</button> -->
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form3')">Previous</button>
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form5')">Next</button>
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
                                                        type="radio" id="working"> <span>Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="not-working"><input name="processor_status"
                                                        type="radio" id="not-working"> <span>Not Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="missing"><input name="processor_status"
                                                        type="radio" id="missing"> <span>Missing</span></label>
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
                                                        name="processor_damage" type="radio" id="processor-damage-yes">
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="processor-damage-no"><input
                                                        name="processor_damage" type="radio" id="processor-damage-no">
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-primary m-2 text-center" type="submit">Submit</button> -->
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form4')">Previous</button>
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form6')">Next</button>
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
                                                        name="battery_status" type="radio" id="battery-status-working">
                                                    <span>Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="battery-status-not-working"><input
                                                        name="battery_status" type="radio"
                                                        id="battery-status-not-working"> <span>Not
                                                        Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="battery-status-missing"><input
                                                        name="battery_status" type="radio" id="battery-status-missing">
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
                                                        name="battery_damage" type="radio" id="battery-damage-yes">
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="battery-damage-no"><input
                                                        name="battery_damage" type="radio" id="battery-damage-no">
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-primary m-2 text-center" type="submit">Submit</button> -->
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form5')">Previous</button>
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form7')">Next</button>
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
                                                <label class="rdiobox" for="motherboard-status-working"><input
                                                        name="motherboard_status" type="radio"
                                                        id="motherboard-status-working"> <span>Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="motherboard-status-not-working"><input
                                                        name="motherboard_status" type="radio"
                                                        id="motherboard-status-not-working"> <span>Not
                                                        Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="motherboard-status-missing"><input
                                                        name="motherboard_status" type="radio"
                                                        id="motherboard-status-missing"> <span>Missing</span></label>
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
                                                        id="motherboard-damage-yes"> <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="motherboard-damage-no"><input
                                                        name="motherboard_damage" type="radio"
                                                        id="motherboard-damage-no"> <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-primary m-2 text-center" type="submit">Submit</button> -->
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form6')">Previous</button>
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form8')">Next</button>
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
                                                        id="keyboard-status-working"> <span>Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="keyboard-status-not-working"><input
                                                        name="keyboard_status" type="radio"
                                                        id="keyboard-status-not-working"> <span>Not
                                                        Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="keyboard-status-missing"><input
                                                        name="keyboard_status" type="radio"
                                                        id="keyboard-status-missing"> <span>Missing</span></label>
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
                                                        name="keyboard_damage" type="radio" id="keyboard-damage-yes">
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="keyboard-damage-no"><input
                                                        name="keyboard_damage" type="radio" id="keyboard-damage-no">
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-primary m-2 text-center" type="submit">Submit</button> -->
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form7')">Previous</button>
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form9')">Next</button>
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
                                                        id="touchpad-status-working"> <span>Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="touchpad-status-not-working"><input
                                                        name="touchpad_status" type="radio"
                                                        id="touchpad-status-not-working"> <span>Not
                                                        Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="touchpad-status-missing"><input
                                                        name="touchpad_status" type="radio"
                                                        id="touchpad-status-missing"> <span>Missing</span></label>
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
                                                        name="touchpad_damage" type="radio" id="touchpad-damage-yes">
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="touchpad-damage-no"><input
                                                        name="touchpad_damage" type="radio" id="touchpad-damage-no">
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-primary m-2 text-center" type="submit">Submit</button> -->
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form8')">Previous</button>
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form10')">Next</button>
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
                                                        type="radio" id="hdd-status-working">
                                                    <span>Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="hdd-status-not-working"><input
                                                        name="hdd_status" type="radio" id="hdd-status-not-working">
                                                    <span>Not Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="hdd-status-missing"><input name="hdd_status"
                                                        type="radio" id="hdd-status-missing">
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
                                                        type="radio" id="hdd-storage-250gb">
                                                    <span>250 GB</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="hdd-storage-500gb"><input name="hdd_storage"
                                                        type="radio" id="hdd-storage-500gb">
                                                    <span>500 GB</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="hdd-storage-256gbssd"><input
                                                        name="hdd_storage" type="radio" id="hdd-storage-256gbssd">
                                                    <span>256 GB SSD</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="hdd-storage-512gbssd"><input
                                                        name="hdd_storage" type="radio" id="hdd-storage-512gbssd">
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
                                                        type="radio" id="hdd-damage-yes">
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="hdd-damage-no"><input name="hdd_damage"
                                                        type="radio" id="hdd-damage-no">
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-primary m-2 text-center" type="submit">Submit</button> -->
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form9')">Previous</button>
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form11')">Next</button>
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
                                                        type="radio" id="ram-status-working">
                                                    <span>Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-status-not-working"><input
                                                        name="ram_status" type="radio" id="ram-status-not-working">
                                                    <span>Not Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-status-missing"><input name="ram_status"
                                                        type="radio" id="ram-status-missing">
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
                                                        type="radio" id="ram-type-ddr3">
                                                    <span>DDR 3</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-type-ddr4"><input name="ram_type"
                                                        type="radio" id="ram-type-ddr4">
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
                                                        type="radio" id="ram-storage-4gb">
                                                    <span>4 GB</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-storage-8gb"><input name="ram_storage"
                                                        type="radio" id="ram-storage-8gb">
                                                    <span>8 GB</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-storage-16gb"><input name="ram_storage"
                                                        type="radio" id="ram-storage-16gb">
                                                    <span>16 GB</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-storage-32gb"><input name="ram_storage"
                                                        type="radio" id="ram-storage-32gb">
                                                    <span>32 GB</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-storage-64gb"><input name="ram_storage"
                                                        type="radio" id="ram-storage-64gb">
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
                                                        type="radio" id="ram-damage-yes">
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="ram-damage-no"><input name="ram_damage"
                                                        type="radio" id="ram-damage-no">
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-primary m-2 text-center" type="submit">Submit</button> -->
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form10')">Previous</button>
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form12')">Next</button>
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
                                                        name="panel_a_damage" type="radio" id="panel-a-damage-yes">
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-a-damage-no"><input
                                                        name="panel_a_damage" type="radio" id="panel-a-damage-no">
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-primary m-2 text-center" type="submit">Submit</button> -->
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form11')">Previous</button>
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form13')">Next</button>
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
                                                        id="panel-b1-status-working">
                                                    <span>Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b1-status-not-working"><input
                                                        name="panel_b1_status" type="radio"
                                                        id="panel-b1-status-not-working">
                                                    <span>Not Working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b1-status-missing"><input
                                                        name="panel_b1_status" type="radio"
                                                        id="panel-b1-status-missing">
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
                                                        name="panel_b1_size" type="radio" id="panel-b1-size-12-5">
                                                    <span>12.5 Inch</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b1-size-13"><input
                                                        name="panel_b1_size" type="radio" id="panel-b1-size-13">
                                                    <span>13 Inch</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b1-size-14"><input
                                                        name="panel_b1_size" type="radio" id="panel-b1-size-14">
                                                    <span>14 Inch</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b1-size-15-6"><input
                                                        name="panel_b1_size" type="radio" id="panel-b1-size-15-6">
                                                    <span>15.6 Inch</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b1-size-17"><input
                                                        name="panel_b1_size" type="radio" id="panel-b1-size-17">
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
                                                        name="panel-b1-damage" type="radio" id="panel-b1-damage-spot">
                                                    <span>Spot</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b1-damage-lining"><input
                                                        name="panel-b1-damage" type="radio" id="panel-b1-damage-lining">
                                                    <span>Lining</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-primary m-2 text-center" type="submit">Submit</button> -->
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form12')">Previous</button>
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form14')">Next</button>
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
                                                <label class="rdiobox" for="panel-b2-dmage-yes"><input
                                                        name="panel_b2_damage" type="radio"
                                                        id="panel-b2-dmage-yes">
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-b2-dmage-no"><input
                                                        name="panel_b2_damage" type="radio"
                                                        id="panel-b2-dmage-no">
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-primary m-2 text-center" type="submit">Submit</button> -->
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form13')">Previous</button>
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form15')">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form14">
                        <div class="form-heading-1 mb-0 me-2">Panel C1 Damage</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-c1-dmage-yes"><input
                                                        name="panel_c1_damage" type="radio"
                                                        id="panel-c1-dmage-yes">
                                                    <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="panel-c1-dmage-no"><input
                                                        name="panel_c1_damage" type="radio"
                                                        id="panel-c1-dmage-no">
                                                    <span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-primary m-2 text-center" type="submit">Submit</button> -->
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form13')">Previous</button>
                                        <button class="btn btn-primary m-2 text-center" onclick="submitForm()">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

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

    function submitForm() {
        // Perform form submission logic here
        alert('Form submitted!');
    }
</script>

<!-- <button class="btn btn-primary m-2 text-center" onclick="submitForm()">Submit</button> -->