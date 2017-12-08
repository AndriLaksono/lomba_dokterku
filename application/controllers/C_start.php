<?php
/**
 * controller start / awal
 */
class C_start extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }
    public function index()
    {
        $this->load->view("index");
    }
    public function tentang()
    {
        $data['dokter'] = $this->M_admin->GetDokter();
        $this->load->view('V_tentang',$data);
    }
}
