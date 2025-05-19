<?php

class modelKaryawan extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getAllKaryawan(){
        return $this->db->get('karyawan')->result_array();
    }

    public function get_by_id($id) {
        return $this->db->get_where('karyawan', ['id' => $id])->row_array();
    }

    public function insert($data) {
        return $this->db->insert('karyawan', $data);
    }

    public function update($id, $data) {
        return $this->db->update('karyawan', $data, ['id => $id']);
    }

    public function delete($id) {
        return $this->db->delete('karyawan', ['id' => $id]);
    }
}