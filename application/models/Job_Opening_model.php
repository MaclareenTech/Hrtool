<?php

class Job_Opening_model extends MY_Model
{
    protected $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TBL_JOB_OPENING;
    }


    public function View($job_id = '', $job_country = '', $job_code = '', $is_open = '',  $oder_by_column = 'job_id')
    {
        if ($job_id !== "") {
            $this->db->where('job_id', $job_id);
        }
        if ($job_country !== "") {
            $this->db->where('job_country=', $job_country);
        }
        if ($job_code !== "") {
            $this->db->where('job_code', $job_code);
        }
        if ($is_open !== "") {
            $this->db->where('is_open', $is_open);
        }

        // Set the order by column and direction (asc for ascending)
         // Replace 'column_name' with the actual column you want to use for ordering
        $this->db->order_by($oder_by_column, 'asc');

        // Get the results from the database using the table name specified in $this->table
        $query = $this->db->get($this->table);

        // Return the results as an array of objects
        return $query->result();
    }

    public function ViewArray($job_id = '', $job_country = '', $job_code = '', $is_open = '',  $oder_by_column = 'job_id')
    {
        if ($job_id !== "") {
            $this->db->where('job_id', $job_id);
        }
        if ($job_country !== "") {
            $this->db->where('job_country=', $job_country);
        }
        if ($job_code !== "") {
            $this->db->where('job_code', $job_code);
        }
        if ($is_open !== "") {
            $this->db->where('is_open', $is_open);
        }

        // Set the order by column and direction (asc for ascending)
         // Replace 'column_name' with the actual column you want to use for ordering
        $this->db->order_by($oder_by_column, 'asc');

        // Get the results from the database using the table name specified in $this->table
        $query = $this->db->get($this->table);
        // $str = $this->db->last_query();
        // echo $str;
        // Return the results as an array of objects
        return $query->result_array();
    }


    public function view_count($job_id = '', $job_country = '', $job_position = '', $is_open = '',)
    {
        if ($job_id !== "") {
            $this->db->where('job_id', $job_id);
        }
        if ($job_country !== "") {
            $this->db->where('job_country=', $job_country);
        }
        if ($job_position !== "") {
            $this->db->where('job_position', $job_position);
        }
        if ($is_open !== "") {
            $this->db->where('is_open', $is_open);
        }


        // Get the results from the database using the table name specified in $this->table
        $query = $this->db->get($this->table);
        // echo $this->db->last_query();
        return $query->num_rows();
    }




    public function Insert($data)
    {
        if ($this->db->insert($this->table, $data)) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }




    public function Update($job_id, $data)
    {
        $this->db->where('job_id', $job_id);
        if ($this->db->update($this->table, $data)) {
            return $this->db->where('job_id', $job_id)->get($this->table)->result();
        } else {
            return false;
        }
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


    // public function Update($user_email, $data)
    // {
    //     $this->db->where('user_email', $user_email);
    //     if ($this->db->update($this->table, $data)) {
    //         return $this->db->where('user_email', $user_email)->get($this->table)->result_array();
    //     } else {
    //         return false;
    //     }
    // }
}
