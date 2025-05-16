<main>
    <section class="form tambah mitra">
        <div class="container">
            <div class="card border-info mb-5">
                <div class="card-header">
                    <h1>Form Penambahan Mitra</h1>
                    <ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-migas" type="button" role="tab" aria-controls="pills-migas" aria-selected="true">Mitra Sektor Migas</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-nongas-tab" data-bs-toggle="pill" data-bs-target="#pills-nongas" type="button" role="tab" aria-controls="pills-nongas" aria-selected="false">Mitra Sektor Non-Migas</button>
                    </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <?php if(validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <div class="tab-pane fade show active" id="pills-migas" role="tabpanel" aria-labelledby="pills-migas-tab" tabindex="0">
                        <div class="row-mt-3">
                            <div class="col-md-6">
                                <form action="" method="post">
                                    <div class="mb-3 mt-3" style="margin-left: 5rem;">

                                        <label for="namaGas" class="form-label">Nama SPBU</label>
                                        <input  id="namaGas" name="namaGas" type="text" class="form-control" placeholder="SPBU Pertamina" aria-describedby="gasHelp">
                                        <div id="gasHelp" class="form-text mb-3">Masukkan Nama SPBU Mitra</div>

                                        <button type="submit" name="add" class="btn btn-info mt-3">Tambah Mitra</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-nongas" role="tabpanel" aria-labelledby="pills-nongas-tab" tabindex="0">
                        <div class="col-md-6">
                            <form action="" method="post">
                                <div class="mb-3 mt-3" style="margin-left: 5rem;">

                                    <label for="namaMitra" class="form-label">Nama Perusaan</label>
                                    <input  id="namaMitra" name="namaMitra" type="text" class="form-control" placeholder="PT. Baladhika Majapahit" aria-describedby="mitraHelp">
                                    <div id="mitraHelp" class="form-text mb-3">Masukkan Nama Perusahaan Mitra</div>

                                    <label for="logo" class="form-label">Logo Perusahaan</label>
                                    <input id="logo" class="logo" name="logo" type="file" aria-describedby="mitraHelp">
                                    <div id="mitraHelp" class="form-text mb-3">Masukkan Logo Perusahaan Mitra</div>

                                    <button type="submit" name="add" class="btn btn-info mt-3">Tambah Mitra</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
    </section>
</main>