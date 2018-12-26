<?php 
/**
* 
*/
class Dapil extends CI_controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dapil_model');
        $this->load->helper('url');
        $this->load->library('dompdf_gen');
    }

    function lima(){

        $data['partai'] = $this->Dapil_model->get_partai();
        $this->load->view('dapil/lima', $data);
    }

    function empat(){

        $data['partai'] = $this->Dapil_model->get_partai();
        $this->load->view('dapil/empat', $data);
    }

    function tiga(){

        $data['partai'] = $this->Dapil_model->get_partai();
        $this->load->view('dapil/tiga', $data);
    }

    function dua(){

        $data['partai'] = $this->Dapil_model->get_partai();
        $this->load->view('dapil/dua', $data);
    }

    function satu(){

        $data['partai'] = $this->Dapil_model->get_partai();
        $this->load->view('dapil/satu', $data);
    }

    // function index(){

    //     $data['partai'] = $this->Dapil_model->get_partai();
    //     $this->load->view('Dapil/satu', $data);
    // }

    public function cetak_satu(){
        

            //query model semua barang
            $data['partai'] = $this->Dapil_model->get_partai();
            $this->load->view('dapil/cetak_satu',$data);
             
                    
            $paper_size='A4';
            //paper size
                    
            $orientation='portrait';
            //tipe format kertas
                    
            $html=$this ->output->get_output();
             
                    
            $this->dompdf->set_paper($paper_size,$orientation);
                    
            //Convert to PDF
                    
            $this->dompdf->load_html($html);            
            $this->dompdf->render();   
            $this->dompdf->stream("Hasil-suara.pdf" ,
                array('Attachment'=>0));
                
        } 

    public function cetak_dua(){
        

            //query model semua barang
            $data['partai'] = $this->Dapil_model->get_partai();
            $this->load->view('dapil/cetak_dua',$data);
             
                    
            $paper_size='A4';
            //paper size
                    
            $orientation='portrait';
            //tipe format kertas
                    
            $html=$this ->output->get_output();
             
                    
            $this->dompdf->set_paper($paper_size,$orientation);
                    
            //Convert to PDF
                    
            $this->dompdf->load_html($html);            
            $this->dompdf->render();   
            $this->dompdf->stream("Hasil-suara.pdf" ,
                array('Attachment'=>0));
                
        } 

    public function cetak_tiga(){
        

            //query model semua barang
            $data['partai'] = $this->Dapil_model->get_partai();
            $this->load->view('dapil/cetak_tiga',$data);
             
                    
            $paper_size='A4';
            //paper size
                    
            $orientation='portrait';
            //tipe format kertas
                    
            $html=$this ->output->get_output();
             
                    
            $this->dompdf->set_paper($paper_size,$orientation);
                    
            //Convert to PDF
                    
            $this->dompdf->load_html($html);            
            $this->dompdf->render();   
            $this->dompdf->stream("Hasil-suara.pdf" ,
                array('Attachment'=>0));
                
        } 

    public function cetak_empat(){
        

            //query model semua barang
            $data['partai'] = $this->Dapil_model->get_partai();
            $this->load->view('dapil/cetak_empat',$data);
             
                    
            $paper_size='A4';
            //paper size
                    
            $orientation='portrait';
            //tipe format kertas
                    
            $html=$this ->output->get_output();
             
                    
            $this->dompdf->set_paper($paper_size,$orientation);
                    
            //Convert to PDF
                    
            $this->dompdf->load_html($html);            
            $this->dompdf->render();   
            $this->dompdf->stream("Hasil-suara.pdf" ,
                array('Attachment'=>0));
                
        } 

    public function cetak_lima(){
        

            //query model semua barang
            $data['partai'] = $this->Dapil_model->get_partai();
            $this->load->view('dapil/cetak_lima',$data);
             
                    
            $paper_size='A4';
            //paper size
                    
            $orientation='portrait';
            //tipe format kertas
                    
            $html=$this ->output->get_output();
             
                    
            $this->dompdf->set_paper($paper_size,$orientation);
                    
            //Convert to PDF
                    
            $this->dompdf->load_html($html);            
            $this->dompdf->render();   
            $this->dompdf->stream("Hasil-suara.pdf" ,
                array('Attachment'=>0));
                
        } 
     

}

?>