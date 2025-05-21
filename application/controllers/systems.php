<?php

class Systems extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Baladhika Majapahit | Sistem & Komposisi';
    $this->load->view('templates/header', $data);
    $this->load->view('pages/sistem');
    $this->load->view('templates/footer');
  }
}
