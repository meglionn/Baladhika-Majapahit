<main>
    <section class="form tambah mitra">
        <div class="container">
            <div class="card border-info mb-5">
                
                    <div class="tab-pane fade" id="pills-nongas" role="tabpanel" aria-labelledby="pills-nongas-tab" tabindex="0">
                        <div class="col-md-6">
                            <!-- <form action="" method="post"> -->
                                <div class="mb-3 mt-3" style="margin-left: 5rem;">
                                    <?php if (isset($error)) echo $error; ?>
                                    <?php echo form_open_multipart('upload/upload_image'); ?>
                                    <label for="logo" class="form-label">Logo Perusahaan</label>
                                    <input id="logo" class="logo" name="logo" type="file">
                                    <div id="mitraHelp" class="form-text mb-3">Masukkan Logo Perusahaan Mitra</div>

                                    <button type="submit" class="btn btn-info mt-3">Tambah Mitra</button>
                                    <?php echo form_close(); ?>
                                </div>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
            
    </section>
</main>