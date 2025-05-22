<style>
  /*   .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1.5rem;
  } */

  /* Admin Header */
  .admin-header {
    background-color: #26b1c1;
    color: white;
    padding: 32px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 32px;
  }

  .admin-header h1 {
    font-size: 40px;
    font-weight: bold;
  }

  /* Flash Messages */
  .alert {
    border-radius: 8px;
    padding: 16px 24px;
    margin-bottom: 24px;
    font-size: 16px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .alert-success {
    background-color: #d4edda;
    color: #155724;
  }

  .alert-danger {
    background-color: #f8d7da;
    color: #721c24;
  }

  .alert .btn-close {
    filter: opacity(0.6);
  }

  .alert .btn-close:hover {
    filter: opacity(1);
  }

  /* Form Section */
  .form.tambah.mitra .card {
    border: none;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    background-color: white;
  }

  .form.tambah.mitra .card-header {
    border-radius: 12px 12px 0 0;
    padding: 24px;
  }

  .form.tambah.mitra .card-header h1 {
    font-size: 28px;
    margin-bottom: 30px;
  }

  .nav-pills .nav-link {
    border-radius: 8px;
    margin-right: 8px;
    padding: 12px 24px;
    font-weight: 500;
    color: black;
    background-color: #e9ecef;
    transition: all 0.3s ease;
  }

  .nav-pills .nav-link.active {
    background-color: #26b1c1;
    color: white;
  }

  .nav-pills .nav-link:hover {
    background-color: rgb(29, 127, 137);
    color: white;
  }

  .form.tambah.mitra .form-control {
    border-radius: 8px;
    border: 1px solid #ced4da;
    padding: 12px;
    font-size: 16px;
    transition: border-color 0.3s ease;
  }

  .form.tambah.mitra .form-control:focus {
    border-color: #26b1c1;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
  }

  .form.tambah.mitra .form-label {
    font-weight: 500;
    color: #333;
    margin-bottom: 8px;
  }

  .form.tambah.mitra .form-text {
    color: #6c757d;
    font-size: 14px;
  }

  .form.tambah.mitra .btn-info {
    background-color: #26b1c1;
    border: none;
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: 500;
    transition: background-color 0.3s ease;
    color: white;
  }

  .form.tambah.mitra .btn-info:hover {
    background-color: rgb(29, 127, 137);
  }

  /* Mitra and Karyawan Sections */
  .daftar-mitra,
  .daftar-karyawan {
    margin-bottom: 50px;
  }

  .daftar-mitra h2,
  .daftar-karyawan h2 {
    font-size: 32px;
    font-weight: bold;
    color: #333;
    margin-bottom: 24px;
  }

  .sektor-migas h3,
  .mitra-non-migas h2 {
    font-size: 24px;
    font-weight: 600;
    color: #333;
    margin-bottom: 16px;
  }

  .daftar-karyawan h2::after,
  .mitra-non-migas h2::after {
    content: '';
    display: block;
    width: 150px;
    height: 3px;
    background-color: #ffc107;
    margin: 25px auto 0;
  }

  .card {
    border: none;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
  }

  .card-img-top {
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    background-color: #f8f9fa;
    height: 100%;
  }

  .card-body {
    padding: 24px;
    flex-direction: column;
  }

  .card-title {
    font-size: 20px;
    font-weight: 500;
    margin-bottom: 8px;
  }

  .card-title a.btn {
    margin-left: 8px;
    padding: 8px 16px;
    font-size: 14px;
    border-radius: 8px;
  }

  .hapus-edit-btn {
    margin-top: 30px;
  }

  .btn-info {
    background-color: #26b1c1;
    border: none;
    color: white;
    font-weight: bold;
  }

  .btn-info:hover {
    background-color: rgb(39, 140, 152);
    color: white;
  }

  .btn-danger {
    background-color: #dc3545;
    border: none;
    color: white;
    font-weight: bold;
  }

  .btn-danger:hover {
    background-color: #b02a37;
  }

  .jabatan-karyawan {
    font-size: 14px;
    margin-top: 10px;
    color: #6c757d;
    font-weight: 500;
  }
</style>

<main>
  <!-- Profile Header -->
  <section class="admin-header text-center py-5 mb-5 position-relative">
    <a href="<?= base_url('admin/logout'); ?>" class="btn btn-danger position-absolute top-0 end-0 mt-3 me-3">Logout</a>
    <h1 class="display-5 fw-bold">Admin Baladhika Majapahit</h1>
  </section>

  <!-- Flash Message -->
  <?php if ($this->session->flashdata('aftercrud')): ?>
    <div class="row">
      <div class="col">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Berhasil <strong><?= $this->session->flashdata('aftercrud'); ?></strong>!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($this->session->flashdata('error')): ?>
    <div class="row">
      <div class="col">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> <?= $this->session->flashdata('error'); ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($this->session->flashdata('validation_errors')): ?>
    <div class="row">
      <div class="col">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?= $this->session->flashdata('validation_errors'); ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <!-- Form -->
  <section class="form tambah mitra">
    <div class="container">
      <div class="card border-info mb-5">
        <div class="card-header">
          <h1>Form Penambahan Data</h1>
          <!-- selector -->
          <ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-migas-tab" data-bs-toggle="pill"
                data-bs-target="#pills-migas" type="button" role="tab" aria-controls="pills-migas" aria-selected="true">
                Mitra Sektor Migas</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-nongas-tab" data-bs-toggle="pill"
                data-bs-target="#pills-nongas" type="button" role="tab" aria-controls="pills-nongas" aria-selected="false">
                Mitra Sektor non-Migas</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-karyawan-tab" data-bs-toggle="pill"
                data-bs-target="#pills-karyawan" type="button" role="tab" aria-controls="pills-karyawan" aria-selected="false">
                Karyawan</button>
            </li>
          </ul>
        </div>

        <!-- form body migas -->
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-migas" role="tabpanel" aria-labelledby="pills-migas-tab" tabindex="0">
            <div class="row-mt-3">
              <div class="col-md-6">
                <?php echo form_open('admin/addgas'); ?>
                <div class="mb-3 mt-3" style="margin-left: 5rem;">
                  <label for="namaGas" class="form-label">Nama SPBU</label>
                  <input id="namaGas" name="namaGas" type="text" class="form-control" placeholder="SPBU Pertamina" aria-describedby="gasHelp">
                  <div id="gasHelp" class="form-text mb-3">Masukkan Nama SPBU Mitra</div>

                  <button type="submit" name="add" class="btn btn-info mt-3">Tambah Mitra Migas</button>
                </div>
                <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        <!-- form body mitra -->
          <div class="tab-pane fade" id="pills-nongas" role="tabpanel" aria-labelledby="pills-nongas-tab" tabindex="0">
            <div class="col-md-6">
              <?php echo form_open_multipart('admin/addmtr'); ?>
              <div class="mb-3 mt-3" style="margin-left: 5rem;">
                <label for="namaMitra" class="form-label">Nama Perusaan</label>
                <input id="namaMitra" name="namaMitra" type="text" class="form-control" placeholder="PT. Baladhika Majapahit" aria-describedby="mitraHelp">
                <div id="mitraHelp" class="form-text mb-3">Masukkan Nama Perusahaan Mitra</div>

                <label for="logo" class="form-label">Logo Perusahaan</label>
                <input id="logo" name="logo" class="form-control" type="file" aria-describedby="logoHelp">
                <div id="logoHelp" class="form-text mb-3">Masukkan Logo Perusahaan Mitra</div>

                <div class="mt-2 mb-3">
                  <img id="logoPreview" src="#" alt="Logo Preview" style="max-width: 100%; max-height: 200px; display: none;">
                </div>

                <button type="submit" name="add" class="btn btn-info mt-3">Tambah Mitra Non-Migas</button>
              </div>
              <?php echo form_close(); ?>
            </div>
          </div>
        <!-- form body karyawan -->
          <div class="tab-pane fade" id="pills-karyawan" role="tabpanel" aria-labelledby="pills-karyawan-tab" tabindex="0">
            <div class="col-md-6">
              <?php echo form_open_multipart('admin/addkrywn'); ?>
              <div class="mb-3 mt-3" style="margin-left: 5rem;">
                <label for="namaKrywn" class="form-label">Nama Karyawan</label>
                <input id="namaKrywn" name="namaKrywn" type="text" class="form-control" placeholder="Ferdiansyah" aria-describedby="karyawanHelp">
                <div id="karyawanHelp" class="form-text mb-3">Masukkan Nama Karyawam</div>

                <label for="jabatan" class="form-label">Jabatan Karyawan</label>
                <input id="jabatan" name="jabatan" type="text" class="form-control" placeholder="CEO" aria-describedby="jabatanHelp">
                <div id="jabatanHelp" class="form-text mb-3">Masukkan Jabatan Karyawam</div>

                <label for="foto" class="form-label">Foto Karyawan</label>
                <input id="foto" name="foto" class="form-control" type="file" aria-describedby="fotoHelp">
                <div id="fotoHelp" class="form-text mb-3">Masukkan Foto Karyawan</div>

                <div class="mt-2 mb-3">
                  <img id="fotoPreview" src="#" alt="Foto Preview" style="max-width: 100%; max-height: 200px; display: none;">
                </div>

                <button type="submit" name="add" class="btn btn-info mt-3">Tambah Karyawan</button>
              </div>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Mitra -->
  <section class="daftar-mitra mb-5">
    <h2 class="mb-4"> Mitra Perusahaan</h2>


    <!-- List Mitra Migas -->
    <div class="sektor-migas">
      <div class="sektor-migas-list">
        <h3 class="fs-4 fw-semibold mb-3">Mitra Sektor Migas</h3>

        <div class="row">
          <?php foreach ($migas as $mgs): ?>
            <div class="col-md-6 col-lg-4 mb-3">
              <div class="card h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                  <h5 class="card-title text-center mb-0"><?= $mgs['namaGas'] ?></h5>
                  <div class="hapus-edit-btn">
                    <a href="<?= base_url(); ?>admin/deletegas/<?= $mgs['idGas']; ?>"
                      class="btn btn-danger btn-sm"
                      onclick="return confirm('Konfirmasi ingin menghapus mitra?');">Hapus</a>
                    <a href="<?= base_url(); ?>admin/editgas/<?= $mgs['idGas']; ?>"
                      class="btn btn-info btn-sm">Edit</a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- List Mitra Non Migas -->
  <section class=" mitra-non-migas text-center">
    <h2 class="fw-bold fs-2">Mitra Sektor non-Migas</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 m-5 mt-0 p-5">
      <?php foreach ($mitra as $mtr): ?>
        <div class="col">
          <div class="card h-100">
            <img src="<?= base_url(''); ?>assets/image/mitra/<?= $mtr['logo'] ?>"
              class="card-img-top p-3"
              alt="<?= $mtr['namaMitra'] ?>"
              style="max-height: 150px; object-fit: contain;">
            <div class="card-body text-center">
              <h5 class="card-title">
                <?= $mtr['namaMitra'] ?>
                <div class="hapus-edit-btn">
                  <a href="<?= base_url(); ?>admin/deletemtr/<?= $mtr['idMitra']; ?>"
                    class="btn btn-danger" onclick="return confirm('Konfirmasi ingin menghapus mitra?');">Hapus</a>
                  <a href="<?= base_url(); ?>admin/editmtr/<?= $mtr['idMitra']; ?>"
                    class="btn btn-info btn-sm">Edit</a>
                </div>
              </h5>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Karyawan -->
  <section class="daftar-karyawan mb-5">
    <h2 class="mb-4 text-center"> Karyawan Perusahaan</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 m-5 mt-0 p-5">
      <?php foreach ($karyawan as $krw): ?>
        <div class="col">
          <div class="card h-100">
            <img src="<?= base_url(''); ?>assets/image/member/<?= $krw['foto'] ?>"
              class="card-img-top p-3"
              alt="<?= $krw['namaKrywn'] ?>"
              style="max-height: 250px; object-fit: contain;">
            <div class="card-body text-center">
              <h5 class="card-title">
                <div class="nama-karyawan">
                  <?= $krw['namaKrywn'] ?>
                </div>
                <div class="jabatan-karyawan">
                  <?= $krw['jabatan'] ?>
                </div>
                <div class="hapus-edit-btn">
                  <a href="<?= base_url(); ?>admin/deletekrywn/<?= $krw['idKrywn']; ?>"
                    class="btn btn-danger" onclick="return confirm('Konfirmasi ingin menghapus karyawan?');">Hapus</a>
                  <a href="<?= base_url(); ?>admin/editkrywn/<?= $krw['idKrywn']; ?>"
                    class="btn btn-info btn-sm">Edit</a>
                </div>
              </h5>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>

<script>
  document.getElementById('logo').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('logoPreview');

    if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
        preview.src = e.target.result;
        preview.style.display = 'block';
      };
      reader.readAsDataURL(file);
    } else {
      preview.src = '#';
      preview.style.display = 'none';
    }
  });
  document.getElementById('foto').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('fotoPreview');

    if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
        preview.src = e.target.result;
        preview.style.display = 'block';
      };
      reader.readAsDataURL(file);
    } else {
      preview.src = '#';
      preview.style.display = 'none';
    }
  });
</script>