<?php 
/**
* 
*/
class Metode extends CI_controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Metode_model');
        $this->load->helper('url');
    }

    function index(){

        $data['dapil'] = $this->Metode_model->get_dapil();
        $this->load->view('Metode/Sainte_lague', $data);
    }
    
    public function create_action() 
    {
        $data['dapil'] = $this->Metode_model->get_dapil();
        $id_dapil = $this->input->post('id_dapil');
        $data['partai'] = $this->Metode_model->get_hitung($id_dapil);
        $limit = $this->Metode_model->get_kursi($id_dapil);
        $data['ranking'] = $this->Metode_model->get_ranking($id_dapil,$limit->kursi);
        $data['kursi_partai'] = $this->Metode_model->get_kursi_partai($id_dapil,$limit->kursi);
        $data['hasil'] = $this->Metode_model->get_hasil($id_dapil,$limit->kursi);
        $data['kursi'] = $this->Metode_model->kursi();
        $this->load->view('Metode/penyelesaian', $data);
        
        $chek = $this->db->get_where('tb_hasil', array('id_dapil'=>$id_dapil));

        if ($chek->num_rows() > 0) {
            
            $delete1 = $this->Metode_model->delete_pkursi($id_dapil);
            $ranking = $this->Metode_model->get_ranking($id_dapil,$limit->kursi);
            $z = 1;
            foreach ($ranking as $rankingl) {
                $data1 = array(
                    'id_dapil' => $rankingl->id_dapil,
                    'id_partai' => $rankingl->id_partai,
                    'nama' => $rankingl->nama,
                    'ranking' => $rankingl->Ranking,
                    'kursi' => $z

               );

                $this->Metode_model->insert_pkursi($data1);
                
            $z++;
            }
            
            $delete = $this->Metode_model->delete_hasil($id_dapil);
            $hasil = $this->Metode_model->get_hasil($id_dapil,$limit->kursi);
            foreach ($hasil as $hasill) {
                $data2 = array(
                    'id_dapil' => $hasill->id_dapil,
                    'id_partai' => $hasill->id_partai,
                    'nama' => $hasill->nama,
                    'no_urut' => $hasill->no_urut,
                    'caleg' => $hasill->caleg,
                    'suara' => $hasill->suara,
                    'rank' => $hasill->rank,

               );

                $this->Metode_model->insert_hasil($data2);

            }
        }
    }     

}

?>