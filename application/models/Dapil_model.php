<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dapil_model extends CI_Model
{

    public $table = 'tv_trx_caleg';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    function get_supar5($id_partai) {

        $sql = "SELECT  id_dapil,
                        id_tps,
                        id_partai,
                        id_caleg,
                        no_partai,
                        nm_partai,
                        kode,
                        no_caleg,
                        nm_caleg,
                        SUM(suara) AS suara,
                        rank
                            FROM tv_rank_suara
                            WHERE id_dapil=6 AND id_partai='".$id_partai."'
                            GROUP BY id_partai";
        $result = $this->db->query($sql);
        return $result->result();
    
    }

    function get_caleg5($id_partai) {

        $sql = "SELECT  id_dapil,
                        id_tps,
                        id_partai,
                        id_caleg,
                        no_partai,
                        nm_partai,
                        kode,
                        no_caleg,
                        nm_caleg,
                        suara,
                        rank
                            FROM tv_rank_suara
                            WHERE id_dapil=6 AND id_partai='".$id_partai."'
                            GROUP BY id_caleg";
        $result = $this->db->query($sql);
        return $result->result();
    
    }

    function get_supar4($id_partai) {

        $sql = "SELECT  id_dapil,
                        id_tps,
                        id_partai,
                        id_caleg,
                        no_partai,
                        nm_partai,
                        kode,
                        no_caleg,
                        nm_caleg,
                        SUM(suara) AS suara,
                        rank
                            FROM tv_rank_suara
                            WHERE id_dapil=4 AND id_partai='".$id_partai."'
                            GROUP BY id_partai";
        $result = $this->db->query($sql);
        return $result->result();
    
    }

    function get_caleg4($id_partai) {

        $sql = "SELECT  id_dapil,
                        id_tps,
                        id_partai,
                        id_caleg,
                        no_partai,
                        nm_partai,
                        kode,
                        no_caleg,
                        nm_caleg,
                        suara,
                        rank
                            FROM tv_rank_suara
                            WHERE id_dapil=4 AND id_partai='".$id_partai."'
                            GROUP BY id_caleg";
        $result = $this->db->query($sql);
        return $result->result();
    
    }

    function get_supar3($id_partai) {

        $sql = "SELECT  id_dapil,
                        id_tps,
                        id_partai,
                        id_caleg,
                        no_partai,
                        nm_partai,
                        kode,
                        no_caleg,
                        nm_caleg,
                        SUM(suara) AS suara,
                        rank
                            FROM tv_rank_suara
                            WHERE id_dapil=3 AND id_partai='".$id_partai."'
                            GROUP BY id_partai";
        $result = $this->db->query($sql);
        return $result->result();
    
    }

    function get_caleg3($id_partai) {

        $sql = "SELECT  id_dapil,
                        id_tps,
                        id_partai,
                        id_caleg,
                        no_partai,
                        nm_partai,
                        kode,
                        no_caleg,
                        nm_caleg,
                        suara,
                        rank
                            FROM tv_rank_suara
                            WHERE id_dapil=3 AND id_partai='".$id_partai."'
                            GROUP BY id_caleg";
        $result = $this->db->query($sql);
        return $result->result();
    
    }

    function get_supar2($id_partai) {

        $sql = "SELECT  id_dapil,
                        id_tps,
                        id_partai,
                        id_caleg,
                        no_partai,
                        nm_partai,
                        kode,
                        no_caleg,
                        nm_caleg,
                        SUM(suara) AS suara,
                        rank
                            FROM tv_rank_suara
                            WHERE id_dapil=2 AND id_partai='".$id_partai."'
                            GROUP BY id_partai";
        $result = $this->db->query($sql);
        return $result->result();
    
    }

    function get_caleg2($id_partai) {

        $sql = "SELECT  id_dapil,
                        id_tps,
                        id_partai,
                        id_caleg,
                        no_partai,
                        nm_partai,
                        kode,
                        no_caleg,
                        nm_caleg,
                        suara,
                        rank
                            FROM tv_rank_suara
                            WHERE id_dapil=2 AND id_partai='".$id_partai."'
                            GROUP BY id_caleg";
        $result = $this->db->query($sql);
        return $result->result();
    
    }

    function get_supar($id_partai) {

        $sql = "SELECT  id_dapil,
                        id_tps,
                        id_partai,
                        id_caleg,
                        no_partai,
                        nm_partai,
                        kode,
                        no_caleg,
                        nm_caleg,
                        SUM(suara) AS suara,
                        rank
                            FROM tv_rank_suara
                            WHERE id_dapil=1 AND id_partai='".$id_partai."'
                            GROUP BY id_partai";
        $result = $this->db->query($sql);
        return $result->result();
    
    }

    function get_caleg($id_partai) {

        $sql = "SELECT  id_dapil,
                        id_tps,
                        id_partai,
                        id_caleg,
                        no_partai,
                        nm_partai,
                        kode,
                        no_caleg,
                        nm_caleg,
                        suara,
                        rank
                            FROM tv_rank_suara
                            WHERE id_dapil=1 AND id_partai='".$id_partai."'
                            GROUP BY id_caleg";
        $result = $this->db->query($sql);
        return $result->result();
    
    }

    function get_suara_partai(){
        $sql = "SELECT  id_dapil,
                        id_partai,
                        no_partai,
                        nm_partai,
                        SUM(suara) AS total
                         FROM tv_trx_caleg
                         GROUP BY id_partai";
        $result = $this->db->query($sql);
        return $result->result();

    }

    function get_partai() {

        $sql = "SELECT * FROM tb_partai";
        $result = $this->db->query($sql);
        return $result->result();
    
    }

}