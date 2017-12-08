<?php
/**
 * controller start / awal
 */
class C_log extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_log');
    }

    public function index()
    {
      if($this->session->userdata('id_pasien')!=NULL){
        $id_akun = $this->session->userdata('id_pasien');
        $data['log'] = $this->M_log->getdata($id_akun);
        $this->load->view('V_log',$data);
      }else{
        redirect('C_auth');
      }
    }

    public function delete($id)
    {
        $this->M_log->deletelog($id);
        redirect('C_log');
    }
}
