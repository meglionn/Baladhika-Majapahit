<?php

class Csr extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Baladhika Majapahit | CSR';
    $this->load->view('templates/header', $data);
    $this->load->view('pages/csr');
    $this->load->view('templates/footer');
  }
}
