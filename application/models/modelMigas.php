<?php

class modelMigas extends CI_Model{

     public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function getAllMigas(){
        return $this->db->get('migas')->result_array();;
    }
}