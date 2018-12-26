<?php

Class Delete_model extends CI_Model {

     function __construct()
     {
         parent::__construct();
     }

    public function delete()
    {
        $this->db->where('id');
        $this->db->delete('tb_hasil');
    }


}