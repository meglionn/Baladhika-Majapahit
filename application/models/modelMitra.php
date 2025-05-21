<?php

class modelMitra extends CI_Model{
    public function getAllMitra(){
        return $this->db->get('mitra')->result_array();;
    }
    
<<<<<<< Updated upstream
=======
    public function getAllMitra(){
        return $this->db->get('mitra')->result_array();
    }

>>>>>>> Stashed changes
    public function addMitra($filename) {
        $data = [
            "logo" => $filename,
            "namaMitra" => $this->input->post('namaMitra', true)
        ];
        $this->db->insert('mitra', $data);
    }

    public function deleteMitra($id){
        $this->db->where('idMitra', $id);
<<<<<<< Updated upstream
        $this->db->delete('mitra');
=======
        return $this->db->delete('mitra');
    }
    
    public function editMitra($id, $data) {
        $this->db->where('idMitra', $id);
        return $this->db->update('mitra', $data);
>>>>>>> Stashed changes
    }

}