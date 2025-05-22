<?php
class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
     $this->load->model('modelMitra');
     $this->load->model('modelMigas');
     $this->load->model('modelKaryawan');
     $this->load->library('form_validation');
     $this->load->helper(array('form', 'url'));
  }

  public function index()
  {
// Check if form is submitted
    if ($this->input->post()) {
      $password = $this->input->post('password', true);
      
      // Check if password is correct
      if ($password === 'ferdi69') {
        // Show admin panel
        $data['title'] = 'Baladhika Majapahit | Admin';
        $data['mitra'] = $this->modelMitra->getAllMitra();
        $data['migas'] = $this->modelMigas->getAllMigas();
        $data['karyawan'] = $this->modelKaryawan->getAllKaryawan();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
      } else {
        // Show login form with error
        $data['title'] = 'Admin Login | Baladhika Majapahit';
        $data['error'] = 'Password Salah! Coba Lagi.';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/login', $data);
        $this->load->view('templates/footer');
      }
    } else {
      // Show login form
      $data['title'] = 'Admin Login | Baladhika Majapahit';
      $this->load->view('templates/header', $data);
      $this->load->view('admin/login', $data);
      $this->load->view('templates/footer');
    }
  }

// CREATE 
  public function addgas(){
    $data['title'] = 'Tambah Mitra';
    $this->form_validation->set_rules('namaGas', 'Nama SPBU', 'required|trim|max_length[100]');

    if($this->form_validation->run() == FALSE){
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

  public function addkrywn(){
    $data['title'] = 'Tambah Karyawan';
    $this->form_validation->set_rules('namaKrywn', 'Nama Karyawan', 'required|trim|max_length[100]');
    $this->form_validation->set_rules('jabatan', 'Jabatan Karyawan', 'required|trim|max_length[100]');

    if($this->form_validation->run() == FALSE){
        $this->session->set_flashdata('validation_errors', validation_errors());
        redirect('admin');
    } else {
        // File upload configuration
        $config['upload_path'] = './assets/image/member';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = false; 
        $config['remove_spaces'] = true; 
      
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) { 
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
            redirect('admin');
        } else {
            $upload_data = $this->upload->data();
            $filename = $upload_data['file_name'];

            $this->modelKaryawan->addKaryawan($filename);
            $this->session->set_flashdata('aftercrud', 'Ditambahkan');
            redirect('admin');
        }
    }
  }
  
// UPDATE
  public function editgas($id){
    $data['title'] = 'Edit Mitra';
    $data['migas'] = $this->modelMigas->getMigasById($id);
    $this->form_validation->set_rules('namaGas', 'Nama SPBU', 'required|trim|max_length[100]');

    if($this->form_validation->run() == FALSE){
      $this->load->view('templates/header', $data);
      $this->load->view('admin/editgas', $data);
      $this->load->view('templates/footer');
    } else{
        $this->modelMigas->editMigas();
        $this->session->set_flashdata('aftercrud', 'Diedit');
        redirect('admin');
    }
  }

  public function editmtr($id){
    $data['title'] = 'Tambah Mitra';
    $data['mitra'] = $this->modelMitra->getMitraById($id);
    $this->form_validation->set_rules('namaMitra', 'Nama Mitra', 'required|trim|max_length[100]');

    if($this->form_validation->run() == FALSE){
      $this->load->view('templates/header', $data);
      $this->load->view('admin/editmtr', $data);
      $this->load->view('templates/footer');
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

            $this->modelMitra->editMitra($filename);
            $this->session->set_flashdata('aftercrud', 'Diedit');
            redirect('admin');
        }
    }
  }
public function editkrywn($id){
    $data['title'] = 'Edit Mitra';
    $data['karyawan'] = $this->modelKaryawan->getKaryawanById($id);
    $this->form_validation->set_rules('namaKrywn', 'Nama Karyawan', 'required|trim|max_length[100]');
    $this->form_validation->set_rules('jabatan', 'Jabatan Karyawan', 'required|trim|max_length[100]');

    if($this->form_validation->run() == FALSE){
      $this->load->view('templates/header', $data);
      $this->load->view('admin/editkrywn', $data);
      $this->load->view('templates/footer');
    } else {
        // File upload configuration
        $config['upload_path'] = './assets/image/member';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = false; 
        $config['remove_spaces'] = true; 
      
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) { 
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
            redirect('admin');
        } else {
            $upload_data = $this->upload->data();
            $filename = $upload_data['file_name'];

            $this->modelKaryawan->editKaryawan($filename);
            $this->session->set_flashdata('aftercrud', 'Diedit');
            redirect('admin');
        }
    }
  }

// DELETE
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

  public function deletekrywn($id){
    $karyawan = $this->db->get_where('karyawan', ['idKrywn' => $id])->row_array();
        $filename = $karyawan['foto'];
        $file_path = './assets/image/member/' . $filename;

        if(file_exists($file_path)) {
            unlink($file_path);
        }
        $this->modelKaryawan->deleteKaryawan($id);
        $this->session->set_flashdata('aftercrud', 'Dihapus');
    redirect('admin');
  }
}