<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class CandidateSourceControllers extends BaseController
{


    public function index()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $this->load->model('Candidate_source_model');
            $this->global['sourcedetails'] = $this->Candidate_source_model->View();
            $this->global['pageTitle'] = 'MTAS : Admin Dashboard';
            $this->global['name'] = 'MTAS : Candiate Source Dashboard';
            $this->loadViews("candidate/viewCandidateSource", $this->global);
        }
    }






    public function AddNewCandidateSourceDetails()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $this->load->model('Job_Opening_model');
            $currentId = $this->Job_Opening_model->view_count();
            $this->global['pageTitle'] = 'MTAS : Admin Dashboard';
            $this->global['nextID'] = $currentId + 1;
            $this->global['name'] = 'MTAS :  Adsd Candidate Source ';
            $this->loadViews("candidate/addcandidatesource", $this->global);
        }
    }






    public function AddNewSourceType()
    {
        $this->load->library('form_validation');
        $this->load->model('Candidate_source_model');
        $this->form_validation->set_rules('source_name', 'source_name', 'required');
        $source_name = $this->input->post('source_name');
        $source_type = $this->input->post('source_type');
        $source_email = $this->input->post('source_email');
        $source_mobile_number = $this->input->post('source_mobile_number');
    
        if ($this->form_validation->run() == FALSE) {
            $this->AddNewCandidateSourceDetails();
        } else {
            if ($source_type == "0" && (empty($source_email) || empty($source_mobile_number))) {
                $this->session->set_flashdata('error', 'If you select person, kindly fill email and mobile number');
                redirect('AddNewCandidateSourceDetailsForm');
            }
    
            if ($source_type == "1" && (!empty($source_email) || !empty($source_mobile_number))) {
                $this->session->set_flashdata('error', 'You cannot enter social media mobile number and email id');
                redirect('AddNewCandidateSourceDetailsForm');
            }
    
            $result = $this->Candidate_source_model->view_count('', $source_name, $source_email, '', $source_type);
    
            if ($result < 1) {
                $SourceData = array(
                    'source_name' => $source_name,
                    'source_email' => $source_email,
                    'source_mobile_number' => $source_mobile_number,
                    'is_social_media' => $source_type
                );
    
                if ($this->Candidate_source_model->Insert($SourceData)) {
                    redirect('viewCandidateSource');
                } else {
                    $this->session->set_flashdata('error', 'Try Again');
                    redirect('AddNewCandidateSourceDetailsForm');
                }
            } else {
                $this->session->set_flashdata('error', 'This Source Already Exists');
                redirect('AddNewCandidateSourceDetailsForm');
            }
        }
    }
    



    public function UpdateSourceInformation($open, $id)
    {
        $this->load->database();
        $this->load->model('Candidate_source_model');



        if ($open == '1') {
            $Ope = '0';
        } else {
            $Ope = '1';
        }
        $Data['is_active'] = $Ope;
        if (!$this->Candidate_source_model->Update($id, $Data)) {
            $data['message'] = 'No user Found';
            echo '<script>alert("No user Found")</script>';
        } else {

            redirect('viewCandidateSource');
        }
    }









    // nextID




























    public function AdminInformation()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $this->load->model('Admin_model');
            $this->global['emp'] = $this->Admin_model->viewAdmin('', '', '', '', '');
            $this->global['pageTitle'] = 'MTAS : Super-Admin Emp Information';
            $this->loadViews("superadmin/admininformation", $this->global);
        }
    }



    public function UpdateAdminInformation($id)
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $this->load->model('Admin_model');
            $this->global['emp'] = $this->Admin_model->viewAdmin($id, '', '', '', '1');
            $this->global['pageTitle'] = 'MTAS : Update Admin Information';
            $this->loadViews("superadmin/updateadmininformation", $this->global);
        }
    }



    public function ChangeAdminInformation()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Admin_model');

        // Validate form fields
        $this->form_validation->set_rules('user_name', ' Name', 'required');
        $this->form_validation->set_rules('user_email', ' Email', 'required|valid_email');
        $this->form_validation->set_rules('user_mobile', ' Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('emp_id', 'Emp Id', 'required');
        $this->form_validation->set_rules('user_id', 'id', 'required');

        $user_name = $this->input->post('user_name');
        $user_email = $this->input->post('user_email');
        $user_mobile = $this->input->post('user_mobile');
        $emp_id = $this->input->post('emp_id');
        $user_id = $this->input->post('user_id');

        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $this->load->library('upload', $config);

        $uploaded_files = array();
        $upload_errors = false;

        $data = array(
            'user_name' => $user_name,
            'user_mobile' => $user_mobile,
            'emp_id' => $emp_id
        );
        // Upload profile
        if ($this->upload->do_upload('user_profile')) {
            $file_name = $user_email . '_' . $user_id . '_profile.png';
            $uploaded_files['profile'] = $file_name;
            rename($this->upload->data('full_path'), './upload/profile/' . $file_name);
            $data['user_profile'] = $uploaded_files['profile'];
        } else {
            //     echo $this->upload->display_errors();
            //   return;
            // $upload_errors = true;
        }
        // print_r($data);
        $chanage = $this->Admin_model->Update($user_id, $data);

        if ($chanage) {
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
            $this->session->set_flashdata('error', 'Failed to Update Admin Details. Please try again.');

            // Failed to save candidate data

        }
    }



    public function AddAdminInformation()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Admin_model');

        // Validate form fields
        $this->form_validation->set_rules('user_name', ' Name', 'required');
        $this->form_validation->set_rules('user_email', ' Email', 'required|valid_email');
        $this->form_validation->set_rules('user_mobile', ' Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('emp_id', 'Emp Id', 'required');
        $this->form_validation->set_rules('user_role', 'id', 'required');
        $this->form_validation->set_rules('user_password', 'Password', 'required|max_length[32]');

        $user_name = $this->input->post('user_name');
        $user_email = $this->input->post('user_email');
        $user_mobile = $this->input->post('user_mobile');
        $emp_id = $this->input->post('emp_id');
        $user_role = $this->input->post('user_role');
        $user_password = $this->input->post('user_password');

        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $this->load->library('upload', $config);

        $uploaded_files = array();
        $upload_errors = false;
        $hashedPassword = md5($user_password);

        $data = array(
            'user_name' => $user_name,
            'user_email' => $user_email,
            'user_mobile' => $user_mobile,
            'user_password' => $hashedPassword,
            'emp_id' => $emp_id
        );
        if ($user_role == "admin") {
            $data['user_role'] = '1';
        } else  if ($user_role == "super_admin") {
            $data['user_role'] = '2';
        }
        // Upload profile

        // print_r($data);


        $is_new = $this->Admin_model->CheckAvailable($user_email);
        if (!$is_new) {
            if ($this->upload->do_upload('user_profile')) {
                $file_name = $user_email . '_' . $user_id . '_profile.png';
                $uploaded_files['profile'] = $file_name;
                rename($this->upload->data('full_path'), './upload/profile/' . $file_name);
                $data['user_profile'] = $uploaded_files['profile'];
            } else {
                //     echo $this->upload->display_errors();
                //   return;
                // $upload_errors = true;
            }
            $chanage = $this->Admin_model->InsertAdmin($data);

            if ($chanage) {
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
                $this->session->set_flashdata('error', 'Failed to Add Admin Details. Please try again.');
                redirect('addnewadmin');
            }
        } else {
            $this->session->set_flashdata('error', 'Failed to register candidate. Email ID alredy exist');
            redirect('addnewadmin');
        }
    }
    public function UpdateVendorInformation($delete, $id)
    {
        $this->load->database();
        $this->load->model('Admin_model');



        if ($delete == '1') {
            $Del = '0';
        } else {
            $Del = '1';
        }
        $Data['id_deleted'] = $Del;
        if (!$this->Admin_model->Update($id, $Data)) {
            $data['message'] = 'No user Found';
            echo '<script>alert("No user Found")</script>';
        } else {

            redirect('viewCandidateSource');
        }
    }
}
