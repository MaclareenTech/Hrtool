<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class ChatControllers extends BaseController
{
    public function __construct()
    {
     parent::__construct();
     $this->load->model('chat_model');
     date_default_timezone_set("Asia/Calcutta");
     
    }

    public function index()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
 

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
           $this->load->model('Chat_model');
            $this->global['chatdata'] = $this->chat_model->View();
            $this->global['pageTitle'] = 'MTAS : Chat ';
            // $this->load->model('Candidate_model');
            // $candidate = $this->Candidate_model->ViewCandidateInfo('');
            // $chatData = $this->chat_model->View();
            // print_r($candidate);
          $this->loadViews("chatView/chatboard", $this->global);
        }
    }
   
    public function AddNewChat()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('message', 'message', 'required');
        $message = $this->input->post('message');
        date_default_timezone_set("Asia/Kolkata");
        $today = date("Y-m-d H:i:s");
        $Admin_id = $this->session->userdata('userId');
                $ChatDataData = array(
                    'sender_id' => $Admin_id,
                    'chat_message' => $message,
                    'chat_time' => $today
                );
    
                if ($this->chat_model->Insert($ChatDataData)) {
                    redirect('Chat');
                } else {
                    $this->session->set_flashdata('error', 'Try Again');
                    redirect('Chat');
                }
           
        }
    
        public function get_messages() {
            $messages = $this->chat_model->get_messages();
            echo json_encode($messages);
        }
   }
