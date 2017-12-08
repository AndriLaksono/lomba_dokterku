<?php
/**
 * Controller admin
 */
class C_admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('admin/Index_admin');
    }

    // ==== dokter ==== //
    public function dokter()
    {
        $this->load->view('admin/V_dokter');
    }
    public function dokter_add()
    {
        $this->load->view('admin/V_dokter_add');
    }
    public function dokter_edit()
    {
        $this->load->view('admin/V_dokter_edit');
    }

    // ==== pasien === //
    public function pasien()
    {
        $this->load->view('admin/V_pasien');
    }

    // ==== diagnosa === //
    public function diagnosa()
    {
        $this->load->view('admin/V_diagnosa_admin');
    }

} // end class
