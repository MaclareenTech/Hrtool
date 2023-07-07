<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class RegisterMailControllers extends BaseController
{


    public function index()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'Hr Tool : Login';
            $this->loadViews("login/login", $this->global);
        } else {
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

    public function RegisterMail()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'Hr Tool : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $this->global['pageTitle'] = 'Hr Tool : Login';
            $this->loadViews("mail/register", $this->global);
            
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
            $hashedPassword = md5($password);
            $result = $this->Admin_model->Login($email, $hashedPassword);

            if (!empty($result)) {
                $res = $result[0];
                $sessionArray = array(
                    'userId' => $res->user_id,
                    'user_profile' => $res->user_profile,
                    'user_email' => $res->user_email,
                    'name' => $res->user_name,
                    'isLoggedIn' => TRUE
                );

                if ($res->user_role == "0") {
                    $sessionArray['role'] = 'candidate';
                    $this->session->set_userdata($sessionArray);
                    redirect('candidateDashboard');
                } else if ($res->user_role == "1") {
                    $sessionArray['role'] = 'admin';
                    $this->session->set_userdata($sessionArray);

                    redirect('adminDashboard');
                } else {
                    $sessionArray['role'] = 'superadmin';
                    $this->session->set_userdata($sessionArray);
                    redirect('superadminDashboard');
                }
            } else {
                $this->session->set_flashdata('error', 'Email or password mismatch');
                redirect('LoginControllers');
            }
        }
    }
}
