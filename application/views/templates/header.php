<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>

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
  <link rel="icon" href="assets/image/logo/logo.ico" type="image/x-icons">

  <!-- Styles -->
  <link rel="stylesheet" href="assets/styles/shared/general.css">
  <link rel="stylesheet" href="assets/styles/shared/header.css">
  <link rel="stylesheet" href="assets/styles/shared/footer.css">
  <link rel="stylesheet" href="assets/styles/pages/beranda.css">
  <link rel="stylesheet" href="assets/styles/pages/profile.css">
  <link rel="stylesheet" href="assets/styles/pages/sistem.css">
  <link rel="stylesheet" href="assets/styles/pages/tim.css">
  <link rel="stylesheet" href="assets/styles/pages/csr.css">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>

  <!-- AOS Library -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Scripts -->
  <script defer src="assets/script/scroll.js"></script>
</head>

<body>
  <header class="header">
    <div class="left-section">
<<<<<<< Updated upstream
      <a href="<?= base_url(); ?>home"><img src="assets/image/logo/2text.png"></a>
=======
      <a href="<?= base_url(); ?>home"><img src="<?= base_url('assets/image/logo/2text.png'); ?>"></a>
      <div class="hamburger">☰</div>
>>>>>>> Stashed changes
    </div>

    <div class="right-section">
      <nav>
        <ul>
          <li class="nav-item">
            <a href="<?= base_url(); ?>Home">Beranda</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>Profile">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>Systems">Sistem</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>Team">Tim</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>Csr">CSR</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>