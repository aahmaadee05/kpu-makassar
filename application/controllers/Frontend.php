<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dapil_model');
        $this->load->helper('url');
    }

    function lima(){

        $data['partai'] = $this->Dapil_model->get_partai();
        $this->load->view('frontend/lima', $data);
    }

    function empat(){

        $data['partai'] = $this->Dapil_model->get_partai();
        $this->load->view('frontend/empat', $data);
    }

    function tiga(){

        $data['partai'] = $this->Dapil_model->get_partai();
        $this->load->view('frontend/tiga', $data);
    }

    function dua(){

        $data['partai'] = $this->Dapil_model->get_partai();
        $this->load->view('frontend/dua', $data);
    }

    function satu(){

        $data['partai'] = $this->Dapil_model->get_partai();
        $this->load->view('frontend/satu', $data);
    }

	public function index()
	{
        $data['partai'] = $this->Dapil_model->get_suara_partai();
		$this->load->view('frontend/frontend', $data);
	}
}
