<?php

class Team extends CI_Controller
{
  public function index()
  {
    
    $data['title'] = 'Baladhika Majapahit | Our Team';
    $this->load->model('modelKaryawan');
    $data['karyawan'] = $this->modelKaryawan->getAllKaryawan();
    $this->load->view('templates/header', $data);
    $this->load->view('pages/tim', $data);
    $this->load->view('templates/footer');
  }
}
