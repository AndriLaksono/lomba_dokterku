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


} // end class
