<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Input_model extends CI_Model
{

    public $table = 'tb_caleg';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    function get_dapil($id) {

        $sql = "SELECT * FROM tv_tps WHERE id='".$id."' ";
        $result = $this->db->query($sql);
        return $result->row();
    
    }

    function get_list_tps($id_dapil,$id_partai) {

        $sql = "SELECT * FROM tb_caleg WHERE id_dapil='".$id_dapil."' and id_partai='".$id_partai."' ";
        $result = $this->db->query($sql);
        return $result->result();
    
    }

    function get_partai(){

        $sql = "SELECT * FROM tb_partai";
        $result = $this->db->query($sql);
        return $result->result();
    
    }

    function insert($data)
    {
        $this->db->insert('tb_trx_caleg', $data);
    }

    function insert_sementara($data)
    {
        $this->db->insert('tb_caleg_sementara', $data);
    }

    function get_rank($id_dapil,$id_partai){
        $sql = "SELECT  id_partai,
                        id_caleg,
                        no_caleg,
                        nm_caleg,
                        id_dapil,
                        SUM(suara) AS tot
                        FROM tv_trx_caleg
                        WHERE id_dapil='".$id_dapil."' AND id_partai='".$id_partai."'
                        GROUP BY id_caleg
                        ORDER BY tot DESC";
        $result = $this->db->query($sql);
        return $result->result();

    }

    public function delete($id)
    {
        $this->db->where('id_dapil', $id);
        $this->db->delete('tb_caleg_sementara');
    }

    function insert_partai($data)
    {
        $this->db->insert('tb_trx_partai', $data);
    }

    function get_tot_partai($id_dapil){
        $sql = "SELECT  id_dapil,
                        id_tps,
                        id_partai,
                        SUM(suara) AS total
                         FROM tv_trx_caleg
                         WHERE id_dapil='".$id_dapil."'
                         GROUP BY id_partai";
        $result = $this->db->query($sql);
        return $result->result();

    }

    public function delete_dapil($id_dapil)
    {
        $this->db->where('id_dapil', $id_dapil);
        $this->db->delete('tb_trx_partai');
    }

}