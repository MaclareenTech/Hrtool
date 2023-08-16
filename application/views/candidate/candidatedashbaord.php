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
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');


    .wrapper {
        /*    max-width: 700px;*/
        width: 100%;
        /* background: #fff; */
        padding: 25px 30px;
        border-radius: 5px;
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
        background: linear-gradient(-135deg, #99dda2, #9B59B6);
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
</style>
<!-- card animation  start -->
<style>
    /* Adjust the modal width and height */
    @media (max-width: 767px) {
        .modal-lg {
            max-width: 90%;
        }
    }

    /* Adjust the carousel image dimensions */
    .carousel-inner img {
        max-width: 80%;
        height: 50%;
    }
</style>

<style>
    .container1 {
        width: 640px;
        height: 480px;
        margin: 0 auto;
        overflow: hidden;
        background: white;
        position: relative;
        box-sizing: border-box;
        top: 20px;
        /* Adjust the vertical position as needed */
    }

    /* Bounce Animation */
    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-30px);
        }
    }

    /* Zoom Animation */
    @keyframes zoom {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.2);
        }
    }

    .bounce-image {
        animation: bounce 2s infinite, zoom 4s infinite alternate;
    }

    .marquee {
        width: 320px;
        top: 480px;
        position: relative;
        box-sizing: border-box;
        animation: marquee 100s linear infinite;
        color: #ffffff;
    }

    @keyframes marquee {
        from {
            transform: translateY(0);
        }

        to {
            transform: translateY(-150%);
        }
    }

    .marquee img,
    .marquee p {
        margin: 10px 0;
        /* Adjust the margin as needed */
    }

    /* 3D Animation */
    @keyframes tilt {

        0%,
        100% {
            transform: translateX(0) rotateY(0);
        }

        50% {
            transform: translateX(20px) rotateY(40deg);
        }
    }

    /* Round Animation */
    @keyframes round {
        0% {
            transform: rotateX(-20deg) rotateY(30deg);
        }

        100% {
            transform: rotateX(-20deg) rotateY(0deg);
        }
    }

    .marquee img {
        animation: bounce 2s infinite, round 4s infinite alternate;
        /* display: block; */
        margin: 0 auto;
        /* Center the images horizontally */
    }
</style>

