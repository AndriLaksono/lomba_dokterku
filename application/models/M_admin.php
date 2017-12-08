<?php

Class M_admin extends CI_Model{

  public function __construct()
  {
      parent::__construct();
  }
  public function CountDiagnosa(){
      $this->db->select("relasi.id_diagnosa,diagnosa.penyakit, COUNT(relasi.id_diagnosa) as jumlah ");
      $this->db->join('diagnosa','relasi.id_diagnosa = diagnosa.id_diagnosa');
      $this->db->limit(5);
      $data = $this->db->get('relasi');
      return $data->result();
  }

  public function GetDokter()
  {
        $data = $this->db->select('*')
                ->from('dokter')
                ->join('spesialis','dokter.id_spesialis = spesialis.id_spesialis')
                ->get()
                ->result();
        if ($data != NULL) {
            return $data;
        }
        return FALSE;
  }
  public function hapusDokter($id)
  {
      $this->db->where('id_dokter',$id);
      $this->db->delete('dokter');
      return TRUE;
  }
  public function insertDokter($data)
  {
      $this->db->insert('dokter',$data);
      return TRUE;
  }
  public function updateDokter($id,$data)
  {
      $this->db->where('id_dokter',$id);
      $this->db->update('dokter',$data);
      return TRUE;
  }
  public function update($id,$status)
  {
      $this->db->query("UPDATE dokter SET status = ".$status." WHERE id_dokter = ".$id."");
  }
  public function dokterbyid($id){
      $this->db->where('id_dokter',$id);
      $data = $this->db->get('dokter');
      return $data->row();
  }
  public function pasienaktif()
  {
    $this->db->where('status','1');
    $data = $this->db->get('pasien');
    return $data->result();
  }
  public function pasiennonaktif()
  {
    $this->db->where('status','0');
    $data = $this->db->get('pasien');
    return $data->result();
  }
  public function hapuspasien($id)
  {
    $this->db->where('id_pasien',$id);
    $data = $this->db->delete('pasien');
    return TRUE;
  }
  public function updatepasien($id,$status)
  {
      $this->db->query("UPDATE pasien SET status = ".$status." WHERE id_pasien = ".$id."");
  }
}
