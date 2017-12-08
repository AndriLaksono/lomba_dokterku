<?php

Class C_gejala extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_gejala');
  }

  public function index()
  {
    $data['gejala'] = $this->M_gejala->getAll();
    $this->load->view('V_gejala',$data);
  }

  // public function insert()
  // {
  //   $this->load->view('add_gejala');
  // }

  public function update($id)
  {

    $data['gejala'] = $this->M_gejala->getbyid($id);
    $this->load->view('V_gejala_edit',$data);
  }

  public function do_insert()
  {
    $gejala     = $this->input->post('gejala');
    $keterangan = $this->input->post('keterangan');
    $data = array(
      'gejala' => $gejala,
      'ket' => $keterangan,
      'id_spesialis' => '1',
    );
    $this->M_gejala->insert($data);
    redirect('C_gejala');
  }

public function do_update()
{
      $id         = $this->input->post('id_gejala');
      $gejala     = $this->input->post('gejala');
      $keterangan = $this->input->post('keterangan');
      $data = array(
        'id_gejala' => $id,
        'gejala' => $gejala,
        'ket' => $keterangan,
        'id_spesialis' => '1',
      );
      // die(var_dump($data));
      $this->M_gejala->update($id,$data);
      redirect('C_gejala');
}

    public function do_delete($id)
    {
      $this->M_gejala->delete($id);
      redirect('C_gejala');
    }
}
?>