<!-- card animation  end  -->


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

                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <!-- <div class="">
                                <div class="main-menu-header">
                                    <div class="user-details">
                                        <span id="more-details"><?php echo $this->session->userdata('name');; ?></span>
                                    </div>
                                </div>


                            </div> -->

                            <div class="pcoded-navigation-label">Home</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="#" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Dashboard</span>
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


                            <!-- card animation start -->

                            <div class="container1">
                                <div class="marquee">
                                    <?php foreach ($advertisementdetails as $row) : ?>
                                        <tr>

                                            <img src="<?php echo  "https://maclareenai.com/mtas/upload/advertisement/" . $row->ad_image_path; ?>" id="image1" style="width:200px;">
                                            <p>This is some text about image 1.</p>

                                        <?php endforeach; ?>



                                </div>
                            </div>
                            <!-- card animation end -->

                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Candidate Information</h5>
                                            <p class="m-b-0">Maclareen Talent Acquisition System </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!"> Candidate Information</a>
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





                                    <div class="wrapper">
                                        <div class="title">Candidate Information</div>
                                        <form action="#">
                                            <div class="user-details">
                                                <div class="input-box">
                                                    <span class="details">Full Name</span>
                                                    <input type="text" value="<?php echo $candidate[0]->candidate_name ?>" disabled>
                                                </div>
                                                <div class="input-box">
                                                    <span class="details">Job title</span>
                                                    <input type="text" value="<?php $combined_value = $candidate[0]->job_country . ' - ' . $candidate[0]->job_position;
                                                                                echo $combined_value; ?>" disabled>
                                                </div>
                                                <div class="input-box">
                                                    <span class="details">E-Mail</span>
                                                    <input type="email" value="<?php echo $candidate[0]->candidate_email ?>" disabled>
                                                </div>
                                                <div class="input-box">
                                                    <span class="details">Phone Number</span>
                                                    <input type="number" value="<?php echo $candidate[0]->candidate_mobile_no ?>" disabled>
                                                </div>

                                                <div class="button">
                                                    <?php if ($candidate[0]->candidate_job_status == "0") { ?>
                                                        <button style="background-color: #ff3333; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Screening
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "1") { ?>
                                                        <button style="background-color: #fe6367; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Waiting for document
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "2") { ?>
                                                        <button style="background-color: #64d886; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Sent to recruitment review
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "3") { ?>
                                                        <button style="background-color: #0abc38; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Shortlisted
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "4") { ?>
                                                        <button style="background-color: #940005; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Not selected
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "5") { ?>
                                                        <button style="background-color: #99dda2; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Job Orientation 1
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "6") { ?>
                                                        <button style="background-color: #6ecf7b; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Job Orientation 2
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "7") { ?>
                                                        <button style="background-color: #49c359; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Job Orientation 3
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "8") { ?>
                                                        <button style="background-color: #00892c; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Work permit
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "9") { ?>
                                                        <button style="background-color: #206228; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Visa filing
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "10") { ?>
                                                        <button style="background-color: #349f42; color: white;border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Training for visa
                                                        </button>
                                                    <?php } else if ($candidate[0]->candidate_job_status == "11") { ?>
                                                        <button style="background-color: #16431c; color: white; border: none; border-radius: 6px; padding: 10px 20px; font-size: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease;">
                                                            <span style="font-weight: bold;">Job Status:</span> Completed
                                                        </button>
                                                    <?php } ?>
                                                </div>

                                            </div>


                                            <div class="title" style="margin-bottom:20px;">Documents</div>

                                            <?php if ($candidate[0]->candidate_aadhar_card != "") { ?>

                                                <a href="<?php echo base_url('ViewCandiateDocument/' . $candidateId . '/0'); ?>" style="background: #434341;border: none;color: white;padding: 8px 16px;text-align: center;text-decoration: none;display: inline-block;font-size: 14px; margin: 4px 2px; transition-duration: 0.4s;cursor: pointer;border-radius: 4px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transform-style: preserve-3d;perspective: 1000px;transform: translateZ(10px);">
                                                    View Aadhar Card
                                                </a>

                                            <?php } ?>


                                            <?php if ($candidate[0]->candidate_pan_card != "") { ?>

                                                <a href="<?php echo base_url('ViewCandiateDocument/' . $candidateId . '/1'); ?>" style="background: #434341; border: none;color: white;padding: 8px 16px; text-align: center;text-decoration: none;display: inline-block;font-size: 14px;  margin: 4px 2px;transition-duration: 0.4s;cursor: pointer;border-radius: 4px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transform-style: preserve-3d; perspective: 1000px;transform: translateZ(10px); ">
                                                    View Pan Card
                                                </a>

                                            <?php } ?>

                                            <?php if ($candidate[0]->candidate_passport != "") { ?>
                                                <a href="<?php echo base_url('ViewCandiateDocument/' . $candidateId . '/3'); ?>" style="background: #434341; border: none;color: white;padding: 8px 16px; text-align: center;text-decoration: none;display: inline-block;font-size: 14px; margin: 4px 2px;transition-duration: 0.4s;cursor: pointer;border-radius: 4px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); transform-style: preserve-3d; perspective: 1000px; transform: translateZ(10px); ">
                                                    View Passport
                                                </a>

                                            <?php } ?>


                                            <?php if ($candidate[0]->candidate_resume != "") { ?>

                                                <a href="<?php echo base_url('ViewCandiateDocument/' . $candidateId . '/2'); ?>" style="background: #434341;border: none;color: white;padding: 8px 16px;text-align: center;text-decoration: none;display: inline-block;font-size: 14px; margin: 4px 2px;transition-duration: 0.4s; cursor: pointer; border-radius: 4px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); transform-style: preserve-3d;  perspective: 1000px;  transform: translateZ(10px);">
                                                    View Resume
                                                </a>

                                            <?php } ?>
                                            <?php if ($candidate[0]->candidate_resume != "") { ?>

                                                <a href="<?php echo base_url('ViewCandiateDocument/' . $candidateId . '/4'); ?>" style="background: #434341;border: none;color: white;padding: 8px 16px;text-align: center;text-decoration: none;display: inline-block;font-size: 14px; margin: 4px 2px;transition-duration: 0.4s; cursor: pointer; border-radius: 4px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); transform-style: preserve-3d;  perspective: 1000px;  transform: translateZ(10px);">
                                                    View Photo
                                                </a>

                                            <?php } ?>

                                            <div class="title" style="margin-top: 20px;">Job Orientation </div>


                                            <div class="title" style="margin-top: 20px;font-size: 20px;">Job Orientation 1</div>
                                            <div class="user-details">
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting Url</span>
                                                        <input type="text" value="<?php echo $candidate[0]->job_training_one ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting Time</span>
                                                        <input type="text" value="<?php echo $candidate[0]->job_training_one_date_time ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting ID</span>
                                                        <input type="text" value="<?php echo $candidate[0]->job_training_one_meet_id ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting Password</span>
                                                        <input type="text" value="<?php echo $candidate[0]->job_training_one_meet_password ?>" disabled>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="title" style="margin-top: 20px;font-size: 20px;">Job Orientation 2</div>
                                            <div class="user-details">
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting Url</span>
                                                        <input type="text" value="<?php echo $candidate[0]->job_training_two ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting Time</span>
                                                        <input type="text" value="<?php echo $candidate[0]->job_training_two_date_time ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting ID</span>
                                                        <input type="text" value="<?php echo $candidate[0]->job_training_two_meet_id ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting Password</span>
                                                        <input type="text" value="<?php echo $candidate[0]->job_training_two_meet_password ?>" disabled>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="title" style="margin-top: 20px;font-size: 20px;">Job Orientation 3</div>
                                            <div class="user-details">
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting Url</span>
                                                        <input type="text" value="<?php echo $candidate[0]->job_training_three ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting Time</span>
                                                        <input type="text" value="<?php echo $candidate[0]->job_training_three_date_time ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting ID</span>
                                                        <input type="text" value="<?php echo $candidate[0]->job_training_three_meet_id ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting Password</span>
                                                        <input type="text" value="<?php echo $candidate[0]->job_training_three_password ?>" disabled>
                                                    </div>
                                                </div>
                                            </div>


                                            <br>
                                            <div class="title">Visa Training</div>


                                            <div class="user-details">
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting Url</span>
                                                        <input type="text" value="<?php echo $candidate[0]->visa_training ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting Time</span>
                                                        <input type="text" value="<?php echo $candidate[0]->visa_training_datetime ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting ID</span>
                                                        <input type="text" value="<?php echo $candidate[0]->visa_training_meet_id ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="input-box" style=" width: 100%;">
                                                        <span class="details">Meeting Password</span>
                                                        <input type="text" value="<?php echo $candidate[0]->visa_training_meet_password ?>" disabled>
                                                    </div>
                                                </div>
                                            </div>


                                        </form>
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
    <script>
        $(function() {
            var image1_bg_color = '#317a5c';
            var image2_bg_color = '#dedede';
            var image3_bg_color = '#ff0000';
            var image4_bg_color = '#000000';


        });
    </script>


    <!-- card animation start -->
    <script>
        // Get the container and the plans
        const container = document.querySelector('.containernew');
        const plans = document.querySelectorAll('.plan');

        // Function to clone and append plans to the container
        function appendClonedPlans() {
            plans.forEach(plan => {
                const clonedPlan = plan.cloneNode(true);
                container.appendChild(clonedPlan);
            });
        }

        // Set interval to append cloned plans every 10 seconds
        setInterval(appendClonedPlans, 10000); // 10000 milliseconds = 10 seconds
    </script>
    <!-- card animation end -->


    <!-- popup modal start  -->
    <!-- <div class="modal fade" id="global-modal" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">


                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="https://maclareenai.com/mtas/assets/images/job/test.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img src="https://maclareenai.com/mtas/assets/images/job/test.jpeg" alt="">
                            </div>
                        </div>

                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function() {
            var jq = document.createElement('script');
            jq.src = "https://code.jquery.com/jquery-3.6.0.min.js";
            document.getElementsByTagName('head')[0].appendChild(jq);

            jq.onload = function() {
                var bs = document.createElement('script');
                bs.src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js";
                document.getElementsByTagName('head')[0].appendChild(bs);

                bs.onload = function() {
                    $(document).ready(function() {
                        $('#global-modal').on('shown.bs.modal', function() {
                            var modalWidth = $('#myCarousel').find('.item.active img').width();
                            $('.modal-dialog').css('width', modalWidth + 'px');
                        });

                        $('#global-modal').modal('show');
                    });
                };
            };
        })();
    </script>; -->

    <!-- popup modal end -->

</body>



</html>