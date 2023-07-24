<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class AddCandidateControllers extends BaseController
{


  public function index()
  {
    $isLoggedIn = $this->session->userdata('isLoggedIn');

    if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

      $this->global['pageTitle'] = 'MTAS : Login';
      $this->loadViews("login/login", $this->global);
    } else {

      $this->global['pageTitle'] = 'MTAS : Add candidate';

      $this->loadViews("admin/addcandidate", $this->global);
    }
  }



  public function viewCandidateInformation($id)
  {
    //echo $id;
    // $this->load->library('encryption');

    //  // Decrypt the number
    //  $decrypted_id = $this->encryption->decrypt($id);


     $decrypted_id = $id;
    // echo $decrypted_id;
    $this->load->model('Candidate_model');
    $this->load->model('Admin_model');
    $this->global['candidate'] = $this->Candidate_model->ViewCandidateInfo($decrypted_id);
    $this->global['log'] = $this->Admin_model->ViewCandidateInfoLog($decrypted_id);
    $this->global['pendingCandidate'] = $this->Candidate_model->viewCandidate_count('', '');
    $this->global['CompletedCandidate'] = $this->Candidate_model->viewCandidate_count('', '11');
    $this->global['pageTitle'] = 'MTAS : Candidate Information';
    $this->global['candidateId'] = $decrypted_id;
    $this->loadViews("admin/candidateInofrmation", $this->global);
  }



  public function ViewCandiateDocument($id, $documentType)
  {
    // echo $id;
    // echo $documentType;
    $this->load->model('Candidate_model');
    $candidate = $this->Candidate_model->ViewCandidateInfo($id);
    $Document = '';
    $cognate3Url = '';
    if ($documentType == '0') {
      $Document = $candidate[0]->candidate_aadhar_card;
      $cognate3Url = "http://mtas.net.in/upload/aadhar/" . $Document;
      return Redirect($cognate3Url);
    } else if ($documentType == '1') {
      $Document = $candidate[0]->candidate_pan_card;
      $cognate3Url = "http://mtas.net.in/upload/pan/" . $Document;
      return Redirect($cognate3Url);
    } else if ($documentType == '2') {
      $Document = $candidate[0]->candidate_resume;
      $cognate3Url = "http://mtas.net.in/upload/resume/" . $Document;
      return Redirect($cognate3Url);
    } else if ($documentType == '3') {
      $Document = $candidate[0]->candidate_passport;
      $cognate3Url = "http://mtas.net.in/upload/passport/" . $Document;
      return Redirect($cognate3Url);
    } else if ($documentType == '4') {
      $Document = $candidate[0]->candidate_photo;
      $cognate3Url = "http://mtas.net.in/upload/image/" . $Document;
      return Redirect($cognate3Url);
    }
  }



  public function RegisterCandidate()
  {
    // Load necessary helpers and libraries
    $this->load->helper('form');
    $this->load->library('form_validation');

    // Validate form fields
    $this->form_validation->set_rules('candidate_name', 'Candidate Name', 'required');
    $this->form_validation->set_rules('candidate_email', 'Candidate Email', 'required|valid_email');
    $this->form_validation->set_rules('candidate_mobile_no', 'Candidate Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
    $this->form_validation->set_rules('candidate_job_profile', 'Job Profile', 'required');
    $this->form_validation->set_rules('candidate_password', 'Job Profile', 'required');

    // Check if form validation passes
    // if ($this->form_validation->run() == FALSE) {
    //     // If validation fails, reload the form view with error messages
    //     $this->load->view('registration_form');
    // } else {
    // Get the form input values
    $candidate_name = $this->input->post('candidate_name');
    $candidate_email = $this->input->post('candidate_email');
    $candidate_mobile_no = $this->input->post('candidate_mobile_no');
    $candidate_job_profile = $this->input->post('candidate_job_profile');
    $candidate_password = $this->input->post('candidate_password');
    $hashedPassword = md5($candidate_password);

    // Upload files
    $config['upload_path'] = './upload/';
    $config['allowed_types'] = 'pdf|gif|jpg|jpeg|png';
    $this->load->library('upload', $config);

    $uploaded_files = array();
    $upload_errors = false;


    $this->load->model('Candidate_model');
    $this->load->model('Admin_model');
    $Admin_id = $this->session->userdata('userId');
    date_default_timezone_set("Asia/Kolkata");
    $today = date("Y-m-d H:i:s");
    if (isset($_POST["toggle_switch"])) {
      $is_paid = "1";
    } else {
      $is_paid = "0";
    }
    $data = array(
      'candidate_name' => $candidate_name,
      'candidate_email' => $candidate_email,
      'candidate_mobile_no' => $candidate_mobile_no,
      'candidate_job_profile' => $candidate_job_profile,
      'updated_by' => $Admin_id,
      'candidate_satus_days' => $today,
      'is_paid' => $is_paid,
      'candidate_password' => $hashedPassword
    );



    // // If any file upload encountered errors, display an error message
    // if ($upload_errors) {
    //     $data['error_message'] = $this->upload->display_errors();
    //     // $this->load->view('registration_form', $data);
    //     echo $this->upload->display_errors();
    //     return;
    // }

    // Save the form data and uploaded file paths to the database



    $is_new = $this->Admin_model->CheckAvailable($candidate_email);
    if (!$is_new) {
      // Upload Aadhar Card
      if ($this->upload->do_upload('candidate_aadhar_card')) {
        $file_name = $candidate_email . '_aadhar.pdf';
        $uploaded_files['aadhar_card'] = $file_name;
        rename($this->upload->data('full_path'), './upload/aadhar/' . $file_name);
        $data['candidate_aadhar_card'] = $uploaded_files['aadhar_card'];
      } else {
        // $upload_errors = true;
      }

      // Upload Pan Card
      if ($this->upload->do_upload('candidate_pan_card')) {
        $file_name = $candidate_email . '_pan.pdf';
        $uploaded_files['pan_card'] = $file_name;
        rename($this->upload->data('full_path'), './upload/pan/' . $file_name);
        $data['candidate_pan_card'] = $uploaded_files['pan_card'];
      } else {
        //  $upload_errors = true;
      }

      // Upload Passport
      if ($this->upload->do_upload('candidate_passport')) {
        $file_name = $candidate_email . '_passport.pdf';
        $uploaded_files['passport'] = $file_name;
        rename($this->upload->data('full_path'), './upload/passport/' . $file_name);
        $data['candidate_passport'] = $uploaded_files['passport'];
      } else {
        // $upload_errors = true;
      }

      // Upload Candidate Resume
      if ($this->upload->do_upload('candidate_resume')) {
        $file_name = $candidate_email . '_resume.pdf';
        $uploaded_files['resume'] = $file_name;
        rename($this->upload->data('full_path'), './upload/resume/' . $file_name);
        $data['candidate_resume'] = $uploaded_files['resume'];
      } else {
        //   $upload_errors = true;
      }

      // Upload Candidate image
      if ($this->upload->do_upload('candidate_photo')) {
        $file_name = $candidate_email . '_img.pnd';
        $uploaded_files['image'] = $file_name;
        rename($this->upload->data('full_path'), './upload/image/' . $file_name);
        $data['candidate_photo'] = $uploaded_files['image'];
        $candidate_photo = $uploaded_files['image'];
      } else {
        //   $upload_errors = true;
      }
      $candidate_id = $this->Candidate_model->InsertNew_Candidate($data);


      if ($candidate_id) {


        $loginCreate = array(
          'user_name' => $candidate_name,
          'user_email' => $candidate_email,
          'user_mobile' => $candidate_mobile_no,
          'user_role' => '0',
          'table_id' => $candidate_id,
          'user_password' => $hashedPassword
        );
        $Logdata = array(
          'candidate_id' => $candidate_id,
          'admin_id' => $Admin_id,
          'status' => '0'
        );
        $adminName = $this->session->userdata('name');
        $adminMail = $this->session->userdata('user_email');
        $test = $this->Admin_model->InsertLog($Logdata);
        $user_id = $this->Admin_model->InsertNew_User($loginCreate);

        $registerMessage = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                <title> Welcome Email</title>
                <!-- Designed by https://github.com/kaytcat -->
                <!-- Robot header image designed by Freepik.com -->
                <style type="text/css">
                          @import url(https://fonts.googleapis.com/css?family=Nunito);
                        
                          /* Take care of image borders and formatting */
                        
                        
                          html{
                            margin: 0;
                            padding:0;
                          }
                        
                          a {
                            text-decoration: none;
                            border: 0;
                            outline: none;
                            color: #bbbbbb;
                          }
                        
                          a img {
                            border: none;
                          }
                        
                          /* General styling */
                        
                          td, h1, h2, h3  {
                            font-family: Helvetica, Arial, sans-serif;
                            font-weight: 400;
                          }
                        
                          td {
                            text-align: center;
                          }
                        
                          body {
                            -webkit-font-smoothing:antialiased;
                            -webkit-text-size-adjust:none;
                            width: 100%;
                            height: 100%;
                            color: #666;
                            background: #fff;
                            font-size: 16px;
                            height: 100vh;
                            width: 100%;
                            padding: 0px;
                            margin: 0px;
                          }
                        
                           table {
                            border-collapse: collapse !important;
                          }
                        
                          .headline {
                            color: #444;
                            font-size: 36px;
                          }
                        
                         .force-full-width {
                          width: 100% !important;
                         }
                </style>
                <style media="screen" type="text/css">
                              @media screen {
                                td, h1, h2, h3 {
                                  font-family: Nunito, Helvetica Neue, Arial, sans-serif !important;
                                }
                              }
                </style>
                <style media="only screen and (max-width: 480px)" type="text/css">
                            /* Mobile styles */
                            @media only screen and (max-width: 480px) {
                        
                              table[class="w320"] {
                                width: 320px !important;
                              }
                            }
                </style>
                <style type="text/css"></style>
            </head>
            <body bgcolor="#fff" class="body" style="padding:20px; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none">
                <table
                    align="center"
                    cellpadding="0"
                    cellspacing="0"
                    height="100%"
                    width="100%"
                >
                    <tbody>
                        <tr>
                            <td
                                align="center"
                                bgcolor="#fff"
                                class=""
                                valign="top"
                                width="100%"
                            >
                                <center class="">
                                    <table
                                        cellpadding="0"
                                        cellspacing="0"
                                        class="w320"
                                        style="margin: 0 auto;"
                                        width="600"
                                    >
                                        <tbody>
                                            <tr>
                                                <td align="center" class="" valign="top">
                                                    <table
                                                        cellpadding="0"
                                                        cellspacing="0"
                                                        style="margin: 0 auto;"
                                                        width="100%"
                                                    ></table>
                                                    <table
                                                        bgcolor="#fff"
                                                        cellpadding="0"
                                                        cellspacing="0"
                                                        class=""
                                                        style="margin: 0 auto; width: 100%; margin-top: 100px;"
                                                    >
                                                        <tbody style="margin-top: 15px;">
                                                            <tr class="">
                                                                <td class="headline">Welcome to Maclareen Consulting India Pvt Ltd</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <center class="">
                                                                        <table
                                                                            cellpadding="0"
                                                                            cellspacing="0"
                                                                            class=""
                                                                            style="margin: 0 auto;"
                                                                            width="75%"
                                                                        >
                                                                            <tbody class="">
                                                                                <tr class="">
                                                                                    <td class="" style="color:#444; font-weight: 400;">
                                                                                        <br>
                                                                                        <br>
                                                                                        Hi  ' . $candidate_name . '
                                                                                        <br>
                                                                                        A management application that helps you to track your job application with ease and efficiency.
                                                                                        <br>
                                                                                        <br>
                                                                                        You have successfully been registered to us  for ' . $candidate_job_profile . ' job role
                                                                                        <br>
                                                                                        <br>
                                                                                        Your login credentials are provided below:
                                                                                        <br>
                                                                                        <span style="font-weight:bold;">Email: &nbsp;</span>
                                                                                        <span style="font-weight:lighter;" class="">' . $candidate_email . '</span>
                                                                                        <br>
                                                                                        <span style="font-weight:bold;">Password: &nbsp;</span>
                                                                                        <span style="font-weight:lighter;" class="">' . $candidate_password . '</span>
                                                                                        <br>
                                                                                        <br>
                                                                                        <br>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="">
                                                                    <div class="">
                                                                        <a href="http://mtas.net.in/" style="background-color:#05C6E3;border-radius:4px;color:#fff;display:inline-block;font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:normal;line-height:50px;text-align:center;text-decoration:none;width:350px;-webkit-text-size-adjust:none;" href="http://mtas.net.in/">Visit Account and Start Traking</a>
                                                                    </div>
                                                                    <br>
                                                                </td>
                                                            </tr>
                                                            <!-- Regards Section -->
                                                            <tr>
                                                                <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #444; padding-top: 30px; padding-bottom: 10px;">
                                                                    <span style="font-weight: bold;">Regards,</span>
                                                                    <br>
                                                                    ' . $adminName . '(' . $adminMail . ')
                                                                </td>
                                                            </tr>
                                                            <!-- Footer Section -->
                                                            <tr>
                                                                <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #666;">
                                                                    <div>
                                                                        For any queries, please contact:
                                                                        <br>
                                                                        Email:
                                                                        <a href="mailto:immigration@maclareen.com" style="color: #666; text-decoration: none;">immigration@maclareen.com</a>
                                                                        <br>
                                                                        Email:
                                                                        <a href="mailto:recruitment@maclareen.com" style="color: #666; text-decoration: none;">recruitment@maclareen.com</a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table
                                                        bgcolor="#fff"
                                                        cellpadding="0"
                                                        cellspacing="0"
                                                        class="force-full-width"
                                                        style="margin: 0 auto; margin-bottom: 5px:"
                                                    >
                                                        <tbody></tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ';

        $this->load->config('email');
        $this->load->library('email');
        $subject = 'Maclareen Talent Acquisition System  -  Candidate Register';
        //	$token = $email_exist->emp_id;
        $this->email->from('maclareendata@gmail.com', 'Maclareen Talent Acquisition System  -  Candidate Registe');
        $this->email->to($candidate_email);
        $this->email->subject($subject);
        $this->email->message($registerMessage);
        $this->email->set_mailtype("html");
        $sendemail = $this->email->send();

        // echo $candidate_email;
        // echo $sendemail;

        // Candidate registration successful
        $role = $this->session->userdata('role');
        if ($role == "candidate") {
          redirect('candidateDashboard');
        } else   if ($role == "admin") {
          redirect('adminDashboard');;
        } else {
          redirect('superadminDashboard');
        }

        //  redirect('registermail');
      } else {
        // Failed to save candidate data

        $this->session->set_flashdata('error', 'Failed to register candidate. Please try again.');
        redirect('addCandidate');
      }
    } else {
      $this->session->set_flashdata('error', 'Failed to register candidate. Email ID alredy exist');
      redirect('addCandidate');
    }


    //  }
  }



  public function check_file($value)
  {
    if (empty($_FILES[$value]['name'])) {
      $this->form_validation->set_message('check_file', 'Please select a file for ' . $value . '.');
      echo 'Please select a file for ' . $value . '.';
      return FALSE;
    }
    return TRUE;
  }



  public function loginMe()
  {
    $this->load->library('form_validation');
    $this->load->model('Admin_model');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[128]|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|max_length[32]');

    if ($this->form_validation->run() == FALSE) {
      $this->index();
    } else {
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $result = $this->Admin_model->Login($email, $password);

      if (count($result) > 0) {
        foreach ($result as $res) {
          $sessionArray = array(
            'userId' => $res->user_id,
            'user_email' => $res->user_email,
            'name' => $res->user_name,
            'isLoggedIn' => TRUE
          );

          $this->session->set_userdata($sessionArray);

          redirect('admin/dashbaord');
        }
      } else {
        $this->session->set_flashdata('error', 'Email or password mismatch');

        redirect('LoginControllers');
      }
    }
  }


  public function UpdateCandidateInformation()
  {
    // Load necessary helpers and libraries
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->model('Candidate_model');
    $this->load->model('Admin_model');
    // Validate form fields
    $this->form_validation->set_rules('candidate_name', 'Candidate Name', 'required');
    $this->form_validation->set_rules('candidate_mobile_no', 'Candidate Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
    $this->form_validation->set_rules('candidate_job_status', 'Job status', 'required');


    $candidate_name = $this->input->post('candidate_name');

    $candidate_mobile_no = $this->input->post('candidate_mobile_no');
    $candidate_id = $this->input->post('candidate_id');
    $candidate_job_status = $this->input->post('candidate_job_status');

    $job_training_one = $this->input->post('job_training_one');
    $job_training_one_date_time = $this->input->post('job_training_one_date_time');
    $job_training_one_meet_id = $this->input->post('candidate_id');
    $job_training_one_meet_password = $this->input->post('job_training_one_meet_password');


    $job_training_two = $this->input->post('job_training_two');
    $job_training_two_date_time = $this->input->post('job_training_two_date_time');
    $job_training_two_meet_id = $this->input->post('job_training_two_meet_id');
    $job_training_two_meet_password = $this->input->post('job_training_two_meet_password');



    $job_training_three = $this->input->post('job_training_three');
    $job_training_three_date_time = $this->input->post('job_training_three_date_time');
    $job_training_three_meet_id = $this->input->post('job_training_three_meet_id');
    $job_training_three_password = $this->input->post('job_training_three_password');


    $visa_training = $this->input->post('visa_training');
    $visa_training_datetime = $this->input->post('visa_training_datetime');
    $visa_training_meet_id = $this->input->post('visa_training_meet_id');
    $visa_training_meet_password = $this->input->post('visa_training_meet_password');
    $Admin_id = $this->session->userdata('userId');
    $candidate = $this->Candidate_model->ViewCandidateInfoForMail($candidate_id);
    $candidate_email = $candidate[0]['candidate_email'];
    $candidate_job_profile = $candidate[0]['candidate_job_profile'];

    $job_training_onedatetime = new DateTime($job_training_one_date_time);
    $job_training_one_humanReadable = $job_training_onedatetime->format('F j, Y \a\t h:i A');


    $job_training_twodatetime = new DateTime($job_training_two_date_time);
    $job_training_two_humanReadable = $job_training_twodatetime->format('F j, Y \a\t h:i A');

    $job_training_threedatetime = new DateTime($job_training_three_date_time);
    $job_training_three_humanReadable = $job_training_threedatetime->format('F j, Y \a\t h:i A');


    $job_training_visadatetime = new DateTime($visa_training_datetime);
    $job_training_visa_humanReadable = $job_training_visadatetime->format('F j, Y \a\t h:i A');
    $adminName = $this->session->userdata('name');
    $adminMail = $this->session->userdata('user_email');
    date_default_timezone_set("Asia/Kolkata");
    $today = date("Y-m-d H:i:s");
    $data = array(
      'candidate_name' => $candidate_name,
      'candidate_mobile_no' => $candidate_mobile_no,
      'updated_by' => $Admin_id,
      'candidate_satus_days' => $today,
      'candidate_job_status' => $candidate_job_status
    );
    if ($candidate_job_status == "opt1" || $candidate_job_status == "") {
      $this->session->set_flashdata('error', 'Failed to update candidate. Please select valid Status.');
      redirect('editCandidateInfo/' . $candidate_id);
    }
    if ($candidate_job_status == 5) {
      if ($job_training_one == '' ||  $job_training_one_date_time == '' || $job_training_one_meet_id == '' || $job_training_one_meet_password == '') {
        $this->session->set_flashdata('error', 'Failed to update candidate. Please enter valid information.');
        redirect('editCandidateInfo/' . $candidate_id);
      } else {
        $data['job_training_one'] = $job_training_one;
        $data['job_training_one_date_time'] = $job_training_one_humanReadable;
        $data['job_training_one_meet_password'] = $job_training_one_meet_password;
        $data['job_training_one_meet_id'] = $job_training_one_meet_id;
      }
    }
    if ($candidate_job_status == 6) {
      if ($job_training_two == '' ||  $job_training_two_date_time == '' || $job_training_two_meet_id == '' || $job_training_two_meet_password == '') {
        $this->session->set_flashdata('error', 'Failed to update candidate. Please enter valid information.');
        redirect('editCandidateInfo/' . $candidate_id);
      } else {
        $data['job_training_two'] = $job_training_two;
        $data['job_training_two_date_time'] = $job_training_two_humanReadable;
        $data['job_training_two_meet_id'] = $job_training_two_meet_id;
        $data['job_training_two_meet_password'] = $job_training_two_meet_password;
      }
    }
    if ($candidate_job_status == 7) {
      if ($job_training_three == '' ||  $job_training_three_date_time == '' || $job_training_three_meet_id == '' || $job_training_three_password == '') {
        $this->session->set_flashdata('error', 'Failed to update candidate. Please enter valid information.');
        redirect('editCandidateInfo/' . $candidate_id);
      } else {
        $data['job_training_three'] = $job_training_three;
        $data['job_training_three_date_time'] = $job_training_three_humanReadable;
        $data['job_training_three_meet_id'] = $job_training_three_meet_id;
        $data['job_training_three_password'] = $job_training_three_password;
      }
    }
    if ($candidate_job_status == 10) {
      if ($visa_training == '' ||  $visa_training_datetime == '' || $visa_training_meet_id == '' || $visa_training_meet_password == '') {
        $this->session->set_flashdata('error', 'Failed to update candidate. Please enter valid information.');
        redirect('editCandidateInfo/' . $candidate_id);
      } else {
        $data['visa_training'] = $visa_training;
        $data['visa_training_datetime'] = $job_training_visa_humanReadable;
        $data['visa_training_meet_id'] = $visa_training_meet_id;
        $data['visa_training_meet_password'] = $visa_training_meet_password;
      }
    }
    // if ($candidate_job_status == 1 || $candidate_job_status == 2 || $candidate_job_status == 3 || $candidate_job_status == 4) {
    //     if ($job_training_one != '' ||  $job_training_one_date_time != '' || $job_training_one_meet_id != '' || $job_training_one_meet_password != '' || $job_training_two != '' ||  $job_training_two_date_time != '' || $job_training_two_meet_id != '' || $job_training_two_meet_password != '' || $job_training_three != '' ||  $job_training_three_date_time != '' || $job_training_three_meet_id != '' || $job_training_three_password != ''  || $visa_training != '' ||  $visa_training_datetime != '' || $visa_training_meet_id != '' || $visa_training_meet_password != '') {
    //         $this->session->set_flashdata('error', 'Failed to update candidate. Please enter valid information.');
    //         redirect('editCandidateInfo/' . $candidate_id);
    //     }
    // }
    if (isset($_POST["toggle_switch"])) {
      $is_paid = "1";
    } else {
      $is_paid = "0";
    }
    $data['is_paid'] = $is_paid;




    //Upload files
    $config['upload_path'] = './upload/';
    $config['allowed_types'] = 'pdf|gif|jpg|jpeg|png';
    $this->load->library('upload', $config);

    $uploaded_files = array();
    $upload_errors = false;;

    $Logdata = array(
      'candidate_id' => $candidate_id,
      'admin_id' => $Admin_id,
      'status' => $candidate_job_status
    );


    $candidate_aadhar_card = '';
    $candidate_pan_card = '';
    $candidate_passport =  '';
    $candidate_resume =  '';
    $candidate_photo =  '';

    // Upload Aadhar Card
    if ($this->upload->do_upload('candidate_aadhar_card')) {
      $file_name = $candidate_email . '_aadhar.pdf';
      $uploaded_files['aadhar_card'] = $file_name;
      rename($this->upload->data('full_path'), './upload/aadhar/' . $file_name);
      $data['candidate_aadhar_card'] = $uploaded_files['aadhar_card'];
      $candidate_aadhar_card = $uploaded_files['aadhar_card'];
    } else {
      // $upload_errors = true;
    }

    // Upload Pan Card
    if ($this->upload->do_upload('candidate_pan_card')) {
      $file_name = $candidate_email . '_pan.pdf';
      $uploaded_files['pan_card'] = $file_name;
      rename($this->upload->data('full_path'), './upload/pan/' . $file_name);
      $data['candidate_pan_card'] = $uploaded_files['pan_card'];
      $candidate_pan_card =  $uploaded_files['pan_card'];
    } else {
      //  $upload_errors = true;
    }

    // Upload Passport
    if ($this->upload->do_upload('candidate_passport')) {
      $file_name = $candidate_email . '_passport.pdf';
      $uploaded_files['passport'] = $file_name;
      rename($this->upload->data('full_path'), './upload/passport/' . $file_name);
      $data['candidate_passport'] = $uploaded_files['passport'];
      $candidate_passport = $uploaded_files['passport'];
    } else {
      // $upload_errors = true;
    }

    // Upload Candidate Resume
    if ($this->upload->do_upload('candidate_resume')) {
      $file_name = $candidate_email . '_resume.pdf';
      $uploaded_files['resume'] = $file_name;
      rename($this->upload->data('full_path'), './upload/resume/' . $file_name);
      $data['candidate_resume'] = $uploaded_files['resume'];
      $candidate_resume = $uploaded_files['resume'];
    } else {
      //   $upload_errors = true;
    }

    // Upload Candidate image
    if ($this->upload->do_upload('candidate_photo')) {
      $file_name = $candidate_email . '_img.png';
      $uploaded_files['image'] = $file_name;
      rename($this->upload->data('full_path'), './upload/image/' . $file_name);
      $data['candidate_photo'] = $uploaded_files['image'];
      $candidate_photo = $uploaded_files['image'];
    } else {
      //   $upload_errors = true;
    }
    $candidate_id = $this->Candidate_model->UpdateCandidate($candidate_id, $data);
    $candidateMail = "";
    if ($candidate_id) {

      if ($candidate_job_status == 1) {
        $subject = 'Maclareen Talent Acquisition System  -  Waiting for document ';

        $candidateMail = '
                    <!DOCTYPE html>
                    <html>
                    <head>
                      <style>
                        body {
                          font-family: Arial, sans-serif;
                          background-color: #f4f4f4;
                          margin: 0;
                          padding: 0;
                          margin-top: 200px;
                        }
                    
                        .container {
                          max-width: 600px;
                          margin: 0 auto;
                          background-color: #ffffff;
                          padding: 20px;
                          border-radius: 4px;
                          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                          text-align: center;
                        }
                    
                        .header {
                          margin-bottom: 20px;
                        }
                    
                        .header h1 {
                          color: #333333;
                          font-size: 24px;
                          margin: 0;
                        }
                    
                        .content {
                          color: #666666;
                          font-size: 16px;
                          line-height: 1.5;
                          text-align: center;
                          padding: 20px;
                          background-color: #f1f1f1;
                          border-radius: 8px;
                          margin-bottom: 20px;
                        }
                    
                        .document-list {
                          text-align: left;
                          margin: 0 auto;
                          width: 80%;
                        }
                    
                        .footer {
                          margin-top: 20px;
                        }
                    
                        .footer p {
                          color: #999999;
                          font-size: 14px;
                          margin: 0;
                        }
                      </style>
                    </head>
                    <body>
                      <div class="container">
                        <div class="header">
                        </div>
                        <div class="content">
                          <h1>Hi ' . $candidate_name . ',</h1>
                          <p>I recently registered you for the ' . $candidate_job_profile . ' job profile. Kindly share the documents within 3-4 working days . If sent already you may ignore.</p>
                          <p>Following is the document list:</p>
                          <ol class="document-list">';
        if ($candidate_aadhar_card == "") {
          $candidateMail .= '<li>Aadhar Card</li>';
        }
        if ($candidate_pan_card == "") {
          $candidateMail .= '<li>PAN Card</li>';
        }
        if ($candidate_passport == "") {
          $candidateMail .= '<li>Passport</li>';
        }
        if ($candidate_resume == "") {
          $candidateMail .= '<li>Resume</li>';
        }
        if ($candidate_photo == "") {
          $candidateMail .= '<li>Passport size photo</li>';
        }
        $candidateMail .= '</ol>
                          <p>Once you send all the documents, I will start the further process for your job profile.</p>
                        </div>
                        <div class="footer">
                        <!-- Regards Section -->
                        <tr>
                            <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #444; padding-top: 30px; padding-bottom: 10px;">
                                <span style="font-weight: bold;">Regards,</span>
                                <br>
                                ' . $adminName . '(' . $adminMail . ')
                            </td>
                        </tr>
                        <!-- Footer Section -->
                        <tr>
                            <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #666;">
                                <div>
                                    For any queries, please contact:
                                    <br>
                                    Email:
                                    <a href="mailto:immigration@maclareen.com" style="color: #666; text-decoration: none;">immigration@maclareen.com</a>
                                    <br>
                                    Email:
                                    <a href="mailto:recruitment@maclareen.com" style="color: #666; text-decoration: none;">recruitment@maclareen.com</a>
                                </div>
                            </td>
                        </tr>
                        </div>
                      </div>
                    </body>
                    </html>';
      }
      if ($candidate_job_status == 2) {
        $subject = 'Maclareen Talent Acquisition System  -  Sent to recruitment review ';

        $candidateMail = '
                    <!DOCTYPE html>
                    <html>
                    <head>
                      <style>
                        /* Global styles */
                        body {
                          font-family: Arial, sans-serif;
                          background-color: #f5f5f5;
                        }
                    
                        /* Container styles */
                        .container {
                          max-width: 600px;
                          margin: 0 auto;
                          padding: 20px;
                          background-color: #ffffff;
                          box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                        }
                    
                        /* Heading styles */
                        h1 {
                          color: #989898;
                          font-size: 24px;
                          margin-top: 0;
                        }
                    
                        /* Content styles */
                        p {
                          color: #333333;
                          font-size: 16px;
                          line-height: 1.5;
                        }
                    
                        /* Button styles */
                        .button {
                          display: inline-block;
                          background-color: #989898;
                          color: #ffffff;
                          text-decoration: none;
                          padding: 10px 20px;
                          font-size: 16px;
                          border-radius: 5px;
                        }
                    
                        /* Footer styles */
                        .footer {
                          margin-top: 20px;
                          padding-top: 20px;
                          border-top: 1px solid #cccccc;
                          text-align: center;
                          color: #888888;
                        }
                      </style>
                    </head>
                    <body>
                      <div class="container">
                        <h1>Thank You for Applying!</h1>
                        <p>Dear ' . $candidate_name . ',</p>
                        <p>Thank you for applying to the ' . $candidate_job_profile . '  role. Your resume has been forwarded for recruitment review. After the review process, we will inform/update you about your job status.</p>
                        <p>We appreciate your interest in our company and the time you have taken to apply. Should you have any questions, please dont hesitate to contact us.</p>
                        <div class="footer">
                        <!-- Regards Section -->
                        <tr>
                            <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #444; padding-top: 30px; padding-bottom: 10px;">
                                <span style="font-weight: bold;">Regards,</span>
                                <br>
                                ' . $adminName . '(' . $adminMail . ')
                            </td>
                        </tr>
                        <!-- Footer Section -->
                        <tr>
                            <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #666;">
                                <div>
                                    For any queries, please contact:
                                    <br>
                                    Email:
                                    <a href="mailto:immigration@maclareen.com" style="color: #666; text-decoration: none;">immigration@maclareen.com</a>
                                    <br>
                                    Email:
                                    <a href="mailto:recruitment@maclareen.com" style="color: #666; text-decoration: none;">recruitment@maclareen.com</a>
                                </div>
                            </td>
                        </tr>
                        </div>
                      </div>
                    </body>
                    </html>
                    ';
      }
      if ($candidate_job_status == 3) {
        $subject = 'Maclareen Talent Acquisition System  -  Shortlisted ';
        $candidateMail = '
                    <!DOCTYPE html>
                    <html>
                    <head>
                      <style>
                        /* Global styles */
                        body {
                          font-family: Arial, sans-serif;
                          background-color: #f5f5f5;
                        }
                    
                        /* Container styles */
                        .container {
                          max-width: 600px;
                          margin: 0 auto;
                          padding: 20px;
                          background-color: #ffffff;
                          box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                        }
                    
                        /* Heading styles */
                        h1 {
                          color: #989898;
                          font-size: 24px;
                          margin-top: 0;
                        }
                    
                        /* Content styles */
                        p {
                          color: #333333;
                          font-size: 16px;
                          line-height: 1.5;
                        }
                    
                        /* Button styles */
                        .button {
                          display: inline-block;
                          background-color: #989898;
                          color: #ffffff;
                          text-decoration: none;
                          padding: 10px 20px;
                          font-size: 16px;
                          border-radius: 5px;
                        }
                    
                        /* Footer styles */
                        .footer {
                          margin-top: 20px;
                          padding-top: 20px;
                          border-top: 1px solid #cccccc;
                          text-align: center;
                          color: #888888;
                        }
                      </style>
                    </head>
                    <body>
                      <div class="container">
                        <h1>Congratulations!</h1>
                        <p>Dear ' . $candidate_name . ',</p>
                        <p>It is our good pleasure to inform you that your Resume has been selected for the ' . $candidate_job_profile . ' Place job. We will send you a Zoom/Google Meet link via email for Job Orientation . Kindly attend all meetings for a better understanding of the job role.</p>
                        <p>We wish you the best of luck for the subsequent and remaining stages.</p>
                    
                        <div class="footer">
                        <!-- Regards Section -->
                        <tr>
                            <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #444; padding-top: 30px; padding-bottom: 10px;">
                                <span style="font-weight: bold;">Regards,</span>
                                <br>
                                ' . $adminName . '(' . $adminMail . ')
                            </td>
                        </tr>
                        <!-- Footer Section -->
                        <tr>
                            <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #666;">
                                <div>
                                    For any queries, please contact:
                                    <br>
                                    Email:
                                    <a href="mailto:immigration@maclareen.com" style="color: #666; text-decoration: none;">immigration@maclareen.com</a>
                                    <br>
                                    Email:
                                    <a href="mailto:recruitment@maclareen.com" style="color: #666; text-decoration: none;">recruitment@maclareen.com</a>
                                </div>
                            </td>
                        </tr>
                        </div>
                      </div>
                    </body>
                    </html>
                    
                    ';
      }
      if ($candidate_job_status == 4) {
        $subject = 'Maclareen Talent Acquisition System  -  Not selected ';
        $candidateMail = '
                    <!DOCTYPE html>
                            <html>
                            <head>
                            <style>
                            /* Inline CSS styles */
                            body {
                            background-color: #f4f4f4;
                            font-family: Arial, sans-serif;
                            margin: 0;
                        }

                        .container {
                            background-color: #fff;
                            border-radius: 10px;
                            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                            margin: 20px;
                            padding: 30px;
                        }

                        h1 {
                            color: #333;
                            font-size: 24px;
                            margin-bottom: 20px;
                        }

                        p {
                            color: #666;
                            font-size: 16px;
                            line-height: 1.5;
                            margin-bottom: 10px;
                        }

                        .reasons {
                            margin-top: 20px;
                        }

                        .reasons li {
                            color: #989898;
                            font-size: 16px;
                            line-height: 1.5;
                            margin-bottom: 10px;
                        }

                        .signature {
                            color: #999;
                            font-size: 14px;
                            margin-top: 40px;
                        }
                    </style>
                    </head>
                    <body>
                        <div class="container">
                            <h1>Hi ' . $candidate_name . ',</h1>
                            <p>Thank you so much for apply ' . $candidate_job_profile . ' role .</p>
                            <p>I regret to inform you that your application was not successful this time.</p>
                        
                            <p>However, we would like to keep your resume on file for any future opportunities.</p>
                            <p class="signature">Best regards,<br>Maclareen Consulting India Pvt Ltd</p>
                            <!-- Regards Section -->
                            <tr>
                                <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #444; padding-top: 30px; padding-bottom: 10px;">
                                    <span style="font-weight: bold;">Regards,</span>
                                    <br>
                                    ' . $adminName . '(' . $adminMail . ')
                                </td>
                            </tr>
                            <!-- Footer Section -->
                            <tr>
                                <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #666;">
                                    <div>
                                        For any queries, please contact:
                                        <br>
                                        Email:
                                        <a href="mailto:immigration@maclareen.com" style="color: #666; text-decoration: none;">immigration@maclareen.com</a>
                                        <br>
                                        Email:
                                        <a href="mailto:recruitment@maclareen.com" style="color: #666; text-decoration: none;">recruitment@maclareen.com</a>
                                    </div>
                                </td>
                            </tr>
                        </div>
                    </body>
                    </html>

                    
                    ';
      }
      if ($candidate_job_status == 5) {
        $subject = 'Maclareen Talent Acquisition System  -  Job Orientation  1 ';
        $candidateMail = '
                <!DOCTYPE html>
                <html>
                <head>
                  <style>
                    body {
                      font-family: Arial, sans-serif;
                      background-color: #f4f4f4;
                      margin: 0;
                      padding: 0;
                      margin-top: 300px;
                    }
                
                    .container {
                      max-width: 600px;
                      margin: 0 auto;
                      background-color: #ffffff;
                      padding: 20px;
                      border-radius: 4px;
                      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                      text-align: center;
                      border: 1px solid #ccc;
                      position: relative;
                      transform-style: preserve-3d;
                      perspective: 1000px;
                    }
                
                    .container:before,
                    .container:after {
                      content: "";
                      position: absolute;
                      top: -4px;
                      left: -4px;
                      right: -4px;
                      bottom: -4px;
                      border-radius: 4px;
                      border: 1px solid #ccc;
                      z-index: -1;
                    }
                
                    .container:before {
                      filter: blur(4px);
                    }
                
                    .container:after {
                      filter: blur(8px);
                    }
                
                    .header {
                      margin-bottom: 20px;
                    }
                
                    .header h1 {
                      color: #333333;
                      font-size: 24px;
                      margin: 0;
                    }
                
                    .content {
                      color: #666666;
                      font-size: 16px;
                      line-height: 1.5;
                      text-align: center;
                    }
                
                    .footer {
                      margin-top: 20px;
                    }
                
                    .footer p {
                      color: #999999;
                      font-size: 14px;
                      margin: 0;
                    }
                
                    /* Add color and 3D effect to specific elements */
                
                    .header h1 {
                      color: #989898;
                      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
                    }
                
                    .content p {
                      color: #333333;
                    }
                
                    .container:before,
                    .container:after {
                      border: 2px solid #989898;
                      opacity: 0.5;
                    }
                  </style>
                </head>
                <body>
                  <div class="container">
                    <div class="header">
                      <h1>Hi ' . $candidate_name . ',</h1>
                    </div>
                    <div class="content">
                      <p>We’re excited to announce our first Google or Zoom meeting for Job Orientation .</p>
                      <p>Join us on ' . $job_training_one_humanReadable . '.</p>
                      <p> Meeting Link :' . $job_training_one . ' </p>
                      <p> Meeting ID :' . $job_training_one_meet_id . ' </p>
                      <p> Meeting Password :' . $job_training_one_meet_password . ' </p>
                      
                      <p>Be sure to save the date.</p>
                    </div>
                    <div class="footer">
                    <!-- Regards Section -->
                    <tr>
                        <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #444; padding-top: 30px; padding-bottom: 10px;">
                            <span style="font-weight: bold;">Regards,</span>
                            <br>
                            ' . $adminName . '(' . $adminMail . ')
                        </td>
                    </tr>
                    <!-- Footer Section -->
                    <tr>
                        <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #666;">
                            <div>
                                For any queries, please contact:
                                <br>
                                Email:
                                <a href="mailto:immigration@maclareen.com" style="color: #666; text-decoration: none;">immigration@maclareen.com</a>
                                <br>
                                Email:
                                <a href="mailto:recruitment@maclareen.com" style="color: #666; text-decoration: none;">recruitment@maclareen.com</a>
                            </div>
                        </td>
                    </tr>
                    </div>
                  </div>
                </body>
                </html>
                
                    
                    ';
      }
      if ($candidate_job_status == 6) {
        $subject = 'Maclareen Talent Acquisition System  -  Job Orientation  2 ';
        $candidateMail = '
                <!DOCTYPE html>
                <html>
                <head>
                  <style>
                    body {
                      font-family: Arial, sans-serif;
                      background-color: #f4f4f4;
                      margin: 0;
                      padding: 0;
                      margin-top: 300px;
                    }
                
                    .container {
                      max-width: 600px;
                      margin: 0 auto;
                      background-color: #ffffff;
                      padding: 20px;
                      border-radius: 4px;
                      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                      text-align: center;
                      border: 1px solid #ccc;
                      position: relative;
                      transform-style: preserve-3d;
                      perspective: 1000px;
                    }
                
                    .container:before,
                    .container:after {
                      content: "";
                      position: absolute;
                      top: -4px;
                      left: -4px;
                      right: -4px;
                      bottom: -4px;
                      border-radius: 4px;
                      border: 1px solid #ccc;
                      z-index: -1;
                    }
                
                    .container:before {
                      filter: blur(4px);
                    }
                
                    .container:after {
                      filter: blur(8px);
                    }
                
                    .header {
                      margin-bottom: 20px;
                    }
                
                    .header h1 {
                      color: #333333;
                      font-size: 24px;
                      margin: 0;
                    }
                
                    .content {
                      color: #666666;
                      font-size: 16px;
                      line-height: 1.5;
                      text-align: center;
                    }
                
                    .footer {
                      margin-top: 20px;
                    }
                
                    .footer p {
                      color: #999999;
                      font-size: 14px;
                      margin: 0;
                    }
                
                    /* Add color and 3D effect to specific elements */
                
                    .header h1 {
                      color: #989898;
                      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
                    }
                
                    .content p {
                      color: #333333;
                    }
                
                    .container:before,
                    .container:after {
                      border: 2px solid #989898;
                      opacity: 0.5;
                    }
                  </style>
                </head>
                <body>
                  <div class="container">
                    <div class="header">
                      <h1>Hi ' . $candidate_name . ',</h1>
                    </div>
                    <div class="content">
                      <p>We’re excited to announce our second Google or Zoom meeting for Job Orientation .</p>
                      <p>Join us on ' . $job_training_two_humanReadable . '.</p>
                      <p> Meeting Link :' . $job_training_two . ' </p>
                      <p> Meeting ID :' . $job_training_two_meet_id . ' </p>
                      <p> Meeting Password :' . $job_training_two_meet_password . ' </p>
                      
                      <p>Be sure to save the date.</p>
                    </div>
                    <div class="footer">
                    <!-- Regards Section -->
                    <tr>
                        <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #444; padding-top: 30px; padding-bottom: 10px;">
                            <span style="font-weight: bold;">Regards,</span>
                            <br>
                            ' . $adminName . '(' . $adminMail . ')
                        </td>
                    </tr>
                    <!-- Footer Section -->
                    <tr>
                        <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #666;">
                            <div>
                                For any queries, please contact:
                                <br>
                                Email:
                                <a href="mailto:immigration@maclareen.com" style="color: #666; text-decoration: none;">immigration@maclareen.com</a>
                                <br>
                                Email:
                                <a href="mailto:recruitment@maclareen.com" style="color: #666; text-decoration: none;">recruitment@maclareen.com</a>
                            </div>
                        </td>
                    </tr>
                    </div>
                  </div>
                </body>
                </html>
                
                    
                    ';
      }
      if ($candidate_job_status == 7) {
        $subject = 'Maclareen Talent Acquisition System  -  Job Orientation  3 ';
        $candidateMail = '
                <!DOCTYPE html>
                <html>
                <head>
                  <style>
                    body {
                      font-family: Arial, sans-serif;
                      background-color: #f4f4f4;
                      margin: 0;
                      padding: 0;
                      margin-top: 300px;
                    }
                
                    .container {
                      max-width: 600px;
                      margin: 0 auto;
                      background-color: #ffffff;
                      padding: 20px;
                      border-radius: 4px;
                      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                      text-align: center;
                      border: 1px solid #ccc;
                      position: relative;
                      transform-style: preserve-3d;
                      perspective: 1000px;
                    }
                
                    .container:before,
                    .container:after {
                      content: "";
                      position: absolute;
                      top: -4px;
                      left: -4px;
                      right: -4px;
                      bottom: -4px;
                      border-radius: 4px;
                      border: 1px solid #ccc;
                      z-index: -1;
                    }
                
                    .container:before {
                      filter: blur(4px);
                    }
                
                    .container:after {
                      filter: blur(8px);
                    }
                
                    .header {
                      margin-bottom: 20px;
                    }
                
                    .header h1 {
                      color: #333333;
                      font-size: 24px;
                      margin: 0;
                    }
                
                    .content {
                      color: #666666;
                      font-size: 16px;
                      line-height: 1.5;
                      text-align: center;
                    }
                
                    .footer {
                      margin-top: 20px;
                    }
                
                    .footer p {
                      color: #999999;
                      font-size: 14px;
                      margin: 0;
                    }
                
                    /* Add color and 3D effect to specific elements */
                
                    .header h1 {
                      color: #989898;
                      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
                    }
                
                    .content p {
                      color: #333333;
                    }
                
                    .container:before,
                    .container:after {
                      border: 2px solid #989898;
                      opacity: 0.5;
                    }
                  </style>
                </head>
                <body>
                  <div class="container">
                    <div class="header">
                      <h1>Hi ' . $candidate_name . ',</h1>
                    </div>
                    <div class="content">
                      <p>We’re excited to announce our third Google or Zoom meeting for Job Orientation .</p>
                      <p>Join us on ' . $job_training_three_humanReadable . '.</p>
                      <p> Meeting Link :' . $job_training_three . ' </p>
                      <p> Meeting ID :' . $job_training_three_meet_id . ' </p>
                      <p> Meeting Password :' . $job_training_three_password . ' </p>
                      
                      <p>Be sure to save the date.</p>
                    </div>
                    <div class="footer">
                    <!-- Regards Section -->
                    <tr>
                        <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #444; padding-top: 30px; padding-bottom: 10px;">
                            <span style="font-weight: bold;">Regards,</span>
                            <br>
                            ' . $adminName . '(' . $adminMail . ')
                        </td>
                    </tr>
                    <!-- Footer Section -->
                    <tr>
                        <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #666;">
                            <div>
                                For any queries, please contact:
                                <br>
                                Email:
                                <a href="mailto:immigration@maclareen.com" style="color: #666; text-decoration: none;">immigration@maclareen.com</a>
                                <br>
                                Email:
                                <a href="mailto:recruitment@maclareen.com" style="color: #666; text-decoration: none;">recruitment@maclareen.com</a>
                            </div>
                        </td>
                    </tr>
                    </div>
                  </div>
                </body>
                </html>
                
                    
                    ';
      }
      if ($candidate_job_status == 8) {
        $subject = 'Maclareen Talent Acquisition System  -  Work permit ';
        $candidateMail = '
                <!DOCTYPE html>
                        <html>
                        <head>
                        <style>
                            /* Inline CSS Styles */
                            body {
                            background-color: #f2f2f2;
                            margin: 0;
                            padding: 0;
                            }

                            .container {
                            background-color: #ffffff;
                            border-radius: 10px;
                            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                            margin: 20px auto;
                            max-width: 600px;
                            padding: 20px;
                            }

                            h1 {
                            color: #989898;
                            font-size: 28px;
                            margin: 0;
                            padding-bottom: 10px;
                            border-bottom: 2px solid #989898;
                            }

                            p {
                            color: #333333;
                            font-size: 16px;
                            line-height: 1.5;
                            margin-top: 20px;
                            }

                            .button {
                            background-color: #989898;
                            border-radius: 5px;
                            color: #ffffff;
                            display: inline-block;
                            font-size: 16px;
                            margin-top: 20px;
                            padding: 10px 20px;
                            text-decoration: none;
                            text-align: center;
                            }

                            .button:hover {
                            background-color: #989898;
                            }

                            .signature {
                            margin-top: 40px;
                            text-align: right;
                            }

                            .signature p {
                            color: #888888;
                            margin: 0;
                            font-size: 14px;
                            }
                        </style>
                        </head>
                        <body>
                        <div class="container">
                            <h1>Work Permit Letter</h1>
                            <p>Dear ' . $candidate_name . ',</p>
                            <p>Congratulation , this is to inform you that we have received your work contract and we are very much glad to share the sane with you . Kindly go through the work contact and verify whether all mentioned details are correct</p>
                            <p>If you have any further questions, please feel free to contact us.</p>
                            <div class="signature">
                            <!-- Regards Section -->
                                                            <tr>
                                                                <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #444; padding-top: 30px; padding-bottom: 10px;">
                                                                    <span style="font-weight: bold;">Regards,</span>
                                                                    <br>
                                                                    ' . $adminName . '(' . $adminMail . ')
                                                                </td>
                                                            </tr>
                                                            <!-- Footer Section -->
                                                            <tr>
                                                                <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #666;">
                                                                    <div>
                                                                        For any queries, please contact:
                                                                        <br>
                                                                        Email:
                                                                        <a href="mailto:immigration@maclareen.com" style="color: #666; text-decoration: none;">immigration@maclareen.com</a>
                                                                        <br>
                                                                        Email:
                                                                        <a href="mailto:recruitment@maclareen.com" style="color: #666; text-decoration: none;">recruitment@maclareen.com</a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                            </div>
                        </div>
                        </body>
                        </html>

                
                    
                    ';
      }
      if ($candidate_job_status == 9) {
        $subject = 'Maclareen Talent Acquisition System  -  Visa filing ';
        $candidateMail = '
                <!DOCTYPE html>
                <html>
                <head>
                  <style>
                    /* Inline CSS Styles */
                    body {
                      background-color: #f0f0f0;
                      font-family: Arial, sans-serif;
                      margin: 0;
                      padding: 0;
                    }
                    
                    .container {
                      background-color: #ffffff;
                      border-radius: 10px;
                      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                      margin: 20px auto;
                      max-width: 600px;
                      padding: 20px;
                    }
                    
                    h1 {
                      color: #989898;
                      font-size: 28px;
                      margin: 0;
                      text-align: center;
                    }
                    
                    p {
                      color: #333333;
                      font-size: 16px;
                      line-height: 1.5;
                      margin: 20px 0;
                    }
                    
                    .button {
                      background-color: #989898;
                      border-radius: 5px;
                      color: #ffffff;
                      display: inline-block;
                      font-size: 16px;
                      margin-top: 20px;
                      padding: 10px 20px;
                      text-decoration: none;
                      text-align: center;
                    }
                    
                    .button:hover {
                      background-color: #989898;
                    }
                  </style>
                </head>
                <body>
                  <div class="container">
                    <h1 >Visa Application Process</h1>
                    <p style="color: #989898; font-weight: bold;">Dear ' . $candidate_name . ',</p>
                    <p>For visa and further process, we will be filling out the visa application on your behalf. After any response or updates, we will promptly inform you.</p>
                    <p>If you have any questions or need more information, please dont hesitate to contact us.</p>
                    <!-- Regards Section -->
                    <tr>
                        <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #444; padding-top: 30px; padding-bottom: 10px;">
                            <span style="font-weight: bold;">Regards,</span>
                            <br>
                            ' . $adminName . '(' . $adminMail . ')
                        </td>
                    </tr>
                    <!-- Footer Section -->
                    <tr>
                        <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #666;">
                            <div>
                                For any queries, please contact:
                                <br>
                                Email:
                                <a href="mailto:immigration@maclareen.com" style="color: #666; text-decoration: none;">immigration@maclareen.com</a>
                                <br>
                                Email:
                                <a href="mailto:recruitment@maclareen.com" style="color: #666; text-decoration: none;">recruitment@maclareen.com</a>
                            </div>
                        </td>
                    </tr>
                  </div>
                </body>
                </html>
                

                
                    
                    ';
      }
      if ($candidate_job_status == 10) {
        $subject = 'Maclareen Talent Acquisition System  -  Training for visa ';
        $candidateMail = '
                <!DOCTYPE html>
                    <html>
                    <head>
                    <style>
                        body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        margin: 0;
                        padding: 0;
                        margin-top: 300px;
                        }

                        .container {
                        max-width: 600px;
                        margin: 0 auto;
                        background-color: #ffffff;
                        padding: 20px;
                        border-radius: 4px;
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                        text-align: center;
                        border: 1px solid #ccc;
                        position: relative;
                        transform-style: preserve-3d;
                        perspective: 1000px;
                        }

                        .container:before,
                        .container:after {
                        content: "";
                        position: absolute;
                        top: -4px;
                        left: -4px;
                        right: -4px;
                        bottom: -4px;
                        border-radius: 4px;
                        border: 1px solid #ccc;
                        z-index: -1;
                        }

                        .container:before {
                        filter: blur(4px);
                        }

                        .container:after {
                        filter: blur(8px);
                        }

                        .header {
                        margin-bottom: 20px;
                        }

                        .header h1 {
                        color: #333333;
                        font-size: 24px;
                        margin: 0;
                        }

                        .content {
                        color: #666666;
                        font-size: 16px;
                        line-height: 1.5;
                        text-align: center;
                        }

                        .footer {
                        margin-top: 20px;
                        }

                        .footer p {
                        color: #999999;
                        font-size: 14px;
                        margin: 0;
                        }

                        /* Add color and 3D effect to specific elements */

                        .header h1 {
                        color: #989898;
                        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
                        }

                        .content p {
                        color: #333333;
                        }

                        .container:before,
                        .container:after {
                        border: 2px solid #989898;
                        opacity: 0.5;
                        }
                    </style>
                    </head>
                    <body>
                    <div class="container">
                        <div class="header">
                        <h1>Hi ' . $candidate_name . ',</h1>
                        </div>
                        <div class="content">
                        <p>We’re excited to announce our first Google or Zoom meeting for visa training.</p>
                        <p>Join us on ' . $job_training_visa_humanReadable . '.</p>
                        <p> Meeting Link :' . $visa_training . ' </p>
                        <p> Meeting ID :' . $visa_training_meet_id . ' </p>
                        <p> Meeting Password :' . $visa_training_meet_password . ' </p>
                        
                        <p>Be sure to save the date.</p>
                        </div>
                        <div class="footer">
                        <!-- Regards Section -->
                                                            <tr>
                                                                <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #444; padding-top: 30px; padding-bottom: 10px;">
                                                                    <span style="font-weight: bold;">Regards,</span>
                                                                    <br>
                                                                    ' . $adminName . '(' . $adminMail . ')
                                                                </td>
                                                            </tr>
                                                            <!-- Footer Section -->
                                                            <tr>
                                                                <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #666;">
                                                                    <div>
                                                                        For any queries, please contact:
                                                                        <br>
                                                                        Email:
                                                                        <a href="mailto:immigration@maclareen.com" style="color: #666; text-decoration: none;">immigration@maclareen.com</a>
                                                                        <br>
                                                                        Email:
                                                                        <a href="mailto:recruitment@maclareen.com" style="color: #666; text-decoration: none;">recruitment@maclareen.com</a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                        </div>
                    </div>
                    </body>
                    </html>

                

                
                    
                    ';
      }
      if ($candidate_job_status == 11) {
        $subject = 'Maclareen Talent Acquisition System  - Completed ';
        $candidateMail = '
                <html>
                    <head>
                        <title>

                        </title>
                    </head>
                    <style>
                        *{
                box-sizing:border-box;
                /* outline:1px solid ;*/
                }
                body{
                background: #ffffff;
                background: linear-gradient(to bottom, #ffffff 0%,#e1e8ed 100%);
                    height: 100%;
                        margin: 0;
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                
                }

                .wrapper-1{
                width:100%;
                height:100vh;
                display: flex;
                flex-direction: column;
                }
                .wrapper-2{
                padding :30px;
                text-align:center;
                }
                h1{
                    font-family: Kaushan Script, cursive;
                font-size:4em;
                letter-spacing:3px;
                color:#5892FF ;
                margin:0;
                margin-bottom:20px;
                }
                .wrapper-2 p{
                margin:0;
                font-size:1.3em;
                color:#aaa;
                font-family: Source Sans Pro, sans-serif;
                letter-spacing:1px;
                }
                .go-home{
                color:#fff;
                background:#5892FF;
                border:none;
                padding:10px 50px;
                margin:30px 0;
                border-radius:30px;
                text-transform:capitalize;
                box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
                }
                .footer-like{
                margin-top: auto; 
                background:#D7E6FE;
                padding:6px;
                text-align:center;
                }
                .footer-like p{
                margin:0;
                padding:4px;
                color:#5892FF;
                font-family: Source Sans Pro, sans-serif;
                letter-spacing:1px;
                }
                .footer-like p a{
                text-decoration:none;
                color:#5892FF;
                font-weight:600;
                }

                @media (min-width:360px){
                h1{
                    font-size:4.5em;
                }
                .go-home{
                    margin-bottom:20px;
                }
                }

                @media (min-width:600px){
                .content{
                max-width:1000px;
                margin:0 auto;
                }
                .wrapper-1{
                height: initial;
                max-width:620px;
                margin:0 auto;
                margin-top:50px;
                box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
                }
                
                }
                    </style>
                    <body>
                        <div class=content>
                <div class="wrapper-1">
                    <div class="wrapper-2">
                    <h1>congratulations !</h1>
                  
                    <p>your visa application has approved you are ready to fly abroad</p>
                    <!-- Regards Section -->
                    <tr>
                        <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #444; padding-top: 30px; padding-bottom: 10px;">
                            <span style="font-weight: bold;">Regards,</span>
                            <br>
                            ' . $adminName . '(' . $adminMail . ')
                        </td>
                    </tr>
                    <!-- Footer Section -->
                    <tr>
                        <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #666;">
                            <div>
                                For any queries, please contact:
                                <br>
                                Email:
                                <a href="mailto:immigration@maclareen.com" style="color: #666; text-decoration: none;">immigration@maclareen.com</a>
                                <br>
                                Email:
                                <a href="mailto:recruitment@maclareen.com" style="color: #666; text-decoration: none;">recruitment@maclareen.com</a>
                            </div>
                        </td>
                    </tr>
                    </div>
                    
                </div>
                </div>



                <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
                    </body>
                </html>

                

                
                    
                    ';
      }
      $this->load->config('email');
      $this->load->library('email');

      //	$token = $email_exist->emp_id;

      $this->email->from('maclareendigital@gmail.com', 'Maclareen Talent Acquisition System ');
      $this->email->to($candidate_email);
      $this->email->subject($subject);
      $this->email->message($candidateMail);
      $this->email->set_mailtype("html");
      $sendemail = $this->email->send();
      $test = $this->Admin_model->InsertLog($Logdata);
      // Candidate registration successful
      $role = $this->session->userdata('role');
      if ($role == "candidate") {
        redirect('candidateDashboard');
      } else   if ($role == "admin") {
        redirect('adminDashboard');;
      } else {
        redirect('superadminDashboard');
      }

      //  redirect('registermail');
    } else {
      // Failed to save candidate data

      $this->session->set_flashdata('error', 'Failed to register candidate. Please try again.');
      redirect('addCandidate');
    }
  }



  public function createExcel($id)
  {
    $this->load->model('Admin_model');

    $fileName = 'employee.xlsx';
    $tableData = $this->Admin_model->ExportCandidateInfoLog($id);
  }



  function add()
  {
    if ($this->input->post('userSubmit')) {

      //Check whether user upload picture
      if (!empty($_FILES['picture']['name'])) {
        $config['upload_path'] = 'uploads/images/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['picture']['name'];

        //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('picture')) {
          $uploadData = $this->upload->data();
          $picture = $uploadData['file_name'];
        } else {
          $picture = '';
        }
      } else {
        $picture = '';
      }

      //Prepare array of user data
      $userData = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'picture' => $picture
      );

      //Pass user data to model
      $insertUserData = $this->user->insert($userData);

      //Storing insertion status message.
      if ($insertUserData) {
        $this->session->set_flashdata('success_msg', 'User data have been added successfully.');
      } else {
        $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
      }
    }
    //Form for adding user data
    $this->load->view('users/add');
  }



  public function viewCandidateInformationforUpdate($id)
  {
    //echo $id;
    $this->load->model('Candidate_model');
    $this->global['candidate'] = $this->Candidate_model->ViewCandidateInfo($id);
    $this->global['pendingCandidate'] = $this->Candidate_model->viewCandidate_count('', '');
    $this->global['CompletedCandidate'] = $this->Candidate_model->viewCandidate_count('', '11');
    $this->global['pageTitle'] = 'MTAS : Update Candidate';

    $this->global['candidateId'] = $id;
    $this->loadViews("candidate/updatecandidateinformation", $this->global);
  }


  public function SendmailForm($id)
  {
    $this->load->model('Candidate_model');
    $this->global['candidate'] = $this->Candidate_model->ViewCandidateInfo($id);
    $this->global['pageTitle'] = 'MTAS : Send Mail To  Candidate';
    $this->global['candidateId'] = $id;
    $this->loadViews("candidate/sendmail", $this->global);
  }

  public function Sendmail()
  {
    $subject = $this->input->post('subject');
    $body = $this->input->post('body');
    $candidate_email = $this->input->post('candidate_email');
    $candidate_name = $this->input->post('candidate_name');

    $this->load->config('email');
    $this->load->library('email');

    $adminName = $this->session->userdata('name');
    $adminMail = $this->session->userdata('user_email');

    $mailbody = '<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Email Template</title>
    </head>
    <body>
      <table cellspacing="0" cellpadding="0" border="0" style="width: 100%; max-width: 600px; margin: 0 auto; font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #444; line-height: 1.6;">
        <!-- Content Section -->
        <tr>
          <td style="text-align: left; padding: 20px 0;">
            <!-- Your email content goes here -->
            <p>Dear ' . $candidate_name . ',</p>
            <p>' . $body . '</p>
          </td>
        </tr>
        <!-- Regards Section -->
        <tr>
          <td style="text-align: left; font-weight: bold; padding-top: 30px; padding-bottom: 10px;">
            Regards,<br>
           ' . $adminName . '(' . $adminMail . ')
          </td>
        </tr>
        <!-- Footer Section -->
        <tr>
          <td style="text-align: left; font-size: 14px; color: #666;">
            <div>
              For any queries, please contact:<br>
              Email: <a href="mailto:immigration@maclareen.com" style="color: #666; text-decoration: none;">immigration@maclareen.com</a><br>
              Email: <a href="mailto:recruitment@maclareen.com" style="color: #666; text-decoration: none;">recruitment@maclareen.com</a>
            </div>
          </td>
        </tr>
      </table>
    </body>
    </html>
    ';
    //	$token = $email_exist->emp_id;
    $this->email->from('maclareendata@gmail.com', 'Maclareen Talent Acquisition System  ');
    $this->email->to($candidate_email);
    $this->email->subject($subject);
    $this->email->message($mailbody);
    $this->email->set_mailtype("html");
    $sendemail = $this->email->send();
    if ($sendemail) {
      $role = $this->session->userdata('role');
      if ($role == "candidate") {
        redirect('candidateDashboard');
      } else   if ($role == "admin") {
        redirect('adminDashboard');;
      } else {
        redirect('superadminDashboard');
      }
    }
  }
}
