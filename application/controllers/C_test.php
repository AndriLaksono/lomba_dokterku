<?php
/**
 * untuk testing halaman
 */
class C_test extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index_dokter()
    {
        $this->load->view('Index_dokter');
    }

    // ======= Gejala ===== //
    public function gejala()
    {
        $this->load->view('V_gejala');
    }
    public function gejala_edit()
    {
        $this->load->view('V_gejala_edit');
    }

    // ======= Diagnosa ===== //
    public function diagnosa()
    {
        $this->load->view('V_diagnosa');
    }
    public function diagnosa_edit()
    {
        $this->load->view('V_diagnosa_edit');
    }

    // ======= Relasi ===== //
    public function relasi()
    {
        $this->load->view('V_relasi');
    }
    public function relasi_edit()
    {
        $this->load->view('V_relasi_edit');
    }



} // end testing
