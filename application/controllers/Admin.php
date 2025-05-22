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
     $this->load->library('session');
  }

  public function index()
  {
// Check if user is already logged in
      if ($this->session->userdata('admin_logged_in')) {
        $data['title'] = 'Baladhika Majapahit | Admin';
        $data['mitra'] = $this->modelMitra->getAllMitra();
        $data['migas'] = $this->modelMigas->getAllMigas();
        $data['karyawan'] = $this->modelKaryawan->getAllKaryawan();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
        return;
      }

      if ($this->input->post()) {
      $password = $this->input->post('password', true);
      
      // Check if password is correct
      if ($password === 'ferdi69') {

        $this->session->set_userdata('admin_logged_in', TRUE);

        // Show admin panel
        $data['title'] = 'Baladhika Majapahit | Admin';
        $data['mitra'] = $this->modelMitra->getAllMitra();
        $data['migas'] = $this->modelMigas->getAllMigas();
        $data['karyawan'] = $this->modelKaryawan->getAllKaryawan();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
      } else {
        $data['title'] = 'Admin Access | Baladhika Majapahit';
        $data['error'] = 'Password Salah! Coba Lagi.';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/access', $data);
        $this->load->view('templates/footer');
      }
    } else {
      $data['title'] = 'Admin Access | Baladhika Majapahit';
      $this->load->view('templates/header', $data);
      $this->load->view('admin/access', $data);
      $this->load->view('templates/footer');
    }
  }

  public function logout() {
    $this->session->unset_userdata('admin_logged_in');
    $this->session->sess_destroy();
    redirect('admin');
  }

  private function check_admin_login() {
    if (!$this->session->userdata('admin_logged_in')) {
      redirect('admin');
      return false;
    }
    return true;
  }

// CREATE 
  public function addgas(){

    if (!$this->check_admin_login()) return;

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

    if (!$this->check_admin_login()) return;

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

    if (!$this->check_admin_login()) return;

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

    if (!$this->check_admin_login()) return;

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

    if (!$this->check_admin_login()) return;

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

    if (!$this->check_admin_login()) return;

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

    if (!$this->check_admin_login()) return;

    $this->modelMigas->deleteMigas($id);
    $this->session->set_flashdata('aftercrud', 'Dihapus');
    redirect('admin');
  }

  public function deletemtr($id){

    if (!$this->check_admin_login()) return;

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

    if (!$this->check_admin_login()) return;

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