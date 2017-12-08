<?php

class C_diagnosa extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->model('M_diagnosa');
      if (!$this->session->userdata('id_dokter')) {
          return redirect('C_start');
      }
  }

  public function index()
  {
    if($this->session->userdata('id_dokter')!=NULL){
      $data['diagnosa'] = $this->M_diagnosa->getAll();
      $this->load->view('V_diagnosa',$data);
    }else{
      redirect('C_auth');
    }
  }

// public function insert()
// {
//     $this->load->view('add_diagnosa');
// }

  public function update($id)
  {
    if($this->session->userdata('id_dokter')!=NULL){
      $data['diagnosa'] = $this->M_diagnosa->getbyid($id);
      $this->load->view('V_diagnosa_edit',$data);
    }else{
      redirect('C_auth');
    }
  }

  public function do_insert()
  {
      $penyakit   = $this->input->post('penyakit');
      $keterangan = $this->input->post('keterangan');
      $data = array(
        'penyakit' => $penyakit,
        'ket' => $keterangan,
        'id_spesialis' => $this->session->userdata('spesialis'),
      );
      // die(var_dump($data));

      $this->M_diagnosa->insert($data);
      redirect('C_diagnosa');
  }

  public function do_update()
  {
        $id         = $this->input->post('id_diagnosa');
        $penyakit   = $this->input->post('penyakit');
        $keterangan = $this->input->post('keterangan');
        $data = array(
          'penyakit' => $penyakit,
          'ket' => $keterangan,
          'id_spesialis' => $this->session->userdata('spesialis'),
        );
        $this->M_diagnosa->update($id,$data);
        redirect('C_diagnosa');
  }

  public function do_delete($id_diagnosa)
  {
        $this->M_diagnosa->delete($id_diagnosa);
        redirect('C_diagnosa');
  }

    //sesi pengobatan

  public function show_pengobatan($id)
  {
      $this->session->set_userdata('page',$id);
      $data['diagnosa'] = $this->M_diagnosa->getdiagnosa($id);
      $data['title'] = $this->M_diagnosa->gettitle($id);
      $data['pengobatan'] = $this->M_diagnosa->getpengobatan($id);
      $this->load->view('V_pengobatan',$data);
  }

  public function update_obat($id)
  {
      $data['title'] = $this->M_diagnosa->gettitle($this->session->userdata('page'));
      $data['diagnosa'] = $this->M_diagnosa->getdiagnosaall();
      $data['dataobat'] = $this->M_diagnosa->getdataobat($id);
      $this->load->view('V_pengobatan_edit',$data);
  }

  public function do_insert_obat()
  {
      $id          = $this->input->post('id_penyakit');
      $cara        = $this->input->post('cara');
      $data = array(
        'id_diagnosa'     => $id,
        'cara_pengobatan' => $cara
      );
      // die(var_dump($data));

      $this->M_diagnosa->insert_obat($data);
      $this->show_pengobatan($this->session->userdata('page'));
  }

  public function do_update_obat()
  {
      $id_obat     = $this->input->post('id');
      $id          = $this->input->post('id_penyakit');
      $cara        = $this->input->post('cara');
      $data = array(
        'id_diagnosa'     => $id,
        'cara_pengobatan' => $cara
      );
      $this->M_diagnosa->update_obat($id_obat,$data);
      $this->show_pengobatan($this->session->userdata('page'));
  }

    public function do_delete_obat($id_pengobatan)
    {
          $this->M_diagnosa->delete_obat($id_pengobatan);
          $this->show_pengobatan($this->session->userdata('page'));
    }

} // end class
