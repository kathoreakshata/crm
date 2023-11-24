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

.ag-collection-block {
  padding: 50px 0;
}

.ag-format-container {
  width: 100%;
  margin: 0 auto;
}

.ag-collection_list {
  display: grid;
  grid-template-columns: repeat(4, 2fr);
  grid-auto-columns: minmax(250px, auto);
  grid-auto-rows: minmax(250px, auto);
  grid-column-gap: 10px;
  grid-row-gap: 10px;
}

.js-ag-collection_item {
  display: flex;
  justify-content: center;
  align-items: center;
}
.ag-collection_info {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-self: center;
  align-items: center;
  height: 100%;
  width: 100%;
  padding: 15px;
  /* background-color: #e7e7e7; */
  box-sizing: border-box;
  border-radius: 8px;
  border: 1px solid #e7e7e7;
  position: relative;
}

.ag-collection_img {
  max-width: 100%;
}

.ag-collection_text {
  line-height: 1.2;
}


@media only screen and (max-width: 767px) {
  .ag-format-container {
    width: 96%;
  }

  .ag-collection_list {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
  }


  .js-ag-collection-popup_box {
    height: auto;
    width: 90%;
    margin: 200px 0 50px;
  }

  .ag-collection-popup_col__left,
  .ag-collection-popup_col__right {
    width: auto;
  }
  .ag-collection-popup_col__left {
    border-radius: 8px 8px 0 0;
  }
  .ag-collection-popup_col__right {
    border-radius: 0 0 8px 8px;
  }

}

@media only screen and (max-width: 639px) {

}

@media only screen and (max-width: 479px) {
  .ag-collection_list {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
  }
}

@media (min-width: 768px) and (max-width: 979px) {
  .ag-format-container {
    width: 750px;
  }

  .ag-collection_list {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
  }

}

@media (min-width: 980px) and (max-width: 1161px) {
  .ag-format-container {
    width: 960px;
  }

  .ag-collection_list {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
  }
}

</style>
<script>
    function toggleSelected(element) {
        element.classList.toggle('selected');
    }
</script>


