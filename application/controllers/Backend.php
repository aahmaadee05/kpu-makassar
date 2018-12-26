<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->simple_login->cek_login();
        $this->load->model('Tb_dapil_model');
        $this->load->model('Tb_caleg_model');
        $this->load->model('Tb_partai_model');
        $this->load->model('Tb_kecamatan_model');
        $this->load->model('Tb_kelurahan_model');
        $this->load->model('Tb_tps_model');
	}

	public function index()
	{
		$data['dapil'] = $this->Tb_dapil_model->get_all();
		$data['caleg'] = $this->Tb_caleg_model->get_all();
		$data['partai'] = $this->Tb_partai_model->get_all();
		$data['kecamatan'] = $this->Tb_kecamatan_model->get_all();
		$data['kelurahan'] = $this->Tb_kelurahan_model->get_all();
		$data['tps'] = $this->Tb_tps_model->get_all();
		$this->load->view('Backend/dashboard', $data);
	}

}