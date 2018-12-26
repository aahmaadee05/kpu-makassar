<?php 
/**
* 
*/
class Input extends CI_controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Input_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    function index(){

        // $data['caleg_data'] = $this->Input_model->get_dapil_satu();
        $data['partai'] = $this->Input_model->get_partai();
        $this->load->view('frontend/input_suara', $data);
    }

    public function create() 
    {
        $data = array(
        'id' => set_value('id'),
        'id_tps' => set_value('id_tps'),
        'id_caleg' => set_value('id_caleg'),
        'suara' => set_value('suara'),
    );
        $data['partai'] = $this->Input_model->get_partai();
        $this->load->view('frontend/input_suara', $data);
    }
    
    public function create_action() 
    {
        $id_tps = $this->session->userdata('id_tps');
        $chek = $this->db->get_where('tb_trx_caleg', array('id_tps'=>$id_tps));

        if ($chek->num_rows() > 0) {

            $this->session->set_flashdata('message', 'Anda Sudah Menginpun Suara');
            redirect(site_url('input/create'));

        } else {

            $dapil = $this->Input_model->get_dapil($this->session->userdata('id_tps'));
            $delete = $this->Input_model->delete($dapil->id_dapil);
            $partai = $this->Input_model->get_partai();
            $i = 1;
            foreach ($partai as $paar)
            {
                $tps = $this->Input_model->get_dapil($this->session->userdata('id_tps'));
                $caleg_data = $this->Input_model->get_list_tps($tps->id_dapil,$paar->id);
                $j = 1;
                foreach ($caleg_data as $caleg)
                {
                     
                    $data = array(
                    'id_tps' => $this->session->userdata('id_tps'),
                    'id_caleg' => $caleg->id,
                    'suara' =>  $this->input->post('suara')[$i.$j],
                    );

                        $this->Input_model->insert($data);

                $j++;
                }

                $rangking = $this->Input_model->get_rank($tps->id_dapil,$paar->id);
                $k = 1;
                foreach ($rangking as $rank) {
                    $data2 =  array(
                            'id_tps' => $this->session->userdata('id_tps'),
                            'id_partai' => $rank->id_partai,
                            'id_caleg' => $rank->id_caleg,
                            'id_dapil' => $rank->id_dapil,
                            'suara' => $rank->tot,
                            'rank' => $k
                        );

                        $this->Input_model->insert_sementara($data2);
                    
                    $k++;
                }

                $delete2 = $this->Input_model->delete_dapil($tps->id_dapil);
                $partai_su = $this->Input_model->get_tot_partai($tps->id_dapil);
                foreach ($partai_su as $supar) {
                    $data3 =  array(
                            'id_tps' => $this->session->userdata('id_tps'),
                            'id_partai' => $supar->id_partai,
                            'id_dapil' => $supar->id_dapil,
                            'suara' => $supar->total
                        );

                        $this->Input_model->insert_partai($data3);                    
                }
                
            $i++;
            }


            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('input'));
        }
    }
     

}

?>