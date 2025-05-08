<?php

class modelMitra extends CI_Model{
    public function getAllMitra(){
        return $this->db->get('mitra')->result_array();;
    }
}