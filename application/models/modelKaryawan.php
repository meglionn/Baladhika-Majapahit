<?php

class modelKaryawan extends CI_Model{
    public function getAllKaryawan(){
        return $this->db->get('karyawan')->result_array();;
    }
}