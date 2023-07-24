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

</head>
<style>
    /* popup notification modal */
    .modal-body .col-sm-8 {
    text-align: center;
}
.intro-title {
  margin-bottom: 5px;
  font-weight: 400;
  color: #333;
}

@media (max-width: 575px) {
  .modal-body .col-sm-4 {
    text-align: center;
    margin-top: 25px;
  }
}
@media (min-width: 576px) {
  .modal-dialog {
      max-width: 650px;
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
                        <a href="index.html">
                            <img class="img-fluid" src="http://mtas.net.in/assets/images/logo_new.png" alt="Theme-Logo" style=" width: 160px; ">
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
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
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
                                        <div class="card proj-progress-card">
                                            <div class="card-block">
                                                <div class="row">

                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="card mat-clr-stat-card text-white red">
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-3 text-center bg-c-red">
                                                                        <i class="fa fa-list mat-icon f-24"></i>
                                                                    </div>
                                                                    <div class="col-9 cst-cont">
                                                                        <h5><?php echo $pendingCandidate; ?></h5>
                                                                        <p class="m-b-0">Pending Candidate</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="card mat-clr-stat-card text-white green ">
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-3 text-center bg-c-green">
                                                                        <i class="fas fa-trophy mat-icon f-24"></i>
                                                                    </div>
                                                                    <div class="col-9 cst-cont">
                                                                        <h5><?php echo $CompletedCandidate; ?></h5>
                                                                        <p class="m-b-0">Completed Candidate</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Project statustic end -->





                                    <!-- <?php print_r($pageTitle); ?> -->
                                    <!-- Basic table candidate start-->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Candidate Details</h5>

                                        </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <div id="candidate-table-container">
                                                    <div id="table-container">
                                                        <table id="my-table" class="table datatable">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Candidate Name</th>
                                                                    <th>Candidate Email</th>
                                                                    <th>Candidate Number</th>
                                                                    <th>Candidate job profile</th>
                                                                    <th>Candidate Job Status</th>
                                                                    <th>Status Updated by </th>
                                                                    <th>Candidate Status Updated Date</th>
                                                                    <th>Candidate Status updated days </th>
                                                                    <th>Candidate Register Date Date</th>
                                                                    <th><i class="fa fa-inr" aria-hidden="true"></i></th>
                                                                    <th></th>
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
                                                                        <td><?php echo $row->candidate_job_profile ?></td>
                                                                        <td> <?php if ($row->candidate_job_status == "0") { ?>
                                                                                <button style="background-color: #ff3333; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Screening</button>
                                                                            <?php } else if ($row->candidate_job_status == "1") { ?>
                                                                                <button style="background-color: #e60000; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Waiting for document </button>
                                                                            <?php } else if ($row->candidate_job_status == "2") { ?>
                                                                                <button style="background-color: #00e600; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Sent to recruitment review</button>
                                                                            <?php } else if ($row->candidate_job_status == "3") { ?>
                                                                                <button style="background-color: #00b300; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Shortlisted</button>
                                                                            <?php } else if ($row->candidate_job_status == "4") { ?>
                                                                                <button style="background-color: #b30000; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Not selected</button>
                                                                            <?php } else if ($row->candidate_job_status == "5") { ?>
                                                                                <button style="background-color: #C0C0C0; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Job Orientation 1</button>
                                                                            <?php } else if ($row->candidate_job_status == "6") { ?>
                                                                                <button style="background-color: #A9A9A9; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Job Orientation 2</button>
                                                                            <?php } else if ($row->candidate_job_status == "7") { ?>
                                                                                <button style="background-color: #808080; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Job Orientation 3</button>
                                                                            <?php } else if ($row->candidate_job_status == "8") { ?>
                                                                                <button style="background-color: #009900; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Work permit</button>
                                                                            <?php } else if ($row->candidate_job_status == "9") { ?>
                                                                                <button style="background-color: #008000; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Visa filing</button>
                                                                            <?php } else if ($row->candidate_job_status == "10") { ?>
                                                                                <button style="background-color: #696969; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Training for visa</button>
                                                                            <?php } else if ($row->candidate_job_status == "11") { ?>
                                                                                <button style="background-color: #006600; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Completed</button>

                                                                            <?php } ?>


                                                                        </td>
                                                                        <td><?php echo $row->user_name ?></td>

                                                                        <td><?php
                                                                            $timestamp = strtotime($row->candidate_satus_days);
                                                                            $humanReadableDate = date("Y-m-d", $timestamp);

                                                                            echo $humanReadableDate; ?></td>

                                                                        <td><?php
                                                                            $timestamp = strtotime($row->candidate_satus_days);
                                                                            $humanReadableDate = date("Y-m-d", $timestamp);
                                                                            $currentDate = new DateTime();
                                                                            $targetDate = new DateTime($humanReadableDate);

                                                                            $diff = $currentDate->diff($targetDate);
                                                                            $days = $diff->days;
                                                                            echo $days; ?></td>
                                                                        <td>
                                                                            <?php
                                                                            $timestamp = strtotime($row->candidate_join_date);
                                                                            $humanReadableDate = date("Y-m-d", $timestamp);

                                                                            echo $humanReadableDate; ?></td>
                                                                        <td> <?php if ($candidate[0]->is_paid == "1") { ?>
                                                                                <input type="checkbox" id="toggle_switch" name="toggle_switch" checked disabled style="display: none;">
                                                                                <label for="toggle_switch" style="display: inline-block; width: 15px; height: 15px; border: 1px solid black; background-color: green; vertical-align: middle; text-align: center; line-height: 15px; color: white;">&#10004;</label>

                                                                            <?php } else { ?>
                                                                                <input type="checkbox" id="toggle_switch" name="toggle_switch" disabled>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <?php

                                                                        $encrypted_number = base64_encode($row->candidate_id);
                                                                        ?>
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
                                    <!-- Basic table candidate end -->


                                    <!--  Admin table start -->

                                    <div class="card table-card">
                                        <div class="card-header">
                                            <h5>Employee information</h5>

                                        </div>
                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <div id="table-container2">
                                                    <table class="table table-hover m-b-0 without-header">
                                                        <tbody id="my-tableee">
                                                            <?php $counter1 = 0; ?>
                                                            <?php foreach ($emp as $row) : ?>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-inline-block align-middle">
                                                                            <?php if ($row->user_profile == "") { ?>
                                                                                <img src="assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                            <?php } else { ?>
                                                                                <img src="<?php echo  "http://mtas.net.in/upload/profile/" . $row->user_profile; ?>" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                            <?php } ?>

                                                                            <div class="d-inline-block">
                                                                                <h6><?php echo $row->user_name ?></h6>
                                                                                <p class="text-muted m-b-0"><?php echo $row->user_email ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <h6 class="f-w-700"><?php echo $row->emp_id ?></h6>
                                                                    </td>
                                                                </tr>

                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!--  Admin table end -->





                                    <!-- popup notification Madal start -->
                                    <div class="modal fade" id="learnMore1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">

                                                <div class="modal-body">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </br>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <img src="http://numbots.com/wp-content/uploads/2018/12/Fairybot-with-shadow.png" alt="" width=80% />
                                                            </div>
                                                            <div class="col-sm-4 align-self-center">
                                                                <h5 class="intro-title"> intro title </h5>
                                                                <h3> TITLE </h3>
                                                                <p> some other content, some other, content </p>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- popup notification Madal end -->






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

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="<?php echo base_url(); ?>assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="<?php echo base_url(); ?>assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="<?php echo base_url(); ?>assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="<?php echo base_url(); ?>assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="<?php echo base_url(); ?>assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->

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