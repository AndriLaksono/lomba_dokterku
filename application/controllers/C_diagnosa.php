<?php

class C_diagnosa extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('M_diagnosa');
}

public function index()
{
    $data['diagnosa'] = $this->M_diagnosa->getAll();
    $this->load->view('V_diagnosa',$data);
}

// public function insert()
// {
//     $this->load->view('add_diagnosa');
// }

public function update($id)
{
    $data['diagnosa'] = $this->M_diagnosa->getbyid($id);
    $this->load->view('V_diagnosa_edit',$data);
}

public function do_insert()
{
    $penyakit   = $this->input->post('penyakit');
    $keterangan = $this->input->post('keterangan');
    $data = array(
      'penyakit' => $penyakit,
      'ket' => $keterangan,
      'id_spesialis' => '1',
    );
    // die(var_dump($data));

    $this->M_diagnosa->insert($data);
    redirect('C_diagnosa');
}

public function do_update()
{
      $id         = $this->input->post('id_diagnosa');
      $penyakit     = $this->input->post('penyakit');
      $keterangan = $this->input->post('keterangan');
      $data = array(
        'penyakit' => $penyakit,
        'ket' => $keterangan,
        'id_spesialis' => '1',
      );
      $this->M_diagnosa->update($id,$data);
      redirect('C_diagnosa');
}

  public function do_delete($id_diagnosa)
  {
        $this->M_diagnosa->delete($id_diagnosa);
        redirect('C_diagnosa');
  }

} // end class
