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
    $this->load->view('admin/karyawan_list', $data);
    $this->load->view('templates/footer');
  }

  public function add(){
    $data['title'] = 'Tambah Karyawan';

    $this->form_validation->set_rules('namaKrywn', 'Nama Karyawan', 'required');
    $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
    
    if($this->form_validation->run() == FALSE){
        $this->load->view('templates/header', $data);
        $this->load->view('admin/karyawan_form');
        $this->load->view('templates/footer');
    } else{
        $foto = $this->_upload_foto();

        $data_insert = [
            'namaKrywn' => $this->input->post('namaKrywn'),
            'jabatan'   => $this->input->post('jabatan'),
            'foto'      => $foto
        ];

        $this->modelKaryawan->insert($data_insert);
        $this->session->set_flashdata('Karyawan', 'Ditambahkan');
        redirect('Karyawancrud');
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
        redirect('admin/karyawan');
    }

    public function edit_karyawan($id) {
        $data['karyawan'] = $this->modelKaryawan->get_by_id($id);
        $this->load->view('profilecrud/karyawan_form', $data);
    }

    public function update_karyawan($id) {
        $this->load->model('Karyawan_model');
        $karyawan = $this->Karyawan_model->getKaryawanById($id);

        $nama = $this->input->post('namaKrywn');
        $jabatan = $this->input->post('jabatan');

    // Cek apakah ada file baru diupload
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './assets/image/member/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['file_name'] = time() . '_' . $_FILES['foto']['name'];

            $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            // Hapus foto lama jika ada
            if ($karyawan['foto'] && file_exists('./assets/image/member/' . $karyawan['foto'])) {
                unlink('./assets/image/member/' . $karyawan['foto']);
            }

            $foto = $this->upload->data('file_name');
        } else {
            // Jika gagal upload, kembalikan ke form edit
            $data['karyawan'] = $karyawan;
            $data['error'] = $this->upload->display_errors();
            $this->load->view('admin/form_karyawan', $data);
            return;
        }
        } else {
        // Jika tidak upload baru, pakai foto lama
            $foto = $karyawan['foto'];
        }

        $data_update = [
            'namaKrywn' => $nama,
            'jabatan'   => $jabatan,
            'foto'      => $foto
        ];

        $this->Karyawan_model->updateKaryawan($id, $data_update);

        $this->session->set_flashdata('karyawan', 'diperbarui');
        redirect('Karyawancrud');
    }

    public function hapus_karyawan($id) {
        $this->modelKaryawan->delete($id);
        redirect('Karyawancrud');
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


