<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class AdvertisementControllers extends BaseController
{


    public function index()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        $role = $this->session->userdata('role');


        if (!isset($isLoggedIn) || $isLoggedIn != TRUE || $role == 'candidate') {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $this->load->model('Advertisement_model');
            $this->global['advertisementdetails'] = $this->Advertisement_model->View();
            $this->global['pageTitle'] = 'MTAS : Advertisementn Details';
            $this->global['name'] = 'MTAS : Candiate Source Dashboard';
            $this->loadViews("candidate/advertisement", $this->global);
        }
    }






    public function AddNewAdvertisementDetails()
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
            $this->global['name'] = 'MTAS :  Add New Advertisement ';
            $this->loadViews("candidate/addadvertisement", $this->global);
        }
    }


    public function AddNewAdvertisement()
    {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'pdf|gif|jpg|jpeg|png';
        $this->load->library('upload', $config);
    
        $this->load->library('form_validation');
        $this->load->model('Advertisement_model');
    
        $this->form_validation->set_rules('ad_type', 'Ad Type', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->addNewAdvertisementDetails();
        } else {
            $adType = $this->input->post('ad_type');
            date_default_timezone_set("Asia/Kolkata");
            $today = date("Y-m-d H:i:s");
    
            $sourceData = array(
                'ad_type' => $adType,
                'added_date' => $today
            );
    
            if ($this->upload->do_upload('ad_image_path')) {
                $uploadData = $this->upload->data();
                $fileExtension = pathinfo($uploadData['file_name'], PATHINFO_EXTENSION);
                $fileName = $adType . '_img.' . $fileExtension;
    
                // Move the uploaded file to the appropriate directory
                rename($uploadData['full_path'], './upload/advertisement/' . $fileName);
    
                $sourceData['ad_image_path'] = $fileName;
            } else {
                $this->session->set_flashdata('error', 'Upload Proper Image');
                redirect('AddNewAddvertisementForm');
            }
    
            if ($this->Advertisement_model->insert($sourceData)) {
                redirect('advertisement');
            } else {
                $this->session->set_flashdata('error', 'Try Again');
                redirect('AddNewAddvertisementForm');
            }
        }
    }
    



  




    public function UpdateAdvertisementStatus($open, $id)
    {
        $this->load->database();
        $this->load->model('Advertisement_model');



        if ($open == '1') {
            $Ope = '0';
        } else {
            $Ope = '1';
        }
        $Data['is_active'] = $Ope;
        if (!$this->Advertisement_model->Update($id, $Data)) {
            $data['message'] = 'No user Found';
            echo '<script>alert("No user Found")</script>';
        } else {

            redirect('advertisement');
        }
    }
}
