<?php

class modelKaryawan extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getAllKaryawan(){
        return $this->db->get('karyawan')->result_array();;
    }
}