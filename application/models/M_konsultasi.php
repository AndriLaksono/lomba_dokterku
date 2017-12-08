<?php

Class M_konsultasi extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  public function getData($offset = 0 ,$where = NULL)
  {
      if($where != NULL){
        foreach ($where as $key => $value) {
          $this->db->where("relasi.id_diagnosa <>", $value);
        }
      }

      $this->db->select('*');
      $this->db->join('relasi','diagnosa.id_diagnosa = relasi.id_diagnosa');
      $this->db->join('gejala','gejala.id_gejala = relasi.id_gejala');
      $this->db->limit('1',$offset);
      $this->db->order_by('diagnosa.id_diagnosa');
      $data = $this->db->get('diagnosa');

      if($data->num_rows()>0){
        return $data->row();
      }

      return 0;
  }

  public function emptytmp()
  {
    $this->db->empty_table('tmp_no');
    return TRUE;
  }

  public function tmpno()
  {
    $data = $this->db->get('tmp_no');
    return $data->result();
  }

  public function insertdata($data)
  {
    $data = $this->db->insert('tmp_no',$data);
    return TRUE;
  }

  public function CountData($id_diagnosa)
  {
    $this->db->where('id_diagnosa',$id_diagnosa);
    $data = $this->db->get('relasi');
    return $data->num_rows();
  }

  public function GetResult($id_diagnosa)
  {
    $this->db->where('id_diagnosa',$id_diagnosa);
    $data = $this->db->get('diagnosa');
    return $data->result();
  }

  public function SaveLog($data)
  {
    $this->db->insert('log',$data);
  }

  public function GetPengobatan($id_diagnosa)
  {
    $this->db->where('id_diagnosa',$id_diagnosa);
    return $this->db->get('pengobatan')->result();
  }
}
