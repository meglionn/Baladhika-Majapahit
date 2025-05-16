<main>
  <section class="profile-header" data-aos="fade">
    <h1>Discover Baladhika Majapahit</h1>
  </section>

  <section class="profile-section">
    <div class="profile-container" data-aos="fade-right">
      <h1> TENTANG BALADHIKA MAJAPAHIT</h1>
      <p>
        Baladhika Majapahit merupakan perusahaan yang bergerak dibidang jasa alih daya pekerja maupun pekerjaan yang
        bersifat kegiatan pendukung dengan fokus utama membatu para mitra untuk mendapatkan sumber daya manusia yang
        tepat. Berkedudukan di Mojokerto, Baladhika Majapahit didirikan oleh Edy Yusef, S.H telah memiliki izin
        operasional yang lengkap sehingga dapat memberikan kepastian hukum bagi pengguna jasa dan pekerja.
      </p>

      <p>
        Sampai saat ini Baladhika Majapahit telah menjadi mitra beberapa perusahaan besar di Jawa Timur. Jumlah
        pekerja
        yang Baladhika Majapahit tangani telah mencapai lebih dari 1500 orang tenaga kerja dan tersebar di seluruh
        wilayah Jawa Timur.
      </p>

      <p>
        Kinerja serta loyalitas yang tinggi dari leader dan karyawan kami sebagai jaminan kualiatas Baladhika
        Majapahit
        bagi para mitra kerjanya, sesuai dengan motto kami yaitu "One team, One Spirit, One goal".
      </p>
    </div>
  </section>

  <section class="visi-misi">
    <div class="visi-misi-image" data-aos="fade-left">
      <img src="assets/image/foto/kerja.webp" alt="visi-misi">
    </div>

    <div class="visi-misi-container" data-aos="fade-left" data-aos-delay="200">
      <h1>VISI & MISI</h1>
      <p class="visi">Profesional, Produktif, Efektif untuk Aman, Tertib dan Terkendali.</p>

      <ul class="misi">
        <li>
          Siap memberikan Service bagi user/mitra kerja Baladhika Majapahit yang mengalami kesulitan / mendapatkan
          kendala didalam pengelolaan Sumber Daya Manusia (SDM) atau problem solving Sumber Daya Manusia (SDM) agar
          lebih produktif.
        </li>

        <li>
          Siap menjadi counter part dalam rangka mencari solusi didalam pembentukan penerapan Perjanjian Kerja
          Bersama
          (PKB) agar tidak terjadi gejolak dilingkungan kerja.
        </li>

        <li>
          Siap mencari solusi dan strategi dalam proses manajemen konflik ketenagakerjaan di perusahaan.
        </li>

        <li>
          Siap dijadikan fasilitator/trainer dalam rangka training/Out Bond level supervisor kebawah dalam rangka
          pembentukan Building Team dan peningkatan kemampuan komonikasi setiap user/mitra kerja Baladhika
          Majapahit.
        </li>

        <li>
          Siap memberikan supervisi dan pendampingan jika user mengalami masalah hukum khususnya hukum
          ketenagakerjaan
          baik ditingkat Disnaker maupun yang lebih tinggi.
        </li>

        <li>
          Siap menjadi mediasi jika terjadi konflik dengan lembaga pekerja LSM, instansi terkait dalam rangka
          menciptakan suasana yang lebih kondusif disetiap user/mitra kerja Baladhika Majapahit.
        </li>

        <li>
          Memberikan Kepuasan kepada setiap user/mitra kerja Baladhika Majapahit dengan tarif/Management Fee yang
          kompetitif, efisien dengan tetap mengutamakan produktifitas yang tinggi.
        </li>
      </ul>
    </div>
  </section>

  <section class="daftar-mitra">

    <h2 data-aos="fade-up">MITRA KAMI</h2>

    <div class="sektor-migas">
      <div class="sektor-migas-list">
        <p class="sektor-migas-title" aria-current="true" data-aos="fade-up">Mitra Sektor Migas</p>
        <?php foreach ($migas as $mgs): ?>
          <div class="card-body-info" data-aos="fade-up" data-aos-delay="100">
            <h5 class="card-title"><?= $mgs['namaGas'] ?></h5>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="sektor-migas-image" data-aos="fade">
        <img src="assets/image/foto/spbu.png" alt="Mitra Sektor Migas">
      </div>
    </div>

    <div class="logo-mitra-grid" data-aos="fade-up" data-aos-delay="200">
      <?php foreach ($mitra as $mtr): ?>
        <div class="mitra-card">
          <img src="assets/image/mitra/<?= $mtr['logo'] ?>" alt="<?= $mtr['namaMitra'] ?>">
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section>
    <h1>Informasi Kontak</h1>
  </section>
</main>