<main>
  <section data-aos="fade">
    <div class="profile-header-overlay">
      <div class="profile-header">
        <img src="assets/image/foto/logokantor.jpg" alt="Profiel Header Image">
        <h1>Discover Baladhika Majapahit</h1>
      </div>
    </div>
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
    <h2 data-aos="fade-up">
      MITRA KAMI
    </h2>

    <div class="sektor-migas">
      <div class="sektor-migas-list">
        <p class="sektor-migas-title" aria-current="true" data-aos="fade-up">Mitra Sektor Migas</p>
        <?php foreach ($migas as $mgs): ?>
          <div class="card-body-info" data-aos="fade-up" data-aos-delay="100">
            <h5 class="card-title"><i class="fa-solid fa-location-dot"></i><?= $mgs['namaGas'] ?></h5>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="sektor-migas-image" data-aos="fade">
        <img src="assets/image/foto/spbu.png" alt="Mitra Sektor Migas">
      </div>
    </div>
  </section>

  <section class="mitra-perusahaan">
    <h2>Mitra Perusahaan</h2>
    <div class="logo-mitra-grid" data-aos="fade-up" data-aos-delay="200">
      <?php foreach ($mitra as $mtr): ?>
        <div class="mitra-card" title="<?= $mtr['namaMitra'] ?>">
          <img src="assets/image/mitra/<?= $mtr['logo'] ?>" alt="<?= $mtr['namaMitra'] ?>">
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="kontak-kami">
    <div class="informasi-kontak">
      <h2>Informasi Kontak</h2>

      <div class="kontak-list">
        <h3>Telepon</h3>
        <p>Telp: (0321) 5884552</p>
        <p>HP: +62 813-3196-6668</p>
      </div>

      <div class="kontak-list">
        <h3>Email</h3>
        <p>baladhikagrub@gmail.com</p>
      </div>

      <div class="kontak-list">
        <h3>Jam Kerja</h3>
        <p>
          Senin - Sabtu: 8:00 - 17:00
        </p>
        <p>
          Minggu: Tutup
        </p>
      </div>
    </div>

    <div class="informasi-alamat">
      <h2>Alamat</h2>

      <div class="alamat-perusahaan">
        <p>
          Jl. Raya Sambiroto KM. 04 Griya Kaliandra No. 16A
        </p>

        <p>
          Ds. Mlaten, Kec. Puri, Kab. Mojokerto (61363)
        </p>

        <div class="alamat-maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3759.7729062135522!2d112.4587038747631!3d-7.521726192491206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780dc334dc842f%3A0xa497f9635e876527!2sPT.%20Baladhika%20Majapahit!5e1!3m2!1sid!2sid!4v1747362578644!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
</main>