<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_kecamatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_kecamatan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tb_kecamatan/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tb_kecamatan/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tb_kecamatan/index';
            $config['first_url'] = base_url() . 'tb_kecamatan/index';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tb_kecamatan_model->total_rows($q);
        $tb_kecamatan = $this->Tb_kecamatan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tb_kecamatan_data' => $tb_kecamatan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tb_kecamatan/tb_kecamatan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_kecamatan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_dapil' => $row->id_dapil,
		'nama' => $row->nama,
	    );
            $this->load->view('tb_kecamatan/tb_kecamatan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_kecamatan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tb_kecamatan/create_action'),
	    'id' => set_value('id'),
	    'id_dapil' => set_value('id_dapil'),
	    'nama' => set_value('nama'),
	);
        $data['dapil'] = $this->Tb_kecamatan_model->get_dapil();
        $this->load->view('tb_kecamatan/tb_kecamatan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_dapil' => $this->input->post('id_dapil',TRUE),
		'nama' => $this->input->post('nama',TRUE),
	    );

            $this->Tb_kecamatan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tb_kecamatan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_kecamatan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tb_kecamatan/update_action'),
		'id' => set_value('id', $row->id),
		'id_dapil' => set_value('id_dapil', $row->id_dapil),
		'nama' => set_value('nama', $row->nama),
	    );
            $this->load->view('tb_kecamatan/tb_kecamatan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_kecamatan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_dapil' => $this->input->post('id_dapil',TRUE),
		'nama' => $this->input->post('nama',TRUE),
	    );

            $this->Tb_kecamatan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tb_kecamatan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_kecamatan_model->get_by_id($id);

        if ($row) {
            $this->Tb_kecamatan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tb_kecamatan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_kecamatan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_dapil', 'id dapil', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tb_kecamatan.php */
/* Location: ./application/controllers/Tb_kecamatan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-11-11 07:29:55 */
/* http://harviacode.com */