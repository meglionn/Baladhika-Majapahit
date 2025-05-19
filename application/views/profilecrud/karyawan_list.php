<?php if ($this->session->flashdata()): ?>
<div class="row">
  <div class="col">
    <div class="alert alert-success alert-dismissible fade show" role="alert">Data Karyawan Berhasil
    <strong><?= $this->session->flashdata('karyawan'); ?></strong> !
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
</div>
<?php endif; ?>
<main>


  <section class="tim-list" data-aos="fade" data-aos-delay="100">
    <p class="our-team-title">Admin Baladhika Majapahit</p>
    <h1 class="tim-list-title">Update Karyawan</h1>

    <h3 class="position-title">Direktur</h3>
    <div class="team-image-list" data-aos="fade-up" data-aos-delay="100">
      <?php foreach($karyawan as $k): ?>
        <?php if (strpos(strtolower($k['jabatan']), 'direktur') !== false): ?>
          <div class="col-md-4 col-lg-3">
            <div class="team-image">
              <img src="assets/image/member/<?= $k['foto']?>" class="team-image" alt="<?= $k['namaKrywn']?>">
              <div class="image-info text-center">
                <p><?= $k['namaKrywn']?></p>
                <p><?= $k['jabatan']?></p>
                <a href="<?= base_url('Karyawancrud/edit_karyawan/' . $k['idKrywn']) ?>"
                   class="btn btn-warning btn-sm">Edit</a>
                <a href="<?= base_url('Karyawancrud/hapus_karyawan/' . $k['idKrywn']) ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin ingin menghapus karyawan ini?');">Hapus</a>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>

    <h3 class="position-title">Manager</h3>
    <div class="team-image-list" data-aos="fade-up" data-aos-delay="100">
      <?php foreach($karyawan as $k): ?>
        <?php if (strpos(strtolower($k['jabatan']), 'manajer') !== false): ?>
          <div class="col-md-4 col-lg-">
            <div class="team-image">
              <img src="assets/image/member/<?= $k['foto']?>" class="team-image" alt="<?= $k['namaKrywn']?>">
              <div class="image-info text-center">
                <p><?= $k['namaKrywn']?></p>
                <p><?= $k['jabatan']?></p>
                <div class="d-flex justify-content-center gap-2">
                <a href="<?= base_url('Karyawancrud/edit_karyawan/' . $k['idKrywn']) ?>"
                   class="btn btn-warning btn-sm">Edit</a>
                <a href="<?= base_url('Karyawancrud/hapus_karyawan/' . $k['idKrywn']) ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin ingin menghapus karyawan ini?');">Hapus</a>
              </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>

    <h3 class="position-title">Representatif Office</h3>
    <div class="team-image-list" data-aos="fade-up" data-aos-delay="100">
      <?php foreach($karyawan as $k): ?>
        <?php if (strpos(strtolower($k['jabatan']), 'representatif') !== false): ?>
          <div class="col-md-4 col-lg-">
            <div class="team-image">
              <img src="assets/image/member/<?= $k['foto']?>" class="team-image" alt="<?= $k['namaKrywn']?>">
              <div class="image-info text-center">
                <p><?= $k['namaKrywn']?></p>
                <p> <?= $k['jabatan']?></p>
                <div class="d-flex justify-content-center gap-2">
                <a href="<?= base_url('Karyawancrud/edit_karyawan/' . $k['idKrywn']) ?>"
                   class="btn btn-warning btn-sm">Edit</a>
                <a href="<?= base_url('Karyawancrud/hapus_karyawan/' . $k['idKrywn']) ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin ingin menghapus karyawan ini?');">Hapus</a>
              </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>

    <h3 class="position-title">Staff</h3>
    <div class="team-image-list" data-aos="fade-up" data-aos-delay="100">
      <?php foreach($karyawan as $k): ?>
        <?php if (strpos(strtolower($k['jabatan']), 'staff') !== false): ?>
          <div class="col-md-4 col-lg-">
            <div class="team-image">
              <img src="assets/image/member/<?= $k['foto']?>" class="team-image" alt="<?= $k['namaKrywn']?>">
              <div class="image-info text-center">
                <p><?= $k['namaKrywn']?></p>
                <p><?= $k['jabatan']?></p>
                <div class="d-flex justify-content-center gap-2">
                <a href="<?= base_url('Karyawancrud/edit_karyawan/' . $k['idKrywn']) ?>"
                   class="btn btn-warning btn-sm">Edit</a>
                <a href="<?= base_url('Karyawancrud/hapus_karyawan/' . $k['idKrywn']) ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin ingin menghapus karyawan ini?');">Hapus</a>
              </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </section>
</main>
