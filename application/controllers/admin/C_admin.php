<?php
/**
 * Controller admin
 */
class C_admin extends CI_admin
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('admin/Index_admin');
    }

} // end class
