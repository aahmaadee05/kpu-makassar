<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_partai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_partai_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tb_partai/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tb_partai/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tb_partai/index';
            $config['first_url'] = base_url() . 'tb_partai/index';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tb_partai_model->total_rows($q);
        $tb_partai = $this->Tb_partai_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tb_partai_data' => $tb_partai,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tb_partai/tb_partai_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_partai_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'no_urut' => $row->no_urut,
		'kode' => $row->kode,
		'nama' => $row->nama,
	    );
            $this->load->view('tb_partai/tb_partai_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_partai'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tb_partai/create_action'),
	    'id' => set_value('id'),
	    'no_urut' => set_value('no_urut'),
	    'kode' => set_value('kode'),
	    'nama' => set_value('nama'),
	);
        $this->load->view('tb_partai/tb_partai_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'no_urut' => $this->input->post('no_urut',TRUE),
		'kode' => $this->input->post('kode',TRUE),
		'nama' => $this->input->post('nama',TRUE),
	    );

            $this->Tb_partai_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tb_partai'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_partai_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tb_partai/update_action'),
		'id' => set_value('id', $row->id),
		'no_urut' => set_value('no_urut', $row->no_urut),
		'kode' => set_value('kode', $row->kode),
		'nama' => set_value('nama', $row->nama),
	    );
            $this->load->view('tb_partai/tb_partai_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_partai'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'no_urut' => $this->input->post('no_urut',TRUE),
		'kode' => $this->input->post('kode',TRUE),
		'nama' => $this->input->post('nama',TRUE),
	    );

            $this->Tb_partai_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tb_partai'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_partai_model->get_by_id($id);

        if ($row) {
            $this->Tb_partai_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tb_partai'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_partai'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('no_urut', 'no urut', 'trim|required');
	$this->form_validation->set_rules('kode', 'kode', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tb_partai.php */
/* Location: ./application/controllers/Tb_partai.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-08-23 00:33:23 */
/* http://harviacode.com */