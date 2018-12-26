<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_kelurahan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_kelurahan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tb_kelurahan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tb_kelurahan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tb_kelurahan/index.html';
            $config['first_url'] = base_url() . 'tb_kelurahan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tb_kelurahan_model->total_rows($q);
        $tb_kelurahan = $this->Tb_kelurahan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tb_kelurahan_data' => $tb_kelurahan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tb_kelurahan/tb_kelurahan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_kelurahan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_kecamatan' => $row->id_kecamatan,
		'nama' => $row->nama,
	    );
            $this->load->view('tb_kelurahan/tb_kelurahan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_kelurahan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tb_kelurahan/create_action'),
	    'id' => set_value('id'),
	    'id_kecamatan' => set_value('id_kecamatan'),
	    'nama' => set_value('nama'),
	);
        $data['kecamatan'] = $this->Tb_kelurahan_model->get_kecamatan();
        $this->load->view('tb_kelurahan/tb_kelurahan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_kecamatan' => $this->input->post('id_kecamatan',TRUE),
		'nama' => $this->input->post('nama',TRUE),
	    );

            $this->Tb_kelurahan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tb_kelurahan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_kelurahan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tb_kelurahan/update_action'),
		'id' => set_value('id', $row->id),
		'id_kecamatan' => set_value('id_kecamatan', $row->id_kecamatan),
		'nama' => set_value('nama', $row->nama),
	    );
            $this->load->view('tb_kelurahan/tb_kelurahan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_kelurahan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_kecamatan' => $this->input->post('id_kecamatan',TRUE),
		'nama' => $this->input->post('nama',TRUE),
	    );

            $this->Tb_kelurahan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tb_kelurahan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_kelurahan_model->get_by_id($id);

        if ($row) {
            $this->Tb_kelurahan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tb_kelurahan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_kelurahan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_kecamatan', 'id kecamatan', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tb_kelurahan.php */
/* Location: ./application/controllers/Tb_kelurahan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-12-02 14:33:44 */
/* http://harviacode.com */