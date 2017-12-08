<?php

Class C_auth extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_auth');
  }

  public function index()
  {
    $this->load->view('V_login');
  }

  public function login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $data['dokter'] = $this->M_auth->dologin($username,$password,'dokter');
    if ($data['dokter']!=NULL) {
      $this->session->set_userdata('id_dokter',$data['dokter']->id_dokter);
      $this->session->set_userdata('nama',$data['dokter']->nama);
      $this->session->set_userdata('username',$data['dokter']->username);
      $this->session->set_userdata('alamat',$data['dokter']->alamat);
      $this->session->set_userdata('nohp',$data['dokter']->nohp);
      $this->session->set_userdata('spesialis',$data['dokter']->id_spesialis);

      redirect('C_start');
    }else{
      $data['pasien'] = $this->M_auth->dologin($username,$password,'pasien');
      if ($data['pasien']!=NULL) {
        $this->session->set_userdata('id_pasien',$data['pasien']->id_pasien);
        $this->session->set_userdata('nama',$data['pasien']->nama);
        $this->session->set_userdata('username',$data['pasien']->username);
        $this->session->set_userdata('email',$data['pasien']->email);
        $this->session->set_userdata('alamat',$data['pasien']->alamat);
        $this->session->set_userdata('nohp',$data['pasien']->nohp);

        redirect('C_start');
      }else{
        $this->session->set_flashdata('pesan',"data yang anda masukan tidak cocok dengan data kami..");
        redirect('C_auth');
      }
    }
  }

  public function regispage(){
    $this->load->view('V_register');
  }

  public function register(){
    $nama       = $this->input->post('nama');
    $email      = $this->input->post('email');
    $alamat     = $this->input->post('alamat');
    $nohp       = $this->input->post('nohp');
    $username   = $this->input->post('username');
    $password   = $this->input->post('password');
    $kpassword  = $this->input->post('kpassword');

    if ($kpassword==$password) {
      $data = array(
          'nama'      => $nama,
          'alamat'    => $alamat,
          'nohp'      => $nohp,
          'username'  => $username,
          'password'  => md5($password),
          'email'     => $email,
          'status'    => 0
      );
      $this->M_auth->doregister($data);

      $this->session->set_flashdata('pesan',"Terimakasih sudah mendaftar, silahkan tunggu beberapa saat dan anda bisa menggunakan akun anda..");
      return redirect('C_auth');
    }else {
        $this->session->set_flashdata('pesan',"password tidak sama...");
        redirect('C_auth/regispage');
    }
  }

  public function logout()
  {
      $this->session->sess_destroy();
      return redirect('C_start');
  }


}
