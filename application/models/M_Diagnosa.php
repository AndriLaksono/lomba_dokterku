<?php

Class M_Diagnosa extends CI_Model{
  var $table = "diagnosa";
  public function __construct(){
    parent::__construct();
  }

  public function insert($data)
  {
    $data=$this->db->insert($this->table,$data);
    return TRUE;
  }

  public function update($id,$data)
  {
    $this->db->where('id_diagnosa',$id);
    $data=$this->db->update($this->table,$data);
    return TRUE;
  }

  public function delete($id)
  {
    $this->db->where('id_diagnosa',$id);
    $data= $this->db->delete($this->table);
    return TRUE;
  }

  public function getbyid($id)
  {
    $this->db->where('id_spesialis',$this->session->userdata('spesialis'));
    $this->db->where('id_diagnosa',$id);
    $data=$this->db->get($this->table);
    return $data->row();
  }

  public function getAll()
  {
      $this->db->where('id_spesialis',$this->session->userdata('spesialis'));
      $data=$this->db->get($this->table);
      return $data->result();
  }

    //sesi pengobatan

  public function gettitle($id)
  {
      $this->db->select('penyakit');
      $this->db->where('id_spesialis',$this->session->userdata('spesialis'));
      $this->db->where('id_diagnosa',$id);
      return $this->db->get('diagnosa')->row();
  }

  public function getdiagnosa($id)
  {
      $this->db->where('id_diagnosa',$id);
      $this->db->where('id_spesialis',$this->session->userdata('spesialis'));
      return $this->db->get('diagnosa')->row();
  }

  public function getdiagnosaall()
  {
      $this->db->where('id_spesialis',$this->session->userdata('spesialis'));
      return $this->db->get('diagnosa')->result();
  }

  public function getpengobatan($id)
  {
    $this->db->where('id_diagnosa',$id);
    return $this->db->get('pengobatan')->result();
  }

  public function delete_obat($id)
  {
    $this->db->where('id_pengobatan',$id);
    $data= $this->db->delete('pengobatan');
    return TRUE;
  }

  public function insert_obat($data)
  {
    $data=$this->db->insert('pengobatan',$data);
    return TRUE;
  }

  public function update_obat($id,$data)
  {
    $this->db->where('id_pengobatan',$id);
    $data=$this->db->update('pengobatan',$data);
    return TRUE;
  }

  public function getdataobat($id)
  {
    $this->db->where('id_pengobatan',$id);
    return $this->db->get('pengobatan')->row();
  }
}


?>
