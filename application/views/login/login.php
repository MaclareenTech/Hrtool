<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $pageTitle ?></title>
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
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<style>
    /* loader start */
    .loader {
        /* width: 100%;
        margin-top: 50px;*/
        display: none; 
        width: 100%;
align-items: center;
  height: 15px;
  text-align: center;

    }

    .dot {
        position: relative;
        width: 15px;
        height: 15px;
        margin: 0 2px;
        display: inline-block;
    }

    .dot:first-child:before {
        animation-delay: 0ms;
    }

    .dot:first-child:after {
        animation-delay: 0ms;
    }

    .dot:last-child:before {
        animation-delay: 200ms;
    }

    .dot:last-child:after {
        animation-delay: 200ms;
    }

    .dot:before {
        content: "";
        position: absolute;
        left: 0;
        width: 15px;
        height: 15px;
        background-color: blue;
        animation-name: dotHover;
        animation-duration: 900ms;
        animation-timing-function: cubic-bezier(.82, 0, .26, 1);
        animation-iteration-count: infinite;
        animation-delay: 100ms;
        background: linear-gradient(45deg, rgba(208, 8, 8, 1) 0%, rgba(255, 0, 0, 1) 100%);
        box-shadow: 0px 0px 8px rgba(208, 8, 8, 0.8);

        border-radius: 100%;
    }

    .dot:after {
        content: "";
        position: absolute;
        z-index: -1;
        background: black;
        box-shadow: 0px 0px 1px black;
        opacity: .20;
        width: 100%;
        height: 3px;
        left: 0;
        bottom: -2px;
        border-radius: 100%;
        animation-name: dotShadow;
        animation-duration: 900ms;
        animation-timing-function: cubic-bezier(.82, 0, .26, 1);
        animation-iteration-count: infinite;
        animation-delay: 100ms;
    }

    @keyframes dotShadow {
        0% {
            transform: scaleX(1);
        }

        50% {
            opacity: 0;
            transform: scaleX(.6);
        }

        100% {
            transform: scaleX(1);
        }
    }

    @keyframes dotHover {
        0% {
            top: 0px;
        }

        50% {
            top: -50px;
            transform: scale(1.1);
        }

        100% {
            top: 0;
        }
    }

    /* loader end  */
</style>
    <script>
        // Function to disable form submission on Enter key press
        function disableEnterKeySubmit(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                return false;
            }
        }
    </script>

<body themebg-pattern="theme1">
    <?php $this->load->helper('form'); ?>
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

    <section class="login-block">
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
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->

                    <form class="md-float-material form-material" action="<?php echo base_url(); ?>loginMe" method="post">
                        <div class="text-center">
                            <img src="https://maclareenai.com/mtas/assets/images/bg/mtas_logo_167_33.png" alt="bg/mtas_logo_167_33.png" style="width: 300px;">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Sign In</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="email" name="email" class="form-control" >
                                    <span class="form-bar"></span>
                                    <label class="float-label">Your Email Address</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" >
                                    <span class="form-bar"></span>
                                    <label class="float-label">Password</label>
                                </div>


                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" id="getLocationBtn" class="btn btn-md btn-block waves-effect waves-light text-center m-b-20" style="background: #2ecc71; display: none;">Sign in</button>
                                    </div>
                                </div>
                                <hr />

                            </div>
                        </div>
                        <input type="text" name="submitted_longitude" id="submitted_longitude" class="form-control" style="opacity: 0;">
                        <input type="text" name="submitted_latitude" id="submitted_latitude" class="form-control" style="opacity: 0;">

                    </form>
                    <div class="loader">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>

                    </div>
                    <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>




    <!-- location get start  -->
    <script>
        // Function to show the popup asking the user to enable location
        function showLocationPopup() {
            var popup = confirm("To use this feature, please enable location access in your browser settings.");
            if (popup) {
                // Redirect the user to the browser settings page to enable location
                window.location.href = "chrome://settings/content/location";
            }
        }

        // Function to get the user's location
        function getUserLocation() {
            if ("geolocation" in navigator) {
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        var latitude = position.coords.latitude;
                        var longitude = position.coords.longitude;

                        // Set the values of the input fields with the retrieved latitude and longitude
                        document.getElementById('submitted_latitude').value = latitude;
                        document.getElementById('submitted_longitude').value = longitude;

                        // document.getElementById('submitted_latitude').value = longitude;  
                        // document.getElementById('submitted_longitude').value = latitude;


                        // Show the button after successfully obtaining the user's location
                        document.getElementById('getLocationBtn').style.display = "block";
                    },
                    function(error) {
                        // Handle error if geolocation is not available or user denied permission
                        console.error('Error getting user location:', error.message);

                        // If user denied or blocked location access, show the popup
                        if (error.code === error.PERMISSION_DENIED || error.code === error.POSITION_UNAVAILABLE) {
                            showLocationPopup();
                        }
                    }
                );
            } else {
                console.error('Geolocation is not available in this browser.');
                // If geolocation is not available, show the popup
                showLocationPopup();
            }
        }

        function showLocationPopup() {
            // Implement your logic to show the location popup here
            console.log("Location popup is shown.");
        }




        // Call the function to get the user's location



        // Call the function when the page is fully loaded
        window.onload = function() {
            getUserLocation();
        };
    </script>
    <!-- location get end  -->

    <!-- Required Jquery -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="<?php echo base_url(); ?>assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common-pages.js"></script>

        <!-- Your JavaScript code to handle the button click and show the loader  start-->
  <script>
        document.getElementById("getLocationBtn").addEventListener("click", function() {
            // Show the loader on button click
            var loader = document.querySelector(".loader");
            loader.style.display = "block";
            
        });
    </script>
      <!-- Your JavaScript code to handle the button click and show the loader  end-->
</body>

</html>