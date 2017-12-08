<?php
/**
 * Controller Doker bagian depan - sisi dokter
 */
class C_dokter extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id_dokter')) {
            return redirect('C_start');
        }
    }

    public function index()
    {
        $this->load->view('Index_dokter');
    }

    public function gejala()
    {
        $this->load->view('V_gejala');
    }

    public function diagnosa()
    {
        $this->load->view('V_diagnosa');
    }

    public function relasi()
    {
        $this->load->view('V_relasi');
    }

} // end class
