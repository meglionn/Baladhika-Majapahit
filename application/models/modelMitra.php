<?php

class modelMitra extends CI_Model{
    public function getAllMitra(){
        return $this->db->get('mitra')->result_array();;
    }
  
    public function addMitra($filename) {
        $data = [
            "logo" => $filename,
            "namaMitra" => $this->input->post('namaMitra', true)
        ];
        $this->db->insert('mitra', $data);
    }

    public function deleteMitra($id){
        $this->db->where('idMitra', $id);

        $this->db->delete('mitra');
        return $this->db->delete('mitra');
    }
    public function editMitra($id, $data) {
        $this->db->where('idMitra', $id);
        return $this->db->update('mitra', $data);
    }
    
    public function getMitraById($id){
        return $this->db->get_where('mitra', ['idMitra' => $id])->row_array();

    }

    public function editMitra($filename) {
        $data = [
            "logo" => $filename,
            "namaMitra" => $this->input->post('namaMitra', true)
        ];
        $this->db->where('idMitra', $this->input->post('idMitra'));
        $this->db->update('mitra', $data);
    }
}