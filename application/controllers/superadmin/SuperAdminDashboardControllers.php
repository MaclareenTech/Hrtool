<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class SuperAdminDashboardControllers extends BaseController
{


    public function index()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'Hr Tool : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $this->load->model('Candidate_model');
            $this->load->model('Admin_model');
            $this->global['candidate'] = $this->Candidate_model->ViewCandidateInfo('');
            $this->global['pendingCandidate'] = $this->Candidate_model->viewCandidate_count('','');
            $this->global['completedCandidate'] = $this->Candidate_model->viewCandidate_count('','11');
            $this->global['emp'] = $this->Admin_model->viewAdmin('','','','','1');
            $this->global['pageTitle'] = 'Hr Tool : Super-Admin Dashboard';
            $this->loadViews("superadmin/superAdmindashbaord", $this->global);
        }
    }



    public function RegisteNewAdmin()
    {
       
        $this->global['pageTitle'] = 'Hr Tool : Register new admin';
        $this->loadViews("superadmin/insertnewadmin", $this->global);
    }





 
}
