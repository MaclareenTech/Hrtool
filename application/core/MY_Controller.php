<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('Users_model', 'Auth_model'));
        
        if (!$this->session->logged_in) {
            redirect('portal/auth');
        } else {
            // $data = $this->Users_model->view($this->session->admin_id);
            $username = (empty($this->session->email))?$this->session->mobile:$this->session->email;
            $data = $this->Auth_model->login($username, $this->session->password);
            // print_r($data);
            if (!empty($data)) {
                $user_data = array(
                    'admin_id' => $data->id,
                    'email' => $data->email_id,
                    'mobile' => $data->mobile,
                    'status' => $data->status,
                    // 'blocked_till' => $data->blocked_till,
                    // 'wallet' => $data->wallet,
                    // 'available_payment' => $data->available_payment,
                    // 'activated_date' => $data->activated_date,
                    // 'form_remaining' => $data->form_remaining,
                    'name' => $data->first_name.' '.$data->last_name,
                    // 'payment_type' => $data->payment_type,
                    // 'package' => $data->package,
                    'logged_in' => true,
                    'role' => $data->role
                );
                $this->session->set_userdata($user_data);
            } else {
                $user_data = array(
                    'admin_id' => '',
                    'email' => '',
                    'name' => '',
                    'mobile' => '',
                    'status' => '',
                    'blocked_till' => '',
                    'wallet' => '',
                    'available_payment' => '',
                    'activated_date' => '',
                    'form_remaining' => '',
                    'payment_type' => '',
                    'package' => '',
                    'logged_in' => '',
                    'role' => '',
                );
                $this->session->unset_userdata($user_data);
                $this->session->sess_destroy();
                redirect('portal/auth');
            }
        }
    }
}