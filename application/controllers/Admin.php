<?php
class Admin extends CI_Controller
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
    $data['title'] = 'Baladhika Majapahit | Admin';
    $data['mitra'] = $this->modelMitra->getAllMitra();
    $data['migas'] = $this->modelMigas->getAllMigas();
    $this->load->view('templates/header', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('templates/footer');
  }

  public function addgas(){
    $data['title'] = 'Tambah Mitra';
    $this->form_validation->set_rules('namaGas', 'Nama SPBU', 'required|trim|max_length[100]');

    if($this->form_validation->run() == FALSE){
        // If validation fails, redirect back to index with error message
        $this->session->set_flashdata('validation_errors', validation_errors());
        redirect('admin');
    } else{
        $this->modelMigas->addMigas();
        $this->session->set_flashdata('aftercrud', 'Ditambahkan');
        redirect('admin');
    }
  }

  public function addmtr(){
    $data['title'] = 'Tambah Mitra';
    $this->form_validation->set_rules('namaMitra', 'Nama Mitra', 'required|trim|max_length[100]');

    if($this->form_validation->run() == FALSE){
        $this->session->set_flashdata('validation_errors', validation_errors());
        redirect('admin');
    } else {
        // File upload configuration
        $config['upload_path'] = './assets/image/mitra';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = false; 
        $config['remove_spaces'] = true; 
      
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('logo')) { 
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
            redirect('admin');
        } else {
            $upload_data = $this->upload->data();
            $filename = $upload_data['file_name'];

            $this->modelMitra->addMitra($filename);
            $this->session->set_flashdata('aftercrud', 'Ditambahkan');
            redirect('admin');
        }
    }
  }

  public function deletegas($id){
    $this->modelMigas->deleteMigas($id);
    $this->session->set_flashdata('aftercrud', 'Dihapus');
    redirect('admin');
  }

  public function deletemtr($id){
    $mitra = $this->db->get_where('mitra', ['idMitra' => $id])->row_array();
        $filename = $mitra['logo'];
        $file_path = './assets/image/mitra/' . $filename;

        if(file_exists($file_path)) {
            unlink($file_path);
        }
        $this->modelMitra->deleteMitra($id);
        $this->session->set_flashdata('aftercrud', 'Dihapus');
    redirect('admin');
  }
}