<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Iseven Store | Home</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/'); ?>css/slick.css'" />
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/'); ?>css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/'); ?>css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <style>
        .header-links li i {
            color: #FFDB15;
            margin-right: 5px;
        }

        #navigation {
            background: #FFF;
            border-bottom: 2px solid #E4E7ED;
            border-top: 3px solid #FFDB15;
        }

        .main-nav>li>a:hover,
        .main-nav>li>a:focus,
        .main-nav>li.active>a {
            color: black;
            background-color: transparent;
        }

        .main-nav>li>a:after {
            content: "";
            display: block;
            width: 0%;
            height: 2px;
            background-color: black;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
        }

        .shop:before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0px;
            width: 60%;
            background: #FFDB15;
            opacity: 0.9;
            -webkit-transform: skewX(-45deg);
            -ms-transform: skewX(-45deg);
            transform: skewX(-45deg);
        }

        .shop:after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 1px;
            width: 100%;
            background: #FFDB15;
            opacity: 0.9;
            -webkit-transform: skewX(-45deg) translateX(-100%);
            -ms-transform: skewX(-45deg) translateX(-100%);
            transform: skewX(-45deg) translateX(-100%);
        }

        .shop .shop-body h3 {
            color: black;
        }

        .shop .shop-body .cta-btn {
            color: black;
            text-transform: uppercase;
        }

        .section-tab-nav li.active a {
            color: black;
        }

        .section-tab-nav li a:after {
            content: "";
            display: block;
            width: 0%;
            height: 2px;
            background-color: black;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
        }

        .product .product-body .product-price {
            color: black;
            font-size: 18px;
        }

        .product .product-body .product-name>a:hover,
        .product .product-body .product-name>a:focus {
            color: #FFDB15;
        }

        .product:hover {
            -webkit-box-shadow: 0px 0px 6px 0px #E4E7ED, 0px 0px 0px 2px black;
            box-shadow: 0px 0px 6px 0px #E4E7ED, 0px 0px 0px 2px black;
        }

        .footer-links li i {
            margin-right: 15px;
            color: #FFDB15;
            width: 14px;
            text-align: center;
        }

        .footer-links li a:hover {
            color: #FFDB15;
        }

        .product-details .add-to-cart .add-to-cart-btn {
            position: relative;
            border: 2px solid transparent;
            height: 40px;
            padding: 0 30px;
            background-color: #FBDF07;
            color: #FFF;
            text-transform: uppercase;
            font-weight: 700;
            border-radius: 40px;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
        }

        #product-tab .tab-nav li.active a {
            color: black;
        }

        #product-tab .tab-nav li a:after {
            content: "";
            display: block;
            width: 0%;
            height: 2px;
            background-color: black;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
        }

        #product-imgs .product-preview.slick-current {
            border-color: black;
        }

        .input-number .qty-up:hover,
        .input-number .qty-down:hover {
            background-color: #E4E7ED;
            color: #FFDB15;
        }

        .header-links li a:hover {
            color: #FFDB15;
        }

        .product .add-to-cart .add-to-cart-btn:hover {
            background-color: #FFF;
            color: #FFDB15;
            border-color: #FFDB15;
            padding: 0px 30px 0px 50px;
        }

        .reviews-pagination li:hover {
            background-color: #E4E7ED;
            color: #FFDB15;
        }

        .slick-prev:hover,
        .slick-prev:focus,
        .slick-next:hover,
        .slick-next:focus {
            background-color: #FFDB15;
            border-color: #FFDB15;
        }

        .product .product-img .product-label>span.sale {
            background-color: #FFDB15;
            border-color: #FFDB15;
            color: black;
        }
    </style>
    <link rel="icon" href="<?php echo base_url('assets/img/logo.jpg') ?>">
