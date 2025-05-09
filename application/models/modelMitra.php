<?php

class modelMitra extends CI_Model{

     public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function getAllMitra(){
        return $this->db->get('mitra')->result_array();;
    }
}