<?php

class modelMigas extends CI_Model{
    public function getAllMigas(){
        return $this->db->get('migas')->result_array();;
    }
}