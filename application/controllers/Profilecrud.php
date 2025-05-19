<?php

class Profilecrud extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
     $this->load->model('modelMitra');
     $this->load->model('modelMigas');
     $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = 'Baladhika Majapahit | Profilecrud';
    $this->load->view('templates/header', $data);
    $data['mitra'] = $this->modelMitra->getAllMitra();
    $data['migas'] = $this->modelMigas->getAllMigas();
    $this->load->view('profilecrud/index', $data);
    $this->load->view('templates/footer');
  }

  public function add(){
    $data['title'] = 'Tambah Mitra';

    $this->form_validation->set_rules('namaGas', 'Nama SPBU', 'required');
    if($this->form_validation->run() == FALSE){
        $this->load->view('templates/header', $data);
        $this->load->view('profilecrud/add');
        $this->load->view('templates/footer');
    } else{
        $this->modelMigas->addMigas();
        $this->session->set_flashdata('mitra', 'Ditambahkan');
        redirect('profilecrud');
    }
  }

  public function delete($id){
    $this->modelMigas->deleteMigas($id);
    $this->session->set_flashdata('mitra', 'Dihapus');
    redirect('profilecrud');
  }
}