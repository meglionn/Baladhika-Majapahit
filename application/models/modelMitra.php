<?php
class modelMitra extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function addMitra($filename) {
        $data = [
            "logo" => $filename,
            "namaMitra" => $this->input->post('namaMitra', true)
        ];
        return $this->db->insert('mitra', $data);
    }

    public function deleteMitra($id){
        $this->db->where('idMitra', $id);

        $this->db->delete('mitra');

        return $this->db->delete('mitra');
    }
    
    public function updateMitra($id, $data) {
        $this->db->where('idMitra', $id);
        return $this->db->update('mitra', $data);
    }
}