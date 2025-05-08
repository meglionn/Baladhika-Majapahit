<?php

class profile extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Baladhika Majapahit | Profile';
    $this->load->view('templates/header', $data);
    $this->load->view('pages/profile');
    $this->load->view('templates/footer');
  }
}
