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

    public function addMigas(){
        $data = [
            "namaGas" => $this->input->post('namaGas', true)
        ];
        $this->db->insert('migas', $data);
    }

    public function deleteMigas($id){
        $this->db->where('idGas', $id);
        $this->db->delete('migas');
    }
}