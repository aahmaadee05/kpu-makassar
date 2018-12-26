<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hasil_model extends CI_Model
{

    public $table = 'tb_hasil';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }


    function get_hasil_satu()
    {
        $sql = "select a.*, h2.no_urut, h2.caleg, h2.suara
                from 
                    (
                    select ax.*, 
                        case when ax.id_partai=bx.id_partai then
                            @rank:=@rank+1
                        else
                            @rank:=1
                        end as rank
                        
                    from 
                        (
                        select h.*, @no1:=@no1+1 as no
                        from tb_pkursi h, (select @no1:=0) as a
                        order by h.id_partai, h.ranking desc
                        ) as ax
                        
                        left join 
                        
                        (
                        select h.*, @no2:=@no2+1 as no
                        from tb_pkursi h, (select @no2:=1) as a
                        order by h.id_partai, h.ranking desc
                        ) as bx
                        
                        on ax.no=bx.no,
                        
                        (select @rank:=1) as a
                    ) as a
                    
                    left join tb_hasil h2 on h2.rank=a.rank and h2.id_partai=a.id_partai
                
                WHERE a.id_dapil='1'
                order by a.ranking desc";
        $result = $this->db->query($sql);
        return $result->result();

    }

    function get_hasil_dua() {

        $sql = "select a.*, h2.no_urut, h2.caleg, h2.suara
                from 
                    (
                    select ax.*, 
                        case when ax.id_partai=bx.id_partai then
                            @rank:=@rank+1
                        else
                            @rank:=1
                        end as rank
                        
                    from 
                        (
                        select h.*, @no1:=@no1+1 as no
                        from tb_pkursi h, (select @no1:=0) as a
                        order by h.id_partai, h.ranking desc
                        ) as ax
                        
                        left join 
                        
                        (
                        select h.*, @no2:=@no2+1 as no
                        from tb_pkursi h, (select @no2:=1) as a
                        order by h.id_partai, h.ranking desc
                        ) as bx
                        
                        on ax.no=bx.no,
                        
                        (select @rank:=1) as a
                    ) as a
                    
                    left join tb_hasil h2 on h2.rank=a.rank and h2.id_partai=a.id_partai
                
                WHERE a.id_dapil='2'
                order by a.ranking desc";
        $result = $this->db->query($sql);
        return $result->result();
    
    }
    
    function get_hasil_tiga() {

        $sql = "select a.*, h2.no_urut, h2.caleg, h2.suara
                from 
                    (
                    select ax.*, 
                        case when ax.id_partai=bx.id_partai then
                            @rank:=@rank+1
                        else
                            @rank:=1
                        end as rank
                        
                    from 
                        (
                        select h.*, @no1:=@no1+1 as no
                        from tb_pkursi h, (select @no1:=0) as a
                        order by h.id_partai, h.ranking desc
                        ) as ax
                        
                        left join 
                        
                        (
                        select h.*, @no2:=@no2+1 as no
                        from tb_pkursi h, (select @no2:=1) as a
                        order by h.id_partai, h.ranking desc
                        ) as bx
                        
                        on ax.no=bx.no,
                        
                        (select @rank:=1) as a
                    ) as a
                    
                    left join tb_hasil h2 on h2.rank=a.rank and h2.id_partai=a.id_partai
                
                WHERE a.id_dapil='3'
                order by a.ranking desc";
        $result = $this->db->query($sql);
        return $result->result();
    
    }
    
    function get_hasil_empat() {

        $sql = "select a.*, h2.no_urut, h2.caleg, h2.suara
                from 
                    (
                    select ax.*, 
                        case when ax.id_partai=bx.id_partai then
                            @rank:=@rank+1
                        else
                            @rank:=1
                        end as rank
                        
                    from 
                        (
                        select h.*, @no1:=@no1+1 as no
                        from tb_pkursi h, (select @no1:=0) as a
                        order by h.id_partai, h.ranking desc
                        ) as ax
                        
                        left join 
                        
                        (
                        select h.*, @no2:=@no2+1 as no
                        from tb_pkursi h, (select @no2:=1) as a
                        order by h.id_partai, h.ranking desc
                        ) as bx
                        
                        on ax.no=bx.no,
                        
                        (select @rank:=1) as a
                    ) as a
                    
                    left join tb_hasil h2 on h2.rank=a.rank and h2.id_partai=a.id_partai
                
                WHERE a.id_dapil='4'
                order by a.ranking desc";
        $result = $this->db->query($sql);
        return $result->result();
    
    }
    
    function get_hasil_lima() {

        $sql = "select a.*, h2.no_urut, h2.caleg, h2.suara
                from 
                    (
                    select ax.*, 
                        case when ax.id_partai=bx.id_partai then
                            @rank:=@rank+1
                        else
                            @rank:=1
                        end as rank
                        
                    from 
                        (
                        select h.*, @no1:=@no1+1 as no
                        from tb_pkursi h, (select @no1:=0) as a
                        order by h.id_partai, h.ranking desc
                        ) as ax
                        
                        left join 
                        
                        (
                        select h.*, @no2:=@no2+1 as no
                        from tb_pkursi h, (select @no2:=1) as a
                        order by h.id_partai, h.ranking desc
                        ) as bx
                        
                        on ax.no=bx.no,
                        
                        (select @rank:=1) as a
                    ) as a
                    
                    left join tb_hasil h2 on h2.rank=a.rank and h2.id_partai=a.id_partai
                
                WHERE a.id_dapil='6'
                order by a.ranking desc";
        $result = $this->db->query($sql);
        return $result->result();
    
    }

}