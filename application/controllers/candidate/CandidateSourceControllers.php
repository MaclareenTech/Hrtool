<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class CandidateSourceControllers extends BaseController
{


    public function index()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        $role = $this->session->userdata('role');


        if (!isset($isLoggedIn) || $isLoggedIn != TRUE || $role == 'candidate') {

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
        $role = $this->session->userdata('role');


        if (!isset($isLoggedIn) || $isLoggedIn != TRUE || $role == 'candidate') {

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








}
