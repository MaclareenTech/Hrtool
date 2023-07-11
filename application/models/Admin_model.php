<?php

class Admin_model extends MY_Model
{
    protected $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TBL_ADMIN;
    }


    
    public function InsertAdmin($data)
    {
        if ($this->db->insert($this->table, $data)) {
            return $this->db->insert_id();
        } else {
            return false;
        }
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


    public function InsertLog($data)
    {
        if ($this->db->insert('tbl_log', $data)) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function ViewCandidateInfoLog($candidate_id = '')
    {
       
            $query = $this->db->select('tbl_log.*,
        tbl_user.*,
        tbl_candidate.*')->where(['tbl_log.candidate_id' => $candidate_id])
            ->join('tbl_candidate', 'tbl_log.candidate_id=tbl_candidate.candidate_id')
            ->join('tbl_user', 'tbl_log.admin_id=tbl_user.user_id')
             ->order_by('candidate_job_status', 'asc')->get('tbl_log');
        return $query->result();
       
       
       
    }

    public function InsertNew_User($data)
    {
        if ($this->db->insert($this->table, $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function viewAdmin($user_id = '', $emp_id = '', $user_email = '', $id_deleted = '', $user_role = '', $oder_by_column = 'user_id')
    {
        if ($user_id !== "") {
            $this->db->where('user_id', $user_id);
        }
        if ($emp_id !== "") {
            $this->db->where('emp_id=', $emp_id);
        }
        if ($user_email !== "") {
            $this->db->where('user_email', $user_email);
        }
        if ($id_deleted !== "") {
            $this->db->where('id_deleted', $id_deleted);
        }
        if ($user_role !== "") {
            $this->db->where('user_role', $user_role);
        }

        $this->db->order_by($oder_by_column, 'asc');
        $Query = $this->db->get($this->table);
        // echo $this->db->last_query();
        return $Query->result();
    }




    public function Update($user_id, $data)
    {
        $this->db->where('user_id', $user_id);
        if ($this->db->update($this->table, $data)) {
            return $this->db->where('user_id', $user_id)->get($this->table)->result_array();
        } else {
            return false;
        }
        // echo $this->db->last_query();
    }



    public function CheckAvailable($user_email)
    {
        $count = $this->db->where(['user_email' => $user_email])->where(['id_deleted' => '0'])
            ->get($this->table);

        if ($count->num_rows()) {
            return true;
        } else {
            return false;
        }
    }














    


  
  


}
