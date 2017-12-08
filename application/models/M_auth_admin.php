<?php
/**
 * Model auth admin
 */
class M_auth_admin extends CI_Model
{
    var $table = "admin";

    function __construct()
    {
        parent::__construct();
    }

    public function login_attempt($email,$password)
    {
        $data = $this->db->get_where($this->table, array('email' => $email, 'password' => $password ));
        if ($data->num_rows() > 0) {
            $datax = $data->row();
            $this->session->set_userdata('id_admin',$datax->id_admin);
            $this->session->set_userdata('email',$datax->email);
            $this->session->set_userdata('username',$datax->username);
            $this->session->set_userdata('nama',$datax->nama);
            return TRUE;
        }else {
            return FALSE;
        }
    }


} // end class
