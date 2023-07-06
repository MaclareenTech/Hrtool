<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class AddCandidateControllers extends BaseController
{


    public function index()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'Hr Tool : Login';
            $this->loadViews("login/login", $this->global);
        } else {

            $this->global['pageTitle'] = 'Hr Tool : Add candidate';

            $this->loadViews("admin/addcandidate", $this->global);
        }
    }



    public function viewCandidateInformation($id)
    {
        //echo $id;
        $this->load->model('Candidate_model');
        $this->global['candidate'] = $this->Candidate_model->ViewCandidateInfo($id);
        $this->global['pendingCandidate'] = $this->Candidate_model->viewCandidate_count('', '');
        $this->global['completedCandidate'] = $this->Candidate_model->viewCandidate_count('', '11');
        $this->global['pageTitle'] = 'Hr Tool : Admin Dashboard';
        $this->global['name'] = 'Hr Tool : Admin Dashboard';
        $this->global['candidateId'] = $id;
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
            $cognate3Url = "https://maclareenai.com/hrtool/upload/aadhar/" . $Document;
            return Redirect($cognate3Url);
        } else if ($documentType == '1') {
            $Document = $candidate[0]->candidate_pan_card;
            $cognate3Url = "https://maclareenai.com/hrtool/upload/pan/" . $Document;
            return Redirect($cognate3Url);
        } else if ($documentType == '2') {
            $Document = $candidate[0]->candidate_resume;
            $cognate3Url = "https://maclareenai.com/hrtool/upload/resume/" . $Document;
            return Redirect($cognate3Url);
        } else if ($documentType == '3') {
            $Document = $candidate[0]->candidate_passport;
            $cognate3Url = "https://maclareenai.com/hrtool/upload/passport/" . $Document;
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
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload', $config);

        $uploaded_files = array();
        $upload_errors = false;


        $this->load->model('Candidate_model');
        $this->load->model('Admin_model');
        $Admin_id = $this->session->userdata('userId');
        date_default_timezone_set("Asia/Kolkata");
        $today = date("Y-m-d H:i:s");
        $data = array(
            'candidate_name' => $candidate_name,
            'candidate_email' => $candidate_email,
            'candidate_mobile_no' => $candidate_mobile_no,
            'candidate_job_profile' => $candidate_job_profile,
            'updated_by' => $Admin_id,
            'candidate_satus_days' => $today,
            'candidate_password' => $hashedPassword
        );
        // Upload Aadhar Card
        if ($this->upload->do_upload('candidate_aadhar_card')) {
            $file_name = $candidate_name . '_' . $candidate_mobile_no . '_aadhar.pdf';
            $uploaded_files['aadhar_card'] = $file_name;
            rename($this->upload->data('full_path'), './upload/aadhar/' . $file_name);
            $data['candidate_aadhar_card'] = $uploaded_files['aadhar_card'];
        } else {
            // $upload_errors = true;
        }

        // Upload Pan Card
        if ($this->upload->do_upload('candidate_pan_card')) {
            $file_name = $candidate_name . '_' . $candidate_mobile_no . '_pan.pdf';
            $uploaded_files['pan_card'] = $file_name;
            rename($this->upload->data('full_path'), './upload/pan/' . $file_name);
            $data['candidate_pan_card'] = $uploaded_files['pan_card'];
        } else {
            //  $upload_errors = true;
        }

        // Upload Passport
        if ($this->upload->do_upload('candidate_passport')) {
            $file_name = $candidate_name . '_' . $candidate_mobile_no . '_passport.pdf';
            $uploaded_files['passport'] = $file_name;
            rename($this->upload->data('full_path'), './upload/passport/' . $file_name);
            $data['candidate_passport'] = $uploaded_files['passport'];
        } else {
            // $upload_errors = true;
        }

        // Upload Candidate Resume
        if ($this->upload->do_upload('candidate_resume')) {
            $file_name = $candidate_name . '_' . $candidate_mobile_no . '_resume.pdf';
            $uploaded_files['resume'] = $file_name;
            rename($this->upload->data('full_path'), './upload/resume/' . $file_name);
            $data['candidate_resume'] = $uploaded_files['resume'];
        } else {
            //   $upload_errors = true;
        }


        // // If any file upload encountered errors, display an error message
        // if ($upload_errors) {
        //     $data['error_message'] = $this->upload->display_errors();
        //     // $this->load->view('registration_form', $data);
        //     echo $this->upload->display_errors();
        //     return;
        // }

        // Save the form data and uploaded file paths to the database


        $loginCreate = array(
            'user_name' => $candidate_name,
            'user_email' => $candidate_email,
            'user_mobile' => $candidate_mobile_no,
            'user_role' => '0',
            'user_password' => $hashedPassword
        );
        $is_new = $this->Admin_model->CheckAvailable($candidate_email);
        if (!$is_new) {
            $candidate_id = $this->Candidate_model->InsertNew_Candidate($data);
            $user_id = $this->Admin_model->InsertNew_User($loginCreate);

            if ($candidate_id && $user_id) {
                // Candidate registration successful
                $role = $this->session->userdata('role');
                if ($role == "candidate") {
                    redirect('candidateDashboard');
                } else   if ($role == "admin") {
                    redirect('adminDashboard');;
                } else {
                    redirect('superadminDashboard');
                }
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


    // Custom validation callback function to check if a file is uploaded
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
}
