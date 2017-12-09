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
        $this->load->model("M_admin");
        if ($this->session->userdata('status_admin') != 'masuk') {
            return $this->login();
        }
    }

    public function index()
    {
        if ($this->session->userdata('status_admin') != 'masuk') {
            return $this->login();
        }
        
        $data['penyakit'] = $this->M_admin->countdata('diagnosa');
        $data['dokter'] = $this->M_admin->countdata('dokter');
        $data['pasien'] = $this->M_admin->countdata('pasien');

        $this->load->view('admin/Index_admin', $data);
    }

    // ==== dokter ==== //
    public function dokter()
    {
        $data['dokter'] = $this->M_admin->GetDokter();
        $this->load->view('admin/V_dokter',$data);
    }
    public function hapusdokter($id){
        $this->M_admin->hapusDokter($id);
        redirect('admin/c_admin/dokter');
    }
    public function updatestatus($id,$status)
    {
        $this->M_admin->update($id,$status);
        redirect('admin/c_admin/dokter');
    }
    public function dokter_add()
    {
        $this->load->view('admin/V_dokter_add');
    }
    public function tambahdokter()
    {
      $nama = $this->input->post('nama');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $alamat = $this->input->post('alamat');
      $nohp = $this->input->post('nohp');
      $spesialis = $this->input->post('spesialis');

      $data = array(
        'nama' => $nama,
          'username' => $username,
            'password' => md5($password),
              'alamat' => $alamat,
                'nohp' => $nohp,
                  'id_spesialis' => $spesialis,
                    'status' => '1'
      );
      $this->M_admin->insertDokter($data);

      redirect('admin/c_admin/dokter');
    }
    public function dokter_edit($id)
    {
        $data['dokter']=  $this->M_admin->dokterbyid($id);
        $this->load->view('admin/V_dokter_edit',$data);
    }

    public function updatedokter()
    {
      $id_dokter = $this->input->post('id_dokter');
      $nama = $this->input->post('nama');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $alamat = $this->input->post('alamat');
      $nohp = $this->input->post('nohp');
      $spesialis = $this->input->post('spesialis');

      $data = array(
        'nama' => $nama,
          'username' => $username,
            'password' => md5($password),
              'alamat' => $alamat,
                'nohp' => $nohp,
                  'id_spesialis' => $spesialis,
                    'status' => '1'
      );
      $this->M_admin->updateDokter($id_dokter,$data);

      redirect('admin/c_admin/dokter');
    }
    // ==== pasien === //
    public function pasien()
    {

        $data['aktif'] = $this->M_admin->pasienaktif();
        $data['nonaktif'] = $this->M_admin->pasiennonaktif();
        $this->load->view('admin/V_pasien',$data);
    }

    // ==== diagnosa === //
    public function diagnosa()
    {
        $data['gejala'] = $this->M_admin->CountDiagnosa();
        $this->load->view('admin/V_diagnosa_admin',$data);
    }

    public function hapuspasien($id)
    {
      $this->M_admin->hapuspasien($id);

      redirect('admin/c_admin/pasien');
    }
    public function updatepasien($id,$status)
    {
      $this->M_admin->updatepasien($id,$status);
      redirect('admin/c_admin/pasien');
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
