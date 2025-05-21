<main>
    <section class="form tambah mitra">
        <div class="container">
            <div class="card border-info mb-5">
                <div class="card-header">
                <h1>Form Pengeditan Mitra</h1>
                </div>
                <div class="card-body mt-3 mb-3" style="margin-left: 5rem;">
                    <form action="" method="post" >
                        <input type="hidden" name="idGas" value="<?= $migas['idGas']; ?>">
                        <label for="namaGas" class="form-label">Nama SPBU</label>
                        <input id="namaGas" name="namaGas" type="text" class="form-control" 
                        placeholder="SPBU Pertamina" value="<?= $migas['namaGas']; ?>" aria-describedby="gasHelp">
                        <div id="gasHelp" class="form-text mb-3">Masukkan Nama SPBU Mitra</div>
                        <button type="submit" name="add" class="btn btn-info mt-3">Edit Mitra Migas</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>