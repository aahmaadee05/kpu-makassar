<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'users/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'users/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'users/index';
            $config['first_url'] = base_url() . 'users/index';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Users_model->total_rows($q);
        $users = $this->Users_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'users_data' => $users,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->load->view('users/users_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Users_model->get_by_id($id);
        if ($row) {
            $data = array(
        'id' => $row->id,
        'id_dapil' => $row->id_dapil,
        'id_kecamatan' => $row->id_kecamatan,
        'id_kelurahan' => $row->id_kelurahan,
		'id_tps' => $row->id_tps,
		'nama' => $row->nama,
		'jk' => $row->jk,
		'no_telp' => $row->no_telp,
		'pekerjaan' => $row->pekerjaan,
		'username' => $row->username,
		'password' => $row->password,
		'level' => $row->level,
		'aktif' => $row->aktif,
	    );
            $this->load->view('users/users_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('users/create_action'),
        'id' => set_value('id'),
        'id_dapil' => set_value('id_dapil'),
        'id_kecamatan' => set_value('id_kecamatan'),
        'id_kelurahan' => set_value('id_kelurahan'),
	    'id_tps' => set_value('id_tps'),
	    'nama' => set_value('nama'),
	    'jk' => set_value('jk'),
	    'no_telp' => set_value('no_telp'),
	    'pekerjaan' => set_value('pekerjaan'),
	    'username' => set_value('username'),
	    'password' => set_value('password'),
	    'level' => set_value('level'),
	    'aktif' => set_value('aktif'),
	);
        $data['dapil'] = $this->Users_model->get_dapil();
        $this->load->view('users/users_form', $data);
    }

    public function get_kecamatan($id)
    {
        // $id= $this->input->post('id');
        $data = $this->Users_model->get_kecamatan(array('id_dapil' => $id))->result();
        echo json_encode($data);
    }

    public function get_kelurahan($id)
    {
        // $id= $this->input->post('id');
        $data = $this->Users_model->get_kelurahan(array('id_kecamatan' => $id))->result();
        echo json_encode($data);
    }

    public function get_tps($id)
    {
        // $id= $this->input->post('id');
        $data = $this->Users_model->get_tps(array('id_kelurahan' => $id))->result();
        echo json_encode($data);
    }
    
    public function create_action() 
    {
        $id_tps = $this->input->post('id_tps');
        $username = $this->input->post('username');
        $chek = $this->db->get_where('users', array('id_tps'=>$id_tps));
        $chek1 = $this->db->get_where('users', array('username'=>$username));

        if ($chek->num_rows() > 0 || $chek1->num_rows() > 0) {

            $this->session->set_flashdata('message', 'Username atau Kecamatan Sudah Ada');
            redirect(site_url('users/create'));

        } else {
            $data = array(
            'id_dapil' => $this->input->post('id_dapil',TRUE),
            'id_kecamatan' => $this->input->post('id_kecamatan',TRUE),
            'id_kelurahan' => $this->input->post('id_kelurahan',TRUE),
            'id_tps' => $this->input->post('id_tps',TRUE),
    		'nama' => $this->input->post('nama',TRUE),
    		'jk' => $this->input->post('jk',TRUE),
    		'no_telp' => $this->input->post('no_telp',TRUE),
    		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
    		'username' => $this->input->post('username',TRUE),
    		'password' => md5($this->input->post('password',TRUE)),
    		'level' => 'User',
    		'aktif' => 1,
	       );

            $this->Users_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('users'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Users_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('users/update_action'),
        'id' => set_value('id', $row->id),
        'id_dapil' => set_value('id_dapil', $row->id_dapil),
        'id_kecamatan' => set_value('id_kecamatan', $row->id_kecamatan),
        'id_kelurahan' => set_value('id_kelurahan', $row->id_kelurahan),
		'id_tps' => set_value('id_tps', $row->id_tps),
		'nama' => set_value('nama', $row->nama),
		'jk' => set_value('jk', $row->jk),
		'no_telp' => set_value('no_telp', $row->no_telp),
		'pekerjaan' => set_value('pekerjaan', $row->pekerjaan),
		'username' => set_value('username', $row->username),
		'password' => set_value('password', $row->password),
		'level' => set_value('level', $row->level),
		'aktif' => set_value('aktif', $row->aktif),
	    );
            $data['dapil'] = $this->Users_model->get_dapil();
            $this->load->view('users/users_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users'));
        }
    }
    
    public function update_action() 
    {
        $id_tps = $this->input->post('id_tps');
        $username = $this->input->post('username');
        $chek = $this->db->get_where('users', array('id_tps'=>$id_tps));
        $chek1 = $this->db->get_where('users', array('username'=>$username));

        if ($chek->num_rows() > 0 || $chek1->num_rows() > 0) {

            $this->session->set_flashdata('message', 'username atau Kecamatan Sudah Ada');
            redirect(site_url('users/create'));

        } else {
            $data = array(
        'id_dapil' => $this->input->post('id_dapil',TRUE),
        'id_kecamatan' => $this->input->post('id_kecamatan',TRUE),
        'id_kelurahan' => $this->input->post('id_kelurahan',TRUE),
        'id_tps' => $this->input->post('id_tps',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => md5($this->input->post('password',TRUE)),
        'level' => 'User',
        'aktif' => 1,
	    );

            $this->Users_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('users'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Users_model->get_by_id($id);

        if ($row) {
            $this->Users_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('users'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users'));
        }
    }

    public function _rules() 
    {
    $this->form_validation->set_rules('id_dapil', 'id dapil', 'trim|required');
    $this->form_validation->set_rules('id_kecamatan', 'id kecamatan', 'trim|required');
    $this->form_validation->set_rules('id_kelurahan', 'id kelurahan', 'trim|required');
    $this->form_validation->set_rules('id_tps', 'id tps', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('jk', 'jk', 'trim|required');
	$this->form_validation->set_rules('no_telp', 'no telp', 'trim|required');
	$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('level', 'level', 'trim|required');
	$this->form_validation->set_rules('aktif', 'aktif', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-04 19:27:38 */
/* http://harviacode.com */