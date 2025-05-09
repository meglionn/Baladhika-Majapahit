<main class="main">
    <section>
        <div class="announcement-container">
            <div id="announcement-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#announcement-carousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#announcement-carousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#announcement-carousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active c-item">
                        <img src="assets/image/foto/kantor.png" class="d-block w-100 c-image" alt="slide1">
                        <div class="carousel-caption top-0 mt-4">
                            <img src="assets/image/announcement/annoucement 1.jpg" alt="lowongan pekerjaan">
                            <a href="https://forms.gle/QLTpBLcYU4BVgRHs5"><button
                                    class="btn carousel-btn btn-dark px-4 py-2 fs-5 mt-3">Daftar Sekarang</button></a>
                        </div>
                    </div>

                    <div class="carousel-item c-item">
                        <img src="assets/image/foto/kantordlm.webp" class="d-block w-100 c-image" alt="slide2">
                        <div class="carousel-caption top-0 mt-4">
                            <img src="assets/image/announcement/annoucement 2.jpg" alt="lowongan pekerjaan">
                            <a href="https://forms.gle/QLTpBLcYU4BVgRHs5"><button
                                    class="btn carousel-btn btn-dark px-4 py-2 fs-5 mt-3">Daftar Sekarang</button></a>
                        </div>
                    </div>

                    <div class="carousel-item c-item">
                        <img src="assets/image/foto/spbu.png" class="d-block w-100 c-image" alt="slide3">
                        <div class="carousel-caption top-0 mt-4">
                            <img src="assets/image/announcement/annoucement 3.jpg" alt="lowongan pekerjaan">
                            <a href="https://forms.gle/QLTpBLcYU4BVgRHs5"><button
                                    class="btn carousel-btn btn-dark px-4 py-2 fs-5 mt-3">Daftar Sekarang</button></a>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#announcement-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#announcement-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="profil-singkat-section">
        <div class="profil-singkat-container">
            <div class="profil-singkat-image" data-aos="fade-right">
                <a href="<?= site_url('profile'); ?>">
                    <img src="assets/image/foto/logokantor.webp" alt="profile baladhika majapait">
                </a>
            </div>

            <div class="profil-singkat-text" data-aos="fade-left" data-aos-delay="200">
                <h2>Profil Singkat</h2>
                <p>
                    Baladhika Majapahit adalah perusahaan penyedia jasa alih daya dan pendukung operasional yang berbasis di Mojokerto, 
                    didirikan oleh Edy Yusef, S.H. dan Subagya. Berkomitmen memberikan solusi menyeluruh, mulai dari perencanaan dan rekrutmen SDM,  
                    manajemen konflik ketenagakerjaan, hingga pelatihan dan pendampingan hukum.
                </p>
                <a href="<?= site_url('profile'); ?>" class="baca-selengkapnya-btn">baca selengkapnya</a>
            </div>
        </div>
    </section>
    <section class="daftar-mitra" data-aos="fade-up">
        <h2>MITRA KAMI</h2>

        <div class="daftar-mitra-container">
            <div class="logo-mitra">
            <?php foreach( $mitra as $mtr):?>
                <div class="mitra-card">
                    <img src="assets/image/mitra/<?= $mtr['logo']?>" alt="<?= $mtr['namaMitra']?>">
                </div>
                <div class="card-body-info">
                    <h3 class="card-title"><?= $mtr['namaMitra']?></h3>
                </div>
            <?php endforeach; ?>
            </div>
        </div>

        <div class="sektor-migas">
            <div class="list-group-item active" aria-current="true">Mitra Sektor Migas</div>
                <div class="mitra-card">
                    <img src="assets/image/mitra/pertamina.png" alt="Pertamina">
                </div>
                <?php foreach( $migas as $mgs):?>
                <div class="card-body-info">
                    <h5 class="card-title"><?= $mgs['namaGas']?></h5>
                </div>
                 <?php endforeach; ?>
        </div>

    </section>
</main>