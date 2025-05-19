<?php
class modelMitra extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getAllMitra(){
        return $this->db->get('mitra')->result_array();
    }

    public function getMitraById($id) {
        return $this->db->get_where('mitra', ['idMitra' => $id])->row_array();
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
        return $this->db->delete('mitra');
    }
    
    public function updateMitra($id, $data) {
        $this->db->where('idMitra', $id);
        return $this->db->update('mitra', $data);
    }
}