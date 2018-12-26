<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_caleg extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_caleg_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tb_caleg/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tb_caleg/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tb_caleg/index';
            $config['first_url'] = base_url() . 'tb_caleg/index';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tb_caleg_model->total_rows($q);
        $tb_caleg = $this->Tb_caleg_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tb_caleg_data' => $tb_caleg,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tb_caleg/tb_caleg_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_caleg_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_dapil' => $row->id_dapil,
		'id_partai' => $row->id_partai,
		'no_urut' => $row->no_urut,
		'nama' => $row->nama,
		'jk' => $row->jk,
		'alamat' => $row->alamat,
	    );
            $this->load->view('tb_caleg/tb_caleg_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_caleg'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tb_caleg/create_action'),
	    'id' => set_value('id'),
	    'id_dapil' => set_value('id_dapil'),
	    'id_partai' => set_value('id_partai'),
	    'no_urut' => set_value('no_urut'),
	    'nama' => set_value('nama'),
	    'jk' => set_value('jk'),
	    'alamat' => set_value('alamat'),
	);
        $data['dapil'] = $this->Tb_caleg_model->get_dapil();
        $data['partai'] = $this->Tb_caleg_model->get_partai();
        $this->load->view('tb_caleg/tb_caleg_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_dapil' => $this->input->post('id_dapil',TRUE),
		'id_partai' => $this->input->post('id_partai',TRUE),
		'no_urut' => $this->input->post('no_urut',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
	    );

            $this->Tb_caleg_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tb_caleg'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_caleg_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tb_caleg/update_action'),
		'id' => set_value('id', $row->id),
		'id_dapil' => set_value('id_dapil', $row->id_dapil),
		'id_partai' => set_value('id_partai', $row->id_partai),
		'no_urut' => set_value('no_urut', $row->no_urut),
		'nama' => set_value('nama', $row->nama),
		'jk' => set_value('jk', $row->jk),
		'alamat' => set_value('alamat', $row->alamat),
	    );
            $this->load->view('tb_caleg/tb_caleg_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_caleg'));
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
		'id_partai' => $this->input->post('id_partai',TRUE),
		'no_urut' => $this->input->post('no_urut',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
	    );

            $this->Tb_caleg_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tb_caleg'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_caleg_model->get_by_id($id);

        if ($row) {
            $this->Tb_caleg_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tb_caleg'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_caleg'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_dapil', 'id dapil', 'trim|required');
	$this->form_validation->set_rules('id_partai', 'id partai', 'trim|required');
	$this->form_validation->set_rules('no_urut', 'no urut', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('jk', 'jk', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tb_caleg.php */
/* Location: ./application/controllers/Tb_caleg.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-08-29 05:18:13 */
/* http://harviacode.com */