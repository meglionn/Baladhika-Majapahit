<main class="container mt-5">
  <h2 class="mb-4">Form Tambah Karyawan</h2>

  <?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
  <?php endif; ?>

  <form action="<?= base_url('profilecrud/karyawan/tambah'); ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="namaKrywn" class="form-label">Nama Karyawan</label>
      <input type="text" class="form-control" id="namaKrywn" name="namaKrywn" required>
    </div>

    <div class="mb-3">
      <label for="jabatan" class="form-label">Jabatan</label>
      <input type="text" class="form-control" id="jabatan" name="jabatan" required>
    </div>

    <div class="mb-3">
      <label for="foto" class="form-label">Foto</label>
      <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= base_url('profilecrud/karyawan_list'); ?>" class="btn btn-secondary">Kembali</a>
  </form>
</main>
