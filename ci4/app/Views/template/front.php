<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>LaFronto - Eatery</title>


    <!-- Site Icons -->
    <link rel="shortcut icon" href="asset/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="asset/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('asset/css/bootstrap.min.css') ?>">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/cart.css') ?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url('asset/css/responsive.css') ?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('asset/css/custom.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/font-awesome.min.css') ?>">

</head>
<?php
$jml_keranjang = 0;
foreach ($cart as $key => $value) {
    $jml_keranjang = $jml_keranjang + $value['qty'];
}
?>

<body>
    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="asset/images/logo.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-rs-food">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('menu') ?>">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('keranjang') ?>"><i class="fa fa-shopping-cart"></i>&nbsp; &nbsp; <?= $jml_keranjang ?></a></li>

                        <?php if (!empty(session()->get('namapelanggan'))) { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Logout</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                    <a class="dropdown-item" href="<?= base_url("logout") ?>">Logout</a>
                                    <a class="dropdown-item" href="<?= base_url('history') ?>">History</a>
                                </div>
                            </li>
                            <li class="nav-item active"><a class="nav-link" href="">Pelanggan</a></li>
                        <?php } else { ?>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('login') ?>">Login</a></li>
                        <?php } ?>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->


    <?= $this->renderSection('content') ?>

    <!-- Start Footer -->
    <footer class="footer-area bg-f">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3>Alamat</h3>
                    <p>Jl. Panglima Sudirman Sidoarjo</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h3>Opening hours</h3>
                    <p><span class="text-color">Monday: </span>Closed</p>
                    <p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
                    <p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
                    <p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="company-name">All Rights Reserved. Since
                            <a>2020</a></p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-angle-up aria-hidden=" true"></i></a>

    <!-- ALL JS FILES -->
    <script src="<?= base_url('asset/js/jquery-3.2.1.min.js') ?>"></script>
    <script src="<?= base_url('asset/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('asset/js/bootstrap.min.js') ?>"></script>
    <link rel="stylesheet" href="<?= base_url('asset/css/login.css') ?>">
    <!-- ALL PLUGINS -->
    <script src="<?= base_url('asset/js/jquery.superslides.min.js') ?>"></script>
    <script src="<?= base_url('asset/js/images-loded.min.js') ?>"></script>
    <script src="<?= base_url('asset/js/isotope.min.js') ?>"></script>
    <script src="<?= base_url('asset/js/baguetteBox.min.js') ?>"></script>
    <script src="<?= base_url('asset/js/form-validator.min.js') ?>"></script>
    <script src="<?= base_url('asset/js/contact-form-script.js') ?>"></script>
    <script src="<?= base_url('asset/js/custom.js') ?>"></script>

</body>

</html>