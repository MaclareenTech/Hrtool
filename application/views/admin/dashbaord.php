<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
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
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon">
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
                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/logo.png" alt="Theme-Logo" />
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
                                    <img class="img-80 img-radius" src="<?php echo base_url(); ?>assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details"><?php echo $this->session->userdata('name');; ?><i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href=""><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="<?php echo base_url(); ?>logout"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="pcoded-navigation-label">Home</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="<?php echo base_url(); ?>adminDashboard" class="waves-effect waves-dark">
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

                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Dashboard</h5>
                                            <p class="m-b-0">Recruitment Management System</p>
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
                                                        <h6>Pending Candidate</h6>
                                                        <h5 class="m-b-30 f-w-700"><?php echo $pendingCandidate; ?></h5>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-c-red" style="width:25%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6">
                                                        <h6>Completed Candidate</h6>
                                                        <h5 class="m-b-30 f-w-700"><?php echo $completedCandidate; ?></h5>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-c-blue" style="width:65%"></div>
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
                                                    <table class="table datatable">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Candidate Name</th>
                                                                <th>Candidate Email</th>
                                                                <th>Candidate Number</th>
                                                                <th>Candidate job profile</th>
                                                                <th>Candidate JOb Status</th>
                                                                <th>Status Updated by </th>
                                                                <th>Candidate Status Updated Date</th>
                                                                <th>Candidate Register Date Date</th>

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
                                                                            <button style="background-color: #FA3B3B; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Screening</button>
                                                                        <?php } else if ($row->candidate_job_status == "1") { ?>
                                                                            <button style="background-color: #CF70FF; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Waiting for document </button>
                                                                        <?php } else if ($row->candidate_job_status == "2") { ?>
                                                                            <button style="background-color: #7D23FA; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Sent to recruitment review</button>
                                                                        <?php } else if ($row->candidate_job_status == "3") { ?>
                                                                            <button style="background-color: #14A2FA; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Shortlisted</button>
                                                                        <?php } else if ($row->candidate_job_status == "4") { ?>
                                                                            <button style="background-color: #F30606; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Not selected</button>
                                                                        <?php } else if ($row->candidate_job_status == "5") { ?>
                                                                            <button style="background-color: #71B7E6; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Training 1</button>
                                                                        <?php } else if ($row->candidate_job_status == "6") { ?>
                                                                            <button style="background-color: #5FAEE3; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Training 2</button>
                                                                        <?php } else if ($row->candidate_job_status == "7") { ?>
                                                                            <button style="background-color: #45A5E0; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Training 3</button>
                                                                        <?php } else if ($row->candidate_job_status == "8") { ?>
                                                                            <button style="background-color: #E95D4E; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Work permit</button>
                                                                        <?php } else if ($row->candidate_job_status == "9") { ?>
                                                                            <button style="background-color: #F4D03F; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Visa filing</button>
                                                                        <?php } else if ($row->candidate_job_status == "10") { ?>
                                                                            <button style="background-color: #3D9CDD; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Training for visa</button>
                                                                        <?php } else if ($row->candidate_job_status == "11") { ?>
                                                                            <button style="background-color: #33D176; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">Completed</button>

                                                                        <?php } ?>


                                                                    </td>
                                                                    <td><?php echo $row->user_name ?></td>
                                                                    <td><?php
                                                                        $timestamp = strtotime($row->candidate_satus_days);
                                                                        $humanReadableDate = date("F j, Y g:i A", $timestamp);

                                                                        echo $humanReadableDate; ?></td>
                                                                    <td><?php
                                                                        $timestamp = strtotime($row->candidate_join_date);
                                                                        $humanReadableDate = date("F j, Y g:i A", $timestamp);

                                                                        echo $humanReadableDate; ?></td>
                                                                    <td><a class="btn btn-default"  style="padding: 10px 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f1f1f1; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); text-decoration: none; color: #333;">
                                                                            <em class="fa fa-pencil"></em>
                                                                        </a> </td>
                                                                        <td><a class="btn btn-default"  href="<?php echo base_url('ViewCandiateInfo/' . $row->candidate_id); ?>" style="padding: 10px 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f1f1f1; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); text-decoration: none; color: #333;">
                                                                            <em class="fa fa-eye"></em>
                                                                        </a> </td>
                                                                        <!-- <td><a class="btn btn-default"   href="<?php echo base_url('dashboard/AddCandidateControllers/viewCandidateInformation/?id=' . $row->candidate_id ); ?>" style="padding: 10px 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f1f1f1; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); text-decoration: none; color: #333;">
                                                                            <em class="fa fa-pencil"></em>
                                                                        </a> </td> -->

                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
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