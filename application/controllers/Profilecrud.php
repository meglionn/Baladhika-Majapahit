<?php

class Profilecrud extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
     $this->load->model('modelMitra');
     $this->load->model('modelMigas');
     $this->load->library('form_validation');
     $this->load->helper(array('form', 'url'));
  }

  public function index()
  {
    $data['title'] = 'Baladhika Majapahit | Profilecrud';
    $data['mitra'] = $this->modelMitra->getAllMitra();
    $data['migas'] = $this->modelMigas->getAllMigas();
    $this->load->view('templates/header', $data);
    $this->load->view('profilecrud/index', $data);
    $this->load->view('templates/footer');
  }

  public function addgas(){
    $data['title'] = 'Tambah Mitra';
    $this->form_validation->set_rules('namaGas', 'Nama SPBU', 'required');
    
    if($this->form_validation->run() == FALSE){
        // If validation fails, redirect back to index with error message
        $this->session->set_flashdata('validation_errors', validation_errors());
        redirect('profilecrud');
    } else{
        $this->modelMigas->addMigas();
        $this->session->set_flashdata('mitra', 'Ditambahkan');
        redirect('profilecrud');
    }
  }

  public function addmtr(){
    $data['title'] = 'Tambah Mitra';
    $this->form_validation->set_rules('namaMitra', 'Nama Mitra', 'required');
    
    if($this->form_validation->run() == FALSE){
        // If validation fails, redirect back to index with error message
        $this->session->set_flashdata('validation_errors', validation_errors());
        redirect('profilecrud');
    } else {
        // File upload configuration
        $config['upload_path'] = './assets/image/mitra';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = FALSE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('logo')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
            redirect('profilecrud');
        } else {
            $upload_data = $this->upload->data();
            $filename = $upload_data['file_name'];
            
            // Call model to add mitra with the uploaded filename
            $this->modelMitra->addMitra($filename);
            $this->session->set_flashdata('mitra', 'Ditambahkan');
            redirect('profilecrud');
        }
    }
  }

  public function deletegas($id){
    $this->modelMigas->deleteMigas($id);
    $this->session->set_flashdata('mitra', 'Dihapus');
    redirect('profilecrud');
  }

  public function deletemtr($id){
    $this->modelMitra->deleteMitra($id);
    $this->session->set_flashdata('mitra', 'Dihapus');
    redirect('profilecrud');
  }
}