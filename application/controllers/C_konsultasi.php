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
        if ($this->offset == NULL) {
            $this->session->set_userdata('offset',0);
        }
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
            if ($this->offset == $this->get_jumlah_data($id_diagnosa)) {
                die("wis poll");
            }
            // jika offset > 0
            $data['gejala'] = $this->M_konsultasi->get_data_awal($this->offset);
            return $this->load->view('V_konsultasi',$data);


        } /* end pilih Y*/

        elseif($rdpilih == "N"){
            die($rdpilih);

        } /* end pilih N*/
    }

    public function up_offset($offset)
    {
        return (int) $offset + 1;
    }

    public function get_offset()
    {
        return (int) $this->session->userdata('offset');
    }


} // end class
