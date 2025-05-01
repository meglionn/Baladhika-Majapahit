<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Test extends CI_Controller {
    public function index()
    {
        $this->load->database();
        
        if ($this->db->conn_id) {
            echo "Koneksi database berhasil";
        } else {
            echo "Gagal koneksi database.";
        }
    }
}