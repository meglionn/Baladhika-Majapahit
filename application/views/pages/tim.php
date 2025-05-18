<?php if ($this->session->flashdata()): ?>
<div class="row">
  <div class="col">
    <div class="alert alert-success alert-dismissible fade show" role="alert">Data Karyawan Berhasil
    <strong><?= $this->session->flashdata('karyawan'); ?></strong> !
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
</div>
<?php endif; ?>
<main>
  <section class="tim-kami-header" data-aos="fade">
    <div class="tim-kami-title" data-aos="fade-up">
      <h1>The Faces of Baladhika Majapahit</h1>
      <p>"One Team One Spirit One Goal"</p>
    </div>

    <div class="tim-kami-header-image">
      <img src="assets/image/foto/fotbar.png" alt="Tim Kami">
    </div>
  </section>

  <section>
    <div class="tim-pendiri-title" data-aos="fade-up" data-aos-delay="100">
      <p>The Founders</p>
      <h1>Pioneers of Baladhika Majapahit</h1>
    </div>

    <div class="pendiri" data-aos="fade-up" data-aos-delay="100">
      <div class="pendiri-image">
        <img src="assets/image/member/edy.jpg" alt="Edy Yusef | Pendiri">
        <div class="image-info">
          <p>EDY YUSEF, S.H.</p>
          <p>PENDIRI</p>
        </div>
      </div>

      <div class="profile-pendiri">
        <h2>Edy Yusef, S.H.</h2>
        <p>
          Alm. Bapak Edy Yusef lahir pada 1972 di Nganjuk, Jawa Timur merupakan pendiri Baladhika Majapahit dan sekaligus menjabat sebagai Presiden Komisaris sampai dengan bulan Juli tahun 2021.
        </p>

        <p>
          Beliau lulus dari jurusan Hukum, Fakultas Hukum Universitas Wijaya Putra Surabaya dan mendapatkan gelar Sarjana Hukum pada tahun 2007, selama hidupnya beliau aktif dalam semua kegiatan pengusaha dan entrepreneur, serikat pekerja, bidang hukum (advokat), serta kegiatan sosial budaya di wilayah Mojokerto.
        </p>
      </div>
    </div>

    <div class="pendiri" data-aos="fade-up" data-aos-delay="100">
      <div class="profile-pendiri">
        <h2>Subagya</h2>
        <p>
          Bapak Subagya juga merupakan salah satu pendiri Baladika Majapahit dengan jabatan saat ini sebagai Komisaris. Lahir di Blitar pada 1969, Bapak Subagya menyelesaikan pendidikan terakhirnya di D3 Perhotelan.
        </p>

        <p>
          Selain sebagai Komisaris PT. Baladhika Majapahit Bapak Subagya juga aktif sebagai Ketua Ormas Baladhika Kabupaten/Kota Mojokerto dan salah satu pengurus Apindo. Beliau juga menjadi Dewan pelindung penasehat Welirang Rescue sekaligus Ketua Umum Welirang Shoting Club, serta aktif menjadi anggota Tripartit dan anggota Dewan Pengupahan.
        </p>
      </div>

      <div class="pendiri-image">
        <img src="assets/image/member/bagio.png" alt="Subagya | Pendiri">
        <div class="image-info">
          <p>SUBAGYA</p>
          <p>PENDIRI</p>
        </div>
      </div>
    </div>
  </section>

  <section class="tim-list" data-aos="fade" data-aos-delay="100">
    <p class="our-team-title">Our Team</p>
    <h1 class="tim-list-title">Driving Success Together</h1>

    <h3 class="position-title">Direktur</h3>
    <div class="team-image-list" data-aos="fade-up" data-aos-delay="100">
      <?php foreach($karyawan as $k): ?>
        <?php if (strpos(strtolower($k['jabatan']), 'direktur') !== false): ?>
          <div class="col-md-4 col-lg-3">
            <div class="team-image">
              <img src="assets/image/member/<?= $k['foto']?>" class="team-image" alt="<?= $k['namaKrywn']?>">
              <div class="image-info text-center">
                <p><?= $k['namaKrywn']?></p>
                <p><?= $k['jabatan']?></p>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>

    <h3 class="position-title">Manager</h3>
    <div class="team-image-list" data-aos="fade-up" data-aos-delay="100">
      <?php foreach($karyawan as $k): ?>
        <?php if (strpos(strtolower($k['jabatan']), 'manajer') !== false): ?>
          <div class="col-md-4 col-lg-3">
            <div class="team-image">
              <img src="assets/image/member/<?= $k['foto']?>" class="team-image" alt="<?= $k['namaKrywn']?>">
              <div class="image-info text-center">
                <p><?= $k['namaKrywn']?></p>
                <p><?= $k['jabatan']?></p>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>

    <h3 class="position-title">Representatif Office</h3>
    <div class="team-image-list" data-aos="fade-up" data-aos-delay="100">
      <?php foreach($karyawan as $k): ?>
        <?php if (strpos(strtolower($k['jabatan']), 'representatif') !== false): ?>
          <div class="col-md-4 col-lg-3">
            <div class="team-image">
              <img src="assets/image/member/<?= $k['foto']?>" class="team-image" alt="<?= $k['namaKrywn']?>">
              <div class="image-info text-center">
                <p><?= $k['namaKrywn']?></p>
                <p> <?= $k['jabatan']?></p>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>

    <h3 class="position-title">Staff</h3>
    <div class="team-image-list" data-aos="fade-up" data-aos-delay="100">
      <?php foreach($karyawan as $k): ?>
        <?php if (strpos(strtolower($k['jabatan']), 'representatif') !== false): ?>
          <div class="col-md-4 col-lg-3">
            <div class="team-image">
              <img src="assets/image/member/<?= $k['foto']?>" class="team-image" alt="<?= $k['namaKrywn']?>">
              <div class="image-info text-center">
                <p><?= $k['namaKrywn']?></p>
                <p><?= $k['jabatan']?></p>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </section>
</main>
