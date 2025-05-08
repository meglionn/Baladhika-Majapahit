<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baladhika Majapahit | beranda</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Icon Page -->
    <link rel="icon" href="assets/image/favicon.ico" type="image/x-icons">

    <!-- Styles -->
    <link rel="stylesheet" href="assets/styles/shared/general.css">
    <link rel="stylesheet" href="assets/styles/shared/header.css">
    <link rel="stylesheet" href="assets/styles/shared/footer.css">
    <link rel="stylesheet" href="assets/styles/pages/beranda.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>

    <!-- AOS Library -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <!-- Scripts -->
    <script defer src="assets/script/scroll.js"></script>

    <base href="<?= base_url(); ?>">
</head>

<body>
    <header class="header">
        <div class="left-section">
            <a href="<?= site_url('beranda'); ?>"><img src="assets/image/header-logo.png"></a>
        </div>

        <div class="right-section">
            <nav>
                <nav>
                    <ul>
                        <li class="nav-item">
                            <a href="<?= site_url('beranda'); ?>">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('profile'); ?>">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="system.php">Sistem & Komposisi</a>
                        </li>
                        <li class="nav-item">
                            <a href="team.php">Tim Kami</a>
                        </li>
                        <li class="nav-item">
                            <a href="csr.php">CSR</a>
                        </li>
                    </ul>
                </nav>
            </nav>
        </div>
    </header>

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
                        <img src="assets/image/image1.png" class="d-block w-100 c-image" alt="slide1">
                        <div class="carousel-caption top-0 mt-4">
                            <img src="assets/image/announcement/annoucement 1.jpg" alt="lowongan pekerjaan">
                            <a href="https://forms.gle/QLTpBLcYU4BVgRHs5"><button
                                    class="btn carousel-btn btn-dark px-4 py-2 fs-5 mt-3">Daftar Sekarang</button></a>
                        </div>
                    </div>

                    <div class="carousel-item c-item">
                        <img src="assets/image/image6.png" class="d-block w-100 c-image" alt="slide2">
                        <div class="carousel-caption top-0 mt-4">
                            <img src="assets/image/announcement/annoucement 2.jpg" alt="lowongan pekerjaan">
                            <a href="https://forms.gle/QLTpBLcYU4BVgRHs5"><button
                                    class="btn carousel-btn btn-dark px-4 py-2 fs-5 mt-3">Daftar Sekarang</button></a>
                        </div>
                    </div>

                    <div class="carousel-item c-item">
                        <img src="assets/image/image7.png" class="d-block w-100 c-image" alt="slide3">
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
                    <img src="assets/image/profile/profile.png" alt="profile baladhika majapait">
                </a>
            </div>

            <div class="profil-singkat-text" data-aos="fade-left" data-aos-delay="200">
                <h2>Profil Singkat</h2>
                <p>
                    Baladhika Majapahit merupakan perusahaan yang bergerak dibidang jasa alih daya pekerja maupun pekerjaan yang
                    bersifat kegiatan pendukung dengan fokus utama membatu para mitra untuk mendapatkan sumber daya manusia yang
                    tepat. Berkedudukan di Mojokerto, Baladhika Majapahit didirikan oleh Edy Yusef, S.H telah memiliki izin
                    operasional yang lengkap sehingga dapat memberikan kepastian hukum bagi pengguna jasa dan pekerja. Sampai
                    saat
                    ini Baladhika Majapahit telah menjadi mitra beberapa perusahaan besar di Jawa Timur. Jumlah pekerja yang
                    Baladhika Majapahit tangani telah mencapai lebih dari 1500 orang tenaga kerja dan tersebar di seluruh
                    wilayah
                    Jawa Timur. Kinerja serta loyalitas yang tinggi dari leader dan karyawan kami sebagai jaminan kualiatas
                    Baladhika Majapahit bagi para mitra kerjanya, sesuai dengan motto kami yaitu "One team, One Spirit, One
                    goal".
                </p>
                <a href="<?= site_url('profile'); ?>" class="baca-selengkapnya-btn">baca selengkapnya</a>
            </div>
        </div>
    </section>

    <section class="daftar-mitra" data-aos="fade-up">
        <h2>MITRA KAMI</h2>

        <div class="daftar-mitra-container">
            <div class="sektor-migas">
                <p>Perusahaan Sektor Migas</p>
                <ul>
                    <li>SPBU SATRIANI GROUP</li>
                    <li>SPBU JL. RAYA BEJI PASURUAN</li>
                    <li>SPBU JL. BY PASS BALONGMOJO MOJOKERTO</li>
                    <li>SPBU JL. RA. BASUNI SOOKO MOJOKERTO</li>
                    <li>SPBU JL. RAYA BRANGKAL SOOKO MOJOKERTO</li>
                    <li>SPBU JL. RAYA PUGERAN POHJEJER MOJOKERTO</li>
                    <li>SPBU JL. RAYA TERUSAN BAGUSAN MOJOKERTO</li>
                    <li>SPBU JL. RAYA GEDEG MOJOKERTO</li>
                    <li>SPBU JL. RAYA JETIS PERNING MOJOKERTO</li>
                    <li>SPBU JL. RAYA BANGSAL MOJOKERTO</li>
                    <li>SPBU JL. RAYA MOJOAGUNG JOMBANG</li>
                    <li>SPBU JL. RAYA LENGKONG KERTOSONO NGANJUK</li>
                </ul>
            </div>

            <div class="logo-mitra">
                <div class="mitra-card">
                    <img src="assets/image/mitra/PT. Roman Ceramic International.png" alt="PT. Roman Ceramic International">
                </div>
                <div class="mitra-card">
                    <img src="assets/image/mitra/PT. Makmur Artha Cemerlang Food.png" alt="PT. Makmur Artha Cemerlang Food">
                </div>
                <div class="mitra-card">
                    <img src="assets/image/mitra/cv. Mulya Tani Makmur.png" alt="cv. Mulya Tani Makmur">
                </div>
                <div class="mitra-card">
                    <img src="assets/image/mitra/PT. Graha Pangan Sentosa Food.png" alt="PT. Graha Pangan Sentosa Food">
                </div>
                <div class="mitra-card">
                    <img src="assets/image/mitra/PT. Pertamina Pasti Bisa.png" alt="PT. Pertamina Pasti Bisa">
                </div>
                <div class="mitra-card">
                    <img src="assets/image/mitra/PT. Pertamina.png" alt="PT. Pertamina">
                </div>
                <div class="mitra-card">
                    <img src="assets/image/mitra/RPA Puri Pangan Sejati.png" alt="RPA Puri Pangan Sejati">
                </div>
                <div class="mitra-card">
                    <img src="assets/image/mitra/PT. Sariguna Primatirta Tbk. Tanobel Food.png"
                        alt="PT. Sariguna Primatirta Tbk. Tanobel Food">
                </div>
                <div class="mitra-card">
                    <img src="assets/image/mitra/PT. Ever Age Velves Metals.png" alt="PT. Ever Age Velves Metals">
                </div>
                <div class="mitra-card">
                    <img src="assets/image/mitra/PT. ROFI JAYA.png" alt="PT. ROFI JAYA">
                </div>
                <div class="mitra-card">
                    <img src="assets/image/mitra/PT. Natura Lestari.png" alt="PT. Natura Lestari">
                </div>
                <div class="mitra-card">
                    <img src="assets/image/mitra/pt. kepuh kencana arum.png" alt="pt. kepuh kencana arum">
                </div>
            </div>
        </div>
    </section>
</main>