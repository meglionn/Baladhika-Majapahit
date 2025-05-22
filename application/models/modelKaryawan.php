<?php

class modelKaryawan extends CI_Model{
    public function getAllKaryawan(){
        return $this->db->get('karyawan')->result_array();;
    }
  
    public function addKaryawan($filename) {
        $data = [
            "foto" => $filename,
            "namaKrywn" => $this->input->post('namaKrywn', true),
            "jabatan" => $this->input->post('jabatan', true)
        ];
        $this->db->insert('karyawan', $data);
    }

    public function deleteKaryawan($id){
        $this->db->where('idKrywn', $id);
        return $this->db->delete('karyawan');
    }
    
    public function getKaryawanById($id){
        return $this->db->get_where('karyawan', ['idKrywn' => $id])->row_array();

    }

    public function editKaryawan($filename) {
        $data = [
            "foto" => $filename,
            "namaKrywn" => $this->input->post('namaKrywn', true),
            "jabatan" => $this->input->post('jabatan', true)
        ];
        $this->db->where('idKrywn', $this->input->post('idKrywn'));
        $this->db->update('karyawan', $data);
    }
}