<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class CandidateDashboardControllers extends BaseController
{


    public function index()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'Hr Tool : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $userId = $this->session->userdata('userId');
            $this->load->model('Candidate_model');

            $this->global['candidate'] = $this->Candidate_model->ViewCandidateInfo($userId);
            $this->global['pageTitle'] = 'Hr Tool : Candidate Dashboard';
            $this->global['candidateId'] = $userId;
            $this->loadViews("candidate/candidatedashbaord", $this->global);
        }
    }
}
