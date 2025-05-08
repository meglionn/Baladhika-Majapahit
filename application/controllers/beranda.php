<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Baladhika Majapahit | beranda';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/beranda');
        $this->load->view('templates/footer');
    }
}
 