<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH.'vendor/autoload.php';
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
            $this->global['pendingCandidate'] = $this->Candidate_model->viewCandidate_count('', '');
            $this->global['CompletedCandidate'] = $this->Candidate_model->viewCandidate_count('', '11');
            $this->global['emp'] = $this->Admin_model->viewAdmin('', '', '', '', '1');
            $this->global['pageTitle'] = 'Hr Tool : Super-Admin Dashboard';
            $this->loadViews("superadmin/superAdmindashbaord", $this->global);
        }
    }



    public function RegisteNewAdmin()
    {

        $this->global['pageTitle'] = 'Hr Tool : Register new admin';
        $this->loadViews("superadmin/insertnewadmin", $this->global);
    }


    function ExportData($id)
    {
        $this->load->model('Candidate_model');
        $this->load->model('Admin_model');
        $this->global['candidate'] = $this->Candidate_model->ViewCandidateInfo($id);
        $this->global['log'] = $this->Admin_model->ViewCandidateInfoLog($id);
        $this->global['pendingCandidate'] = $this->Candidate_model->viewCandidate_count('', '');
        $this->global['CompletedCandidate'] = $this->Candidate_model->viewCandidate_count('', '11');
        $this->global['pageTitle'] = 'Hr Tool : Candidate Information';
        $this->global['candidateId'] = $id;
       $html = $this->load->view('receipt_pdf',$this->global,true);
       //  $html = $this->load->view('receipt_pdf',"",true);
       // $this->loadViews("receipt_pdf'", $this->global);
        $mpdf = new \Mpdf\Mpdf([
            'format'=>'A4',
            'margin_top'=>0,
            'margin_right'=>0,
            'margin_left'=>0,
            'margin_bottom'=>0,
        ]);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
}
