<?php

Class C_konsultasi extends CI_Controller{
  private $offset = NULL;
  private $ip = NULL;

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_konsultasi');
    $this->offset = $this->get_offset();
    $this->ip = $_SERVER['REMOTE_ADDR'];
  }

  public function index($spesialis)
  {

    if($this->session->userdata('id_pasien')!=NULL){
      $this->session->unset_userdata('offset');
      $this->session->set_userdata('temp',$spesialis);

      $this->M_konsultasi->emptytmp();

      $data['data'] =$this->M_konsultasi->getData($spesialis);
      $this->load->view('v_konsultasi',$data);
    }else{
      redirect('C_auth');
    }
  }

  public function pilih()
  {
    $rule = $this->input->post('rule');
    $id_gejala    = $this->input->post('id_gejala');
    $id_diagnosa  = $this->input->post('id_diagnosa');
    $id_pasien    = $this->session->userdata('id_pasien');
    $id_spesialis = $this->session->userdata('temp');
    $jml_data = $this->M_konsultasi->CountData($id_spesialis, $id_diagnosa);

    if($rule=='Y'){
        $data['tmpno'] = $this->M_konsultasi->tmpno();
        if($data['tmpno'] == NULL){
          $this->set_offset($this->offset);
          if($this->get_offset() == $jml_data){
            $tanggal = date('Y-m-d');
            $datalog = array(
              'id_diagnosa' => $id_diagnosa,
              'id_pasien'   => $id_pasien,
              'tanggal'     => $tanggal
            );
            $this->savelog($datalog);
            $data['hasil']= $this->M_konsultasi->GetResult($id_spesialis,$id_diagnosa);
            $data['obat']= $this->M_konsultasi->GetPengobatan($id_diagnosa);
            $this->load->view('V_hasilkonsultasi', $data);
          }else{
            $data['data'] = $this->M_konsultasi->getData($id_spesialis, $this->get_offset());
            $this->load->view('V_konsultasi',$data);
          }
        }else{
          $kondisi = $this->kondisi($data);

          $datawal = $this->M_konsultasi->getData($id_spesialis, 0,$kondisi);
          if($datawal != NULL){
            $this->set_offset($this->offset);
            if($this->get_offset() == $jml_data){
              $tanggal = date('Y-m-d');
              $datalog = array(
                'id_diagnosa' => $id_diagnosa,
                'id_pasien'   => $id_pasien,
                'tanggal'     => $tanggal
              );
              $this->savelog($datalog);
              $data['hasil']= $this->M_konsultasi->GetResult($id_spesialis,$id_diagnosa);
              $data['obat']= $this->M_konsultasi->GetPengobatan($id_diagnosa);
              $this->load->view('V_hasilkonsultasi', $data);
            }else{
              $data['data'] =$this->M_konsultasi->getData($id_spesialis, $this->get_offset(),$kondisi);
              $this->load->view('V_konsultasi',$data);
            }
          }else{
            $this->load->view('V_hasilkonsultasinot');
          }
        }
    }else{
      $this->set_offset($offset = -1);
      //insert
      $data = array('ip' =>$this->ip ,'id_diagnosa' => $id_diagnosa );
      $this->M_konsultasi->insertdata($data);
      $data['tmpno'] = $this->M_konsultasi->tmpno();
      $kondisi = $this->kondisi($data);
      $data['data'] =$this->M_konsultasi->getData($id_spesialis,$this->get_offset(),$kondisi);
      if($data['data'] == NULL){
        $this->load->view('V_hasilkonsultasinot');
      }else{
        $this->load->view('V_konsultasi',$data);
      }
    }
  }


  public function set_offset($offset)
  {
    $offset +=1;
    $this->session->set_userdata('offset',$offset);
  }

  public function get_offset()
  {
    if($this->session->userdata('offset')){
       return $this->session->userdata('offset');
    }
  }

  public function kondisi($data)
  {
    $values = [];
    $i=0;
      foreach ($data['tmpno'] as $v) {
        $values[$i] =  $v->id_diagnosa;
        $i++;
      }
      return $values;
  }

  public function get_result($id_diagnosa)
  {
    $data['hasil'] = $this->M_konsultasi->getresult($id_diagnosa);
    return $data;
  }

  public function savelog($data)
  {
    $this->M_konsultasi->SaveLog($data);
  }
}
