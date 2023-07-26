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
    
    

    
    protected $TBL_DISTRIBUTOR = 'tbl_distributor';
    protected $TBL_LICENSE_KEY = 'tbl_license_key';
    protected $TBL_SHOP = 'tbl_shop';
    protected $TBL_USER = 'tbl_user';
    protected $TBL_TOUR = 'tbl_tour';
    protected $TBL_PAYMENT_DETAILS = 'payment_details';
    protected $TBL_DESTINATION = 'tbl_destination';
    protected $TBL_AMBULANCE = 'tbl_ambulance';
    protected $TBL_CANCEL_LOG = 'tbl_cancel_log';
    protected $TBL_VENDOR = 'tbl_vendor';
    protected $TBL_FCM_NOTIFICATION = 'tbl_fcm_notification';
    protected $TBL_COFFIN_ENQUIRY = 'tbl_coffinbox_enquiry';
    protected $TBL_FLIGHT_BOOKING= 'tbl_flight_booking';
    protected $TBL_MUKTI_ENQUIRY= 'tbl_mukti_enquiry';
    protected $TBL_BOOK_MATERIAL= 'tbl_book_material';
    protected $TBL_FREEZER_BOOKING= 'tbl_book__freezer_box';
     protected $TBL_CREMATION_MATERIAL = 'tbl_cremation_material';
     protected $TBL_ASSIGN_TO_VENDOR = 'tbl_assign_to_vendor';
     protected $TBL_ASTI_VISRJAN = 'tbl_asthi_visrjan';
     protected $TBL_ASTI_VISRJAN_ENQUIRY = 'tbl_asthi_visrjan_enquiry';
  //  protected $TBL_ADMIN = 'tbl_admin';
}
