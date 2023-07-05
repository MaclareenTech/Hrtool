<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class LoginControllers extends BaseController
{


    public function index()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'Hr Tool : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $this->load->model('Candidate_model');
            $this->global['candidate'] = $this->Candidate_model->ViewCandidateInfo('');
            $this->global['pendingCandidate'] = $this->Candidate_model->viewCandidate_count('','');
            $this->global['completedCandidate'] = $this->Candidate_model->viewCandidate_count('','11');
            $this->global['pageTitle'] = 'Hr Tool : Admin Dashboard';
            $this->global['name'] = 'Hr Tool : Admin Dashboard';
         
            $this->loadViews("admin/dashbaord", $this->global);
        }
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

                    redirect('adminDashboard');
                }
            } else {
                $this->session->set_flashdata('error', 'Email or password mismatch');

                redirect('LoginControllers');
            }
        }
    }
}
