<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    protected $TBL_ADMIN = 'tbl_user';
    protected $TBL_CANDIDATE = 'tbl_candidate';
    protected $TBL_JOB_OPENING = 'tbl_job_opening';
    protected $TBL_CANDIDATE_SOURCE = 'tbl_candidate_source';
    protected $TBL_INVOICE = 'tbl_invoice';
    protected $TBL_CHAT = 'tbl_chat';
    protected $TBL_ADVERTISEMENT = 'tbl_advertisement';

}
