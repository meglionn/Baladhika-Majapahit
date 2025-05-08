<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

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
    <link rel="stylesheet" href="assets/styles/pages/profile.css">

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