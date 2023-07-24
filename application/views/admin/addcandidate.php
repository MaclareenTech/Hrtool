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
</head>
<style>
    .progress-container {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        border: 8px solid #f3f3f3;
        position: relative;
        display: none;
        /* Hide the progress bar initially */
    }

    .progress-bar {
        width: 100%;
        height: 100%;
        clip: rect(0, 60px, 120px, 0);
        border-radius: 50%;
        position: absolute;
        background-color: #616561;
        transform-origin: center;
        animation: progress 5s linear infinite;
    }

    @keyframes progress {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
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
                            <img class="img-fluid" src="http://mtas.net.in/assets/images/logo_new.png" alt="Theme-Logo" style=" width: 160px;">
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
                                    <?php
                                    $role = $this->session->userdata('role'); ?>
                                    <?php if ($role == "admin") { ?>
                                        <?php if ($this->session->userdata('user_profile') == "") { ?>
                                            <img class="img-80 img-radius" src="<?php echo base_url(); ?>assets/images/avatar-4.jpg" alt="User-Profile-Image">

                                        <?php } else { ?>
                                            <img class="img-80 img-radius" src="<?php echo "http://mtas.net.in/upload/profile/" . $this->session->userdata('user_profile'); ?>" alt="User-Profile-Image">
                                        <?php } ?>
                                    <?php } ?>
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
                                <li class="active">
                                    <a href="<?php echo base_url(); ?>addCandidate" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa-solid fa-user-plus"></i><b>A</b></span>
                                        <span class="pcoded-mtext">Add Candidate</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <?php
                            $role = $this->session->userdata('role'); ?>
                            <?php if ($role == "admin") { ?>

                            <?php } else { ?>
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

                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Add Candidate</h5>
                                            <p class="m-b-0">Maclareen Talent Acquisition System </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Add Candidate</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->







                        <div class="pcoded-inner-content" >
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper" >
                                    <!-- Page-body start -->




                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- Basic Form Inputs card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Add Candidate Information</h5>
                                                </div>
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
                                                <div class="card-block">
                                                    <?php echo form_open_multipart('admin/AddCandidateControllers/RegisterCandidate'); ?>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Candidate Name </label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="candidate_name" placeholder="Ex. john dev" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Candidate Email Id</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="candidate_email" placeholder="Ex.abc@example.com" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Candidate Mobile Number</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="candidate_mobile_no" placeholder="Ex.1234567890" pattern="[0-9]{10}" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Job Profile</label>
                                                        <div class="col-sm-9">
                                                            <select name="candidate_job_profile" class="form-control">
                                                                <option value="opt1" disabled selected>Select One Value</option>
                                                                <option value="Armenia Farming">Armenia Farming</option>
                                                                <option value="Armenia Construction">Armenia Construction</option>
                                                                <option value="Armenia Hotel Jobs">Armenia Hotel Jobs</option>
                                                                <option value="Armenia Casino">Armenia Casino</option>
                                                                <option value="Poland Warehouse">Poland Warehouse</option>
                                                                <option value="Poland Worker">Poland Worker</option>
                                                                <option value="Poland General Helper">Poland General Helper</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Candidate Password</label>
                                                        <div class="col-sm-9">
                                                            <input type="password" class="form-control" name="candidate_password" placeholder="Enter your password" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Upload Addhar Card </label>
                                                        <div class="col-sm-9">
                                                            <input type="file" name="candidate_aadhar_card" accept="application/pdf">


                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Upload Pan Card </label>
                                                        <div class="col-sm-9">

                                                            <input type="file" name="candidate_pan_card" accept="application/pdf">

                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Upload Passport </label>
                                                        <div class="col-sm-9">

                                                            <input type="file" name="candidate_passport" accept="application/pdf">


                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Upload Candidate Resume </label>
                                                        <div class="col-sm-9">

                                                            <input type="file" name="candidate_resume" accept="application/pdf">

                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Upload Candidate Images </label>
                                                        <div class="col-sm-9">

                                                        <input type="file" name="candidate_photo" accept="image/*">

                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label"></label>
                                                        <div class="col-sm-9">

                                                        <input type="checkbox" id="toggle_switch" name="toggle_switch">

                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <center> <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button></center>
                                                        </div>

                                                    </div>





                                                    </form>

                                                    <div class="progress-container" id="progressContainer" style="margin-top: -100px;margin-left: 500px;">
                                                        <div class="progress-bar"></div>
                                                    </div>

                                                    <script>
                                                        function startProgressBar() {
                                                            const progressBar = document.querySelector(".progress-bar");
                                                            progressBar.style.animationPlayState = "running";

                                                            // Show the progress bar when the button is clicked
                                                            const progressContainer = document.getElementById("progressContainer");
                                                            progressContainer.style.display = "block";

                                                            // Reset the progress bar after the animation delay (5 seconds in this example)
                                                            setTimeout(() => {
                                                                progressBar.style.animationPlayState = "paused";
                                                                // Hide the progress bar after the animation is completed
                                                                progressContainer.style.display = "none";
                                                            }, 50000);
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                            <!-- Basic Form Inputs card end -->
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