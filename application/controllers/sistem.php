<?php

class sistem extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Sistem & Komposisi';
    $this->load->view('templates/header', $data);
    $this->load->view('pages/sistem');
    $this->load->view('templates/footer');
  }
}
