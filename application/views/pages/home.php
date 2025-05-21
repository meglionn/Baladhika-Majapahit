<main class="main">
  <section>
    <div class="announcement-container" data-aos="fade">
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
                  class="daftar-sekarang-btn">Daftar Sekarang</button></a>
            </div>
          </div>

          <div class="carousel-item c-item">
            <img src="assets/image/foto/kantordlm.webp" class="d-block w-100 c-image" alt="slide2">
            <div class="carousel-caption top-0 mt-4">
              <img src="assets/image/announcement/annoucement 2.jpg" alt="lowongan pekerjaan">
              <a href="https://forms.gle/QLTpBLcYU4BVgRHs5"><button
                  class="daftar-sekarang-btn">Daftar Sekarang</button></a>
            </div>
          </div>

          <div class="carousel-item c-item">
            <img src="assets/image/foto/spbu.png" class="d-block w-100 c-image" alt="slide3">
            <div class="carousel-caption top-0 mt-4">
              <img src="assets/image/announcement/annoucement 3.jpg" alt="lowongan pekerjaan">
              <a href="https://forms.gle/QLTpBLcYU4BVgRHs5"><button
                  class="daftar-sekarang-btn">Daftar Sekarang</button></a>
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
      <div class="profil-singkat-text" data-aos="fade-up" data-aos-delay="100">
        <h2>Perusahaan Kami</h2>
        <p>
          perusahaan yang bergerak dibidang jasa alih daya pekerja maupun pekerjaan yang bersifat kegiatan pendukung dengan fokus utama membatu para mitra untuk mendapatkan sumber daya manusia yang tepat.
        </p>

        <div class="unggulan">
          <ul>
            <li>
              berhasil mengelola lebih dari 1500 tenaga kerja di seluruh Jawa Timur, mendukung mitra dengan solusi SDM inovatif.
            </li>

            <li>
              Didirikan oleh para ahli hukum dan pengusaha berpengalaman, kami berkomitmen untuk memberikan layanan berkualitas tinggi dengan kepastian hukum.
            </li>

            <li>
              Bekerja sama dengan beberapa perusahaan besar di Jawa Timur
            </li>

            <li>
              Layanan hukum dan manajemen SDM yang telah teruji sejak pendirian pada 2007.
            </li>
          </ul>
        </div>

        <a href="<?= base_url(); ?>profile" class="baca-selengkapnya-btn">baca selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="profil-singkat-image" data-aos="fade-up" data-aos-delay="100">
        <a href="<?= base_url(); ?>profile">
          <img src="assets/image/foto/logokantor.jpg" alt="profile baladhika majapait">
        </a>
      </div>
    </div>
  </section>

  <section class="layanan-kami">
    <div class="layanan-kami-title" data-aos="fade-up" data-aos-delay="100">
      <h1>Layanan Kami</h1>
      <p>Baladhika Mahapahit menyediakan berbagai layanan yang dapat menjadi solusi komprehensif yang dirancang untuk memenuhi kebutuhan mitra maupun klien</p>
    </div>

    <div class="layanan-grid" data-aos="fade-up" data-aos-delay="150">
      <div class="layanan-content">
        <h2>Pengelolaan Tenaga Kerja</h2>
        <p>Penyediaan tenaga kerja untuk berbagai posisi seperti Operator Produksi, Operator Bubut, Operator Perakitan/Testing, Bagian Gudang, Kebersihan & Taman, serta Security</p>
      </div>

      <div class="layanan-content">
        <h2>Solusi Pengelolaan SDM</h2>
        <p>Membantu mitra dalam mengelola SDM agar lebih produktif, termasuk problem solving terkait SDM</p>
      </div>

      <div class="layanan-content">
        <h2>Pembentukan Perjanjian Kerja Bersama</h2>
        <p>Menjadi counterpart dalam pembentukan PKB untuk mencegah gejolak di lingkungan kerja</p>
      </div>

      <div class="layanan-content">
        <h2>Manajemen Konflik Ketenagakerjaan</h2>
        <p>Menyediakan solusi dan strategi untuk menangani konflik ketenagakerjaan di perusahaan</p>
      </div>

      <div class="layanan-content">
        <h2>Training dan Outbound</h2>
        <p>Menyediakan fasilitator/trainer untuk training atau outbound bagi level supervisor ke bawah, fokus pada pembentukan team building dan peningkatan kemampuan komunikasi</p>
      </div>

      <div class="layanan-content">
        <h2>Management Fee Kompetitif</h2>
        <p>Memberikan kepuasan kepada mitra dengan tarif/management fee yang kompetitif dan efisien, sambil menjaga produktivitas tinggi</p>
      </div>
    </div>

    <div class="pelajari-btn">
      <a href="<?= base_url(); ?>Systems" class="pelajari-lanjut-btn">Pelajari Lebih Lanjut <i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </section>

  <section class="kenapa-kami">
    <div class="kenapa-kami-title" data-aos="fade-up" data-aos-delay="100">
      <h1>Kenapa Memilih Kami</h1>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa fugiat a optio ullam minus incidunt atque labore distinctio officiis ipsa nostrum pariatur sed non eos nam blanditiis ratione, unde porro.
      </p>
    </div>

    <div class="kenapa-kami-grid" data-aos="fade-up" data-aos-delay="150">
      <div class="kenapa-kami-content">
        <h2>Pengalaman</h2>
        <p>
          Didirikan sejak 2007 oleh ahli hukum, kami memiliki izin operasional lengkap untuk kepastian hukum mitra.
        </p>
      </div>

      <div class="kenapa-kami-content">
        <h2>Jangkauan Luas</h2>
        <p>
          Mengelola lebih dari 1500 tenaga kerja di Jawa Timur dan bermitra dengan perusahaan besar.
        </p>
      </div>

      <div class="kenapa-kami-content">
        <h2>Produktivitas</h2>
        <p>
          Management fee kompetitif dengan sistem kerja fleksibel untuk hasil maksimal.
        </p>
      </div>

      <div class="kenapa-kami-content">
        <h2>Kualitas</h2>
        <p>
          Tim kami menjamin kualitas layanan dengan motto "One Team, One Spirit, One Goal".
        </p>
      </div>
    </div>
  </section>

  <section class="kegiatan-kami">
    <h1 data-aos="fade-up" data-aos-delay="100">Kegiatan Kami</h1>

    <div class="kegiatan-kami-grid" data-aos="fade-up" data-aos-delay="150">
      <div class="kegiatan-kami-image">
        <img src="assets/image/foto/csr1.png" alt="Kegiatan Kami">
      </div>

      <div class="kegiatan-kami-image">
        <img src="assets/image/foto/csr3.jpg" alt="Kegiatan Kami">
      </div>

      <div class="kegiatan-kami-image">
        <img src="assets/image/foto/csr2.png" alt="Kegiatan Kami">
      </div>

      <div class="kegiatan-kami-image">
        <img src="assets/image/foto/csr4.jpg" alt="Kegiatan Kami">
      </div>
    </div>

    <div class="kegiatan-kami-button" data-aos="fade-up" data-aos-delay="150">
      <a href="<?= base_url(); ?>csr">Lihat Selengkapnya</a>
    </div>
  </section>
</main>