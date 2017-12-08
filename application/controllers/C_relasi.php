<?php

Class C_relasi extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_relasi');
  }

  public function index()
  {
    $data['diagnosa'] = $this->M_relasi->getdatadiagnosa();
    $this->load->view('V_relasi',$data);
  }

  public function edit($id_diagnosa)
  {
    $data['relasi'] = $this->M_relasi->getAll($id_diagnosa);
    $data['diagnosa'] = $this->M_relasi->getIDdiagnosa($id_diagnosa);
    $data['gejala'] = $this->M_relasi->getgejala();
    $this->load->view('V_relasi_edit',$data);
  }

  public function update()
  {
    $diagnosa = $this->input->post('id');
    $gejala[] = $this->input->post('gejala[]');
    $this->M_relasi->cleanrelasi($diagnosa);
    foreach ($gejala as $key => $value) {
      foreach ($value as $kunci => $nilai) {
        $data = array(
          'id_diagnosa'  => $diagnosa,
          'id_gejala'    => $nilai,
          'id_spesialis' => '1'
        );
        $this->M_relasi->insertrelasi($data);
      }
    }
    return redirect("C_relasi");
  }

} // end class
