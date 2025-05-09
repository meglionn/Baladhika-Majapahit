<?php

class Profile extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Baladhika Majapahit | Profile';
    $this->load->view('templates/header', $data);
    $this->load->view('pages/profil');
    $this->load->view('templates/footer');
  }
}
