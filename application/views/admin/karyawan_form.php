<main class="container my-5">
  <section class="admin-header text-center py-4">
    <h1 class="display-5 fw-bold">Form Penambahan Karyawan</h1>
  </section>

  <section class="form-tambah-mitra m-5 mt-0 p-5">
    <div class="card shadow-sm">
      <div class="card-header bg-custom text-white py-4">
        <h2 class="mb-0">Data Karyawan</h2>
      </div>

      <div class="card-body">
        <?php if (validation_errors()): ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= validation_errors(); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>

        <form action="<?= base_url('karyawancrud/add'); ?>" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="namaKrywn" class="form-label fw-semibold">Nama Karyawan</label>
            <input id="namaKrywn" name="namaKrywn" type="text" class="form-control" placeholder="Nama Lengkap" required>
          </div>

          <div class="mb-3">
            <label for="jabatan" class="form-label fw-semibold">Jabatan</label>
            <input id="jabatan" name="jabatan" type="text" class="form-control" placeholder="Contoh: Direktur Utama" required>
          </div>

          <div class="mb-3">
            <label for="foto" class="form-label fw-semibold">Foto</label>
            <input id="foto" name="foto" type="file" class="form-control" accept="image/*">
            <div class="mt-3">
              <img id="fotoPreview" src="#" alt="Pratinjau Foto" class="img-fluid rounded" style="max-width: 200px; max-height: 200px; display: none;">
            </div>
          </div>

          <button type="submit" class="btn btn-custom mt-3">Tambah Karyawan</button>
        </form>
      </div>
    </div>
  </section>
</main>

<script>
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
