<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $pageTitle; ?></title>

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
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .fade-in {
        animation: fadeIn 1s ease-in-out;
    }

    /* 3d box start */
  .box-container {
    display: grid;
            grid-template-columns: repeat(2, 1fr); /* Updated to show two boxes horizontally */
            gap: 20px;
        }

        @media screen and (min-width: 1380px) {
            .box-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .box-item {
            position: relative;
            -webkit-backface-visibility: hidden;
            margin-bottom: 35px;
            max-width: 550px;
        }

        .flip-box {
            -ms-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transform-style: preserve-3d;
            perspective: 1000px;
            -webkit-perspective: 1000px;
        }

        .flip-box-front,
        .flip-box-back {
            background-size: cover;
            background-position: center;
            border-radius: 8px;
            min-height: 205px;
            width: 100%;
            -ms-transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
            transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
            -webkit-transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-box-front {
            -ms-transform: rotateY(0deg);
            -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
            -webkit-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .flip-box:hover .flip-box-front {
            -ms-transform: rotateY(-180deg);
            -webkit-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
            -webkit-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .flip-box-back {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;

            -ms-transform: rotateY(180deg);
            -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
            -webkit-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .flip-box:hover .flip-box-back {
            -ms-transform: rotateY(0deg);
            -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
            -webkit-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .flip-box .inner {
            position: absolute;
            left: 0;
            width: 100%;
           
            outline: 1px solid transparent;
            -webkit-perspective: inherit;
            perspective: inherit;
            z-index: 2;

            transform: translateY(-50%) translateZ(60px) scale(.94);
            -webkit-transform: translateY(-50%) translateZ(60px) scale(.94);
            -ms-transform: translateY(-50%) translateZ(60px) scale(.94);
            top: 50%;
        }

        .flip-box-header {
            font-size: 20px;
        }

        .flip-box p {
            font-size: 15px;
            line-height: 1.5em;
        }

        .flip-box-img {
            margin-top: 25px;
        }

        .flip-box-button {
            background-color: transparent;
            border: 2px solid #fff;
            border-radius: 2px;
            color: #fff;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
     
            padding: 15px 20px;
            text-transform: uppercase;
        }
    /* 3d box end */
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
                            <img class="img-fluid" src="https://maclareenai.com/mtas/assets/images/bg/mtas_logo_167_33.png" alt="Theme-Logo" style=" width: 160px;">
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
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="<?php echo base_url(); ?>Chat" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>New chat</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <!-- <li class="waves-effect waves-light">
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li> -->


                                </ul>
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
                                <li class="active">
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
                                    <li class="">
                                        <a href="<?php echo base_url(); ?>invlicelist" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="fa fa-list-alt"></i><b>IN</b></span>
                                            <span class="pcoded-mtext">Invoice</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            <?php } ?>
                            <?php
                            $mail = $this->session->userdata('user_email'); ?>
                            <?php if ($mail == "nisha.minsariya@maclareen.com" || $mail == "saranya.muralidharan@maclareen.com"  || $mail == "muthupandy.nadar@maclareen.com") { ?>
                                <div class="pcoded-navigation-label">Advertisement</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="<?php echo base_url(); ?>advertisement" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="fa fa-list-alt"></i><b>IN</b></span>
                                            <span class="pcoded-mtext">Advertisement</span>
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
                                        <ul class="pcoded-submenu">
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
                            <div class="pcoded-navigation-label">How To Use</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="https://maclareenai.com/mtas/upload/manual"  target= "_blank" waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-book"></i><b>L</b></span>
                                        <span class="pcoded-mtext">How To Use</span>
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
                                            <h5 class="m-b-10">Dashboard</h5>
                                            <p class="m-b-0">Maclareen Talent Acquisition System </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
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
                                    <!-- Project statustic start -->
                                    <div class="col-xl-12">
                                        <div class="box-container">
                                            <div class="box-item">
                                                <div class="flip-box">
                                                    <div class="flip-box-front text-center" style="background: linear-gradient(45deg, #ff0000, #ff0000);">
                                                        <div class="inner color-white">
                                                            <h3 class="flip-box-header" style="color: white;">Pending Candidate</h3>
                                                        </div>
                                                    </div>
                                                    <div class="flip-box-back text-center" style="background: linear-gradient(45deg, #ff0000, #ff0000);">
                                                        <div class="inner color-white">
                                                            <h3 class="flip-box-header" style="color: white;">Pending Candidate</h3>
                                                            <button class="flip-box-button"><?php echo $pendingCandidate; ?></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-item">
                                                <div class="flip-box">
                                                    <div class="flip-box-front text-center" style="background: linear-gradient(45deg, #45a049, #45a049);">
                                                        <div class="inner color-white">
                                                            <h3 class="flip-box-header" style="color: white;">Completed Candidate</h3>
                                                        </div>
                                                    </div>
                                                    <div class="flip-box-back text-center" style="background: linear-gradient(45deg, #45a049, #45a049);">
                                                        <div class="inner color-white">
                                                            <h3 class="flip-box-header" style="color: white;">Completed Candidate</h3>
                                                            <button class="flip-box-button"><?php echo $CompletedCandidate; ?></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Project statustic end -->



                                    <!-- <?php print_r($pageTitle); ?> -->
                                    <!-- Basic table card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Candidate Details</h5>

                                        </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <div id="candidate-table-container">
                                                    <div id="table-container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div style="margin: 0 auto; padding: 20px; background-color: #f2f2f2; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
                                                                    <form method="POST" style="display: flex; align-items: center;">
                                                                        <input id="search" type="text" placeholder="Search for name and email......" style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                                                                    </form>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <br>
                                                        <table id="my-table" class="table datatable">
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                    <th>Candidate Name</th>
                                                                    <th>Candidate Email</th>
                                                                    <th>Candidate Number</th>
                                                                    <th>Candidate job profile</th>
                                                                    <th>Candidate Job Status</th>
                                                                    <th>Candidate Status Updated Date</th>
                                                                    <th>Candidate Register Date Date</th>
                                                                    <th>Candidate Status updated days </th>
                                                                    <th>Status Updated by </th>
                                                                    <th>Candidate Source</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody id="myTable">
                                                                <?php $counter = 0; ?>
                                                                <?php foreach ($candidate as $row) : ?>
                                                                    <tr>
                                                                        <?php $counter++; ?>
                                                                        <td><?php echo $counter; ?></td>
                                                                        <td><?php echo $row->candidate_name ?></td>
                                                                        <td><?php echo $row->candidate_email ?></td>
                                                                        <td><?php echo $row->candidate_mobile_no ?></td>
                                                                        <td><?php $combined_value = $row->job_country . ' - ' . $row->job_position;
                                                                            echo $combined_value; ?></td>
                                                                        <td> <?php if ($row->candidate_job_status == "0") { ?>
                                                                                <button style="background-color: #ff3333; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Screening</button>
                                                                            <?php } else if ($row->candidate_job_status == "1") { ?>
                                                                                <button style="background-color: #fe6367; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Waiting for document </button>
                                                                            <?php } else if ($row->candidate_job_status == "2") { ?>
                                                                                <button style="background-color: #64d886; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Sent to recruitment review</button>
                                                                            <?php } else if ($row->candidate_job_status == "3") { ?>
                                                                                <button style="background-color: #0abc38; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Shortlisted</button>
                                                                            <?php } else if ($row->candidate_job_status == "4") { ?>
                                                                                <button style="background-color: #940005; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Not selected</button>
                                                                            <?php } else if ($row->candidate_job_status == "5") { ?>
                                                                                <button style="background-color: #99dda2; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Job Orientation 1</button>
                                                                            <?php } else if ($row->candidate_job_status == "6") { ?>
                                                                                <button style="background-color: #6ecf7b; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Job Orientation 2</button>
                                                                            <?php } else if ($row->candidate_job_status == "7") { ?>
                                                                                <button style="background-color: #49c359; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Job Orientation 3</button>
                                                                            <?php } else if ($row->candidate_job_status == "8") { ?>
                                                                                <button style="background-color: #00892c; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Work permit</button>
                                                                            <?php } else if ($row->candidate_job_status == "9") { ?>
                                                                                <button style="background-color: #206228; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Visa filing</button>
                                                                            <?php } else if ($row->candidate_job_status == "10") { ?>
                                                                                <button style="background-color: #349f42; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Training for visa</button>
                                                                            <?php } else if ($row->candidate_job_status == "11") { ?>
                                                                                <button style="background-color: #16431c; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Completed</button>

                                                                            <?php } ?>


                                                                        </td>


                                                                        <td><?php
                                                                            $timestamp = strtotime($row->candidate_satus_days);
                                                                            $humanReadableDate = date("d F Y", $timestamp);

                                                                            echo $humanReadableDate; ?></td>


                                                                        <td>
                                                                            <?php
                                                                            $timestamp = strtotime($row->candidate_join_date);
                                                                            $humanReadableDate = date("d F Y", $timestamp);

                                                                            echo $humanReadableDate; ?></td>
                                                                        <td><?php
                                                                            $timestamp = strtotime($row->candidate_satus_days);
                                                                            $humanReadableDate = date("d F Y", $timestamp);
                                                                            $currentDate = new DateTime();
                                                                            $targetDate = new DateTime($humanReadableDate);

                                                                            $diff = $currentDate->diff($targetDate);
                                                                            $days = $diff->days;
                                                                            echo $days; ?></td>
                                                                        <td><?php echo $row->user_name ?></td>
                                                                        <!-- <td> <?php if ($candidate[0]->is_paid == "1") { ?>
                                                                                <input type="checkbox" id="toggle_switch" name="toggle_switch" checked disabled style="display: none;">
                                                                                <label for="toggle_switch" style="display: inline-block; width: 15px; height: 15px; border: 1px solid black; background-color: green; vertical-align: middle; text-align: center; line-height: 15px; color: white;">&#10004;</label>


                                                                            <?php } else { ?>
                                                                                <input type="checkbox" id="toggle_switch" name="toggle_switch" disabled>
                                                                            <?php } ?>
                                                                        </td> -->
                                                                        <?php

                                                                        $encrypted_number = base64_encode($row->candidate_id);
                                                                        ?>
                                                                        <td> <?php if ($row->source_name == "Facebook" || $row->source_name == "facebook") { ?>
                                                                                <a class="btn btn-default" style="padding: 10px 20px; border: 1px solid #3b5998; border-radius: 5px; background-color: #3b5998; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); text-decoration: none; color: #fff;"> <!-- Set the color to white (#fff) -->
                                                                                    <em class="fab fa-facebook-f" style="color: #fff;"></em> <!-- Facebook Icon with white color -->
                                                                                </a>

                                                                            <?php } else if ($row->source_name == "WhatsApp" || $row->source_name == "whatsapp") { ?>
                                                                                <a class="btn btn-default whatsapp-btn" style="padding: 10px 20px; border: none; border-radius: 5px; background: #25d366; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); text-decoration: none; color: #fff;">
                                                                                    <em class="fab fa-whatsapp"></em> <!-- WhatsApp Icon -->
                                                                                </a>
                                                                            <?php } else if ($row->source_name == "Instagram" || $row->source_name == "instagram") { ?>
                                                                                <a class="btn btn-default instagram-btn" style="padding: 10px 20px; border: none; border-radius: 5px; background: linear-gradient(to right, #405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D, #F56040, #F77737, #FCAF45, #FFDC80); box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); text-decoration: none; color: #fff;">
                                                                                    <em class="fab fa-instagram"></em> <!-- Instagram Icon -->
                                                                                </a>
                                                                            <?php } else  if ($row->source_name == "Walk-In") { ?>
                                                                                <a class="btn btn-default walk-in-btn" style="padding: 10px 20px; border: none; border-radius: 5px; background: #FF7814; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); text-decoration: none; color: #fff;">
                                                                                    <em class="fa fa-user-o"></em> <!-- wail in Icon -->
                                                                                </a>
                                                                            <?php  } else { ?>
                                                                                <a class="btn btn-default a-btn" style="padding: 10px 20px; border: none; border-radius: 5px; background: #3D9CDD; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); text-decoration: none; color: #fff;">
                                                                                    <em class="fa fa-handshake-o"></em> <!-- a  Icon -->
                                                                                </a>
                                                                            <?php } ?>

                                                                        </td>
                                                                        <td><a class="btn btn-default" href="<?php echo base_url('editCandidateInfo/' . $row->candidate_id); ?>" style="padding: 10px 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f1f1f1; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); text-decoration: none; color: #333;">
                                                                                <em class="fa fa-pencil"></em>
                                                                            </a> </td>
                                                                        <td><a class="btn btn-default" href="<?php echo base_url('ViewCandiateInfo/' . $row->candidate_id); ?>" style="padding: 10px 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f1f1f1; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); text-decoration: none; color: #333;">
                                                                                <em class="fa fa-eye"></em>
                                                                            </a> </td>
                                                                        <!-- <td><a class="btn btn-default"   href="<?php echo base_url('admin/AddCandidateControllers/viewCandidateInformation/?id=' . $row->candidate_id); ?>" style="padding: 10px 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f1f1f1; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); text-decoration: none; color: #333;">
                                                                            <em class="fa fa-pencil"></em>
                                                                        </a> </td> -->

                                                                    </tr>
                                                                <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="pagination-container">
                                                        <ul id="pagination" class="pagination"></ul>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Basic table card end -->












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



</body>


</html>