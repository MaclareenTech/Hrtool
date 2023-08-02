<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $pageTitle; ?></title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/fev.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icon/themify-icons/themify-icons.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.mCustomScrollbar.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <!-- serch option for table  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<style>
    /* For larger screens, set the image width to 170px and height to 150px */
    .responsive-image {
        width: 170px;
        height: 150px;
    }

    /* For smaller screens, adjust the image size accordingly */
    @media screen and (max-width: 767px) {
        .responsive-image {
            width: 100%;
            /* The image will take the full width of its container */
            height: auto;
            /* The height will adjust automatically to maintain aspect ratio */
        }
    }
</style>

<body>

    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a>
                            <img class="img-fluid" src="https://maclareenai.com/mtas/assets/images/bg/main_logo.png" alt="Theme-Logo" style=" width: 160px; ">
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">

                                    <div class="user-details">
                                        <span id="more-details"><?php echo $this->session->userdata('name');; ?></span>

                                    </div>
                                </div>
                            </div>

                            <div class="pcoded-navigation-label">Home</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?php
                                                $role = $this->session->userdata('role'); ?>
                                    <?php if ($role == "admin") { ?>
                                        <?php echo base_url(); ?>adminDashboard
                                    <?php } else { ?>
                                        <?php echo base_url(); ?>superadminDashboard
                                    <?php } ?>" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Add Candidate</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?php echo base_url(); ?>addCandidate" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa-solid fa-user-plus"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Add Candidate</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <?php
                            $role = $this->session->userdata('role'); ?>
                            <?php if ($role == "superadmin") { ?>
                                <div class="pcoded-navigation-label">Admin Details</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="<?php echo base_url(); ?>admininformation" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="fa-solid fa fa-users"></i><b>AD</b></span>
                                            <span class="pcoded-mtext">Admin Details</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            <?php } ?>
                            <?php
                            $mail = $this->session->userdata('user_email'); ?>
                            <?php if ($mail == "nisha.minsariya@maclareen.com" || $mail == "saranya.muralidharan@maclareen.com"  || $mail == "muthupandy.nadar@maclareen.com") { ?>
                                <div class="pcoded-navigation-label">Invoice</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="active">
                                        <a href="<?php echo base_url(); ?>invlicelist" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="fa fa-list-alt"></i><b>IN</b></span>
                                            <span class="pcoded-mtext">Invoice</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            <?php } ?>
                            <?php
                            $role = $this->session->userdata('role'); ?>
                            <?php if ($role == "superadmin") { ?>
                                <div class="pcoded-navigation-label">Job Openings</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="fa fa-cubes"></i><b>JO</b></span>
                                            <span class="pcoded-mtext">Job Openings</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu ">
                                            <li class="">
                                                <a href="<?php echo base_url(); ?>Jobopening" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">View Job Openings</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="<?php echo base_url(); ?>AddJobopeningFrom" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Add Job Openings</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>






                                        </ul>
                                    </li>
                                </ul>
                            <?php } ?>
                            <div class="pcoded-navigation-label">Add Candidate Source </div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?php echo base_url(); ?>viewCandidateSource" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-external-link"></i><b>L</b></span>
                                        <span class="pcoded-mtext">Add Candidate Source</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <!-- href="<?php echo base_url(); ?>logout" -->
                            </ul>
                            <div class="pcoded-navigation-label">Profile</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?php echo base_url(); ?>profile" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i><b>L</b></span>
                                        <span class="pcoded-mtext">Profile</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Logout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?php echo base_url(); ?>logout" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-sign-out"></i><b>L</b></span>
                                        <span class="pcoded-mtext">Logout</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>


                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Invoice</h5>
                                            <p class="m-b-0">Maclareen Talent Acquisition System </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a>Invoice</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->







                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->


                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->




                                    <div class="container-scroller">
                                        <!-- partial:../../partials/_navbar.html -->

                                        <!-- partial -->
                                        <div class="container-fluid page-body-wrapper">
                                            <!-- partial:../../partials/_settings-panel.html -->



                                            <!-- partial -->
                                            <div class="main-panel">
                                                <div class="content-wrapper">
                                                    <div class="row">
                                                        <div class="col-md-12 grid-margin stretch-card">
                                                            <div class="card">
                                                                <?php
                                                                $this->load->helper('form');
                                                                $error = $this->session->flashdata('error');
                                                                if ($error) {
                                                                ?>
                                                                    <div class="alert alert-danger alert-dismissable">
                                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                                        <?php echo $error; ?>
                                                                    </div>
                                                                <?php }
                                                                $success = $this->session->flashdata('success');
                                                                if ($success) {
                                                                ?>
                                                                    <div class="alert alert-success alert-dismissable">
                                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                                        <?php echo $success; ?>
                                                                    </div>
                                                                <?php } ?>
                                                                <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>CreateInvoice">

                                                                    <div class="card-body" style="padding: 35px;">
                                                                        <center>
                                                                            <h3 class="card-title">Invoice</h3>
                                                                        </center>
                                                                        <br>
                                                                        <br>

                                                                        <div class="row">
                                                                            <!-- <div class="col-2">
                                                                                <img src="https://maclareenai.com/mtas/assets/images/105 x 70 (2).png" alt="logo" class="responsive-image">

                                                                            </div> -->
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <label for="bank">Invoice Number:</label>
                                                                                    <input type="text" name="invoiceNumber" placeholder="" value="<?php echo $nextID ?>" class="form-control" id="invoiceNumber" required readonly>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-6">
                                                                                        <div class="form-group">
                                                                                            <label for="accountNo">Invoice Date:</label>
                                                                                            <input type="date" name="invoiceDate" class="form-control" id="invoiceDate" required>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <h4>Bill To</h4>
                                                                                <div class="form-group">
                                                                                    <label for="bank">Client's Name:</label>
                                                                                    <input type="text" name="candidate_name" placeholder="john does" class="form-control" id="bankName" required>
                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label for="accountNo">Clien't Address</label>
                                                                                    <input type="text" name="candidate_address" placeholder="Enter client address" class="form-control" id="accountNo" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="bank">State</label>
                                                                                    <select class="form-control" name="candidate_state" placeholder="Enter State" id="clientscompanyState" required>
                                                                                        <option value="">Please Select</option>
                                                                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                                                        <option value="Assam">Assam</option>
                                                                                        <option value="Bihar">Bihar</option>
                                                                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                                                                        <option value="Goa">Goa</option>
                                                                                        <option value="Gujarat">Gujarat</option>
                                                                                        <option value="Haryana">Haryana</option>
                                                                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                                                        <option value="Jharkhand">Jharkhand</option>
                                                                                        <option value="Karnataka">Karnataka</option>
                                                                                        <option value="Kerala">Kerala</option>
                                                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                                                        <option value="Maharashtra">Maharashtra</option>
                                                                                        <option value="Manipur">Manipur</option>
                                                                                        <option value="Meghalaya">Meghalaya</option>
                                                                                        <option value="Mizoram">Mizoram</option>
                                                                                        <option value="Nagaland">Nagaland</option>
                                                                                        <option value="Odisha">Odisha</option>
                                                                                        <option value="Punjab">Punjab</option>
                                                                                        <option value="Rajasthan">Rajasthan</option>
                                                                                        <option value="Sikkim">Sikkim</option>
                                                                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                                                                        <option value="Telangana">Telangana</option>
                                                                                        <option value="Tripura">Tripura</option>
                                                                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                                                        <option value="Uttarakhand">Uttarakhand</option>
                                                                                        <option value="West Bengal">West Bengal</option>
                                                                                    </select>

                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="accountNo">Client's Contact No: </label>
                                                                                    <input type="tel" class="form-control" name="candidate_number" placeholder="Your client contact's name" id="clientsmobileNo" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="accountNo">Client's Email ID: </label>
                                                                                    <input type="email" class="form-control" name="candidate_mail" placeholder="Your client's email ID" id="clientsemail" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="mode_of_payments">Mode of Payments: </label>
                                                                                    <!-- <input type="text" class="form-control" name="mode_of_payments" placeholder="Mode of Payments" id="mode_of_payments" required> -->
                                                                                    <select class="form-control" name="payment_mode" placeholder="Mode of Payments" id="mode_of_payments" required>
                                                                                        <option value="Cash Payment">Cash Payment</option>
                                                                                        <option value="Cheque">Cheque</option>
                                                                                        <option value="Online Payment">Online Payment</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="company_pan">Client Company Name: </label>
                                                                                    <input type="text" class="form-control" name="candidate_company_name" placeholder="Company Name" id="candidate_company_name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="company_pan">Client Company Pan: </label>
                                                                                    <input type="text" class="form-control" name="candidate_company_pan" placeholder="Company Pan" id="company_pan">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="company_pan">Client Company GSTIN no : </label>
                                                                                    <input type="text" class="form-control" name="candidate_gstin_no" placeholder="Client Company GSTIN no " id="candidate_gstin_no">
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <hr>
                                                                        <div class="table-responsive">
                                                                            <table id="orderTable" class="table table-bordered">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col">SR. NO.</th>
                                                                                        <th scope="col">Particulars</th>
                                                                                        <th scope="col">HSN/UIN</th>
                                                                                        <th scope="col">GST Rate</th>
                                                                                        <th scope="col">Rate</th>
                                                                                        <th scope="col">Total with GST</th>
                                                                                        <th scope="col">Remove</th> <!-- New column header for "Remove" button -->
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <!-- Rows with data go here -->
                                                                                    <tr>
                                                                                        <td>1.</td>
                                                                                        <td>
                                                                                            <div class="form-row">
                                                                                                <div class="col">
                                                                                                    <input type="text" name="particulars[]" class="form-control" placeholder="Enter Particulars" required>
                                                                                                </div>
                                                                                            </div>

                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-row">
                                                                                                <div class="col">
                                                                                                    <select class="form-control" name="Hsnumber[]" placeholder="Enter HSN Number" id="Hsnumber" required onchange="updateGSTRate(this)">

                                                                                                        <option value="9985">9985 - Support Services - 18%</option>
                                                                                                        <option value="998511">998511- Executive/Retained Personnel Search Services - 18%</option>
                                                                                                        <option value="998512">998512 - Permanent Placement Services, Other Than Executive Search Servicess - 18%</option>
                                                                                                        <option value="998513">998513 - Contract Staffing Services - 18%</option>
                                                                                                        <option value="998514">998514 - Temporary Staffing Services - 18%</option>
                                                                                                        <option value="998515">998515 - Long-Term Staffing (Pay Rolling) Services - 18%</option>
                                                                                                        <option value="998516">998516 - Temporary Staffing-To-Permanent Placement Services - 18%</option>
                                                                                                        <option value="998517">998517 - Co-Employment Staffing Services - 18%</option>
                                                                                                        <option value="998519">998519 - Other Employment & Labour Supply Services N.E.C - 18%</option>
                                                                                                        <option value="998521">998521 - Investigation Services - 18%</option>
                                                                                                        <option value="998522">998522 - Security Consulting Services - 18%</option>
                                                                                                        <option value="998523">998523 - Security Systems Services - 18%</option>
                                                                                                        <option value="998524">998524 - Armoured Car Services - 18%</option>
                                                                                                        <option value="48211010">48211010 - PAPER TAG Products - 18%</option>
                                                                                                        <option value="9964">9964 - Passengers Transport Services - 18%</option>
                                                                                                        <option value="996411">996411 - Local Land Transport Services Of Passengers By Railways, Metro, Monorail, Bus, Tramway, Autos, Three Wheelers, Scooters And Other Motor Vehicles - 18%</option>
                                                                                                        <option value="996412">996412 - Taxi Services Including Radio Taxi & Other Similar Services - 18%</option>
                                                                                                        <option value="996413">996413 - Non-Scheduled Local Bus And Coach Charter Services - 18%</option>
                                                                                                        <option value="996414">996414 - Other Land Transportation Services Of Passengers - 18% </option>
                                                                                                        <option value="996415">996415 - Local Water Transport Services Of Passengers By Ferries, Cruises Etc - 18%</option>
                                                                                                        <option value="996416">996416 - Sightseeing Transportation Services By Rail, Land, Water & Air - 18%</option>
                                                                                                        <option value="996419">996419 - Other Local Transportation Services Of Passengers N.E.C. - 18% </option>
                                                                                                        <option value="996421">996421 - Long-Distance Transport Services Of Passengers Through Rail Network By Railways, Metro Etc - 18%</option>
                                                                                                        <option value="996422">996422 - Long-Distance Transport Services Of Passengers Through Road By Bus, Car, Non-Scheduled Long Distance Bus And Coach Services, Stage Carriage Etc - 18%</option>
                                                                                                        <option value="996423">996423 - Taxi Services Including Radio Taxi & Other Similar Services - 18%</option>
                                                                                                        <option value="996424">996424 - Coastal And Transoceanic (Overseas) Water Transport Services Of Passengers By Ferries, Cruise Ships Etc - 18%</option>
                                                                                                        <option value="996425">996425 - Domestic/International Scheduled Air Transport Services Of Passengers - 18%</option>
                                                                                                        <option value="996427">996427 - Space Transport Services Of Passengers - 18%</option>
                                                                                                        <option value="996429">996429 - Other Long-Distance Transportation Services Of Passengers N.E.C. - 18%</option>


                                                                                                        <!-- Add more HSN numbers with descriptions as needed -->
                                                                                                    </select>

                                                                                                </div>
                                                                                            </div>

                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-row">
                                                                                                <div class="col">
                                                                                                    <input type="text" name="gst_rate[]" id="gst_rate" class="form-control" placeholder="Enter GST Rate" required pattern="[0-9]+(\.\d{1,2})?|[Ss]pecial" title="Please enter Proper Value ">

                                                                                                </div>
                                                                                            </div>

                                                                                        </td>
                                                                                        <td> <input type="text" name="amount[]" class="form-control" placeholder="Enter Amount" oninput="updateTotal()" required pattern="[0-9]+" title="Please enter numbers only"></td>
                                                                                        <td> <input type="text" name="amountwithGST[]" class="form-control" placeholder="Enter Total with GST" oninput="updateTotal()" required pattern="[0-9]+" title="Please enter numbers only"></td>
                                                                                        <td><button type="button" class="btn btn-danger" onclick="removeRow(this)">Remove</button></td> <!-- Remove button -->
                                                                                    </tr>
                                                                                <tfoot>
                                                                                    <!-- "Total" row -->
                                                                                    <tr>
                                                                                        <td colspan="2" class="text-center">Total Without GST :</td>
                                                                                        <td colspan="4">
                                                                                            <input type="text" name="total_amount" class="form-control" placeholder="Enter Total Amount" required pattern="[0-9]+" title="Please enter numbers only">
                                                                                        </td>
                                                                                        <!-- Empty cell for "Remove" column in the total row -->
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="2" class="text-center">Total with GST :</td>
                                                                                        <td colspan="4">
                                                                                            <input type="text" name="invoice_amount_with_gst" class="form-control" placeholder="Enter Total Amount with GST" required pattern="[0-9]+" title="Please enter numbers only">
                                                                                        </td>
                                                                                        <!-- Empty cell for "Remove" column in the total row -->
                                                                                    </tr>
                                                                                    <!-- "Amount In Words" row -->
                                                                                    <tr>
                                                                                        <td colspan="2" class="text-center">Amount In Words:</td>
                                                                                        <td colspan="4"><input type="text" name="total_amount_words" class="form-control" placeholder="Enter Amount In Words" required></td>
                                                                                        <!-- Empty cell for "Remove" column in the Amount In Words row -->
                                                                                    </tr>
                                                                                </tfoot>


                                                                            </table>
                                                                        </div>
                                                                        <hr>
                                                                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="addRow()">Add Row</button>
                                                                        <hr>


                                                                        <center> <button type="submit" class="btn btn-success waves-effect waves-light">Create Invoice</button></center>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                    <script>
                                        // Get the current date
                                        const today = new Date();

                                        // Format the date in YYYY-MM-DD format
                                        const year = today.getFullYear();
                                        const month = String(today.getMonth() + 1).padStart(2, '0');
                                        const day = String(today.getDate()).padStart(2, '0');
                                        const formattedDate = `${year}-${month}-${day}`;

                                        // Set the formatted date as the default value for the "Invoice Date" input field
                                        document.getElementById("invoiceDate").value = formattedDate;
                                    </script>
                                    <!-- <script>
                                        function addRow() {
                                            var table = document.getElementById("orderTable").getElementsByTagName('tbody')[0];
                                            var newRow = table.insertRow(table.rows.length - 2); // Insert the new row above the "Total" row

                                            var srNoCell = newRow.insertCell(0);
                                            srNoCell.innerHTML = table.rows.length - 2 + ".";

                                            var particularsCell = newRow.insertCell(1);
                                            particularsCell.innerHTML = `
                                                <div class="form-row">
                                                    <div class="col">
                                                    <input type="text" name="particulars[]" class="form-control" placeholder="Enter Particulars" required>
                                                    </div>
                                                </div>
                                                `;


                                            var amountCell = newRow.insertCell(2);
                                            amountCell.innerHTML = '<select class="form-control" name="Hsnumber[]" placeholder="Enter HSN Number" id="Hsnumber" required onchange="updateGSTRate()">\
                                            <option value="9985">9985 - Support Services</option>\
                                                                                                        <option value="998511">998511- Executive/Retained Personnel Search Services</option>\
                                                                                                        <option value="998512">998512 - Permanent Placement Services, Other Than Executive Search Servicess</option>\
                                                                                                        <option value="998513">998513 - Contract Staffing Services</option>\
                                                                                                        <option value="998514">998514 - Temporary Staffing Services</option>\
                                                                                                        <option value="998515">998515 - Long-Term Staffing (Pay Rolling) Services</option>\
                                                                                                        <option value="998516">998516 - Temporary Staffing-To-Permanent Placement Services</option>\
                                                                                                        <option value="998517">998517 - Co-Employment Staffing Services</option>\
                                                                                                        <option value="998519">998519 - Other Employment & Labour Supply Services N.E.C</option>\
                                                                                                        <option value="998521">998521 - Investigation Services</option>\
                                                                                                        <option value="998522">998522 - Security Consulting Services</option>\
                                                                                                        <option value="998523">998523 - Security Systems Services</option>\
                                                                                                        <option value="998524">998524 - Armoured Car Services</option>\
                                                                                                        <option value="48211010">48211010 - PAPER TAG Products </option>\
                                                                                                        <option value="9964">9964 - Passengers Transport Services </option>\
                                                                                                        <option value="996411">996411 - Local Land Transport Services Of Passengers By Railways, Metro, Monorail, Bus, Tramway, Autos, Three Wheelers, Scooters And Other Motor Vehicles </option>\
                                                                                                        <option value="996412">996412 - Taxi Services Including Radio Taxi & Other Similar Services </option>\
                                                                                                        <option value="996413">996413 - Non-Scheduled Local Bus And Coach Charter Services </option>\
                                                                                                        <option value="996414">996414 - Other Land Transportation Services Of Passengers. </option>\
                                                                                                        <option value="996415">996415 - Local Water Transport Services Of Passengers By Ferries, Cruises Etc </option>\
                                                                                                        <option value="996416">996416 - Sightseeing Transportation Services By Rail, Land, Water & Air </option>\
                                                                                                        <option value="996419">996419 - Other Local Transportation Services Of Passengers N.E.C. </option>\
                                                                                                        <option value="996421">996421 - Long-Distance Transport Services Of Passengers Through Rail Network By Railways, Metro Etc </option>\
                                                                                                        <option value="996422">996422 - Long-Distance Transport Services Of Passengers Through Road By Bus, Car, Non-Scheduled Long Distance Bus And Coach Services, Stage Carriage Etc </option>\
                                                                                                        <option value="996423">996423 - Taxi Services Including Radio Taxi & Other Similar Services </option>\
                                                                                                        <option value="996424">996424 - Coastal And Transoceanic (Overseas) Water Transport Services Of Passengers By Ferries, Cruise Ships Etc </option>\
                                                                                                        <option value="996425">996425 - Domestic/International Scheduled Air Transport Services Of Passengers </option>\
                                                                                                        <option value="996427">996427 - Space Transport Services Of Passengers </option>\
                                                                                                        <option value="996429">996429 - Other Long-Distance Transportation Services Of Passengers N.E.C. </option>\
                                                    </select>';

                                            var amountCell = newRow.insertCell(3);
                                            amountCell.innerHTML = ' <input type="text" name="gst_rate[]" id="gst_rate" class="form-control" placeholder="Enter GST Rate" required pattern="[0-9]+(\.\d{1,2})?|[Ss]pecial" title="Please enter numbers, decimals, or Special">';


                                            var amountCell = newRow.insertCell(4);
                                            amountCell.innerHTML = '   <input type="text" name="amount[]" class="form-control" placeholder="Enter Amount" oninput="updateTotal()" required pattern="[0-9]+" title="Please enter numbers only"> ';


                                            var amountCell = newRow.insertCell(5);
                                            amountCell.innerHTML = '   <input type="text" name="amountwithGST[]" class="form-control" placeholder="Enter Total with GST" oninput="updateTotal()" required pattern="[0-9]+" title="Please enter numbers only"> ';


                                            var removeCell = newRow.insertCell(6);
                                            removeCell.innerHTML = '<button type="button" class="btn btn-danger" onclick="removeRow(this)">Remove</button>';

                                            // Renumber the SR. NO. series
                                            updateSrNoSeries();
                                            // Update the total amount
                                            updateTotal();
                                        }

                                        function removeRow(button) {
                                            var row = button.parentNode.parentNode;
                                            var rowIndex = row.rowIndex;
                                            row.parentNode.removeChild(row);

                                            // Renumber the SR. NO. series after a row is removed
                                            updateSrNoSeries();
                                            // Update the total amount
                                            updateTotal();
                                        }

                                        function updateSrNoSeries() {
                                            var table = document.getElementById("orderTable").getElementsByTagName('tbody')[0];
                                            var rows = table.getElementsByTagName("tr");

                                            for (var i = 0; i < rows.length - 2; i++) {
                                                var srNoCell = rows[i].cells[0];
                                                srNoCell.innerHTML = i + 1 + ".";
                                            }
                                        }

                                        function updateTotal() {
                                            var table = document.getElementById("orderTable").getElementsByTagName('tbody')[0];
                                            var rows = table.getElementsByTagName("tr");
                                            var totalAmount = 0;

                                            for (var i = 0; i < rows.length - 2; i++) {
                                                var amountCell = rows[i].cells[2].getElementsByTagName("input")[0];
                                                var amount = parseFloat(amountCell.value);
                                                if (!isNaN(amount)) {
                                                    totalAmount += amount;
                                                }
                                            }

                                            var totalCell = rows[rows.length - 2].cells[2].getElementsByTagName("input")[0];
                                            totalCell.value = totalAmount.toFixed(2);
                                        }

                                        function updateGSTRate() {
                                            const hsnDropdown = document.getElementById('Hsnumber');
                                            const gstRateInput = document.getElementById('gst_rate');
                                            const selectedHsn = hsnDropdown.value;

                                            // Map HSN numbers to GST rates
                                            // const hsnToGstRate = {
                                            //     "9992": 10,
                                            //     "999210": 20,
                                            //     "999299": 3.40,
                                            //     // Add more mappings as needed
                                            // };

                                            // Lookup the GST rate based on the selected HSN number
                                            const gstRate = hsnToGstRate[selectedHsn];

                                            // Update the GST rate input field
                                            gstRateInput.value = gstRate !== undefined ? gstRate : '';
                                        }
                                    </script> -->
                                    <!--  script for adding new row start -->
                                    <script>
                                        function addRow() {
                                            var table = document.getElementById("orderTable").getElementsByTagName('tbody')[0];
                                            var newRow = table.insertRow(table.rows.length - 2); // Insert the new row above the "Total" row

                                            var srNoCell = newRow.insertCell(0);
                                            srNoCell.innerHTML = table.rows.length - 2 + ".";

                                            var particularsCell = newRow.insertCell(1);
                                            particularsCell.innerHTML = `
                <div class="form-row">
                    <div class="col">
                    <input type="text" name="particulars[]" class="form-control" placeholder="Enter Particulars" required>
                    </div>
                </div>
                `;

                                            var hsnCell = newRow.insertCell(2);
                                            hsnCell.innerHTML = `
                                            <div class="form-row">
                                                                                                <div class="col">
                                                                                                    <select class="form-control" name="Hsnumber[]" placeholder="Enter HSN Number" id="Hsnumber" required oonchange="updateGSTRate(this)">

                                                                                                    <option value="9985">9985 - Support Services - 18%</option>
                                                                                                        <option value="998511">998511- Executive/Retained Personnel Search Services - 18%</option>
                                                                                                        <option value="998512">998512 - Permanent Placement Services, Other Than Executive Search Servicess - 18%</option>
                                                                                                        <option value="998513">998513 - Contract Staffing Services - 18%</option>
                                                                                                        <option value="998514">998514 - Temporary Staffing Services - 18%</option>
                                                                                                        <option value="998515">998515 - Long-Term Staffing (Pay Rolling) Services - 18%</option>
                                                                                                        <option value="998516">998516 - Temporary Staffing-To-Permanent Placement Services - 18%</option>
                                                                                                        <option value="998517">998517 - Co-Employment Staffing Services - 18%</option>
                                                                                                        <option value="998519">998519 - Other Employment & Labour Supply Services N.E.C - 18%</option>
                                                                                                        <option value="998521">998521 - Investigation Services - 18%</option>
                                                                                                        <option value="998522">998522 - Security Consulting Services - 18%</option>
                                                                                                        <option value="998523">998523 - Security Systems Services - 18%</option>
                                                                                                        <option value="998524">998524 - Armoured Car Services - 18%</option>
                                                                                                        <option value="48211010">48211010 - PAPER TAG Products - 18%</option>
                                                                                                        <option value="9964">9964 - Passengers Transport Services - 18%</option>
                                                                                                        <option value="996411">996411 - Local Land Transport Services Of Passengers By Railways, Metro, Monorail, Bus, Tramway, Autos, Three Wheelers, Scooters And Other Motor Vehicles - 18%</option>
                                                                                                        <option value="996412">996412 - Taxi Services Including Radio Taxi & Other Similar Services - 18%</option>
                                                                                                        <option value="996413">996413 - Non-Scheduled Local Bus And Coach Charter Services - 18%</option>
                                                                                                        <option value="996414">996414 - Other Land Transportation Services Of Passengers - 18% </option>
                                                                                                        <option value="996415">996415 - Local Water Transport Services Of Passengers By Ferries, Cruises Etc - 18%</option>
                                                                                                        <option value="996416">996416 - Sightseeing Transportation Services By Rail, Land, Water & Air - 18%</option>
                                                                                                        <option value="996419">996419 - Other Local Transportation Services Of Passengers N.E.C. - 18% </option>
                                                                                                        <option value="996421">996421 - Long-Distance Transport Services Of Passengers Through Rail Network By Railways, Metro Etc - 18%</option>
                                                                                                        <option value="996422">996422 - Long-Distance Transport Services Of Passengers Through Road By Bus, Car, Non-Scheduled Long Distance Bus And Coach Services, Stage Carriage Etc - 18%</option>
                                                                                                        <option value="996423">996423 - Taxi Services Including Radio Taxi & Other Similar Services - 18%</option>
                                                                                                        <option value="996424">996424 - Coastal And Transoceanic (Overseas) Water Transport Services Of Passengers By Ferries, Cruise Ships Etc - 18%</option>
                                                                                                        <option value="996425">996425 - Domestic/International Scheduled Air Transport Services Of Passengers - 18%</option>
                                                                                                        <option value="996427">996427 - Space Transport Services Of Passengers - 18%</option>
                                                                                                        <option value="996429">996429 - Other Long-Distance Transportation Services Of Passengers N.E.C. - 18%</option>



                                                                                                        <!-- Add more HSN numbers with descriptions as needed -->
                                                                                                    </select>

                                                                                                </div>
                                                                                            </div>
            `;

                                            var gstRateCell = newRow.insertCell(3);
                                            gstRateCell.innerHTML = `
                <div class="form-row">
                    <div class="col">
                        <input type="text" name="gst_rate[]" class="form-control" placeholder="Enter GST Rate" required pattern="[0-9]+(\.\d{1,2})?|[Ss]pecial" title="Please enter numbers, decimals, or 'Special'">
                    </div>
                </div>
            `;

                                            var amountCell = newRow.insertCell(4);
                                            amountCell.innerHTML = ' <input type="text" name="amount[]" class="form-control" placeholder="Enter Amount" oninput="updateTotal()" required pattern="[0-9]+" title="Please enter numbers only"> ';

                                            var amountWithGSTCell = newRow.insertCell(5);
                                            amountWithGSTCell.innerHTML = ' <input type="text" name="amountwithGST[]" class="form-control" placeholder="Enter Total with GST" oninput="updateTotal()" required pattern="[0-9]+" title="Please enter numbers only"> ';

                                            var removeCell = newRow.insertCell(6);
                                            removeCell.innerHTML = '<button type="button" class="btn btn-danger" onclick="removeRow(this)">Remove</button>';

                                            // Renumber the SR. NO. series
                                            updateSrNoSeries();
                                            // Update the GST rate for the newly added row
                                            //   updateGSTRate(hsnCell.getElementsByTagName("select")[0]);
                                        }

                                        function removeRow(button) {
                                            var row = button.parentNode.parentNode;
                                            var rowIndex = row.rowIndex;
                                            row.parentNode.removeChild(row);

                                            // Renumber the SR. NO. series after a row is removed
                                            updateSrNoSeries();
                                            // Update the total amount
                                            updateTotal();
                                        }

                                        function updateSrNoSeries() {
                                            var table = document.getElementById("orderTable").getElementsByTagName('tbody')[0];
                                            var rows = table.getElementsByTagName("tr");

                                            for (var i = 1; i < rows.length - 1; i++) {
                                                var srNoCell = rows[i].cells[0];
                                                srNoCell.innerHTML = i + 1 + ".";
                                            }
                                        }

                                        function updateTotal() {
                                            var table = document.getElementById("orderTable").getElementsByTagName('tbody')[0];
                                            var rows = table.getElementsByTagName("tr");
                                            var totalAmount = 0;

                                            for (var i = 0; i < rows.length - 2; i++) {
                                                var amountCell = rows[i].cells[4].getElementsByTagName("input")[0];
                                                var amount = parseFloat(amountCell.value);
                                                if (!isNaN(amount)) {
                                                    totalAmount += amount;
                                                }
                                            }

                                            var totalCell = rows[rows.length - 2].cells[4].getElementsByTagName("input")[0];
                                            totalCell.value = totalAmount.toFixed(2);
                                        }

                                        function updateGSTRate(selectElement) {
                                            const gstRateInput = selectElement.parentNode.parentNode.nextElementSibling.getElementsByTagName("input")[0];
                                            const selectedHsn = selectElement.value;

                                            // Map HSN numbers to GST rates
                                            const hsnToGstRate = {
                                                "9985": 18,
                                                "998511": 18,
                                                "998512": 18,
                                                "998513": 18,
                                                "998514": 18,
                                                "998515": 18,
                                                "998516": 18,
                                                "998517": 18,
                                                "998519": 18,
                                                "998521": 18,
                                                "998522": 18,
                                                "998523": 18,
                                                "998524": 18,
                                                "48211010": 18,
                                                "9964": 18,
                                                "996411": 18,
                                                "996412": 18,
                                                "996413": 18,
                                                "996414": 18,
                                                "996415": 18,
                                                "996416": 18,
                                                "996419": 18,
                                                "996421": 18,
                                                "996422": 18,
                                                "996423": 18,
                                                "996424": 18,
                                                "996425": 18,
                                                "996427": 18,
                                                "996429": 18




                                            };

                                            // Lookup the GST rate based on the selected HSN number
                                            const gstRate = hsnToGstRate[selectedHsn];

                                            // Update the GST rate input field
                                            gstRateInput.value = gstRate !== undefined ? gstRate : '';
                                        }
                                    </script>
                                    <!-- script for  adding new row end  -->








                                </div>
                                <!-- Page-body end -->
                            </div>
                            <div id="styleSelector"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--  gst rate code start -->

    <!-- <script>
        function updateGSTRate() {
            const hsnDropdown = document.getElementById('Hsnumber');
            const gstRateInput = document.getElementById('gst_rate');
            const selectedHsn = hsnDropdown.value;

            // Map HSN numbers to GST rates
            const hsnToGstRate = {
                "9992": 10,
                "999210": 20,
                "999299": 3.40,
                // Add more mappings as needed
            };

            // Lookup the GST rate based on the selected HSN number
            const gstRate = hsnToGstRate[selectedHsn];

            // Update the GST rate input field
            gstRateInput.value = gstRate !== undefined ? gstRate : '';
        }
    </script> -->
    <!--  gst rate code end -->

    <!-- Required Jquery -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="<?php echo base_url(); ?>assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- slimscroll js -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js "></script>

    <!-- menu js -->
    <script src="<?php echo base_url(); ?>assets/js/pcoded.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vertical/vertical-layout.min.js "></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js "></script>



    <script type="text/javascript">
        $(document).ready(function() {
            $('#candidate-table').DataTable({
                "paging": true
            });
        });
    </script>




    <!-- serch option script start  -->
    <script>
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    </script>
    <!-- serch option script end   -->




    <!-- pagination Start   -->
    <script>
        const tableBody = document.getElementById('myTable');
        const paginationContainer = document.getElementById('pagination');
        const itemsPerPage = 7;
        let currentPage = 1;

        function displayDataPage(page) {
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const rows = Array.from(tableBody.getElementsByTagName('tr'));

            rows.forEach((row, index) => {
                if (index >= start && index < end) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });

            updatePagination(page);
        }

        function updatePagination(currentPage) {
            const rowsCount = tableBody.getElementsByTagName('tr').length;
            const totalPages = Math.ceil(rowsCount / itemsPerPage);
            let paginationHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                paginationHTML += `<li class="page-item${i === currentPage ? ' active' : ''}">
        <a class="page-link" href="#" onclick="displayDataPage(${i})">${i}</a>
      </li>`;
            }

            paginationContainer.innerHTML = paginationHTML;
        }

        displayDataPage(currentPage);
    </script>
    <!-- pagination end   -->




    <!-- start of user select option -->
    <script>
        function toggleCustomInput(selectedValue) {
            const customInput = document.querySelector('.custom-input');
            if (selectedValue === 'custom') {
                customInput.style.display = 'block';
                customInput.setAttribute('required', 'required');
            } else {
                customInput.style.display = 'none';
                customInput.removeAttribute('required');
            }
        }
    </script>

    <!-- end of user select option -->

</body>



</html>