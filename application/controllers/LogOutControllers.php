<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class LogOutControllers extends BaseController
{


    public function index()
    {
        $this->session->sess_destroy();
        redirect('LoginControllers');
    }
}
