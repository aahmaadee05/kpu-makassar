<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Login extends CI_Controller {

        function __construct() {
        parent::__construct();        
        $this->load->library('form_validation');
        $this->load->library('simple_login');
        $this->load->model('User_model');
        
        }


        public function index() {  

                // Fungsi Login  
                $valid = $this->form_validation;  
                $username = $this->input->post('username');  
                $password = $this->input->post('password');  
                $valid->set_rules('username','Username','required');  
                $valid->set_rules('password','Password','required');  

                if($valid->run()) {  
                        $this->simple_login->login($username,$password);  
                }  
                // End fungsi login
                //$data["view"]="login";
                $this->load->view('view_login');     
        }



        public function logout() {
               $this->simple_login->logout();
        } 

        public function save() {  
            //nik,nama,jk,no_telp,pekerjaan,email,username,`password`
            $data = array(
                'nama'=>$this->input->post("nama"),
                'jk'=>$this->input->post("jk"),
                'no_telp'=>$this->input->post("no_telp"),
                'pekerjaan'=>$this->input->post("pekerjaan"),
                'username'=>$this->input->post("username"),
                'password'=>md5($this->input->post('password')),
                'level'=>'User',
                'aktif'=>1
            );            
            if ($insert = $this->User_model->add_($data))
            echo json_encode(array("status" => TRUE));
        }           
}  