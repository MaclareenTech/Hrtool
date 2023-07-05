<?php

class Admin_model extends MY_Model
{
    protected $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TBL_ADMIN;
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




    public function InsertNew_User($data)
    {
        if ($this->db->insert($this->table, $data)) {
            return true;
        } else {
            return false;
        }
    }






















    public function view($id = '', $user_name = '', $user_email = '', $isdeleted = '', $user_mobile = '', $oder_by_column = 'id')
    {
        if ($id !== "") {
            $this->db->where('id', $id);
        }
        if ($user_name !== "") {
            $this->db->where('user_name=', $user_name);
        }
        if ($user_email !== "") {
            $this->db->where('user_email', $user_email);
        }
        if ($isdeleted !== "") {
            $this->db->where('isDeleted', $isdeleted);
        }
        if ($user_mobile !== "") {
            $this->db->where('user_mobile', $user_mobile);
        }

        $this->db->order_by($oder_by_column, 'asc');
        $Query = $this->db->get($this->table);
        // echo $this->db->last_query();
        return $Query->result();
    }

    public function Insert($data)
    {
        if ($this->db->insert($this->table, $data)) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }


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
