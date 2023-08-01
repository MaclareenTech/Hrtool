<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class ProfileControllers extends BaseController
{


    public function index()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $id =  $this->session->userdata('userId');
            $this->load->model('Admin_model');
            $this->global['emp'] = $this->Admin_model->viewAdmin($id, '', '', '', '');
            $this->global['pageTitle'] = 'MTAS : Profile';
            $this->loadViews("profile/profileinformation", $this->global);
        }
    }
    public function ChangePasswordForm()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {

            $this->global['pageTitle'] = 'MTAS : Change Password';
            $this->loadViews("profile/changePassword", $this->global);
        }
    }
    public function ChangePassword()
    {
        $this->load->library('form_validation');
        $this->load->model('Admin_model');
        $this->form_validation->set_rules('old_password', 'Password', 'required|max_length[32]');
        $this->form_validation->set_rules('new_password', 'Password', 'required|max_length[32]');
        $this->form_validation->set_rules('confirm_password', 'Password', 'required|max_length[32]');



        if ($this->form_validation->run() == FALSE) {
            $this->ChangePasswordForm();
        } else {
            $id =  $this->session->userdata('userId');
            $mail =  $this->session->userdata('user_email');
            $name =  $this->session->userdata('name');
            $old_password = $this->input->post('old_password');
            $new_password = $this->input->post('new_password');
            $confirm_password = $this->input->post('confirm_password');
            $OldhashedPassword = md5($old_password);
            $NewhashedPassword = md5($new_password);

            if ($new_password == $confirm_password) {
                $result = $this->Admin_model->Login($mail, $OldhashedPassword);

                if (!empty($result)) {
                    $data = [
                        'user_password'    => $NewhashedPassword,
                    ];
                    $updatepassword = $this->Admin_model->Update($id, $data);
                    if ($updatepassword) {
                        $subject = "Login Password Change - MTAS(Maclareen Talent Acquisition System)";
                        $PasswordChangeMAil = '<!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Password Changed Notification</title>
                            <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    line-height: 1.6;
                                    background-color: #f7f7f7;
                                    margin: 0;
                                    padding: 0;
                                }
                                .container {
                                    max-width: 600px;
                                    margin: 20px auto;
                                    background-color: #ffffff;
                                    padding: 20px;
                                    border-radius: 5px;
                                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                                }
                                h1 {
                                    color: #444;
                                    text-align: center;
                                }
                                p {
                                    margin-bottom: 20px;
                                }
                                .notification {
                                    background-color: #ff0000;
                                    color: #ffffff;
                                    text-align: center;
                                    padding: 10px;
                                    border-radius: 5px;
                                }
                                .footer {
                                    margin-top: 30px;
                                    text-align: center;
                                    color: #888;
                                }
                            </style>
                        </head>
                        <body>
                            <div class="container">
                                <h1>Password Changed Notification</h1>
                                <p>Hello Super Admin,</p>
                                <p>This is to inform you that the employee <strong>' . $name . '</strong> has recently changed their password.Following is new Password </p>
                                <div class="notification">' . $new_password . '</div>
                                <p>If this change was authorized, you may disregard this notification.</p>
                                <p>Thank you,</p>
                        
                            </div>
                            <div class="footer">
                                This email was sent by MTAS(Maclareen Talent Acquisition System ).
                            </div>
                        </body>
                        </html>
                        
                        ';
                        $this->load->config('email');
                        $this->load->library('email');

                        //	$token = $email_exist->emp_id;

                        $this->email->from('MTAS(Maclareen Talent Acquisition System)', 'Maclareen Talent Acquisition System ');
                        $this->email->to('vaibhavi.more@maclareen.com');
                        $this->email->subject($subject);
                        $this->email->message($PasswordChangeMAil);
                        $this->email->set_header('Reply-To', 'immigration@maclareen.com');
                        $this->email->set_mailtype("html");
                        $sendemail = $this->email->send();

                        if ($sendemail) {
                            $this->session->sess_destroy();
                            redirect('LoginControllers');
                        }
                    } else {
                        $this->session->set_flashdata('error', 'Try again');
                        redirect('changePasswordForm');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Old password not match ');
                    redirect('changePasswordForm');
                }
            } else {
                $this->session->set_flashdata('error', 'New Password and Comfirm Password not match ');
                redirect('changePasswordForm');
            }









            $result = $this->Admin_model->Login($email, $hashedPassword);

            if (!empty($result)) {
                $res = $result[0];
                $sessionArray = array(
                    'userId' => $res->user_id,
                    'user_profile' => $res->user_profile,
                    'user_email' => $res->user_email,
                    'name' => $res->user_name
                );


                if ($res->user_role == "0") {

                    $sessionArray['role'] = 'candidate';
                    $sessionArray['isLoggedIn'] = TRUE;
                    $sessionArray['userId'] = $res->table_id;
                    $this->session->set_userdata($sessionArray);
                    redirect('candidateDashboard');
                } else if ($res->user_role == "1") {


                    // Define the allowed distance (500 meters in this example)
                    $allowed_distance_meters = 500;
                    if ($distance <= $allowed_distance_meters) {
                        $sessionArray['role'] = 'admin';
                        $sessionArray['userId'] = $res->user_id;
                        $this->session->set_userdata($sessionArray);
                        // Generate OTP
                        $otp = $this->generate_otp();
                        $subject = "Login Verification - MTAS(Maclareen Talent Acquisition System)";
                        $OtpMail = '<!DOCTYPE html>
                        <html lang="en">
                        <head>
                        
                            <title>Login Verification</title>
                            <style>
                                body {
                                    font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;
                                    line-height: 1.6;
                                    background-color: #f2f2f2;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .container {
                                    max-width: 600px;
                                    margin: 0 auto;
                                    padding: 20px;
                                    background-color: #ffffff;
                                    border-radius: 10px;
                                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                                    position: absolute;
                                    top: 50%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);
                                    display: flex;
                                    flex-direction: column;
                                    align-items: center;
                                }
                        
                                .logo {
                                    text-align: center;
                                    margin-bottom: 20px;
                                }
                        
                                .logo img {
                                    max-width: 150px;
                                }
                        
                                .content {
                                    margin-top: 30px;
                                    text-align: center;
                                }
                        
                                .button {
                                    display: inline-block;
                                    padding: 12px 24px;
                                    background-color: #dc3545; /* Red background color */
                                    background-image: linear-gradient(45deg, #dc3545, #b3001f); /* Red gradient */
                                   
                                    color: #ffffff;
                                    text-decoration: none;
                                    border-radius: 5px;
                                    font-weight: bold;
                                    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
                                    transition: transform 0.2s ease-in-out;
                                }
                        
                                .button:hover {
                                    transform: scale(1.05);
                                }
                        
                                .footer {
                                    margin-top: 30px;
                                    text-align: center;
                                    color: #888888;
                                }
                            </style>
                        </head>
                        <body>
                            <div class="container">
                                
                                <div class="content">
                                    <h2>Hello ' . $res->user_name . ',</h2>
                                    <p>
                                        Thank you for Login . Enter below OTP for login in MTAS(Maclareen Talent Acquisition System ) :
                                    </p>
                                    <p>
                                        <a href="" class="button"> ' . $otp . '</a>
                                    </p>
                                    <p>
                                        If you did not by you contact your Admin Now .
                                    </p>
                                </div>
                                <div class="footer">
                                    © 2023 mtas.net.in. All rights reserved.
                                </div>
                            </div>
                        </body>
                        </html>
                        ';
                        $this->load->config('email');
                        $this->load->library('email');

                        //	$token = $email_exist->emp_id;

                        $this->email->from('MTAS(Maclareen Talent Acquisition System)', 'Maclareen Talent Acquisition System ');
                        $this->email->to($email);
                        $this->email->subject($subject);
                        $this->email->message($OtpMail);
                        $this->email->set_header('Reply-To', 'immigration@maclareen.com');
                        $this->email->set_mailtype("html");
                        $sendemail = $this->email->send();

                        $data = [
                            'login_otp'    => $otp,
                        ];
                        $OtpSend = $this->Admin_model->UpdateUsingEmailId($email, $data);

                        if ($sendemail && $OtpSend) {
                            redirect('optscreen');
                        } else {
                            $this->session->set_flashdata('error', 'Please Try Again ');
                            redirect('LoginControllers');
                        }
                        //  redirect('adminDashboard');
                    } else {
                        $this->session->set_flashdata('error', 'You Are not in office');
                        redirect('LoginControllers');
                    }
                } else {
                    $sessionArray['isLoggedIn'] = TRUE;
                    $sessionArray['role'] = 'superadmin';
                    $sessionArray['userId'] = $res->user_id;
                    $this->session->set_userdata($sessionArray);
                    redirect('superadminDashboard');
                }
            } else {
                $this->session->set_flashdata('error', 'Email or password mismatch');
                redirect('LoginControllers');
            }
        }
    }









    public function OtpScreen()
    {

        $role = $this->session->userdata('role');
        if ($role == "candidate") {
            redirect('candidateDashboard');
        } else   if ($role == "admin") {
            $this->global['pageTitle'] = 'MTAS : OTP verification';
            $this->loadViews("login/otpVerification", $this->global);
        } else {
            redirect('superadminDashboard');
        }
    }
    public function ResendOtp()
    {
        $email = $this->session->userdata('user_email');
        $name = $this->session->userdata('name');
        $this->load->model('Admin_model');
        $otp = $this->generate_otp();

        $data = [
            'login_otp'    => $otp,
        ];
        $subject = "Login Verification - MTAS(Maclareen Talent Acquisition System)";
        $OtpMail = '<!DOCTYPE html>
        <html lang="en">
        <head>
        
            <title>Login Verification</title>
            <style>
                body {
                    font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;
                    line-height: 1.6;
                    background-color: #f2f2f2;
                    margin: 0;
                    padding: 0;
                }
        
                .container {
                    max-width: 600px;
                    margin: 0 auto;
                    padding: 20px;
                    background-color: #ffffff;
                    border-radius: 10px;
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }
        
                .logo {
                    text-align: center;
                    margin-bottom: 20px;
                }
        
                .logo img {
                    max-width: 150px;
                }
        
                .content {
                    margin-top: 30px;
                    text-align: center;
                }
        
                .button {
                    display: inline-block;
                    padding: 12px 24px;
                    background-color: #dc3545; /* Red background color */
                    background-image: linear-gradient(45deg, #dc3545, #b3001f); /* Red gradient */
                   
                    color: #ffffff;
                    text-decoration: none;
                    border-radius: 5px;
                    font-weight: bold;
                    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
                    transition: transform 0.2s ease-in-out;
                }
        
                .button:hover {
                    transform: scale(1.05);
                }
        
                .footer {
                    margin-top: 30px;
                    text-align: center;
                    color: #888888;
                }
            </style>
        </head>
        <body>
            <div class="container">
                
                <div class="content">
                    <h2>Hello ' . $name . ',</h2>
                    <p>
                        Thank you for Login . Enter below OTP for login in MTAS(Maclareen Talent Acquisition System ) :
                    </p>
                    <p>
                        <a href="" class="button"> ' . $otp . '</a>
                    </p>
                    <p>
                        If you did not by you contact your Admin Now .
                    </p>
                </div>
                <div class="footer">
                    © 2023 mtas.net.in. All rights reserved.
                </div>
            </div>
        </body>
        </html>
        ';
        $this->load->config('email');
        $this->load->library('email');

        //	$token = $email_exist->emp_id;

        $this->email->from('MTAS(Maclareen Talent Acquisition System)', 'Maclareen Talent Acquisition System ');
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($OtpMail);
        $this->email->set_header('Reply-To', 'immigration@maclareen.com');
        $this->email->set_mailtype("html");
        $sendemail = $this->email->send();
        $UpdateData =  $this->Admin_model->UpdateUsingEmailId($email, $data);

        if ($UpdateData && $sendemail) {
            redirect('optscreen');
        } else {
            $this->session->set_flashdata('error', 'Please Try Again ');
            redirect('optscreen');
        }
    }

    public function VerifyOtp()
    {
        $email = $this->session->userdata('user_email');
        $otp1 = $this->input->post('otp1');
        $otp2 = $this->input->post('otp2');
        $otp3 = $this->input->post('otp3');
        $otp4 = $this->input->post('otp4');
        $otpexpire = $this->input->post('otpexpire');
        $this->load->model('Admin_model');
        $otp = $otp1 . $otp2 . $otp3 . $otp4;
        //echo $otpexpire;


        if ($this->Admin_model->VerifyOTP($email, $otp)) {
            if ($otpexpire == "yes") {
                $this->session->set_flashdata('error', 'Otp expire kidnly request for new otp');
                redirect('optscreen');
            } else {
                date_default_timezone_set('Asia/Kolkata');
                $currentDateTime = date('Y-m-d H:i:s');
                $data = [
                    'login_time'    => $currentDateTime,
                ];

                if ($this->Admin_model->UpdateUsingEmailId($email, $data)) {
                    $sessionArray['isLoggedIn'] = TRUE;
                    $this->session->set_userdata($sessionArray);
                    redirect('adminDashboard');
                } else {
                    $this->session->set_flashdata('error', 'Please Try Again ');
                    redirect('optscreen');
                }
            }
            // redirect('optscreen');
        } else {
            $this->session->set_flashdata('error', 'Please Try Again ');
            redirect('optscreen');
        }
    }




    public function loginMe()
    {
        $submitted_latitude = $this->input->post('submitted_latitude');
        $submitted_longitude = $this->input->post('submitted_longitude');
        $this->load->library('form_validation');
        $this->load->model('Admin_model');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[32]');

        $allowed_latitude = 19.199007771571367; // office latitude
        $allowed_longitude = 72.94851828726368; // office longitude

        // $allowed_latitude = 19.210872627836014; // dombivali latitude
        // $allowed_longitude = 73.0940885985540; // dombivali longitude
        $distance = $this->calculateHaversineDistance($submitted_latitude, $submitted_longitude, $allowed_latitude, $allowed_longitude);

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $hashedPassword = md5($password);
            $result = $this->Admin_model->Login($email, $hashedPassword);

            if (!empty($result)) {
                $res = $result[0];
                $sessionArray = array(
                    'userId' => $res->user_id,
                    'user_profile' => $res->user_profile,
                    'user_email' => $res->user_email,
                    'name' => $res->user_name
                );


                if ($res->user_role == "0") {

                    $sessionArray['role'] = 'candidate';
                    $sessionArray['isLoggedIn'] = TRUE;
                    $sessionArray['userId'] = $res->table_id;
                    $this->session->set_userdata($sessionArray);
                    redirect('candidateDashboard');
                } else if ($res->user_role == "1") {


                    // Define the allowed distance (500 meters in this example)
                    $allowed_distance_meters = 500;
                    if ($distance <= $allowed_distance_meters) {
                        $sessionArray['role'] = 'admin';
                        $sessionArray['userId'] = $res->user_id;
                        $this->session->set_userdata($sessionArray);
                        // Generate OTP
                        $otp = $this->generate_otp();
                        $subject = "Login Verification - MTAS(Maclareen Talent Acquisition System)";
                        $OtpMail = '<!DOCTYPE html>
                        <html lang="en">
                        <head>
                        
                            <title>Login Verification</title>
                            <style>
                                body {
                                    font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;
                                    line-height: 1.6;
                                    background-color: #f2f2f2;
                                    margin: 0;
                                    padding: 0;
                                }
                        
                                .container {
                                    max-width: 600px;
                                    margin: 0 auto;
                                    padding: 20px;
                                    background-color: #ffffff;
                                    border-radius: 10px;
                                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                                    position: absolute;
                                    top: 50%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);
                                    display: flex;
                                    flex-direction: column;
                                    align-items: center;
                                }
                        
                                .logo {
                                    text-align: center;
                                    margin-bottom: 20px;
                                }
                        
                                .logo img {
                                    max-width: 150px;
                                }
                        
                                .content {
                                    margin-top: 30px;
                                    text-align: center;
                                }
                        
                                .button {
                                    display: inline-block;
                                    padding: 12px 24px;
                                    background-color: #dc3545; /* Red background color */
                                    background-image: linear-gradient(45deg, #dc3545, #b3001f); /* Red gradient */
                                   
                                    color: #ffffff;
                                    text-decoration: none;
                                    border-radius: 5px;
                                    font-weight: bold;
                                    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
                                    transition: transform 0.2s ease-in-out;
                                }
                        
                                .button:hover {
                                    transform: scale(1.05);
                                }
                        
                                .footer {
                                    margin-top: 30px;
                                    text-align: center;
                                    color: #888888;
                                }
                            </style>
                        </head>
                        <body>
                            <div class="container">
                                
                                <div class="content">
                                    <h2>Hello ' . $res->user_name . ',</h2>
                                    <p>
                                        Thank you for Login . Enter below OTP for login in MTAS(Maclareen Talent Acquisition System ) :
                                    </p>
                                    <p>
                                        <a href="" class="button"> ' . $otp . '</a>
                                    </p>
                                    <p>
                                        If you did not by you contact your Admin Now .
                                    </p>
                                </div>
                                <div class="footer">
                                    © 2023 mtas.net.in. All rights reserved.
                                </div>
                            </div>
                        </body>
                        </html>
                        ';
                        $this->load->config('email');
                        $this->load->library('email');

                        //	$token = $email_exist->emp_id;

                        $this->email->from('MTAS(Maclareen Talent Acquisition System)', 'Maclareen Talent Acquisition System ');
                        $this->email->to($email);
                        $this->email->subject($subject);
                        $this->email->message($OtpMail);
                        $this->email->set_header('Reply-To', 'immigration@maclareen.com');
                        $this->email->set_mailtype("html");
                        $sendemail = $this->email->send();

                        $data = [
                            'login_otp'    => $otp,
                        ];
                        $OtpSend = $this->Admin_model->UpdateUsingEmailId($email, $data);

                        if ($sendemail && $OtpSend) {
                            redirect('optscreen');
                        } else {
                            $this->session->set_flashdata('error', 'Please Try Again ');
                            redirect('LoginControllers');
                        }
                        //  redirect('adminDashboard');
                    } else {
                        $this->session->set_flashdata('error', 'You Are not in office');
                        redirect('LoginControllers');
                    }
                } else {
                    $sessionArray['isLoggedIn'] = TRUE;
                    $sessionArray['role'] = 'superadmin';
                    $sessionArray['userId'] = $res->user_id;
                    $this->session->set_userdata($sessionArray);
                    redirect('superadminDashboard');
                }
            } else {
                $this->session->set_flashdata('error', 'Email or password mismatch');
                redirect('LoginControllers');
            }
        }
    }

    // Function to calculate the Haversine distance between two geographical coordinates
    private function calculateHaversineDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earth_radius = 6371000; // Earth's radius in meters

        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);

        $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon / 2) * sin($dLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $distance = $earth_radius * $c;

        return $distance;
    }


    public function generate_otp()
    {
        $OTP     =    rand(1, 9);
        $OTP     .=    rand(0, 9);
        $OTP     .=    rand(0, 9);
        $OTP     .=    rand(0, 9);
        return $OTP;
    }
}
