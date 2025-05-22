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
      <div class="sektor-migas-admin">
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