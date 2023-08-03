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
    .app-wrapper {
        height: 100%;
    }

    .app-header {
        border-radius: 10px 10px 0 0;
        background: linear-gradient(#ff0000, #981515);
        padding: 20px 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #fff;
    }

    h2 {
        font-size: 1.222rem;
        font-weight: 800;
    }

    span.friend-status {
        font-size: 0.666rem;
    }


    .app-message-body {
        background-color: rgba(233, 233, 233, 0.6);
        padding: 24px 16px 0;



    }

    .message-wrapper {
        display: flex;
        flex-direction: column;
    }

    .message-wrapper:nth-child(2n+1) {
        align-items: flex-start;
    }

    .message-meta {
        justify-content: flex-start;
    }


    .message-wrapper:nth-child(2n) {
        align-items: flex-end;
    }

    .message-meta {
        flex-direction: row-reverse;
    }



    .message {
        max-width: 66.6%;
        background-color: #fff;
        padding: 8px;
        border-radius: 5px;
        box-shadow: 4px 4px rgba(200, 200, 200, 0.25);
        font-size: 0.9rem;
        display: flex;
        flex: 1 auto;
    }

    .message-meta {
        display: flex;
        flex: 1 auto;
        margin: 10px 5px 15px;
    }

    .sender-avatar {
        width: 24px;
        height: 24px;
        border-radius: 9999px;
        background: linear-gradient(#e71b1b, #bb1c1c);
        color: #fff;
        line-height: 24px;
        text-align: center;
        font-size: 0.666rem;
        font-weight: 600;
    }

    .timestamp {
        color: #999;
        font-size: 0.666rem;
        line-height: 24px;
        display: inline-block;
        margin: 0 5px;
    }


    .app-input-area {

        bottom: 0;
        left: 0;
        width: 100%;
        background-color: #f9f9f9;
        padding: 10px;
        box-shadow: 0 -1px 5px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
    }

    .app-input-area form {
        flex: 1;
        display: flex;
    }

    .app-input-area input[type="text"] {
        flex: 1;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin-right: 10px;
    }

    .app-input-area button[type="submit"] {

        color: #fff;
        border: none;
        padding: 10px 15px;
        border-radius: 4px;
        cursor: pointer;
    }

    /* Adjust the SVG icon size */
    .app-input-area svg {
        width: 20px;
        height: 20px;
        vertical-align: middle;
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
                                <li class="active">
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
                                            <h5 class="m-b-10">Chat</h5>
                                            <p class="m-b-0">Maclareen Talent Acquisition System </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a>Chat</a>
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

                                    <div class="app-wrapper">
                                        <div class="app-header">
                                            <h2>MTAS</h2>

                                        </div>
                                        <div class="app-message-body">
                                            <?php if (!empty($chatdata)) : ?>
                                                <?php foreach ($chatdata as $row) : ?>
                                                    <?php
                                                    $Admin_id = $this->session->userdata('userId');
                                                    $isSentByAdmin = ($row->sender_id == $Admin_id);
                                                    ?>
                                                    <?php if ($isSentByAdmin) { ?>
                                                        <div class="message-wrapper" style="display: flex; flex-direction: column;  align-items: end;;  margin-bottom: 15px;">
                                                            <div class="message" style="max-width: 66.6%; background-color: #fff; padding: 8px; border-radius: 5px; box-shadow: 4px 4px rgba(200, 200, 200, 0.25); font-size: 0.9rem; display: flex; flex: 1 auto;">
                                                                <span><?php echo $row->chat_message; ?></span>
                                                            </div>
                                                            <div class="message-meta" style="display: flex; flex: 1 auto; margin: 10px 5px 15px; justify-content: flex-end;">
                                                                <div class="sender-avatar" style="width: 82px; height: 24px; border-radius: 9999px; background: linear-gradient(180deg, #fb551c, #f7b633); color: #fff; line-height: 24px; text-align: center; font-size: 0.666rem; font-weight: 600;">
                                                                    <?php
                                                                    $first_name = strtok($row->user_name, ' '); // Get the first part before the space

                                                                    echo $first_name; ?>
                                                                </div>
                                                                <span class="timestamp" style="color: #999; font-size: 0.666rem; line-height: 24px; display: inline-block; margin: 0 5px;">
                                                                    <?php
                                                                    $formattedDate = date('j M g:i A', strtotime($row->chat_time));
                                                                    echo $formattedDate;
                                                                    ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="message-wrapper" style="display: flex; flex-direction: column; align-items: start;; margin-bottom: 15px;">
                                                            <div class="message" style="max-width: 66.6%; background-color: #fff; padding: 8px; border-radius: 5px; box-shadow: 4px 4px rgba(200, 200, 200, 0.25); font-size: 0.9rem; display: flex; flex: 1 auto;">
                                                                <span><?php echo $row->chat_message; ?></span>
                                                            </div>
                                                            <div class="message-meta" style="display: flex; flex: 1 auto; margin: 10px 5px 15px; justify-content:flex-start;">
                                                            <div class="sender-avatar" style="width: 82px; height: 24px; border-radius: 9999px; background: linear-gradient(180deg, #fb551c, #f7b633); color: #fff; line-height: 24px; text-align: center; font-size: 0.666rem; font-weight: 600;">
                                                                    <?php
                                                                    $first_name = strtok($row->user_name, ' '); // Get the first part before the space

                                                                    echo $first_name; ?>
                                                                </div>
                                                                <span class="timestamp" style="color: #999; font-size: 0.666rem; line-height: 24px; display: inline-block; margin: 0 5px;">
                                                                    <?php
                                                                    $formattedDate = date('j M g:i A', strtotime($row->chat_time));
                                                                    echo $formattedDate;
                                                                    ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    <?php } ?>

                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <p>No chat available.</p>
                                            <?php endif; ?>
                                        </div>

                                        <div class="app-input-area">
                                            <form class="form-material" action="<?php echo base_url(); ?>AddChat" method="post">
                                                <input type="text" placeholder="Your message here..." name="message" required />
                                                <button type="submit">
                                                    <svg viewBox="0 0 512 512" x="0px" y="0px" style="enable-background: new 0 0 512 512" title="paper-plane">
                                                        <path fill="" d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>




                                </div>









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








</body>



</html>