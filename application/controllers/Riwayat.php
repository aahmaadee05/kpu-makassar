<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Riwayat extends CI_Controller {  
        public function __construct() {
                parent::__construct();
                $this->simple_login->cek_login();
				$this->load->helper(array('form', 'url', 'date'));
				$this->load->library('session');
                $this->load->model('Hasil_model');
                $this->load->model('Diagnosa_model');
                $this->load->library('dompdf_gen');

               //$this->load->model('relasi_model');
		}

        public function index()   
        {
            $this->load->view('frontend/header');
            $this->load->view('frontend/riwayat');
            $this->load->view('frontend/footer'); 
        }

        public function cetak($id){
        
            $data['title'] ='Hasil Diagnosa';
            //judul title
            $row=$this->Diagnosa_model->get_hasil_where($id);                    
            $data['row']=$this->Diagnosa_model->get_hasil_where($id);        
            $gejala = $row->gejala;
            //echo "Gejala".$row->gejala;
            

            $this->Diagnosa_model->tmp_gejala_delete();

            $data["listGejala"] = $this->Diagnosa_model->get_list_by_id($gejala);
                        
            $data['nm_penyakit']=$this->Diagnosa_model->get_penyakit_where($row->kd_penyakit); 
            $data['solusi'] = $this->Diagnosa_model->get_solusi($data['nm_penyakit']->id_penyakit);
            
            //query model semua barang
             
                    
            $this->load->view('frontend/cetak_diagnosa',$data);
             
                    
            $paper_size='A4';
            //paper size
                    
            $orientation='portrait';
            //tipe format kertas
                    
            $html=$this ->output->get_output();
             
                    
            $this->dompdf->set_paper($paper_size,$orientation);
                    
            //Convert to PDF
                    
            $this->dompdf->load_html($html);            
            $this->dompdf->render();   
            $this->dompdf->stream("Hasil-diagnosa.pdf" ,
                array('Attachment'=>0));
                
        } 

        public function export($tgl1,$tgl2){
        
            $data['title'] ='Data Diagnosa';
            //judul title
            // $tgl1=$this->input->post('tgl_1');
            // $tgl2=$this->input->post('tgl_2');
            
            $data['tgl1']=$tgl1;        
            $data['tgl2']=$tgl2;        
            $data['detail']=$this->Hasil_model->get_export($tgl1,$tgl2);
            //query model semua barang
             
                    
            $this->load->view('backend/export',$data);
             
                    
            $paper_size='A4';
            //paper size
                    
            $orientation='portrait';
            //tipe format kertas
                    
            $html=$this ->output->get_output();
             
                    
            $this->dompdf->set_paper($paper_size,$orientation);
                    
            //Convert to PDF
                    
            $this->dompdf->load_html($html);            
            $this->dompdf->render();   
            $this->dompdf->stream("Data-diagnosa.pdf" ,
                array('Attachment'=>0));
                
        } 

        
       
}