<div class="row row-sm">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-card">
            <div class="card-body">
                <div class="list-group">
                    <!-- <div class="list-group-item py-4 form-container active" id="form1">
                        <div class="form-heading-1 mb-0 me-2">Select Product</div>
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
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form2')">Next</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    
                    <div class="list-group-item py-4 form-container active" id="form1">
                        <div class="form-heading-1 mb-0 me-2">Select Product</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="ag-collection-block">
                                        <div class="ag-format-container">
                                            <div role="list" class="ag-collection_list">
                                                
                                                <div role="listitem" class="js-ag-collection_item cursor-pointer">
                                                    <div class="ag-collection_info">
                                                        <img src="assets\images\functionality-icons\60ab9d8f386a4.png" class="ag-collection_img" loading="lazy" sizes="(max-width: 479px) 52vw, (max-width: 767px) 26vw, (max-width: 991px) 134.3828125px, (max-width: 1439px) 188.296875px, 224.234375px" alt="" />
                                                        <div class="ag-collection_text text-center">Keyboard not working; key(s) missing/not working</div>
                                                    </div>
                                                </div>
                                                
                                                <div role="listitem" class="js-ag-collection_item cursor-pointer">
                                                    <div class="ag-collection_info">
                                                        <img src="assets\images\functionality-icons\60ab9cb0aceb0.png" class="ag-collection_img" loading="lazy" sizes="(max-width: 479px) 52vw, (max-width: 767px) 26vw, (max-width: 991px) 134.3828125px, (max-width: 1439px) 188.296875px, 224.234375px" alt="" />
                                                        <div class="ag-collection_text text-center">CD/DVD Drive not working</div>
                                                    </div>
                                                </div>
                                                
                                                <div role="listitem" class="js-ag-collection_item cursor-pointer">
                                                    <div class="ag-collection_info">
                                                        <img src="assets\images\functionality-icons\60ab9cad03f51.png" class="ag-collection_img" loading="lazy" sizes="(max-width: 479px) 52vw, (max-width: 767px) 26vw, (max-width: 991px) 134.3828125px, (max-width: 1439px) 188.296875px, 224.234375px" alt="" />
                                                        <div class="ag-collection_text text-center">Touchpad not working; Left/Right click faulty</div>
                                                    </div>
                                                </div>
                                                
                                                <div role="listitem" class="js-ag-collection_item cursor-pointer">
                                                    <div class="ag-collection_info">
                                                        <img src="assets\images\functionality-icons\60ab9cab2beab.png" class="ag-collection_img" loading="lazy" sizes="(max-width: 479px) 52vw, (max-width: 767px) 26vw, (max-width: 991px) 134.3828125px, (max-width: 1439px) 188.296875px, 224.234375px" alt="" />
                                                        <div class="ag-collection_text text-center">Battery Dead; back up less than 60 minutes / Cycle count more than 800</div>
                                                    </div>
                                                </div>
                                                
                                                <div role="listitem" class="js-ag-collection_item cursor-pointer">
                                                    <div class="ag-collection_info">
                                                        <img src="assets\images\functionality-icons\60ab9ceeabfbd.png" class="ag-collection_img" loading="lazy" sizes="(max-width: 479px) 52vw, (max-width: 767px) 26vw, (max-width: 991px) 134.3828125px, (max-width: 1439px) 188.296875px, 224.234375px" alt="" />
                                                        <div class="ag-collection_text text-center">Speakers not working; faulty/cracked sound</div>
                                                    </div>
                                                </div>
                                                
                                                <div role="listitem" class="js-ag-collection_item cursor-pointer">
                                                    <div class="ag-collection_info">
                                                        <img src="assets\images\functionality-icons\60ab9d25e5a56.png" class="ag-collection_img" loading="lazy" sizes="(max-width: 479px) 52vw, (max-width: 767px) 26vw, (max-width: 991px) 134.3828125px, (max-width: 1439px) 188.296875px, 224.234375px" alt="" />
                                                        <div class="ag-collection_text text-center">Wi-Fi not working</div>
                                                    </div>
                                                </div>
                                                
                                                <div role="listitem" class="js-ag-collection_item cursor-pointer">
                                                    <div class="ag-collection_info">
                                                        <img src="assets\images\functionality-icons\60ab9d5a638a4.png" class="ag-collection_img" loading="lazy" sizes="(max-width: 479px) 52vw, (max-width: 767px) 26vw, (max-width: 991px) 134.3828125px, (max-width: 1439px) 188.296875px, 224.234375px" alt="" />
                                                        <div class="ag-collection_text text-center">Faulty Charger; wire cut, Not available</div>
                                                    </div>
                                                </div>
                                                
                                                <div role="listitem" class="js-ag-collection_item cursor-pointer">
                                                    <div class="ag-collection_info">
                                                        <img src="assets\images\functionality-icons\60ab9ddc6abb4.png" class="ag-collection_img" loading="lazy" sizes="(max-width: 479px) 52vw, (max-width: 767px) 26vw, (max-width: 991px) 134.3828125px, (max-width: 1439px) 188.296875px, 224.234375px" alt="" />
                                                        <div class="ag-collection_text text-center">USB Port not working</div>
                                                    </div>
                                                </div>
                                                
                                                <div role="listitem" class="js-ag-collection_item cursor-pointer">
                                                    <div class="ag-collection_info">
                                                        <img src="assets\images\functionality-icons\60ab9cad03f51.png" class="ag-collection_img" loading="lazy" sizes="(max-width: 479px) 52vw, (max-width: 767px) 26vw, (max-width: 991px) 134.3828125px, (max-width: 1439px) 188.296875px, 224.234375px" alt="" />
                                                        <div class="ag-collection_text text-center">Web Cam not working</div>
                                                    </div>
                                                </div>
                                                
                                                <div role="listitem" class="js-ag-collection_item cursor-pointer">
                                                    <div class="ag-collection_info">
                                                        <img src="assets\images\functionality-icons\6148560d0c3b3.png" class="ag-collection_img" loading="lazy" sizes="(max-width: 479px) 52vw, (max-width: 767px) 26vw, (max-width: 991px) 134.3828125px, (max-width: 1439px) 188.296875px, 224.234375px" alt="" />
                                                        <div class="ag-collection_text text-center">Charging Port not working</div>
                                                    </div>
                                                </div>
                                                
                                                <div role="listitem" class="js-ag-collection_item cursor-pointer">
                                                    <div class="ag-collection_info">
                                                        <img src="assets\images\functionality-icons\61487866ea5a5-removebg-preview.png" class="ag-collection_img" loading="lazy" sizes="(max-width: 479px) 52vw, (max-width: 767px) 26vw, (max-width: 991px) 134.3828125px, (max-width: 1439px) 188.296875px, 224.234375px" alt="" />
                                                        <div class="ag-collection_text text-center">Hard Drive Missing/Defective</div>
                                                    </div>
                                                </div>
                                                
                                                <div role="listitem" class="js-ag-collection_item cursor-pointer">
                                                    <div class="ag-collection_info">
                                                        <img src="assets\images\functionality-icons\62e0d8a3d520e-removebg-preview.png" class="ag-collection_img" loading="lazy" sizes="(max-width: 479px) 52vw, (max-width: 767px) 26vw, (max-width: 991px) 134.3828125px, (max-width: 1439px) 188.296875px, 224.234375px" alt="" />
                                                        <div class="ag-collection_text text-center">Motherboard issue - auto restart, hanging, heating/not booting</div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary m-2 text-center" onclick="nextForm('form2')">Next</button>
                            </div>
                        </div>
                    </div>
                    

                    <div class="list-group-item py-4 form-container" id="form2">
                        <div class="form-heading-1 mb-0 me-2">Select Brand</div>
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
                        <div class="form-heading-1 mb-0 me-2">Select Model</div>
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
                        <div class="form-heading-1 mb-0 me-2">Does the Laptop switch on?</div>
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
                        <h2>Select the system configuration of your device?</h2>
                        <div class="form-heading-1 mb-0 me-2">Processor</div>
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
                        <div class="form-heading-1 mb-0 me-2">RAM</div>
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
                        <div class="form-heading-1 mb-0 me-2">Hard Disk</div>
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
                        <h2>Select the additional features of your device?</h2>
                        <div class="form-heading-1 mb-0 me-2">Screen Size</div>
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
                        <div class="form-heading-1 mb-0 me-2">External Graphics Card</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="graphic-card-available"><input
                                                        name="graphic_card" type="radio" id="graphic-card-available">
                                                    <span>Graphic Card Available</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="graphic-card-not-available"><input
                                                        name="panel_b1_size" type="radio"
                                                        id="graphic-card-not-available">
                                                    <span>Graphic Card Not Available</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="graphic-card-not-working"><input
                                                        name="panel_b1_size" type="radio" id="graphic-card-not-working">
                                                    <span>Graphic Card Not Working</span></label>
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

                    <div class="list-group-item py-4 form-container" id="form77">
                        <div class="form-heading-1 mb-0 me-2">Does your device function properly?</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="ckbox" for="fun-keyboard"><input type="checkbox"
                                                        id="fun-keyboard"><span>Keyboard not working; key(s) missing/not
                                                        working.</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="ckbox" for="fun-cd"><input type="checkbox"
                                                        id="fun-cd"><span>CD/DVD Drive not working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="ckbox" for="fun-touchpad"><input type="checkbox"
                                                        id="fun-touchpad"><span>Touchpad not working; Left/Right click faulty</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="ckbox" for="fun-battery"><input type="checkbox"
                                                        id="fun-battery"><span>Battery Dead; backup less than 60 minutes/Cycle count more
                                                        than 800</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="ckbox" for="fun-speaker"><input type="checkbox"
                                                        id="fun-speaker"><span>Speakes not working; faulty/cracked sound</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="ckbox" for="fun-wifi"><input type="checkbox"
                                                        id="fun-wifi"><span>Speakes not working; faulty/cracked sound</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="ckbox" for="fun-charger"><input type="checkbox"
                                                        id="fun-charger"><span>Faulty Charger; wire cut, Not available</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="ckbox" for="fun-usb"><input type="checkbox"
                                                        id="fun-usb"><span>USB Port not working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="ckbox" for="fun-webcam"><input type="checkbox"
                                                        id="fun-webcam"><span>Web cam not working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="ckbox" for="fun-charging-port"><input type="checkbox"
                                                        id="fun-charging-port"><span>Charging Port not working</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="ckbox" for="fun-hard-drive"><input type="checkbox"
                                                        id="fun-hard-drive"><span>Hard Drive Missing/Defective</span></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="ckbox" for="fun-motherboard"><input type="checkbox"
                                                        id="fun-motherboard"><span>Motherboard issue - auto restart, hanging, heating/not
                                                        booting</span></label>
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

                    <div class="list-group-item py-4 form-container" id="form7">
                        <div class="form-heading-1 mb-0 me-2">Does your device function properly?</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="d-flex flex-row flex-wrap w-full">
                                            <section class="d-flex pr-2 sm:pr-3 mt-5 pr-1 w-1/2 sm:w-1/4 mb-4 sm:mb-0">
                                                <div class="cursor-pointer d-flex flex-col items-center rounded-md w-full border border-solid">
                                                    <div class="d-flex flex-col items-center justify-center m-4 w-28 h-28">
                                                        <img alt="cashify" class="img-resp" loading="lazy" fetchpriority="low" src="https://s3n.cashify.in/cashify/productLinePartVariation/img/xhdpi/60ab9d8f386a4.png">
                                                    </div>
                                                    <div class="d-flex flex-col items-center w-full flex-1 bg-gray-50">
                                                        <div class="text-center caption p-4 d-flex items-center justify-center">Keyboard not working; key(s) missing/not working	</div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="d-flex pr-2 sm:pr-3 mt-5 pr-1 w-1/2 sm:w-1/4 mb-4 sm:mb-0">
                                                <div class="cursor-pointer d-flex flex-col items-center rounded-md w-full border border-solid">
                                                    <div class="d-flex flex-col items-center justify-center m-4 w-28 h-28">
                                                        <img alt="cashify" class="img-resp" loading="lazy" fetchpriority="low" src="https://s3n.cashify.in/cashify/productLinePartVariation/img/xhdpi/60ab9cb0aceb0.png">
                                                    </div>
                                                    <div class="d-flex flex-col items-center w-full flex-1 bg-gray-50">
                                                        <div class="text-center caption p-4 d-flex items-center justify-center">CD/DVD Drive not working</div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="d-flex pr-2 sm:pr-3 mt-5 pr-1 w-1/2 sm:w-1/4 mb-4 sm:mb-0"><div class="cursor-pointer d-flex flex-col items-center rounded-md w-full border border-solid"><div class="d-flex flex-col items-center justify-center m-4 w-28 h-28"><img alt="cashify" class="img-resp" loading="lazy" fetchpriority="low" src="https://s3n.cashify.in/cashify/productLinePartVariation/img/xhdpi/60ab9cad03f51.png"></div><div class="d-flex flex-col items-center w-full flex-1 bg-gray-50"><div class="text-center caption p-4 d-flex items-center justify-center">Touchpad not working; Left/Right click faulty</div></div></div></section><section class="d-flex pr-2 sm:pr-3 mt-5 pr-1 w-1/2 sm:w-1/4 mb-4 sm:mb-0"><div class="cursor-pointer d-flex flex-col items-center rounded-md w-full border border-solid"><div class="d-flex flex-col items-center justify-center m-4 w-28 h-28"><img alt="cashify" class="img-resp" loading="lazy" fetchpriority="low" src="https://s3n.cashify.in/cashify/productLinePartVariation/img/xhdpi/60ab9cab2beab.png"></div><div class="d-flex flex-col items-center w-full flex-1 bg-gray-50"><div class="text-center caption p-4 d-flex items-center justify-center">Battery Dead; back up less than 60 minutes / Cycle count more than 800</div></div></div></section><section class="d-flex pr-2 sm:pr-3 mt-5 pr-1 w-1/2 sm:w-1/4 mb-4 sm:mb-0"><div class="cursor-pointer d-flex flex-col items-center rounded-md w-full border border-solid"><div class="d-flex flex-col items-center justify-center m-4 w-28 h-28"><img alt="cashify" class="img-resp" loading="lazy" fetchpriority="low" src="https://s3n.cashify.in/cashify/productLinePartVariation/img/xhdpi/60ab9ceeabfbd.png"></div><div class="d-flex flex-col items-center w-full flex-1 bg-gray-50"><div class="text-center caption p-4 d-flex items-center justify-center">Speakers not working; faulty/cracked sound</div></div></div></section><section class="d-flex pr-2 sm:pr-3 mt-5 pr-1 w-1/2 sm:w-1/4 mb-4 sm:mb-0"><div class="cursor-pointer d-flex flex-col items-center rounded-md w-full border border-solid"><div class="d-flex flex-col items-center justify-center m-4 w-28 h-28"><img alt="cashify" class="img-resp" loading="lazy" fetchpriority="low" src="https://s3n.cashify.in/cashify/productLinePartVariation/img/xhdpi/60ab9d25e5a56.png"></div><div class="d-flex flex-col items-center w-full flex-1 bg-gray-50"><div class="text-center caption p-4 d-flex items-center justify-center">Wi-Fi not working</div></div></div></section><section class="d-flex pr-2 sm:pr-3 mt-5 pr-1 w-1/2 sm:w-1/4 mb-4 sm:mb-0"><div class="cursor-pointer d-flex flex-col items-center rounded-md w-full border border-solid"><div class="d-flex flex-col items-center justify-center m-4 w-28 h-28"><img alt="cashify" class="img-resp" loading="lazy" fetchpriority="low" src="https://s3n.cashify.in/cashify/productLinePartVariation/img/xhdpi/60ab9d5a638a4.png"></div><div class="d-flex flex-col items-center w-full flex-1 bg-gray-50"><div class="text-center caption p-4 d-flex items-center justify-center">Faulty Charger; wire cut, Not available</div></div></div></section><section class="d-flex pr-2 sm:pr-3 mt-5 pr-1 w-1/2 sm:w-1/4 mb-4 sm:mb-0"><div class="cursor-pointer d-flex flex-col items-center rounded-md w-full border border-solid"><div class="d-flex flex-col items-center justify-center m-4 w-28 h-28"><img alt="cashify" class="img-resp" loading="lazy" fetchpriority="low" src="https://s3n.cashify.in/cashify/productLinePartVariation/img/xhdpi/60ab9ddc6abb4.png"></div><div class="d-flex flex-col items-center w-full flex-1 bg-gray-50"><div class="text-center caption p-4 d-flex items-center justify-center">USB Port not working</div></div></div></section><section class="d-flex pr-2 sm:pr-3 mt-5 pr-1 w-1/2 sm:w-1/4 mb-4 sm:mb-0"><div class="cursor-pointer d-flex flex-col items-center rounded-md w-full border border-solid border-error"><div class="d-flex flex-col items-center justify-center m-4 w-28 h-28"><img alt="cashify" class="img-resp" loading="lazy" fetchpriority="low" src="https://s3n.cashify.in/cashify/productLinePartVariation/img/xhdpi/60ab9e0f2bf81.png"></div><div class="d-flex flex-col items-center w-full flex-1 text-primary-contrast-text border-error bg-error "><div class="text-center caption p-4 d-flex items-center justify-center">Web Cam not working</div></div></div></section><section class="d-flex pr-2 sm:pr-3 mt-5 pr-1 w-1/2 sm:w-1/4 mb-4 sm:mb-0"><div class="cursor-pointer d-flex flex-col items-center rounded-md w-full border border-solid border-error"><div class="d-flex flex-col items-center justify-center m-4 w-28 h-28"><img alt="cashify" class="img-resp" loading="lazy" fetchpriority="low" src="https://s3n.cashify.in/cashify/productLinePartVariation/img/xhdpi/6148560d0c3b3.png"></div><div class="d-flex flex-col items-center w-full flex-1 text-primary-contrast-text border-error bg-error "><div class="text-center caption p-4 d-flex items-center justify-center">Charging Port not working</div></div></div></section><section class="d-flex pr-2 sm:pr-3 mt-5 pr-1 w-1/2 sm:w-1/4 mb-4 sm:mb-0"><div class="cursor-pointer d-flex flex-col items-center rounded-md w-full border border-solid border-error"><div class="d-flex flex-col items-center justify-center m-4 w-28 h-28"><img alt="cashify" class="img-resp" loading="lazy" fetchpriority="low" src="https://s3n.cashify.in/cashify/productLinePartVariation/img/xhdpi/61487866ea5a5.png"></div><div class="d-flex flex-col items-center w-full flex-1 text-primary-contrast-text border-error bg-error "><div class="text-center caption p-4 d-flex items-center justify-center">Hard Drive Missing/Defective</div></div></div></section><section class="d-flex pr-2 sm:pr-3 mt-5 pr-1 w-1/2 sm:w-1/4 mb-4 sm:mb-0"><div class="cursor-pointer d-flex flex-col items-center rounded-md w-full border border-solid border-error"><div class="d-flex flex-col items-center justify-center m-4 w-28 h-28"><img alt="cashify" class="img-resp" loading="lazy" fetchpriority="low" src="https://s3n.cashify.in/cashify/productLinePartVariation/img/xhdpi/62e0d8a3d520e.png"></div><div class="d-flex flex-col items-center w-full flex-1 text-primary-contrast-text border-error bg-error "><div class="text-center caption p-4 d-flex items-center justify-center">Motherboard issue - auto restart, hanging, heating/not booting</div></div></div></section></div>
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
                        <div class="form-heading-1 mb-0 me-2">Select the screen condition of you device?</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="flawless-screen"><input name="screen"
                                                        type="radio" id="flawless-screen">
                                                    <span>Flawless</span>
                                                    <div>
                                                        <ul>
                                                            <li>Screen working fine, no issue</li>
                                                            <li>Minor Scratches on Screen</li>
                                                            <li>No Lines/Dents/Discoloration/ Crack(s) on Screen</li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="good-screen"><input name="screen"
                                                        type="radio" id="good-screen">
                                                    <span>Good</span>
                                                    <div>
                                                        <ul>
                                                            <li>Major scratches on screen</li>
                                                            <li>No Lines/Dents/Discoloration/ Crack(s) on Screen</li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="average-screen"><input name="screen"
                                                        type="radio" id="average-screen">
                                                    <span>Average</span>
                                                    <div>
                                                        <ul>
                                                            <li>1-2 spots on screen/display</li>
                                                            <li>Minor Discoloration on Screen</li>
                                                            <li>No Line/Dents/Crack(s) on Screen</li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="screen-damage"><input name="screen"
                                                        type="radio" id="screen-damage">
                                                    <span>Damaged</span>
                                                    <div>
                                                        <ul>
                                                            <li>Heavy signs of usage</li>
                                                            <li>Screen touch not working</li>
                                                            <li>Lines/ Discoloration/ blur/ Cracked or broken on screen
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-primary m-2 text-center" type="submit">Submit</button> -->
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form6')">Previous</button>
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="nextForm('form9')">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item py-4 form-container" id="form9">
                        <div class="form-heading-1 mb-0 me-2">Select the physical condition of your device?</div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="flawless-phy-condition"><input
                                                        name="physical_condition" type="radio"
                                                        id="flawless-phy-condition">
                                                    <span>Flawless</span>
                                                    <div>
                                                        <ul>
                                                            <li>No scratches on the device</li>
                                                            <li>No signs of usage on the device</li>
                                                            <li>No dents or cracks on the device</li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="good-phy-condition"><input
                                                        name="physical_condition" type="radio" id="good-phy-condition">
                                                    <span>Good</span>
                                                    <div>
                                                        <ul>
                                                            <li>Normal signs of usage</li>
                                                            <li>Minor scratches on the device</li>
                                                            <li>No dents or cracks on the device</li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="average-phy-condition"><input
                                                        name="physical_condition" type="radio"
                                                        id="average-phy-condition">
                                                    <span>Average</span>
                                                    <div>
                                                        <ul>
                                                            <li>Major scratches/Dents on device</li>
                                                            <li>Loose/Broken Hinges/Discoloration of device</li>
                                                            <li>Screw(s) missing from device</li>
                                                            <li>Panel intact with cracks</li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="rdiobox" for="below-average-phy-condition"><input
                                                        name="physical_condition" type="radio"
                                                        id="below-average-phy-condition">
                                                    <span>Below Average</span>
                                                    <div>
                                                        <ul>
                                                            <li>Physical damage on device</li>
                                                            <li>Multiple scratches or dents on device</li>
                                                            <li>Broken hinges on device panel</li>
                                                            <li>Parts missing from device</li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="btn btn-primary m-2 text-center" type="submit">Submit</button> -->
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="previousForm('form8')">Previous</button>
                                    <button class="btn btn-primary m-2 text-center"
                                        onclick="submitForm()">Submit</button>
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