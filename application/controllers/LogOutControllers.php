<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class LogOutControllers extends BaseController
{


    public function index()
    {
        $this->load->model('Admin_model');
        $email = $this->session->userdata('user_email');
        $role = $this->session->userdata('role');
        date_default_timezone_set('Asia/Kolkata');
        $currentDateTime = date('Y-m-d H:i:s');
        $data = [
            'logout_time'    => $currentDateTime,
        ];

        if ($details = $this->Admin_model->UpdateUsingEmailId($email, $data)) {
            $user_email = $details[0]['user_name'];
            $latitude = $details[0]['latitude'];
            $longitude = $details[0]['longitude'];
            $login_time = $details[0]['login_time'];
            $dateObj = new DateTime($currentDateTime);

            // Format the DateTime object into a human-readable format
            $humanReadableFormatlogOut = $dateObj->format('F j, Y, g:i A');

            $dateObj1 = new DateTime($login_time);

            // Format the DateTime object into a human-readable format
            $humanReadableFormat = $dateObj1->format('F j, Y, g:i A');
            $timeDifference = $dateObj1->diff($dateObj);

            // Format the time difference into a human-readable format
            $intervalFormatted = $timeDifference->format('%d days, %h hours, %i minutes');


            // Output the human-readable format
            if ($role == "admin") {
                $url = "https://www.google.com/maps?q={$latitude},{$longitude}";
                $subject = "Log out Notification - MTAS(Maclareen Talent Acquisition System)";
                $OtpMail = '<!DOCTYPE html>
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
                        background-color: #868181;
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
                    <h1>Log Out Notification </h1>
                    <p>Hello Super Admin,</p>
                    <p>This is to inform you that the employee <strong>' . $user_email . '</strong> has recently loged out .Following are login out details  </p>
                    <div class="notification"><p>Log In Time : ' . $humanReadableFormat . '</p> 
                             <p>Log Out Time : ' . $humanReadableFormatlogOut . '</p> 
                                 <p>Activity Time : ' . $intervalFormatted . '</p> 
                    </div>
                    <p>This is an automated email. Please do not reply</p>
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
                $this->email->to($email);
                $this->email->subject($subject);
                $this->email->message($OtpMail);
                $this->email->set_header('Reply-To', 'immigration@maclareen.com');
                $this->email->set_mailtype("html");
                $sendemail = $this->email->send();
                if ($sendemail) {
                    $this->session->sess_destroy();
                    redirect('LoginControllers');
                }
            }else{
                $this->session->sess_destroy();
                redirect('LoginControllers');
            }
        }
    }
}
