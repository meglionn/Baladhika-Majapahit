<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Baladhika Majapahit | Profil';
    $this->load->view('templates/header', $data);
    $this->load->view('pages/profile', $data);
    $this->load->view('templates/footer');
  }
}
