<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Iseven Store | Store Retina</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/slick.css') ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/slick-theme.css') ?>" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/nouislider.min.css') ?>" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/global.css') ?>" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	<link rel="icon" href="<?php echo base_url('assets/img/logo.jpg') ?>">

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="https://maps.app.goo.gl/smu8DD12J2NMK2g46" target="_blank"><i class="fa fa-map-marker "></i> Sleman DI Yogyakarta</a></li>
					<li><a href="https://wa.me/+6282178968619" target="_blank"><i class="fa fa-whatsapp "></i> 082178968619</a></li>
					<li><a href="#"><i class="fa fa-envelope-o "></i> Isevenstorejogja@gmail.com</a></li>
				</ul>
				<!-- <ul class="header-links pull-right">
					<li><a href="login.php"><i class="fa fa-user"></i> Login</a></li>
				</ul> -->
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

	<!-- BREADCRUMB -->
	<div id="breadcrumb" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb-tree">
						<li><a href="<?php echo base_url() ?>">Home</a></li>
						<li><a href="<?php echo base_url() ?>/home/store">Macbook Retina</a></li>
					</ul>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /BREADCRUMB -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- STORE -->
				<div id="store" class="col-md-9" style="margin-left:150px; margin-right:150px;">
					<!-- store products -->
					<div class="row">

						<?php
						foreach ($queryAllupload as $row) {
						?>

							<!-- product -->
							<div class="col-md-3">
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
										<h3 class="product-name"><a href="<?php echo base_url('home/detail/' . $row->kd_berkas) ?>"><?php echo $row->nama; ?></a></h3>
										<h4 class="product-price">
											Rp
											<?php if ($row->diskon == 0) {
												$harga2 = $row->harga;
											} else {
												$harga2 = (($row->harga - ($row->harga) * (($row->diskon) / 100)));
											}
											echo number_format($harga2, 0, '', '.') ?>,00
											<br>
											<?php if ($row->diskon != 0) { ?>
												<del class="product-old-price"><?php $harga = $row->harga;
																				echo number_format($harga, 0, '', '.') ?>,00 </del>
											<?php } else {
											} ?>
										</h4>
									</div>
								</div>
							</div>
						<?php

						}
						?>
						<!-- /product -->



					</div>
					<!-- /store products -->
				</div>
				<!-- /STORE -->
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
					<div class="col-md-4 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">About Us</h3>
							<p>Selamat datang di Iseven Store, tempat untuk menemukan Macbook Second terbaik untuk setiap selera dan kesempatan. Banyak Promo Menarik Lainnya</p>
							<ul class="footer-links">
							</ul>
						</div>
					</div>

					<div class="clearfix visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Information</h3>
							<ul class="footer-links">
								<li><a href="https://maps.app.goo.gl/smu8DD12J2NMK2g46" target="_blank"><i class="fa fa-map-marker "></i> Sleman DI Yogyakarta</a></li>
								<li><a href="https://wa.me/+6282178968619" target="_blank"><i class="fa fa-whatsapp "></i> 082178968619</a></li>
								<li><a href="#"><i class="fa fa-envelope-o "></i> Isevenstorejogja@gmail.com</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Find Us</h3>
							<ul class="footer-links">
								<li>
									<a href="https://www.instagram.com/isevenstorejogja/" target="_blank"><i class="fa fa-instagram fa-2x" style="margin-right: 30px;"></i></a>
									<a href="https://www.facebook.com/profile.php?id=100070222032758" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
								</li>
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

	<!-- jQuery Plugins -->
	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/slick.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/nouislider.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.zoom.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/main.js') ?>"></script>



</body>

</html>