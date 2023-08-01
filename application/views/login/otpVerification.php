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
    .bgWhite {
        background: white;
        box-shadow: 0px 3px 6px 0px #cacaca;
    }

    .title {
        font-weight: 600;
        margin-top: 20px;
        font-size: 24px
    }

    .customBtn {
        border-radius: 0px;
        padding: 10px;
        background: rgb(46, 204, 113);
    }

    form input {
        display: inline-block;
        width: 50px;
        height: 50px;
        text-align: center;
        margin: 5px;
    }

    #resendOTP {
        color: red;
        display: none;
    }

    .resend-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #fffcfc00;
        /* You can change this to your desired button color */
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Style for when the link is hovered over */
    .resend-button:hover {
        background-color: #fffcfc00;
        /* You can change this to the hover color you prefer */
    }
</style>


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
            <div class="text-center">
                <img src="https://maclareenai.com/mtas/assets/images/bg/main_logo.png" alt="bg/main_logo.png" style="width: 300px;">
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-4 text-center">
                    <div class="row">
                        <div class="col-sm-12 mt-5 bgWhite">
                            <div class="title">
                                Verify OTP
                            </div>

                            <form action="<?php echo base_url(); ?>verifyOtp" method="post" class="mt-5">
                                <input class="otp" type="text" name="otp1" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=1 required style="
    width: 50px;
    height: 50px;
">
                                <input class="otp" type="text" name="otp2" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=1 required style="
    width: 50px;
    height: 50px;
">
                                <input class="otp" type="text" name="otp3" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=1 required style="
    width: 50px;
    height: 50px;
">
                                <input class="otp" type="text" name="otp4" oninput='digitValidate(this)' onkeyup='tabChange(4)' maxlength=1 required style="
    width: 50px;
    height: 50px;
">

                                <hr class="mt-4">
                                <button type="submit" id="getLocationBtn" class="btn btn-md btn-block waves-effect waves-light text-center m-b-20" style="background: #2ecc71;">Verify</button>
                                <input id="targetField" type="text" name="otpexpire" value="no" style="opacity: 0;margin: -20px;display: none;">
                                <hr class="mt-4">
                            </form>

                            <p id="timerText"> Resend OTP in <span id="countdowntimer">60</span> Seconds</p>
                            <p id="resendOTP" class="resend-button" style="display: none;">Resend OTP</p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of container-fluid -->
    </section>



    <!-- opt edittext script start -->

    <script>
        let digitValidate = function(ele) {
            console.log(ele.value);
            ele.value = ele.value.replace(/[^0-9]/g, '');
        }

        let tabChange = function(val) {
            let ele = document.querySelectorAll('input');
            if (ele[val - 1].value != '') {
                ele[val].focus()
            } else if (ele[val - 1].value == '') {
                ele[val - 2].focus()
            }
        }
    </script>
    <!-- opt edittext script end -->

    <!-- Timer strat -->

    <script>
        var timeleft = 60;
        var downloadTimer;

        function startTimer() {
            document.getElementById("countdowntimer").textContent = timeleft;
            downloadTimer = setInterval(function() {
                timeleft--;
                document.getElementById("countdowntimer").textContent = timeleft;

                if (timeleft <= 0) {
                    clearInterval(downloadTimer);
                    document.getElementById("timerText").style.display = "none";
                    document.getElementById("countdowntimer").style.display = "none";
                    document.getElementById("resendOTP").style.display = "block";
                    //  window.location.href = "<?php echo base_url(); ?>optscreen";
                    var otpValue = 'yes';

                    // Set the value into the target text field
                    document.getElementById("targetField").value = otpValue;
                }
            }, 1000);
        }

        startTimer();

        document.getElementById("resendOTP").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent the default link behavior
            timeleft = 10;
            // document.getElementById("timerText").style.display = "inline";
            // document.getElementById("countdowntimer").style.display = "inline";
            // document.getElementById("resendOTP").style.display = "none";
            // var otpValue = 'no';
            window.location.href = "<?php echo base_url(); ?>resendOtp";
            // Set the value into the target text field
            // document.getElementById("targetField").value = otpValue;
            // startTimer();
        });
    </script>
    <!-- Timer end -->

    <!-- hide time start -->

    <script>
        const error = "<?php echo $error ? 'true' : 'false'; ?>";
        if (error === "true") {
            // If there is an error, hide the form elements and show the error message
            document.getElementById("timerText").style.display = "none";
            document.getElementById("countdowntimer").style.display = "none";
            document.getElementById("resendOTP").style.display = "block";
        }
    </script>
    <!-- hide time end -->

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
</body>

</html>