<?php

Class M_auth extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  public function dologin($username,$password,$tabel)
  {
    $this->db->where('username',$username);
    $this->db->where('password',md5($password));
    $this->db->where('status',1);
    return $this->db->get($tabel)->row();
  }

  public function doregister($data)
  {
    $this->db->insert('pasien',$data);
  }
}
