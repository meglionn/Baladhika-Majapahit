<?php

class Csr extends CI_Controller
{
  public function index()
  {
    $this->load->view('templates/header');
    $this->load->view('pages/csr');
    $this->load->view('templates/footer');
  }
}
