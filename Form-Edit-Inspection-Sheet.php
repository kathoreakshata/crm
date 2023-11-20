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
                                                <label class="rdiobox" for="processor-damage-yes"><input name="processor_damage" type="radio"
                                                        id="processor-damage-yes"> <span>Yes</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="processor-damage-no"><input name="processor_damage" type="radio"
                                                        id="processor-damage-no"> <span>No</span></label>
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