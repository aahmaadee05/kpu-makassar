<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_dapil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_dapil_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tb_dapil/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tb_dapil/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tb_dapil/index.html';
            $config['first_url'] = base_url() . 'tb_dapil/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tb_dapil_model->total_rows($q);
        $tb_dapil = $this->Tb_dapil_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tb_dapil_data' => $tb_dapil,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tb_dapil/tb_dapil_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_dapil_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'kode_dapil' => $row->kode_dapil,
		'nama' => $row->nama,
		'kursi' => $row->kursi,
	    );
            $this->load->view('tb_dapil/tb_dapil_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_dapil'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tb_dapil/create_action'),
	    'id' => set_value('id'),
	    'kode_dapil' => set_value('kode_dapil'),
	    'nama' => set_value('nama'),
	    'kursi' => set_value('kursi'),
	);
        $this->load->view('tb_dapil/tb_dapil_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kode_dapil' => $this->input->post('kode_dapil',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'kursi' => $this->input->post('kursi',TRUE),
	    );

            $this->Tb_dapil_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tb_dapil'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_dapil_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tb_dapil/update_action'),
		'id' => set_value('id', $row->id),
		'kode_dapil' => set_value('kode_dapil', $row->kode_dapil),
		'nama' => set_value('nama', $row->nama),
		'kursi' => set_value('kursi', $row->kursi),
	    );
            $this->load->view('tb_dapil/tb_dapil_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_dapil'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'kode_dapil' => $this->input->post('kode_dapil',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'kursi' => $this->input->post('kursi',TRUE),
	    );

            $this->Tb_dapil_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tb_dapil'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_dapil_model->get_by_id($id);

        if ($row) {
            $this->Tb_dapil_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tb_dapil'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_dapil'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_dapil', 'kode dapil', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('kursi', 'kursi', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tb_dapil.php */
/* Location: ./application/controllers/Tb_dapil.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-10-07 11:35:33 */
/* http://harviacode.com */