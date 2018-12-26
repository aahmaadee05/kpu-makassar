<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Metode_model extends CI_Model
{

    public $table = 'tv_trx_caleg';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    function get_dapil(){
        $this->db->order_by('id','ASC');
        $tb_dapil = $this->db->get('tb_dapil');
        return $tb_dapil->result_array();
    }
    
    function get_kursi($id_dapil){
        $sql = "SELECT * FROM tb_dapil
                            where id=".$id_dapil." ";
        $result = $this->db->query($sql);
        return $result->row();
    }

    function get_hitung($id_dapil){
        $sql = "SELECT  id_dapil,
                        id_partai,
                        no_urut,
                        kode,
                        nama,
                        suara,
                        suara/1 AS N1,
                        suara/3 AS N2,
                        suara/5 AS N3,
                        suara/7 AS N4,
                        suara/9 AS N5
                         FROM tv_trx_partai
                         WHERE id_dapil='".$id_dapil."' ";
        $result = $this->db->query($sql);
        return $result->result();
    }

    function get_ranking($id_dapil,$limit){
        $sql = "SELECT * FROM
                    (
                    select 
                        id_dapil,
                        id_partai,
                        kode, 
                        nama,
                       suara/1 AS Ranking
                    from tv_trx_partai 
                    where id_dapil='".$id_dapil."'

                    union

                    select 
                        id_dapil,
                        id_partai,
                        kode, 
                        nama,
                       suara/3 AS Ranking
                    from tv_trx_partai 
                    where id_dapil='".$id_dapil."'

                    union

                    select  
                        id_dapil,
                        id_partai,
                        kode, 
                        nama,
                       suara/5 AS Ranking
                    from tv_trx_partai 
                    where id_dapil='".$id_dapil."'

                    union

                    select  
                        id_dapil,
                        id_partai,
                        kode, 
                        nama,
                       suara/7 AS Ranking
                    from tv_trx_partai 
                    where id_dapil='".$id_dapil."'

                    union

                    select  
                        id_dapil,
                        id_partai,
                        kode, 
                        nama,
                       suara/9 AS Ranking
                    from tv_trx_partai 
                    where id_dapil='".$id_dapil."'


                    ) as ve
                    order by Ranking desc
                    limit ".$limit."
                        
                    ";
        $result = $this->db->query($sql);
        return $result->result();
    }

    function get_kursi_partai($id_dapil,$limit) {
        $sql = "select kode, COUNT(kode) as jm_kursi
                        from
                        (
                        SELECT * FROM
                            (
                            select 
                                kode,
                               suara/1 AS Ranking
                            from tv_trx_partai 
                            where id_dapil='".$id_dapil."'

                            union

                            select 
                                kode,
                               suara/3 AS Ranking
                            from tv_trx_partai 
                            where id_dapil='".$id_dapil."'

                            union

                            select 
                                kode,
                               suara/5 AS Ranking
                            from tv_trx_partai 
                            where id_dapil='".$id_dapil."'

                            union

                            select 
                                kode,
                               suara/7 AS Ranking
                            from tv_trx_partai 
                            where id_dapil='".$id_dapil."'

                            union

                            select 
                                kode,
                               suara/9 AS Ranking
                            from tv_trx_partai 
                            where id_dapil='".$id_dapil."'


                            ) as ve
                            order by Ranking desc
                            limit ".$limit."
                        ) as a
                        GROUP by kode
                        ";
        $result = $this->db->query($sql);
        return $result->result();
    }

    function get_hasil($id_dapil,$limit) {
        $sql = "SELECT * FROM
                        (
                        select c.id_dapil, c.id_partai, p.kode, p.nama, g.id as id_caleg, g.no_urut, g.nama as caleg, c.rank, c.suara
                        from
                             tb_caleg_sementara c 
                             left join tb_partai p on c.id_partai=p.id
                             left JOIN tb_caleg g on c.id_caleg=g.id
                        where c.id_dapil='".$id_dapil."'        
                        ) as b,

                        (         
                            select Ranking, kode, COUNT(kode) as jm_kursi
                            from
                            (
                            SELECT * FROM
                                (
                                select 
                                    id_dapil,
                                    id_partai,
                                    kode, 
                                    nama,
                                   suara/1 AS Ranking
                                from tv_trx_partai 
                                where id_dapil='".$id_dapil."'

                                union

                                select  
                                    id_dapil,
                                    id_partai,
                                    kode, 
                                    nama,
                                   suara/3 AS Ranking
                                from tv_trx_partai 
                                where id_dapil='".$id_dapil."'

                                union

                                select  
                                    id_dapil,
                                    id_partai,
                                    kode, 
                                    nama,
                                   suara/5 AS Ranking
                                from tv_trx_partai 
                                where id_dapil='".$id_dapil."'

                                union

                                select  
                                    id_dapil,
                                    id_partai,
                                    kode, 
                                    nama,
                                   suara/7 AS Ranking
                                from tv_trx_partai 
                                where id_dapil='".$id_dapil."'

                                union

                                select  
                                    id_dapil,
                                    id_partai,
                                    kode, 
                                    nama,
                                   suara/9 AS Ranking
                                from tv_trx_partai 
                                where id_dapil='".$id_dapil."'


                                ) as a
                                order by Ranking desc
                                limit ".$limit."
                            ) a 
                            GROUP by kode
                        ) as a
        
                    where b.kode=a.kode and b.rank<=a.jm_kursi

                        ";
        $result = $this->db->query($sql);
        return $result->result();
    }

    function insert_hasil($data2)
    {
        $this->db->insert('tb_hasil', $data2);
    }

    public function delete_hasil($id_dapil)
    {
        $this->db->where('id_dapil', $id_dapil);
        $this->db->delete('tb_hasil');
    }

    function insert_pkursi($data1)
    {
        $this->db->insert('tb_pkursi', $data1);
    }

    public function delete_pkursi($id_dapil)
    {
        $this->db->where('id_dapil', $id_dapil);
        $this->db->delete('tb_pkursi');
    }

}