</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="https://maps.app.goo.gl/smu8DD12J2NMK2g46"><i class="fa fa-map-marker "></i> Sleman DI Yogyakarta</a></li>
                    <li><a href="https://wa.me/+6282178968619"><i class="fa fa-whatsapp "></i> 082178968619</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o "></i> Isevenstorejogja@gmail.com</a></li>
                </ul>
                <ul class="header-links pull-right">
                    <li><a href="<?= base_url() ?>Auth"><i class="fa fa-user"></i> Login</a></li>
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header" style="background-color: #FFDB15;">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="<?php echo base_url() ?>" class="logo">
                                <img src="<?php echo base_url('assets/img/logo-baru.png') ?>" alt="" style="width: 80px;">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <a href="<?= base_url(); ?>home/storePro">
                            <div class="shop-img">
                                <img src="<?= base_url('assets/img/Macbook Pro.jpg') ?>" alt="">
                            </div>
                        </a>
                        <div class="shop-body">
                            <h3>Macbook Pro<br>Catalog</h3>
                            <a href="<?= base_url() ?>home/storePro" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <a href="<?= base_url() ?>home/storeAir">
                            <div class="shop-img">
                                <img src="<?= base_url('assets/img/Macbook Air.jpg') ?>" alt="">
                            </div>
                        </a>
                        <div class="shop-body">
                            <h3>Macbook Air<br>Catalog</h3>
                            <a href="<?= base_url() ?>home/storeAir" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <a href="<?= base_url('') ?>home/storeRetina">
                            <div class="shop-img">
                                <img src="<?= base_url('assets/img/Macbook Retina.jpg') ?>" alt="">
                            </div>
                        </a>
                        <div class="shop-body">
                            <h3>Retina<br>Catalog</h3>
                            <a href="<?= base_url('') ?>index.php/home/storeRetina" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">All Product</h3>

                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">

                                    <?php
                                    foreach ($queryAllupload as $row) {
                                    ?>

                                        <!-- product -->
                                        <div class="product">
                                            <a href="<?php echo base_url('home/detail/' . $row->kd_berkas) ?>">
                                                <div class="product-img">
                                                    <img src="data:<?php echo $row->tipe_berkas; ?>;base64,<?php echo $row->berkas; ?>">
                                                    <div class="product-label">
                                                        <?php if ($row->diskon == 0) {
                                                        } else { ?>
                                                            <span class="sale"><?php echo $row->diskon; ?>%</span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="product-body">
                                                <p class="product-category">Category</p>
                                                <h3 class="product-name"><a href="<?php echo base_url('home/detail/' . $row->kd_berkas) ?>"><?php echo $row->nama; ?></a></h3>
                                                <h4 class="product-price">Rp <?php if ($row->diskon == 0) {
                                                                                    $harga2 = $row->harga;
                                                                                } else {
                                                                                    $harga2 = (($row->harga) * (($row->diskon) / 100));
                                                                                }
                                                                                echo number_format($harga2, 0, '', '.') ?>,00 <?php if ($row->diskon != 0) { ?>
                                                        <del class="product-old-price"><?php $harga = $row->harga;
                                                                                                                                    echo number_format($harga, 0, '', '.') ?>,00 </del> <?php
                                                                                                                                                                                    } else {
                                                                                                                                                                                    } ?>
                                                </h4>

                                            </div>
                                        </div>
                                        <!-- /product -->
                                    <?php
                                    }
                                    ?>



                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Flash Sale</h3>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab2" class="tab-pane fade in active">
                                <div class="products-slick" data-nav="#slick-nav-2">
                                    <?php

                                    foreach ($queryFlashSale as $row) {
                                    ?>
                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="data:<?php echo $row->tipe_berkas; ?>;base64,<?php echo $row->berkas; ?>">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">Category</p>
                                                <h3 class="product-name"><a href="<?php echo base_url('index.php/home/detail/' . $row->kd_berkas) ?>"><?php echo $row->nama; ?></a></h3>
                                                <h4 class="product-price">Rp <?php $harga = $row->harga;
                                                                                echo number_format($harga, 0, '', '.') ?>,00 <del class="product-old-price">$990.00</del></h4>

                                            </div>
                                        </div>
                                        <!-- /product -->
                                    <?php
                                    }
                                    ?>



                                </div>
                                <div id="slick-nav-2" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- /Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- FOOTER -->
    <footer id="footer">
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">About Us</h3>
                            <p>Selamat datang di Iseven Store, tempat untuk menemukan Macbook Second terbaik untuk setiap selera dan kesempatan. Banyak Promo Menarik Lainnya</p>
                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-map-marker"></i>Sleman DI Yogyakarta</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i>082178968619</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>Isevenstorejogja@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Information</h3>
                            <ul class="footer-links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- /row -->
                </div>
                <!-- /container -->
                <span class="copyright" style="text-align: center;">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | <a href="https://www.instagram.com/retile.project/" style="color:#FFDB15 ;">Retile.</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </span>
            </div>
            <!-- /top footer -->


    </footer>
    <!-- /FOOTER -->
    <script src="<?= base_url('assets/'); ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/'); ?>assets/js/slick.min.js"></script>
    <script src="<?= base_url('assets/'); ?>assets/js/nouislider.min.js"></script>
    <script src="<?= base_url('assets/'); ?>assets/js/jquery.zoom.min.js"></script>
    <script src="<?= base_url('assets/'); ?>assets/js/main.js"></script>
</body>

</html>