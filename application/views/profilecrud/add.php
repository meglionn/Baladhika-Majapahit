<style>
  .admin-header {
    color: #26b1c1;
  }

  .admin-header::after {
    content: "";
    display: block;
    width: 250px;
    height: 4px;
    background-color: #f4d24f;
    margin: 16px auto 0;
    border-radius: 2px;
  }

  .bg-custom {
    background-color: #26b1c1 !important;
  }

  .btn-custom {
    background-color: #26b1c1;
    border-color: #26b1c1;
    color: #fff;
  }

  .btn-custom:hover {
    background-color: #1e9aa7;
    border-color: #1e9aa7;
  }

  .nav-tabs .nav-link {
    font-size: 1.1rem;
    font-weight: 500;
    padding: 0.75rem 1.5rem;
    color: #fff;
    background-color: #26b1c1;
    border: none;
    transition: background-color 0.2s;
  }

  .nav-tabs .nav-link:hover {
    background-color: #33c1d2;
  }

  .nav-tabs .nav-link.active {
    background-color: #1e9aa7;
    color: #fff;
    /* border-bottom: 4px solid #fff; */
  }

  .nav-tabs .nav-link.active::after {
    content: "";
    display: block;
    width: 100%;
    height: 2px;
    background-color: #fff;
    /* margin: 16px auto 0; */
    border-radius: 2px;
  }

  .nav-tabs .nav-link:focus {
    outline: 2px solid #1e9aa7;
    outline-offset: -2px;
  }

  .card-header {
    display: flex;
    justify-content: center;
    border-bottom: 5px solid #f4d24f;
  }

  .card {
    width: 600px;
  }

  .form-tambah-mitra {
    display: flex;
    justify-content: center;
  }
</style>

<main class="container my-5">
  <section class="admin-header text-center py-4">
    <h1 class="display-5 fw-bold">Form Penambahan Mitra</h1>
  </section>

  <section class="form-tambah-mitra m-5 mt-0 p-5">
    <div class="card shadow-sm ">
      <div class="card-header bg-custom text-white py-4">
        <ul class="nav nav-tabs card-header-tabs" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-migas-tab" data-bs-toggle="tab"
              data-bs-target="#pills-migas" type="button" role="tab"
              aria-controls="pills-migas" aria-selected="true">Mitra Sektor Migas</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-nongas-tab" data-bs-toggle="tab"
              data-bs-target="#pills-nongas" type="button" role="tab"
              aria-controls="pills-nongas" aria-selected="false">Mitra Sektor Non-Migas</button>
          </li>
        </ul>
      </div>

      <div class="card-body">

        <?php if (validation_errors()): ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= validation_errors(); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-migas" role="tabpanel"
            aria-labelledby="pills-migas-tab" tabindex="0">
            <form action="" method="post">
              <div class="mb-3 form">
                <label for="namaGas" class="form-label fw-semibold">Nama SPBU</label>
                <input id="namaGas" name="namaGas" type="text"
                  class="form-control" placeholder="SPBU Pertamina"
                  aria-describedby="gasHelp" required>
                <div id="gasHelp" class="form-text">Masukkan nama SPBU mitra (contoh: SPBU Pertamina).</div>
              </div>
              <button type="submit" name="add" class="btn btn-custom mt-3">Tambah Mitra</button>
            </form>
          </div>

          <div class="tab-pane fade" id="pills-nongas" role="tabpanel"
            aria-labelledby="pills-nongas-tab" tabindex="0">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="namaMitra" class="form-label fw-semibold">Nama Perusahaan</label>
                <input id="namaMitra" name="namaMitra" type="text"
                  class="form-control" placeholder="PT. Baladhika Majapahit"
                  aria-describedby="mitraHelp" required>
                <div id="mitraHelp" class="form-text">Masukkan nama perusahaan mitra.</div>
              </div>
              <div class="mb-3">
                <label for="logo" class="form-label fw-semibold">Logo Perusahaan</label>
                <input id="logo" name="logo" type="file"
                  class="form-control" aria-describedby="logoHelp" accept="image/*">
                <div id="logoHelp" class="form-text">Unggah logo perusahaan mitra (format: JPG, PNG).</div>
                <div class="mt-3">
                  <img id="logoPreview" src="#" alt="Pratinjau Logo"
                    class="img-fluid rounded" style="max-width: 200px; max-height: 200px; display: none;">
                </div>
              </div>
              <button type="submit" name="add" class="btn btn-custom mt-3">Tambah Mitra</button>
            </form>
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