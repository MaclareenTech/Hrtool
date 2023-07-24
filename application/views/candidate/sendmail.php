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
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

    /**{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins",sans-serif;
}*/
    /*body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #434341;
}*/
    .wrapper {
        /*    max-width: 700px;*/
        width: 100%;
        background: #fff;
        padding: 25px 30px;
        border-radius: 5px;
    }

    label.label {
        color: black;
    }

    .wrapper .title {
        font-size: 25px;
        font-weight: 500;
        position: relative;
    }

    .wrapper .title::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 40px;
        background: #434341;
    }

    .wrapper form .user-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 0 12px 0;
    }

    form .user-details .input-box {
        margin-bottom: 15px;
        width: calc(100% / 2 - 20px);
    }

    .user-details .input-box input {
        height: 45px;
        width: 100%;
    }

    .user-details .input-box .details {
        font-weight: 500;
        display: block;
        margin-bottom: 5px;
    }

    .user-details .input-box input {
        height: 45px;
        width: 100%;
        outline: none;
        border-radius: 5px;
        border: 1px solid #ccc;
        padding-left: 15px;
        font-size: 16px;
        border-bottom-width: 2px;
        transition: all .3s ease;
    }

    .user-details .input-box input:focus,
    .user-details .input-box input:valid {
        border-color: #9B59B6;
    }



    form input[type="radio"] {
        display: none;
    }

    form .button {
        height: 45px;
        margin: 45px 0;
    }

    form .button input {
        height: 100%;
        width: 100%;
        color: #fff;
        outline: none;
        border: none;
        font-size: 18px;
        font-weight: 500;
        cursor: pointer;
        border-radius: 5px;
        letter-spacing: 1px;
        background: #434341;
    }

    form .button input:hover {
        background: linear-gradient(-135deg, #C0C0C0, #9B59B6);
    }

    /* Media Query */
    @media (max-width: 584px) {
        .wrapper {
            max-width: 100%;
        }

        form .user-details .input-box {
            margin-bottom: 15px;
            width: 100%;
        }

        .gender-details .category {
            width: 100%;
        }

        .wrapper form .user-details {
            max-height: 300px;
            overflow-y: scroll;
        }

        .user-details::-webkit-scrollbar {
            width: 0;
        }
    }

    form .button1 input {
        height: 100%;

        color: #fff;
        outline: none;
        border: none;
        font-size: 18px;
        font-weight: 500;
        cursor: pointer;
        border-radius: 5px;
        letter-spacing: 1px;
        background: #434341;
    }

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
                            <img class="img-fluid" src="http://mtas.net.in/assets/images/logo_new.png" alt="Theme-Logo" style="  width: 160px;">
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


                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Send Mail To Candidate</h5>
                                            <p class="m-b-0">Maclareen Talent Acquisition System </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Send Mail To Candidate</a>
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
                                
                                <form action="<?php echo base_url(); ?>send" method="post" style="padding: 20px; border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">
                                    <h1 class="title" style="text-align: center;">Start Email to <?php echo $candidate[0]->candidate_name ?></h1>
                                    <div class="field" style="margin-bottom: 10px;">
                                        <p for="subject" style="display: block; font-weight: bold; color: black;">Email Subject</p>
                                        <input id="subject" type="text" class="input" name="subject" placeholder="Email Subject" style="width: 100%; padding: 5px; border: 1px solid #ccc; border-radius: 5px;" required>
                                    </div>
                                    <div class="field" style="margin-bottom: 10px;">
                                        <p for="body" style="display: block; font-weight: bold; color: black;">Email Body</p>
                                        <textarea class="textarea" name="body" id="body" style="width: 100%; height: 150px; padding: 5px; border: 1px solid #ccc; border-radius: 5px;" required>    </textarea>
                                    </div>
                                    <div style="text-align: center;">
                                        <input type="text" value="<?php echo $candidate[0]->candidate_email ?>" style="opacity: 0;" name="candidate_email">
                                        <input type="text" value="<?php echo $candidate[0]->candidate_name ?>" style="opacity: 0;" name="candidate_name">
                                        <button type="submit" class="button is-primary" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;" onclick="startProgressBar()">Send Mail</button>
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