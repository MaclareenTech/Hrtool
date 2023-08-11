<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';
require APPPATH . '/libraries/BaseController.php';
class SuperAdminDashboardControllers extends BaseController
{


    public function index()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        $role = $this->session->userdata('role');
 

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE || $role == 'candidate') {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $this->load->model('Candidate_model');
            $this->load->model('Admin_model');
            $this->global['candidate'] = $this->Candidate_model->ViewCandidateInfo('');
            $this->global['pendingCandidate'] = $this->Candidate_model->viewCandidate_count('', '');
            $this->global['CompletedCandidate'] = $this->Candidate_model->viewCandidate_count('', '11');
            $this->global['emp'] = $this->Admin_model->viewAdmin('', '', '', '', '1');
            $this->global['pageTitle'] = 'MTAS : Super-Admin Dashboard';

            $this->global['job_profiles'] = $this->Candidate_model->getCandidateJobProfiles();

            // Prepare the data for the pie chart.
            $labels = array();
            $values = array();
            foreach ($this->global['job_profiles'] as $profile) {
                $labels[] =  $profile['job_country'] . ' - ' . $profile['job_position'];
                $values[] = (int) $profile['count'];
            }
    
            $this->global['chart_labels'] = json_encode($labels);
            $this->global['chart_values'] = json_encode($values);
            $this->loadViews("superadmin/superAdmindashbaord", $this->global);
        }
    }



    public function RegisteNewAdmin()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        $role = $this->session->userdata('role');
 

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE || $role == 'candidate') {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
        $this->global['pageTitle'] = 'MTAS : Register new admin';
        $this->loadViews("superadmin/insertnewadmin", $this->global);
        }
    }


    function ExportData($id)
    {
        $this->load->model('Candidate_model');
        $this->load->model('Admin_model');
        $this->global['candidate'] = $this->Candidate_model->ViewCandidateInfo($id);
        $this->global['log'] = $this->Admin_model->ViewCandidateInfoLog($id);
        $this->global['pendingCandidate'] = $this->Candidate_model->viewCandidate_count('', '');
        $this->global['CompletedCandidate'] = $this->Candidate_model->viewCandidate_count('', '11');
        $this->global['pageTitle'] = 'MTAS : Candidate Information';
        $this->global['candidateId'] = $id;
        $html = $this->load->view('pdf/candidatereport', $this->global, true);

        // Create the mPDF instance and set watermark
        $mpdf = new \Mpdf\Mpdf([
            'format' => 'A4',
            'margin_top' => 0,
            'margin_right' => 0,
            'margin_left' => 0,
            'margin_bottom' => 0,
        ]);

        // Add watermark to each page
        $mpdf->SetWatermarkImage(base_url('assets/images/bg/watermark.png'));
        $mpdf->showWatermarkImage = true;

        // Write content to PDF
        $mpdf->WriteHTML($html);

        // Output the PDF
        $mpdf->Output();
    }
}
