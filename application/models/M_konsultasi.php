<?php
/**
 * model Konsultasi
 */
class M_konsultasi extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function get_data_awal($offset=0,$where=NULL)
    {
        if ($where != NULL) {
            foreach ($where as $key => $value) {
                $this->db->where('diagnosa.id_diagnosa <>',$value);
            }
        }

        $data = $this->db->select('*')
                ->join('relasi','diagnosa.id_diagnosa = relasi.id_diagnosa')
                ->join('gejala','gejala.id_gejala = relasi.id_gejala')
                ->limit(1,$offset)
                ->order_by('diagnosa.id_diagnosa')
                ->get('diagnosa');
        if ($data->num_rows() > 0) {
            return $data->row();
        }
        return NULL;
    } // end get data awal

    public function get_jumlah_data($id_diagnosa)
    {
        $data = $this->db->get_where('relasi',array('id_diagnosa' => $id_diagnosa ))->num_rows();
        return $data;
    }

    public function hasil_diagnosa($id_diagnosa)
    {
        return $this->db->get_where('diagnosa',array('id_diagnosa' => $id_diagnosa ))->row();
    }

    public function insert_tmp_no($data)
    {
        $this->db->insert('tmp_no',$data);
    }


} // end class
