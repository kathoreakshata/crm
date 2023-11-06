<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Waste Mart CRM</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="assets\images\favicon\favicon.ico" />

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="assets\css\bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="assets\css\style.css" rel="stylesheet" />
    <link href="assets\css\skin-modes.css" />

    <!--- FONT-ICONS CSS -->
    <link href="assets\css\icons.css" rel="stylesheet" />

    <!-- INTERNAL SWITCHER CSS -->
    <link href="assets\css\switcher.css" rel="stylesheet" />
    <link href="assets\switcher\demo.css" rel="stylesheet" />

</head>

<body class="ltr app sidebar-mini light-mode">

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- APP-HEADER -->

            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal" href="index.php">
                            <img src="assets\images\logo\logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="assets\images\logo\logo-3.png" class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-md-none d-flex">
                                            <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="header-icon"
                                                    enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path
                                                        d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z" />
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                            <path
                                                                d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- SEARCH -->
                                        <div class="dropdown d-md-flex profile-1">
                                            <a href="#" data-bs-toggle="dropdown"
                                                class="nav-link pe-2 leading-none d-flex animate">
                                                <span>
                                                    <img src="assets\images\user\dummy-user.png" alt="profile-user"
                                                        class="avatar  profile-user brround cover-image">
                                                </span>
                                                <div class="text-center p-1 d-flex d-lg-none-max">
                                                    <h6 class="mb-0 ms-1" id="profile-heading">Akshata<i
                                                            class="user-angle ms-1"></i></h6>
                                                </div>
                                                <div class="logout-icon">
                                                    <i class="fa-solid fa-power-off"></i>
                                                </div>
                                            </a>

                                        </div>
                                        <!-- Profile -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /APP-HEADER -->

            <!--APP-SIDEBAR-->

            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="index.php">
                            <img src="assets\images\logo\logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="assets\images\logo\logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                            <img src="assets\images\logo\logo-2.png" class="header-brand-img light-logo" alt="logo">
                            <img src="assets\images\logo\logo-3.png" class="header-brand-img light-logo1" alt="logo">
                        </a><!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg>
                        </div>
                        <ul class="side-menu">
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z" />
                                    </svg>
                                    <span class="side-menu__label">Dashboard</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="index.php?Material_Sheet">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z" />
                                    </svg>

                                    <span class="side-menu__label">Material Sheet</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z" />
                                    </svg>

                                    <span class="side-menu__label">Inspection</span><i
                                        class="angle fa fa-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Sub-menus</a></li>
                                    <li><a href="index.php?Inspection_Sheet" class="slide-item">Inspection Sheet</a>
                                    <li><a href="index.php?Inspection_Report" class="slide-item">Inspection Report</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M19.8535156,8.1464844l-6-6C13.7597656,2.0526733,13.6326294,2,13.5,2H7C5.3438721,2.0018311,4.0018311,3.3438721,4,5v14c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V8.5C20,8.3673706,19.9473267,8.2402344,19.8535156,8.1464844z M14,3.7069702L18.2930298,8H14V3.7069702z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h6v5.5c0,0.0001831,0,0.0003662,0,0.0005493C13.0001831,8.7765503,13.223999,9.0001831,13.5,9H19V19z" />
                                    </svg>
                                    <span class="side-menu__label">Estimation</span><i
                                        class="angle fa fa-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Sub-menus</a></li>
                                    <li><a href="index.php?Cost_Estimation_Sheet" class="slide-item">Cost Estimation
                                            Sheet</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M19.8535156,8.1464844l-6-6C13.7597656,2.0526733,13.6326294,2,13.5,2H7C5.3438721,2.0018311,4.0018311,3.3438721,4,5v14c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V8.5C20,8.3673706,19.9473267,8.2402344,19.8535156,8.1464844z M14,3.7069702L18.2930298,8H14V3.7069702z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h6v5.5c0,0.0001831,0,0.0003662,0,0.0005493C13.0001831,8.7765503,13.223999,9.0001831,13.5,9H19V19z" />
                                    </svg>
                                    <span class="side-menu__label">Quotation</span><i
                                        class="angle fa fa-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Sub-menus</a></li>
                                    <li><a href="#" class="slide-item">Quotation</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M19.8535156,8.1464844l-6-6C13.7597656,2.0526733,13.6326294,2,13.5,2H7C5.3438721,2.0018311,4.0018311,3.3438721,4,5v14c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V8.5C20,8.3673706,19.9473267,8.2402344,19.8535156,8.1464844z M14,3.7069702L18.2930298,8H14V3.7069702z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h6v5.5c0,0.0001831,0,0.0003662,0,0.0005493C13.0001831,8.7765503,13.223999,9.0001831,13.5,9H19V19z" />
                                    </svg>
                                    <span class="side-menu__label">Form 6</span><i
                                        class="angle fa fa-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Sub-menus</a></li>
                                    <li><a href="#" class="slide-item">Submenu</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M19.8535156,8.1464844l-6-6C13.7597656,2.0526733,13.6326294,2,13.5,2H7C5.3438721,2.0018311,4.0018311,3.3438721,4,5v14c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V8.5C20,8.3673706,19.9473267,8.2402344,19.8535156,8.1464844z M14,3.7069702L18.2930298,8H14V3.7069702z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h6v5.5c0,0.0001831,0,0.0003662,0,0.0005493C13.0001831,8.7765503,13.223999,9.0001831,13.5,9H19V19z" />
                                    </svg>
                                    <span class="side-menu__label">Green Certificate</span><i
                                        class="angle fa fa-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Sub-menus</a></li>
                                    <li><a href="#" class="slide-item">Submenu</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!--/APP-SIDEBAR-->

            <!-- APP-BODY -->
            <div class="page-body">
                <!--APP-CONTENT OPEN-->
                <div class="app-content main-content mt-0">
                    <div class="side-app">
                        <!-- CONTAINER -->
                        <div class="main-container container-fluid">
                            <?php
                            if (isset($_GET['Material_Sheet'])) {
                                include('Material_Sheet.php');
                            }
                            if (isset($_GET['Inspection_Sheet'])) {
                                include('Inspection_Sheet.php');
                            }
                            if (isset($_GET['Inspection_Report'])) {
                                include('Inspection_Report.php');
                            }
                            if (isset($_GET['Cost_Estimation_Sheet'])) {
                                include('Cost-Estimation-Sheet.php');
                            }
                            ?>
                        </div>
                        <!-- CONTAINER CLOSED -->
                    </div>
                </div>
            </div>
            <!-- /APP-BODY -->
        </div>

        <!-- FOOTER -->

        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © 2023 <a href="#">E-Waste Mart CRM</a>. All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

    <!-- JQUERY JS -->
    <script src="assets\js\jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="assets\js\popper.min.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="assets\js\sidemenu.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="assets\js\perfect-scrollbar.js"></script>
    <script src="assets\js\pscroll.js"></script>

    <!-- STICKY JS -->
    <script src="assets\js\sticky.js"></script>

    <!-- APEXCHART JS -->
    <script src="assets\js\apexcharts.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="assets\js\select2.full.min.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="assets\js\circle-progress.min.js"></script>

    <!-- INTERNAL DATA-TABLES JS-->
    <script src="assets\js\jquery.dataTables.min.js"></script>
    <script src="assets\js\dataTables.bootstrap5.js"></script>
    <script src="assets\js\dataTables.responsive.min.js"></script>

    <!-- INDEX JS -->
    <script src="assets\js\index1.js"></script>

    <!-- REPLY JS-->
    <script src="assets\js\reply.js"></script>

    <!-- DATA TABLE JS-->
    <script src="assets\plugins\datatable\js\jquery.dataTables.min.js"></script>
    <script src="assets\plugins\datatable\js\dataTables.bootstrap5.js"></script>
    <script src="assets\plugins\datatable\js\dataTables.buttons.min.js"></script>
    <script src="assets\plugins\datatable\js\buttons.bootstrap5.min.js"></script>
    <script src="assets\plugins\datatable\js\jszip.min.js"></script>
    <script src="assets\plugins\datatable\pdfmake\pdfmake.min.js"></script>
    <script src="assets\plugins\datatable\pdfmake\vfs_fonts.js"></script>
    <script src="assets\plugins\datatable\js\buttons.html5.min.js"></script>
    <script src="assets\plugins\datatable\js\buttons.print.min.js"></script>
    <script src="assets\plugins\datatable\js\buttons.colVis.min.js"></script>
    <script src="assets\plugins\datatable\dataTables.responsive.min.js"></script>
    <script src="assets\plugins\datatable\responsive.bootstrap5.min.js"></script>
    <script src="assets\js\table-data.js"></script>

    <!-- TABLE EDITS JS-->
    <script src="assets\plugins\jQuery-table-edits\table-edits.min.js"></script>
    <script src="assets\plugins\jQuery-table-edits\table-edits.js"></script>

    <!-- INTERNAL DATATABLES JS -->
    <script src="assets\js\table-editable.js"></script>

    <!-- COLOR THEME JS -->
    <script src="assets\js\themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets\js\custom.js"></script>

    <!-- SWITCHER JS -->
    <script src="assets\js\switcher.js"></script>

    <!-- FONT AWSOME JS -->
    <script src="https://kit.fontawesome.com/6d89abe059.js" crossorigin="anonymous"></script>
</body>

</html>