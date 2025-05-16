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
    
    public function addMitra(){
        $data = [
            "logo" => $this->input->post('logo', true),
            "namaMitra" => $this->input->post('namaMitra', true)
         ];
         $this->db->insert('mitra', $data);
    }

    public function deleteMitra($id){
        $this->db->where('idMitra', $id);
        $this->db->delete('mitra');
    }
}