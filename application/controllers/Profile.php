<?php

class Profile extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Baladhika Majapahit | Profil';
    $this->load->model('modelMitra');
    $data['mitra'] = $this->modelMitra->getAllMitra();
    $this->load->model('modelMigas');
    $data['migas'] = $this->modelMigas->getAllMigas();
    $this->load->view('templates/header', $data);
    $this->load->view('pages/profil');
    $this->load->view('templates/footer');
  }
}
