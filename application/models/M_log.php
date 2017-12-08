<?php

Class M_log extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  public function getdata($id_akun)
  {
      $this->db->where('id_pasien',$id_akun);
      $this->db->join('diagnosa','log.id_diagnosa=diagnosa.id_diagnosa');
      return $this->db->get('log')->result();
  }

  public function deletelog($id)
  {
      $this->db->where('id_log',$id);
      $this->db->delete('log');
  }
}
