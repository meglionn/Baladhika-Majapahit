<?php

class Upload extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
     $this->load->model('modelMitra');
     $this->load->helper(array('form', 'url'));
  }

  public function index()
  {
    $this->load->view('pages/tes');
  }

  public function upload_image(){
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size'] = 2048;
    $config['encrypt_name'] = false;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('logo')){
      $data['error'] = $this->upload->display_errors();
      $this->load->view('pages/tes', $data);
    }else{
        $upload_data = $this->upload->data();
        $data['success'] = 'upload successfull';
        $filename = $upload_data['file_name'];
      $this->modelMitra->addMitra($filename);

        $data['file_name'] = $filename;
      $this->load->view('pages/tes', $data);

    }
  }
}