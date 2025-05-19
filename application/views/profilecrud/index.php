<main >
  <!-- Flash Message -->
  <?php if ($this->session->flashdata()): ?>
    <div class="row">
      <div class="col">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Mitra Berhasil <strong><?= $this->session->flashdata('mitra'); ?></strong>!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <!-- Profile Header -->
  <section class="profile-header text-center py-4 bg-light rounded mb-5">
    <h1 class="display-5 fw-bold">Admin Baldhika Majapahit</h1>
  </section>

  <!-- Update Mitra Perusahaan -->
  <section class="daftar-mitra mb-5">
    <h2 class="mb-4">Update Mitra Perusahaan</h2>
    <div class="sektor-migas">
      <div class="sektor-migas-list">
        <h3 class="fs-4 fw-semibold mb-3">Mitra Sektor Migas</h3>
        <div class="row mb-4">
          <div class="col-md-6">
            <a href="<?= base_url(); ?>profilecrud/add" class="btn btn-primary">Tambah Mitra</a>
          </div>
        </div>
        <div class="row">
          <?php foreach ($migas as $mgs): ?>
            <div class="col-md-6 col-lg-4 mb-3">
              <div class="card h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                  <h5 class="card-title mb-0"><?= $mgs['namaGas'] ?></h5>
                  <a href="<?= base_url(); ?>profilecrud/delete/<?= $mgs['idGas']; ?>"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Konfirmasi ingin menghapus mitra?');">Hapus</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Mitra Perusahaan -->
  <section class="mitra-perusahaan">
    <h2>Mitra Perusahaan</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 m-5 mt-0 p-5">
      <?php foreach ($mitra as $mtr): ?>
        <div class="col">
          <div class="card h-100">
            <img src="<?= base_url(''); ?>assets/image/mitra/<?= $mtr['logo'] ?>"
              class="card-img-top p-3"
              alt="<?= $mtr['namaMitra'] ?>"
              style="max-height: 150px; object-fit: contain;">
            <div class="card-body text-center">
              <h5 class="card-title"><?= $mtr['namaMitra'] ?></h5>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>