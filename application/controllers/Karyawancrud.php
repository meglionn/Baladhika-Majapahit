<?php

class Karyawancrud extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
     $this->load->model('modelKaryawan');
     $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = 'Baladhika Majapahit | Karyawancrud';
    $data['karyawan'] = $this->modelKaryawan->getAllKaryawan();   
    $this->load->view('templates/header', $data);
    $this->load->view('profilecrud/karyawan_list', $data);
    $this->load->view('templates/footer');
  }

  public function add(){
    $data['title'] = 'Tambah Karyawan';

    $this->form_validation->set_rules('namaKrywn', 'Nama Karyawan', 'required');
    $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
    if($this->form_validation->run() == FALSE){
        $this->load->view('templates/header', $data);
        $this->load->view('profilecrud/karyawan_form');
        $this->load->view('templates/footer');
    } else{
        $this->modelKaryawan->addKaryawan();
        $this->session->set_flashdata('Karyawan', 'Ditambahkan');
        redirect('profilecrud');
    }
  }

  public function delete($id){
    $this->modelKaryawan->deleteKaryawan($id);
    $this->session->set_flashdata('Karyawan', 'Dihapus');
    redirect('profilecrud');
  }
    public function simpan_karyawan() {
        $foto = $this->_upload_foto();

        $data = [
            'namaKrywn' => $this->input->post('namaKrywn'),
            'jabatan' => $this->input->post('jabatan'),
            'foto' => $foto
        ];
        $this->modelKaryawan->insert($data);
        redirect('profilecrud/karyawan');
    }

    public function edit_karyawan($id) {
        $data['karyawan'] = $this->modelKaryawan->get_by_id($id);
        $this->load->view('profilecrud/karyawan_form_edit', $data);
    }

    public function update_karyawan($id) {
        $foto = $this->_upload_foto();

        $data = [
            'namaKrywn' => $this->input->post('namaKrywn'),
            'jabatan' => $this->input->post('jabatan'),
        ];

        if ($foto) $data['foto'] = $foto;

        $this->modelKaryawan->update($id, $data);
        redirect('profilecrud/karyawan');
    }

    public function hapus_karyawan($id) {
        $this->modelKaryawan->delete($id);
        redirect('profilecrud/karyawan');
    }

    private function _upload_foto() {
        $config['upload_path'] = './assets/image/member/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size'] = 2048;
        $config['file_name'] = time();

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            return $this->upload->data('file_name');
        }

        return null;
    }

}


