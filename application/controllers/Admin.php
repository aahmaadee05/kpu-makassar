<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->simple_login->cek_login();
        $this->load->helper(array('form', 'url', 'date'));
	}

	public function index() {              
        $this->load->view('view_login');
        }

}

/* End of file Adm in.php */
/* Location: ./application/controllers/Admin.php */