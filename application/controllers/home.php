<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Baladhika Majapahit | Beranda';
        $this->load->model('modelMitra');
        $data['mitra'] = $this->modelMitra->getAllMitra();
        $this->load->model('modelMigas');
        $data['migas'] = $this->modelMigas->getAllMigas();
        $this->load->view('templates/header', $data);
        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer');
    }
}
 