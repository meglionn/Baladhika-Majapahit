<main>
    <section class="form edit karyawan">
        <div class="container">
            <div class="card border-info mb-5">
                <div class="card-header">
                    <h1>Form Pengeditan Karyawan</h1>
                </div>
                <div class="card-body mt-3 mb-3" style="margin-left: 5rem;">
                    <?php echo form_open_multipart('admin/editkrywn/' . $karyawan['idKrywn']); ?>
                    <input type="hidden" name="idKrywn" value="<?= $karyawan['idKrywn']; ?>">

                    <label for="namaKrywn" class="form-label">Nama Karyawan</label>
                    <input id="namaKrywn" name="namaKrywn" type="text" class="form-control"
                        value="<?= $karyawan['namaKrywn']; ?>" aria-describedby="karyawanHelp">
                    <div id="karyawanHelp" class="form-text mb-3">Masukkan Nama Karyawan</div>

                    <label for="jabatan" class="form-label">Jabatan Karyawan</label>
                    <input id="jabatan" name="jabatan" type="text" class="form-control"
                        value="<?= $karyawan['jabatan']; ?>" aria-describedby="jabatanHelp">
                    <div id="jabatanHelp" class="form-text mb-3">Masukkan Jabatan Karyawan</div>

                    <label for="foto" class="form-label">Foto Karyawan</label>
                    <input id="foto" name="foto" class="form-control" type="file" aria-describedby="fotoHelp">
                    <div id="fotoHelp" class="form-text mb-3">Masukkan Foto Karyawan</div>

                    <div class="mt-2 mb-3">
                        <img
                            id="fotoPreview"
                            src="<?= isset($karyawan) ? base_url('assets/image/member/' . $karyawan['foto']) : '#' ?>"
                            alt="Preview image"
                            style="max-width: 200px; max-height: 200px; <?= isset($karyawan) ? '' : 'display: none;' ?>">
                    </div>

                    <button type="submit" name="add" class="btn btn-info mt-3">Edit Karyawan</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById("foto").addEventListener("change", function(event) {
            const file = event.target.files[0];
            const preview = document.getElementById("fotoPreview");

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = "block";
                };
                reader.readAsDataURL(file);
            } else {
                preview.src = "#";
                preview.style.display = "none";
            }
        });
    </script>
</main>