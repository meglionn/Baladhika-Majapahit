<?php if ($this->session->flashdata()): ?>
<div class="row">
  <div class="col">
    <div class="alert alert-success alert-dismissible fade show" role="alert">Data Mitra Berhasil
    <strong><?= $this->session->flashdata('mitra'); ?></strong> !
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
</div>
<?php endif; ?>

<?php if($this->session->flashdata('error')): ?>
<div class="row">
  <div class="col">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <?= $this->session->flashdata('error'); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
</div>
<?php endif; ?>

<?php if($this->session->flashdata('validation_errors')): ?>
<div class="row">
  <div class="col">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <?= $this->session->flashdata('validation_errors'); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
</div>
<?php endif; ?>

<section class="daftar-mitra">
  <h2 data-aos="fade-up">MITRA KAMI</h2>

  <div class="sektor-migas">
    <div class="sektor-migas-list">
      <p class="sektor-migas-title" aria-current="true" data-aos="fade-up">Mitra Sektor Migas</p>
      <?php foreach ($migas as $mgs): ?>
        <div class="card-body-info" data-aos="fade-up" data-aos-delay="100">
          <h5 class="card-title">
            <a href="<?= base_url();?>profilecrud/deletegas/<?= $mgs['idGas']; ?>" class="btn btn-danger" onclick="return confirm('Konfirmasi ingin menghapus mitra?');">Hapus</a>
            <?= $mgs['namaGas'] ?>
          </h5>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="sektor-migas-image" data-aos="fade">
      <img src="assets/image/foto/spbu.png" alt="Mitra Sektor Migas">
    </div>
  </div>

  <div class="logo-mitra-grid" data-aos="fade-up" data-aos-delay="200">
    <?php foreach ($mitra as $mtr): ?>
      <div class="mitra-card">
        <img src="assets/image/mitra/<?= $mtr['logo'] ?>" alt="<?= $mtr['namaMitra'] ?>">
      </div>
      <h5 class="card-title">
        <a href="<?= base_url();?>profilecrud/deletemtr/<?= $mtr['idMitra']; ?>" class="btn btn-danger" onclick="return confirm('Konfirmasi ingin menghapus mitra?');">Hapus</a>
        <?= $mtr['namaMitra'] ?>
      </h5>
    <?php endforeach; ?>
  </div>
</section>

<main>
  <section class="form tambah mitra">
    <div class="container">
      <div class="card border-info mb-5">
        <div class="card-header">
          <h1>Form Penambahan Mitra</h1>
          <ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-migas-tab" data-bs-toggle="pill" data-bs-target="#pills-migas" type="button" role="tab" aria-controls="pills-migas" aria-selected="true">Mitra Sektor Migas</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-nongas-tab" data-bs-toggle="pill" data-bs-target="#pills-nongas" type="button" role="tab" aria-controls="pills-nongas" aria-selected="false">Mitra Sektor Non-Migas</button>
            </li>
          </ul>
        </div>
        
        <!-- Fix: Added the tab-content div wrapper -->
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-migas" role="tabpanel" aria-labelledby="pills-migas-tab" tabindex="0">
            <div class="row-mt-3">
              <div class="col-md-6">
                <?php echo form_open('profilecrud/addgas'); ?>
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
              <?php echo form_open_multipart('profilecrud/addmtr'); ?>
                <div class="mb-3 mt-3" style="margin-left: 5rem;">
                  <label for="namaMitra" class="form-label">Nama Perusaan</label>
                  <input id="namaMitra" name="namaMitra" type="text" class="form-control" placeholder="PT. Baladhika Majapahit" aria-describedby="mitraHelp">
                  <div id="mitraHelp" class="form-text mb-3">Masukkan Nama Perusahaan Mitra</div>

                  <label for="logo" class="form-label">Logo Perusahaan</label>
                  <input id="logo" class="form-control" name="logo" type="file" aria-describedby="logoHelp">
                  <div id="logoHelp" class="form-text mb-3">Masukkan Logo Perusahaan Mitra</div>

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