<?php

class Candidate_model extends MY_Model
{
    protected $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TBL_CANDIDATE;
    }


    public function viewCandidate_count($candidate_id = '', $candidate_job_status = '')
    {
        if ($candidate_id !== "") {
            $this->db->where('candidate_id', $candidate_id);
        }
        if ($candidate_job_status !== "") {
            $this->db->where('candidate_job_status=', $candidate_job_status);
        }else
        {
            $this->db->where('candidate_job_status != 11 ');
        }
      
        $this->db->order_by('candidate_id', 'asc');
        $Query = $this->db->get($this->table);
        // echo $this->db->last_query();
        return $Query->num_rows();
    }

    public function InsertNew_Candidate($data)
    {
        if ($this->db->insert($this->table, $data)) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function UpdateCandidate($candidate_id, $data)
    {
        $this->db->where('candidate_id', $candidate_id);
        if ($this->db->update($this->table, $data)) {
            return $this->db->where('candidate_id', $candidate_id)->get($this->table)->result();
        } else {
            return false;
        }
    }




    public function ViewCandidateInfo($id = '')
    {
        if ($id !== "") {
            $query = $this->db->select('tbl_candidate.*,
        tbl_user.user_name,
        tbl_user.user_email,
        tbl_user.user_mobile,
        tbl_user.emp_id')->where(['candidate_id' => $id])
            ->join('tbl_user', 'tbl_candidate.updated_by=tbl_user.user_id')
             ->order_by('candidate_job_status', 'asc')->get($this->table);
        return $query->result();
        } else {
            $query = $this->db->select('tbl_candidate.*,
        tbl_user.user_name,
        tbl_user.user_email,
        tbl_user.user_mobile,
        tbl_user.emp_id')
            ->join('tbl_user', 'tbl_candidate.updated_by=tbl_user.user_id')
             ->order_by('candidate_job_status', 'asc')->get($this->table);
        return $query->result();
        }
       
       
    }
    public function ViewCandidateInfoForMail($id = '')
    {
        if ($id !== "") {
            $query = $this->db->select('tbl_candidate.*,
        tbl_user.user_name,
        tbl_user.user_email,
        tbl_user.user_mobile,
        tbl_user.emp_id')->where(['candidate_id' => $id])
            ->join('tbl_user', 'tbl_candidate.updated_by=tbl_user.user_id')
             ->order_by('candidate_job_status', 'asc')->get($this->table);
        return $query->result_array();
        } else { $query = $this->db->select('tbl_candidate.*,
            tbl_user.user_name,
            tbl_user.user_email,
            tbl_user.user_mobile,
            tbl_user.emp_id')
                ->join('tbl_user', 'tbl_candidate.updated_by=tbl_user.user_id')
                 ->order_by('candidate_job_status', 'asc')->get($this->table);
            return $query->result_array();
           
        }
       
       
    } 
    
    
    public function ViewCandidateInfoUsingId($id)
    {
      
            $query = $this->db->select('tbl_candidate.*,
        tbl_user.user_name,
        tbl_user.user_email,
        tbl_user.user_mobile,
        tbl_user.emp_id')->where(['candidate_id' => $id])
            ->join('tbl_user', 'tbl_candidate.updated_by=tbl_user.user_id')
             ->order_by('candidate_job_status', 'asc')->get($this->table);
        return $query->result();
     
    }














    public function Login($user_email, $user_password)
    {
        $count = $this->db->where(['user_email' => $user_email])->where(['id_deleted' => '0'])->where(['user_password' => $user_password]);


        $count = $this->db->get($this->table);

        $user = $count->result();

        if (!empty($user)) {

            return $user;
        } else {
            return array();
        }
    }



























    // public function view($id = '', $user_name = '', $user_email = '', $isdeleted = '', $user_mobile = '', $oder_by_column = 'id')
    // {
    //     if ($id !== "") {
    //         $this->db->where('id', $id);
    //     }
    //     if ($user_name !== "") {
    //         $this->db->where('user_name=', $user_name);
    //     }
    //     if ($user_email !== "") {
    //         $this->db->where('user_email', $user_email);
    //     }
    //     if ($isdeleted !== "") {
    //         $this->db->where('isDeleted', $isdeleted);
    //     }
    //     if ($user_mobile !== "") {
    //         $this->db->where('user_mobile', $user_mobile);
    //     }

    //     $this->db->order_by($oder_by_column, 'asc');
    //     $Query = $this->db->get($this->table);
    //     // echo $this->db->last_query();
    //     return $Query->result();
    // }




    public function CheckAvailable($user_email)
    {
        $count = $this->db->where(['user_email' => $user_email])->where(['isDeleted' => '0'])
            ->get($this->table);

        if ($count->num_rows()) {
            return true;
        } else {
            return false;
        }
    }


    public function Update($user_email, $data)
    {
        $this->db->where('user_email', $user_email);
        if ($this->db->update($this->table, $data)) {
            return $this->db->where('user_email', $user_email)->get($this->table)->result_array();
        } else {
            return false;
        }
    }
}
