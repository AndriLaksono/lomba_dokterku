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
    $this->db->where('id_diagnosa',$id);
    $data=$this->db->get($this->table);
    return $data->row();
  }
  public function getAll()
  {
      $data=$this->db->get($this->table);
      return $data->result();
  }
}


?>
