<?php

Class M_relasi extends CI_Model {
  var $table  = "relasi";
  var $table1 = "gejala";
  var $table2 = "diagnosa";

  public function __construct(){
    parent::__construct();
  }

  public function getAll($id_diagnosa)
  {
    $this->db->select('*');
    $this->db->join('diagnosa','relasi.id_diagnosa=diagnosa.id_diagnosa');
    $this->db->join('gejala','relasi.id_gejala=gejala.id_gejala');
    $this->db->where('relasi.id_diagnosa',$id_diagnosa);
    // $this->db->where('id_spesialis',$id_spesialis);
    $data=$this->db->get($this->table);
    return $data->result();
  }

  public function getgejala()
  {
    // $this->db->where('id_spesialis',$id_spesialis);
    $data = $this->db->get($this->table1);
    return $data->result();
  }

  public function getdatadiagnosa()
  {
    $data = $this->db->get($this->table2);
    return $data->result();
  }

  public function getIDdiagnosa($id)
  {
    $this->db->where('id_diagnosa',$id);
    $this->db->select('id_diagnosa');
    return $this->db->get('diagnosa')->row();
  }

  public function cleanrelasi($id_diagnosa)
  {
      // $this->db->where('id_spesialis',$id_spesialis);
      $this->db->where('id_diagnosa',$id_diagnosa);
      $this->db->delete('relasi');
  }

  public function insertrelasi($data)
  {
    $data = $this->db->insert('relasi',$data);
    return TRUE;
  }

}
?>
