<?php 
/**
* 
*/
class Hasil extends CI_controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Hasil_model');
        $this->load->helper('url');
        $this->load->library('dompdf_gen');
    }

    function index(){

        $data['satu'] = $this->Hasil_model->get_hasil_satu();
        $data['dua'] = $this->Hasil_model->get_hasil_dua();
        $data['tiga'] = $this->Hasil_model->get_hasil_tiga();
        $data['empat'] = $this->Hasil_model->get_hasil_empat();
        $data['lima'] = $this->Hasil_model->get_hasil_lima();
        $this->load->view('Hasil/Akhir', $data);
    }

    // function index(){

    //     $data['partai'] = $this->Dapil_model->get_partai();
    //     $this->load->view('Dapil/satu', $data);
    // }

    public function cetak_1(){
        

            //query model semua barang
            $data['satu'] = $this->Hasil_model->get_hasil_satu();
            $this->load->view('Hasil/cetak_1',$data);
             
                    
            $paper_size='A4';
            //paper size
                    
            $orientation='Landscape';
            //tipe format kertas
                    
            $html=$this ->output->get_output();
             
                    
            $this->dompdf->set_paper($paper_size,$orientation);
                    
            //Convert to PDF
                    
            $this->dompdf->load_html($html);            
            $this->dompdf->render();   
            $this->dompdf->stream("Hasil-Caleg-Terpilih.pdf" ,
                array('Attachment'=>0));
                
        } 

    public function cetak_2(){
        

            //query model semua barang
            $data['dua'] = $this->Hasil_model->get_hasil_dua();
            $this->load->view('Hasil/cetak_2',$data);
             
                    
            $paper_size='A4';
            //paper size
                    
            $orientation='Landscape';
            //tipe format kertas
                    
            $html=$this ->output->get_output();
             
                    
            $this->dompdf->set_paper($paper_size,$orientation);
                    
            //Convert to PDF
                    
            $this->dompdf->load_html($html);            
            $this->dompdf->render();   
            $this->dompdf->stream("Hasil-Caleg-Terpilih.pdf" ,
                array('Attachment'=>0));
                
        }

    public function cetak_3(){
        

            //query model semua barang
            $data['tiga'] = $this->Hasil_model->get_hasil_tiga();
            $this->load->view('Hasil/cetak_3',$data);
             
                    
            $paper_size='A4';
            //paper size
                    
            $orientation='Landscape';
            //tipe format kertas
                    
            $html=$this ->output->get_output();
             
                    
            $this->dompdf->set_paper($paper_size,$orientation);
                    
            //Convert to PDF
                    
            $this->dompdf->load_html($html);            
            $this->dompdf->render();   
            $this->dompdf->stream("Hasil-Caleg-Terpilih.pdf" ,
                array('Attachment'=>0));
                
        }

    public function cetak_4(){
        

            //query model semua barang
            $data['empat'] = $this->Hasil_model->get_hasil_empat();
            $this->load->view('Hasil/cetak_4',$data);
             
                    
            $paper_size='A4';
            //paper size
                    
            $orientation='Landscape';
            //tipe format kertas
                    
            $html=$this ->output->get_output();
             
                    
            $this->dompdf->set_paper($paper_size,$orientation);
                    
            //Convert to PDF
                    
            $this->dompdf->load_html($html);            
            $this->dompdf->render();   
            $this->dompdf->stream("Hasil-Caleg-Terpilih.pdf" ,
                array('Attachment'=>0));
                
        }

    public function cetak_5(){
        

            //query model semua barang
            $data['lima'] = $this->Hasil_model->get_hasil_lima();
            $this->load->view('Hasil/cetak_5',$data);
             
                    
            $paper_size='A4';
            //paper size
                    
            $orientation='Landscape';
            //tipe format kertas
                    
            $html=$this ->output->get_output();
             
                    
            $this->dompdf->set_paper($paper_size,$orientation);
                    
            //Convert to PDF
                    
            $this->dompdf->load_html($html);            
            $this->dompdf->render();   
            $this->dompdf->stream("Hasil-Caleg-Terpilih.pdf" ,
                array('Attachment'=>0));
                
        }
     

}

?>