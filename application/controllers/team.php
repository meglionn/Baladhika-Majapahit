<?php

class team extends CI_Controller
{
  public function index()
  {
    $this->load->view('templates/header');
    $this->load->view('pages/team');
    $this->load->view('templates/footer');
  }
}
