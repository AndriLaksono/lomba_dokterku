<?php
/**
 * Controller admin
 */
class C_admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("M_auth_admin");
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


    // ========= Autentikasi admin ======== //
    public function login()
    {
        $this->load->view('admin/V_login_admin');
    }
    public function do_login()
    {
        $email    = $this->input->post('email');
        $password = $this->input->post('password');

        if ($this->M_auth_admin->login_attempt($email,md5($password)) == TRUE ) {
            return redirect('admin/C_admin');
        }else {
            $this->session->set_flashdata('pesan',"email atau password salah..");
            return redirect('admin/C_admin/login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        return redirect('admin/C_admin/login');
    }


} // end class
