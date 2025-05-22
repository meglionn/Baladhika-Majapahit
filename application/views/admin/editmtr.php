<main>
    <section class="form edit mitra">
        <div class="container">
            <div class="card border-info mb-5">
                <div class="card-header">
                <h1>Form Pengeditan Mitra non-Migas</h1>
                </div>
                <div class="card-body mt-3 mb-3" style="margin-left: 5rem;">
                    <?php echo form_open_multipart('admin/editmtr/'.$mitra['idMitra']); ?>
                        <input type="hidden" name="idMitra" value="<?= $mitra['idMitra']; ?>">
                        
                        <label for="namaMitra" class="form-label">Nama Perusaan</label>
                        <input id="namaMitra" name="namaMitra" type="text" class="form-control" 
                         value="<?= $mitra['namaMitra']; ?>" placeholder="PT. Baladhika Majapahit" aria-describedby="mitraHelp">
                        <div id="mitraHelp" class="form-text mb-3">Masukkan Nama Perusahaan Mitra</div>

                        <label for="logo" class="form-label">Logo Perusahaan</label>
                        <input id="logo" class="form-control" name="logo" type="file" aria-describedby="logoHelp">
                        <div id="logoHelp" class="form-text mb-3">Masukkan Logo Perusahaan Mitra</div>
                  
                        <div class="mt-2 mb-3">
                            <img 
                             id="logoPreview" 
                             src="<?= isset($mitra) ? base_url('assets/image/mitra/' . $mitra['logo']) : '#' ?>"
                             alt="Preview image" 
                             style="max-width: 200px; max-height: 200px; <?= isset($mitra) ? '' : 'display: none;' ?>">
                        </div>

                        <button type="submit" name="add" class="btn btn-info mt-3">Edit Mitra Non-Migas</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section>

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
</main>