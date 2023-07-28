<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
require FCPATH . 'vendor/autoload.php';
class InvoiceControllers extends BaseController
{


    public function index()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $this->load->model('Invoice_model');
            $this->global['invoicedetails'] = $this->Invoice_model->view();
            $this->global['pageTitle'] = 'MTAS : Invoice';
            $this->loadViews("invoice/invoicelist", $this->global);
        }
    }








    public function CreateInvoiceform()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $this->load->model('Invoice_model');
            $currentId = $this->Invoice_model->view_count();
            $this->global['nextID'] = "M23" . ($currentId + 1);
            $this->global['pageTitle'] = 'MTAS : Create Invoice';
            $this->loadViews("invoice/createinvoice", $this->global);
        }
    }

    public function CreateInvoice()
    {
        // Retrieve form data
        $invoiceNumber = $this->input->post('invoiceNumber');
        $invoiceDate = $this->input->post('invoiceDate');
        $candidate_name = $this->input->post('candidate_name');
        $candidate_address = $this->input->post('candidate_address');
        $candidate_state = $this->input->post('candidate_state');
        $candidate_number = $this->input->post('candidate_number');
        $candidate_mail = $this->input->post('candidate_mail');
        $payment_mode = $this->input->post('payment_mode');
        $candidate_company_name = $this->input->post('candidate_company_name');
        $candidate_company_pan = $this->input->post('candidate_company_pan');
        $candidate_gstin_no = $this->input->post('candidate_gstin_no');


        $total_amount = $this->input->post('total_amount');
        $invoice_amount_with_gst = $this->input->post('invoice_amount_with_gst');
        $total_amount_words = $this->input->post('total_amount_words');

        // Retrieve table data (dynamic rows)
        $particulars = $this->input->post('particulars');
        $amounts = $this->input->post('amount');
        $hsnNumbers = $this->input->post('Hsnumber');
        $gstRates = $this->input->post('gst_rate');
        $amountwithGSTs = $this->input->post('amountwithGST');



        $particularsArray = array();
        $amountsArray = array();
        $hsnNumbersArray = array();
        $gstRateArray = array();
        $amountwithGSTArray = array();
        $dataArray = array();

        for ($i = 0; $i < count($particulars); $i++) {
            $particular = $particulars[$i];
            $amount = $amounts[$i];
            $hsn = $hsnNumbers[$i];
            $gstRate = $gstRates[$i];
            $amountwithGST = $amountwithGSTs[$i];

            $particularsArray[] = $particular;
            $amountsArray[] = $amount;
            $hsnNumbersArray[] = $hsn;
            $gstRateArray[] = $gstRate;
            $amountwithGSTArray[] = $amountwithGST;

            // Create an object for each row
            $rowObject = new stdClass();
            $rowObject->particular = $particular;
            $rowObject->amount = $amount;
            $rowObject->hsn = $hsn;
            $rowObject->gstRate = $gstRate;
            $rowObject->amountwithGST = $amountwithGST;

            // Add the row object to the dataArray
            $dataArray[] = $rowObject;
        }
        $user = array();

        // Create an object to hold the data
        $dataObject = new stdClass();
        $dataObject->invoiceNumber = $invoiceNumber;
        $dataObject->invoiceDate = $invoiceDate;
        $dataObject->candidate_name = $candidate_name;
        $dataObject->candidate_address = $candidate_address;
        $dataObject->candidate_state = $candidate_state;
        $dataObject->candidate_number = $candidate_number;
        $dataObject->candidate_mail = $candidate_mail;
        $dataObject->total_amount = $total_amount;
        $dataObject->total_amount_words = $total_amount_words;
        $dataObject->candidate_gstin_no = $candidate_gstin_no;
        $dataObject->invoice_amount_with_gst = $invoice_amount_with_gst;
        $dataObject->candidate_company_pan = $candidate_company_pan;
        $dataObject->candidate_company_name = $candidate_company_name;
        $dataObject->payment_mode = $payment_mode;

        // Add the object to the user array
        $user[] = $dataObject;
        //  print_r($dataArray);
        // candidate_gstin_no

        $cleanCandidateName = preg_replace('/[^A-Za-z0-9\-]/', '', $candidate_name);

        // Get the current date in the desired format (e.g., YYYY-MM-DD)
        $currentDate = date("Y-m-d");

        // Generate a unique ID
        $uniqueID = uniqid();

        // Combine the candidate's name, date, and unique ID to form the file name
        $fileName = $cleanCandidateName . "_" . $currentDate . "_" . $uniqueID . ".pdf";

        // Output the file name
      
        $Admin_id = $this->session->userdata('userId');
        $date = date('Y-m-d', strtotime(strtr($invoiceDate, '/', '-')));
        $serializedDataArray = json_encode($dataArray);
        $InvoiceData = array(
            'invoice_unique_id' => $invoiceNumber,
            'candidate_name' => $candidate_name,
            'candidate_address' => $candidate_address,
            'candidate_mail' => $candidate_mail,
            'invoice_date' => $date,
            'candidate_state' => $candidate_state,
            'admin_id' => $Admin_id,
            'invoice_path' => $fileName,
            'invoice_paeticulars' => $serializedDataArray,
            'invoice_amount' => $total_amount,
            'invoice_amount_with_gst' => $invoice_amount_with_gst,
            'candidate_company_name' => $candidate_company_name,
            'candidate_company_pan' => $candidate_company_pan,
            'payment_mode' => $payment_mode,
            'invoice_amount_in_word' => $total_amount_words

        );
        $this->load->model('Invoice_model');
        if ($this->Invoice_model->Insert($InvoiceData)) {
            // $this->load->model('Candidate_model');
            // $this->load->model('Admin_model');
            // $this->global['candidate'] = $this->Candidate_model->ViewCandidateInfo($id);
            // $this->global['log'] = $this->Admin_model->ViewCandidateInfoLog($id);
            // $this->global['pendingCandidate'] = $this->Candidate_model->viewCandidate_count('', '');
            // $this->global['CompletedCandidate'] = $this->Candidate_model->viewCandidate_count('', '11');
            // $this->global['pageTitle'] = 'MTAS : Candidate Information';
            $this->global['user'] = $user;
            $this->global['dataArray'] = $dataArray;
            $html = $this->load->view('invoice/viewinvoice', $this->global, true);

            // Create the mPDF instance and set watermark
            $mpdf = new \Mpdf\Mpdf([
                'format' => 'A4',
                'margin_top' => 0,
                'margin_right' => 0,
                'margin_left' => 0,
                'margin_bottom' => 0,
            ]);

            // Add watermark to each page
            $mpdf->SetWatermarkImage(base_url('assets/images/logo_new_2.png'));
            $mpdf->showWatermarkImage = true;

            // Write content to PDF
            $mpdf->WriteHTML($html);
            $pdfContent = $mpdf->Output('', 'S');
          

            // Set the file name


            // Set the destination directory
            $destinationDir = 'upload/invoice';

            // Construct the destination path on the server
            $destinationPath = FCPATH . $destinationDir . '/' . $fileName;

            // Save the PDF content to the destination path on the server
            if (!is_dir(FCPATH . $destinationDir)) {
                mkdir(FCPATH . $destinationDir, 0755, true); // Create the directory if it doesn't exist
            }

            file_put_contents($destinationPath, $pdfContent);

            // Generate the public URL for the saved PDF
            $pdfUrl = base_url($destinationDir . '/' . $fileName);

            // Output the PDF
            $mpdf->Output();
        } else {
            $this->session->set_flashdata('error', 'Try Again ');
            redirect('createinvoiceform');
        }





        // Set the HTML content


        // Output the PDF content to a variable

        // Provide the download link to users using $pdfUrl



    }





    public function ViewCandiatenvoiceDocument($id)
    {
      // echo $id;
      // echo $documentType;
      $this->load->model('Invoice_model');
      $candidate = $this->Invoice_model->View($id);
      $Document = '';
      $cognate3Url = '';
        $Document = $candidate[0]->invoice_path;
        $cognate3Url = "https://maclareenai.com/mtas/upload/invoice/" . $Document;
        return Redirect($cognate3Url);
     
    }












    public function AdminInformation()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $this->load->model('Admin_model');
            $this->global['emp'] = $this->Admin_model->viewAdmin('', '', '', '', '');
            $this->global['pageTitle'] = 'MTAS : Super-Admin Emp Information';
            $this->loadViews("superadmin/admininformation", $this->global);
        }
    }



    public function UpdateAdminInformation($id)
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $this->load->model('Admin_model');
            $this->global['emp'] = $this->Admin_model->viewAdmin($id, '', '', '', '1');
            $this->global['pageTitle'] = 'MTAS : Update Admin Information';
            $this->loadViews("superadmin/updateadmininformation", $this->global);
        }
    }



    public function ChangeAdminInformation()
    {

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->model('Admin_model');

            // Validate form fields
            $this->form_validation->set_rules('user_name', ' Name', 'required');
            $this->form_validation->set_rules('user_email', ' Email', 'required|valid_email');
            $this->form_validation->set_rules('user_mobile', ' Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
            $this->form_validation->set_rules('emp_id', 'Emp Id', 'required');
            $this->form_validation->set_rules('user_id', 'id', 'required');

            $user_name = $this->input->post('user_name');
            $user_email = $this->input->post('user_email');
            $user_mobile = $this->input->post('user_mobile');
            $emp_id = $this->input->post('emp_id');
            $user_id = $this->input->post('user_id');

            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $this->load->library('upload', $config);

            $uploaded_files = array();
            $upload_errors = false;

            $data = array(
                'user_name' => $user_name,
                'user_mobile' => $user_mobile,
                'emp_id' => $emp_id
            );
            // Upload profile
            if ($this->upload->do_upload('user_profile')) {
                $file_name = $user_email . '_' . $user_id . '_profile.png';
                $uploaded_files['profile'] = $file_name;
                rename($this->upload->data('full_path'), './upload/profile/' . $file_name);
                $data['user_profile'] = $uploaded_files['profile'];
            } else {
                //     echo $this->upload->display_errors();
                //   return;
                // $upload_errors = true;
            }
            // print_r($data);
            $chanage = $this->Admin_model->Update($user_id, $data);

            if ($chanage) {
                // Candidate registration successful
                $role = $this->session->userdata('role');
                if ($role == "candidate") {
                    redirect('candidateDashboard');
                } else   if ($role == "admin") {
                    redirect('adminDashboard');;
                } else {
                    redirect('superadminDashboard');
                }
            } else {
                $this->session->set_flashdata('error', 'Failed to Update Admin Details. Please try again.');

                // Failed to save candidate data

            }
        }
    }



    public function AddAdminInformation()
    {

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->model('Admin_model');

            // Validate form fields
            $this->form_validation->set_rules('user_name', ' Name', 'required');
            $this->form_validation->set_rules('user_email', ' Email', 'required|valid_email');
            $this->form_validation->set_rules('user_mobile', ' Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
            $this->form_validation->set_rules('emp_id', 'Emp Id', 'required');
            $this->form_validation->set_rules('user_role', 'id', 'required');
            $this->form_validation->set_rules('user_password', 'Password', 'required|max_length[32]');

            $user_name = $this->input->post('user_name');
            $user_email = $this->input->post('user_email');
            $user_mobile = $this->input->post('user_mobile');
            $emp_id = $this->input->post('emp_id');
            $user_role = $this->input->post('user_role');
            $user_password = $this->input->post('user_password');

            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $this->load->library('upload', $config);

            $uploaded_files = array();
            $upload_errors = false;
            $hashedPassword = md5($user_password);

            $data = array(
                'user_name' => $user_name,
                'user_email' => $user_email,
                'user_mobile' => $user_mobile,
                'user_password' => $hashedPassword,
                'emp_id' => $emp_id
            );
            if ($user_role == "admin") {
                $data['user_role'] = '1';
            } else  if ($user_role == "super_admin") {
                $data['user_role'] = '2';
            }
            // Upload profile

            // print_r($data);


            $is_new = $this->Admin_model->CheckAvailable($user_email);
            if (!$is_new) {
                if ($this->upload->do_upload('user_profile')) {
                    $file_name = $user_email . '_' . $user_id . '_profile.png';
                    $uploaded_files['profile'] = $file_name;
                    rename($this->upload->data('full_path'), './upload/profile/' . $file_name);
                    $data['user_profile'] = $uploaded_files['profile'];
                } else {
                    //     echo $this->upload->display_errors();
                    //   return;
                    // $upload_errors = true;
                }
                $chanage = $this->Admin_model->InsertAdmin($data);

                if ($chanage) {
                    // Candidate registration successful
                    $role = $this->session->userdata('role');
                    if ($role == "candidate") {
                        redirect('candidateDashboard');
                    } else   if ($role == "admin") {
                        redirect('adminDashboard');;
                    } else {
                        redirect('superadminDashboard');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Failed to Add Admin Details. Please try again.');
                    redirect('addnewadmin');
                }
            } else {
                $this->session->set_flashdata('error', 'Failed to register candidate. Email ID alredy exist');
                redirect('addnewadmin');
            }
        }
    }
    public function UpdateVendorInformation($delete, $id)
    {

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $this->load->database();
            $this->load->model('Admin_model');



            if ($delete == '1') {
                $Del = '0';
            } else {
                $Del = '1';
            }
            $Data['id_deleted'] = $Del;
            if (!$this->Admin_model->Update($id, $Data)) {
                $data['message'] = 'No user Found';
                echo '<script>alert("No user Found")</script>';
            } else {

                redirect('admininformation');
            }
        }
    }
}
