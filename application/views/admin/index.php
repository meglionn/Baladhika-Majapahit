<main>
  <!-- Profile Header -->
  <section class="profile-header text-center py-4 bg-light rounded mb-5">
    <h1 class="display-5 fw-bold">Admin Baladhika Majapahit</h1>
  </section>

    <!-- Flash Message -->
  <?php if ($this->session->flashdata('aftercrud')): ?>
    <div class="row">
      <div class="col">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Mitra Berhasil <strong><?= $this->session->flashdata('aftercrud'); ?></strong>!
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
  <main>
  <section class="form tambah mitra">
    <div class="container">
      <div class="card border-info mb-5">
        <div class="card-header">
          <h1>Form Penambahan Data</h1>
          <!-- selector -->
          <ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-migas-tab" data-bs-toggle="pill" data-bs-target="#pills-migas" type="button" role="tab" aria-controls="pills-migas" aria-selected="true">
                Mitra Sektor Migas</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-nongas-tab" data-bs-toggle="pill" data-bs-target="#pills-nongas" type="button" role="tab" aria-controls="pills-nongas" aria-selected="false">
                Mitra Sektor non-Migas</button>
            </li>
          </ul>
        </div>

        <!-- form body -->
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

          <div class="tab-pane fade" id="pills-nongas" role="tabpanel" aria-labelledby="pills-nongas-tab" tabindex="0">
            <div class="col-md-6">
              <?php echo form_open_multipart('admin/addmtr'); ?>
                <div class="mb-3 mt-3" style="margin-left: 5rem;">
                  <label for="namaMitra" class="form-label">Nama Perusaan</label>
                  <input id="namaMitra" name="namaMitra" type="text" class="form-control" placeholder="PT. Baladhika Majapahit" aria-describedby="mitraHelp">
                  <div id="mitraHelp" class="form-text mb-3">Masukkan Nama Perusahaan Mitra</div>

                  <label for="logo" class="form-label">Logo Perusahaan</label>
                  <input id="logo" class="form-control" name="logo" type="file" aria-describedby="logoHelp">
                  <div id="logoHelp" class="form-text mb-3">Masukkan Logo Perusahaan Mitra</div>
                  
                  <div class="mt-2 mb-3">
                    <img id="logoPreview" src="#" alt="Logo Preview" style="max-width: 100%; max-height: 200px; display: none;">
                  </div>

                  <button type="submit" name="add" class="btn btn-info mt-3">Tambah Mitra Non-Migas</button>
                </div>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
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
</script>

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
                  <h5 class="card-title mb-0"><?= $mgs['namaGas'] ?></h5>
                  <a href="<?= base_url(); ?>admin/deletegas/<?= $mgs['idGas']; ?>"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Konfirmasi ingin menghapus mitra?');">Hapus</a>
                  <a href="<?= base_url(); ?>admin/editgas/<?= $mgs['idGas']; ?>"
                    class="btn btn-info btn-sm"">Edit</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- List Mitra Non Migas -->
  <section class="mitra-perusahaan">
    <h2>Mitra Sektor non-Migas</h2>
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
                <a href="<?= base_url();?>admin/deletemtr/<?= $mtr['idMitra']; ?>" 
                 class="btn btn-danger" onclick="return confirm('Konfirmasi ingin menghapus mitra?');">Hapus</a>
                <a href="<?= base_url(); ?>admin/editmtr/<?= $mtr['idMitra']; ?>"
                 class="btn btn-info btn-sm"">Edit</a>
              </h5>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>

