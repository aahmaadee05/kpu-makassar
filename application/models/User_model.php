<?php

Class User_model extends CI_Model {

     function __construct()
     {
         parent::__construct();
     }

     function save($data){
         $this->db->insert('users',$data);
     }

     function get_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('users')->row();
    }

    public function get_all()
    {
        $this->db->from('users');
        $this->db->where('aktif','1');
        $query=$this->db->get();
        return $query->result();
    }

    public function add_($data)
    {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }

    public function update_($where, $data)
    {
        $this->db->update('users', $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }


}