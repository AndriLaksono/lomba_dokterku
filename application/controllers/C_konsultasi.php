<?php
/**
 * Controller Konsultasi
 */
class C_konsultasi extends CI_Controller
{
    var $offset = NULL;

    function __construct()
    {
        parent::__construct();
        $this->load->model("M_konsultasi");
    }

    public function index()
    {
        $this->session->unset_userdata('offset');
        $this->session->set_userdata('offset',0);

        $data['gejala'] = $this->M_konsultasi->get_data_awal();
        $this->load->view('V_konsultasi',$data);
    }

    public function pilih()
    {
        $id_diagnosa = $this->input->post('id_diagnosa');
        $id_gejala   = $this->input->post('id_gejala');
        $rule        = $this->input->post('rdpilih');

        if ($rule == "Y"){

            $this->up_offset($this->offset);
            // bandingkan dg jml dt diagnosa pd relasi
            if ($this->get_offset() == $this->M_konsultasi->get_jumlah_data($id_diagnosa)) {
                $data['hasil'] = $this->M_konsultasi->hasil_diagnosa($id_diagnosa);
                return $this->load->view('V_hasil_konsultasi',$data);
            }
            // jika offset > 0
            $data['gejala'] = $this->M_konsultasi->get_data_awal($this->offset);
            return $this->load->view('V_konsultasi',$data);

        } /* end pilih Y*/

        elseif($rule == "N"){
            // insert to tmp_no
            $this->M_konsultasi->insert_tmp_no(array('ip'=> $_SERVER['REMOTE_ADDR'],'id_diagnosa' => $id_diagnosa ));


        } /* end pilih N*/
    }

    public function up_offset($offset)
    {
        $this->offset = $this->get_offset() + 1;
        $this->set_offset($this->offset);
        return (int) $this->offset;
    }

    public function get_offset()
    {
        return (int) $this->session->userdata('offset');
    }

    public function set_offset($offset)
    {
        $this->session->set_userdata('offset',$offset);
    }

    public function pecah_to_array($tmpno)
    {
        $values=[];
        $i=0;
        foreach ($tmpno[''] as $key => $value) {
            # code...
        }
    }


} // end class
