<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_karyawan() {
        return $this->db->get('karyawan')->result();
    }

    public function get_mitra() {
        return $this->db->get('mitra')->result();
    }
}