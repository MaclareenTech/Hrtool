<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class PdfController extends BaseController
{
    public function uploadPdf() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $config['upload_path'] = './uploads/';
          $config['allowed_types'] = 'pdf';
          $config['max_size'] = 2048; // Maximum file size in kilobytes
    
          $this->load->library('upload', $config);
    
          if ($this->upload->do_upload('pdf_file')) {
            $fileData = file_get_contents($_FILES['pdf_file']['tmp_name']);
            $fileName = $_FILES['pdf_file']['name'];
            $pdfId = $this->Pdf_model->insertPdf($fileName, $fileData);
    
            // PDF file uploaded successfully
            redirect('pdf/view/' . $pdfId);
          } else {
            $error = array('error' => $this->upload->display_errors());
            // Handle file upload error
          }
        }
      }
    
      public function viewPdf($id) {
        $pdf = $this->Pdf_model->getPdfById($id);
        if ($pdf) {
          header('Content-type: application/pdf');
          echo $pdf->file_data;
        } else {
          // PDF not found
        }
      }
    


}
