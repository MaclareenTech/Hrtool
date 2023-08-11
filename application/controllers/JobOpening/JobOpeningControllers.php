<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
require FCPATH . 'vendor/autoload.php';
class JobOpeningControllers extends BaseController
{


    public function index()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        $role = $this->session->userdata('role');


        if (!isset($isLoggedIn) || $isLoggedIn != TRUE || $role == 'candidate') {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $this->load->model('Job_Opening_model');
            $this->global['jobdetails'] = $this->Job_Opening_model->View();
            $this->global['pageTitle'] = 'MTAS : Admin Dashboard';
            $this->global['name'] = 'MTAS : Job Opening Dashboard';
            $this->loadViews("jobOpening/viewjobopening", $this->global);
        }
    }


    public function AddJobDetails()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        $role = $this->session->userdata('role');


        if (!isset($isLoggedIn) || $isLoggedIn != TRUE || $role == 'candidate') {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $this->load->model('Job_Opening_model');
            $currentId = $this->Job_Opening_model->view_count();
            $this->global['pageTitle'] = 'MTAS : Admin Dashboard';
            $this->global['nextID'] = $currentId + 1;
            $this->global['name'] = 'MTAS :  Add Job Opening ';
            $this->loadViews("jobOpening/addjobopening", $this->global);
        }
    }
    // nextID


    public function AddNewJob()
    {
        $this->load->library('form_validation');
        $this->load->model('Job_Opening_model');
        $this->form_validation->set_rules('job_country', 'job_country', 'required');
        $this->form_validation->set_rules('job_position', 'job_position', 'required');
        $this->form_validation->set_rules('job_code', 'job_code', 'required');
        $this->form_validation->set_rules('job_open_position', 'job_open_position', 'required');
        $this->form_validation->set_rules('job_open_from', 'job_open_from', 'required');
        $this->form_validation->set_rules('job_open_till', 'job_open_till', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->AddJobDetails();
        } else {
            $job_country = $this->input->post('job_country');
            $job_position = $this->input->post('job_position');
            $job_code = $this->input->post('job_code');
            $job_open_position = $this->input->post('job_open_position');
            $job_open_from = $this->input->post('job_open_from');
            $job_open_till = $this->input->post('job_open_till');
            $result = $this->Job_Opening_model->view_count('', $job_country, $job_position, 0);
            if ($result < 1) {

                $OpenFrom = date('Y-m-d', strtotime(strtr($job_open_from, '/', '-')));
                $OpenTo = date('Y-m-d', strtotime(strtr($job_open_till, '/', '-')));
                $JobData = array(
                    'job_country' => $job_country,
                    'job_position' => $job_position,
                    'job_code' => $job_code,
                    'job_open_position' => $job_open_position,
                    'job_open_from' => $OpenFrom,
                    'job_open_till' => $OpenTo

                );
                if ($this->Job_Opening_model->Insert($JobData)) {
                    redirect('Jobopening');
                } else {
                    $this->session->set_flashdata('error', 'Try Again ');
                    redirect('AddJobopeningFrom');
                }
            } else {
                $this->session->set_flashdata('error', 'This Position Already Exists');
                redirect('AddJobopeningFrom');
            }
        }
    }





    public function UpdateOpeningInformation($open, $id)
    {
        $this->load->database();
        $this->load->model('Job_Opening_model');



        if ($open == '1') {
            $Ope = '0';
        } else {
            $Ope = '1';
        }
        $Data['is_open'] = $Ope;
        if (!$this->Job_Opening_model->Update($id, $Data)) {
            $data['message'] = 'No user Found';
            echo '<script>alert("No user Found")</script>';
        } else {

            redirect('Jobopening');
        }
    }


    public function viewJobOpeningCandidateReport($job_code)
    {
        // echo $job_code;
        $this->load->model('Candidate_model');
        $this->load->model('Job_Opening_model');
        $this->global['candidate'] = $this->Candidate_model->ViewCandidateInfoUsingJobId($job_code);
        $this->global['job'] = $this->Job_Opening_model->View('', '', $job_code, '');
        // $job = $this->Candidate_model->ViewCandidateInfoUsingJobId($job_code);
        // print_r($job);
        $html = $this->load->view('pdf/jobopeningcandidatereport', $this->global, true);

        // Create the mPDF instance and set watermark
        $mpdf = new \Mpdf\Mpdf([
            'format' => 'A3',
            'margin_top' => 0,
            'margin_right' => 0,
            'margin_left' => 0,
            'margin_bottom' => 0,
        ]);

        // Add watermark to each page
        $mpdf->SetWatermarkImage(base_url('assets/images/watrermark.jpg'));
        $mpdf->showWatermarkImage = true;

        // Write content to PDF
        $mpdf->WriteHTML($html);

        // Output the PDF
        $mpdf->Output();
    }















    public function AdminInformation()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        $role = $this->session->userdata('role');


        if (!isset($isLoggedIn) || $isLoggedIn != TRUE || $role == 'candidate') {

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
        $role = $this->session->userdata('role');


        if (!isset($isLoggedIn) || $isLoggedIn != TRUE || $role == 'candidate') {

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

            redirect('admininformation');
        }
    }
}
