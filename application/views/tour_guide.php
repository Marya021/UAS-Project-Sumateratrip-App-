<!DOCTYPE html>
<html lang="en">

<head>
	<title>TOUR GUIDE</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Travelix Project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>layout/styles/bootstrap4/bootstrap.min.css">
	<link href="<?= base_url(); ?>layout/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>layout/styles/offers_styles.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>layout/styles/offers_responsive.css">
</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->



			<!-- Main Navigation -->

			<nav class="main_nav">
				<div class="container">
					<div class="row">
						<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<div class="logo"><a href="<?= base_url(); ?>beranda"><img src="<?= base_url(); ?>layout/images//logo.png" alt="">SUMATRATRIP</a>
								</div>
							</div>
							<?php if($this->session->userdata('level') === '2'): ?>
							
							<div class="col d-flex flex-row">
								<div class="user_box ml-auto">
									<div class="user_box_login user_box_link"><a href="#">My Booking</a></div>
									<div class="user_box_login user_box_link"><a href="#"><?= $this->session->userdata('full_name'); ?></a></div>
									<div class="user_box_register user_box_link"><a href="<?= base_url(); ?>beranda/logout">Logout</a></div>
									</div>
								</div>
							</div>
							<?php else : ?>
							<div class="col d-flex flex-row">
								<div class="user_box ml-auto">
									<div class="user_box_login user_box_link"><a href="<?= base_url(); ?>beranda/login">login</a></div>
									<div class="user_box_register user_box_link"><a href="<?= base_url(); ?>beranda/regis">register</a></div>
								</div>
							</div>
							<?php endif ; ?>

								<form id="search_form" class="search_form bez_1">
									<input type="search" class="search_content_input bez_1">
								</form>

								<div class="hamburger">
									<i class="fa fa-bars trans_200"></i>
								</div>
							</div>
						</div>
					</div>
			</nav>

		</header>

		<div class="menu trans_500">
			<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="menu_close_container">
					<div class="menu_close"></div>
				</div>
				<div class="logo menu_logo"><a href="<?= base_url(); ?>beranda/index"><img src="<?= base_url(); ?>layout/images/logo.png" alt=""></a></div>
				<ul>
					<li class="menu_item"><a href="<?= base_url(); ?>beranda/index.html">home</a></li>
					<li class="menu_item"><a href="<?= base_url(); ?>beranda/about.html">about us</a></li>
					<li class="menu_item"><a href="#">offers</a></li>
					<li class="menu_item"><a href="<?= base_url(); ?>beranda/blog.html">news</a></li>
					<li class="menu_item"><a href="<?= base_url(); ?>beranda/contact.html">contact</a></li>
				</ul>
			</div>
		</div>

		<!-- Home -->

		<div class="home">
			<div class="home_background parallax-window" data-parallax="scroll"><img src="<?= base_url(); ?>layout/images/about_background.jpg"></div>
			<div class="home_content">
				<div class="home_title">Our THINGS TO DO</div>
			</div>
		</div>

		<!-- Offers -->

		<div class="offers">

			<!-- Search -->

			<div class="search">
				<div class="search_inner">

					<!-- Search Contents -->

					<div class="container fill_height no-padding">
						<div class="row fill_height no-margin">
							<div class="col fill_height no-padding">

								<!-- Search Tabs -->

								<div class="search_tabs_container">
									<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
										<div class="search_tab  d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
											<a href="<?= base_url(); ?>beranda/souvenir" style="color:#2d2c2c;"><img src="images/souvenir.png" alt="">SOUVENIR</a>
										</div>
										<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
											<a href="<?= base_url(); ?>beranda/tour_guide" style="color:#2d2c2c;"><img src="images/tour_guide.png" alt="">TOUR GUIDE</a>
										</div>

									</div>
								</div>

								<!-- Search Panel -->

								<div class="search_panel active">
									<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
										<div class="search_item">
											<div>destination</div>
											<input type="text" class="destination search_input" required="required">
										</div>


										<button class="button search_button">search<span></span><span></span><span></span></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Offers -->
			<div class="container">
				<div class="row"> 
					<?php foreach($tour as $f): ?>
					<div class="col-lg-1 temp_col"></div>
					<div class="col-lg-12">
						<!-- Offers Grid -->
						<div class="offers_grid">
							<!-- Offers Item -->
							<div class="offers_item rating_3">
								<div class="row">
									<div class="col-lg-1 temp_col"></div>
									<div class="col-lg-3 col-1680-4">
										<div class="offers_image_container">
											<!-- Image by https://unsplash.com/@kensuarez -->
											<div class="offers_image_background" style="background-image:url(<?= base_url('uploads/'.$f['file']); ?>"></div>
										</div>
									</div>
									<div class="col-lg-8">
										<div class="offers_content">
											<div class="offers_price"><?= $f['name'] ?></span></div>
											<p class="offers_text">Age : <?= $f['age'] ?></p>
											<p class="offers_text">Phone : <?= $f['phone'] ?></p>
											<p class="offers_text">Destination : <?= $f['destination'] ?></p>
											<p class="offers_text">Address : <?= $f['address'] ?></p>
											<p class="offers_text">Price : <?= $f['price'] ?></p>

											<?php echo anchor('beranda/add_my_book/'.$f['id_tour'],'<div class="btn btn-xd btn-primary">Book</div>'); ?>
											
										</div>
									</div>
								</div>
							</div>	

						</div>
					</div>
					<?php endforeach; ?>	
					</div>
			</div>
		</div>

		<!-- Footer -->

		<center>
			<footer class="footer">
				<div class="container ">
					<div class="row ">

						<!-- Footer Column -->
						<div class="col-lg-12 footer_column">
							<div class="footer_col ">
								<div class="footer_content footer_about ">
									<div class="logo_container footer_logo ">
										<div class="logo"><a href="#"><img src="<?= base_url(); ?>layout/images//logo.png" alt="">SUMATRATRIP</a>
										</div>
									</div>
									<ul class="footer_social_list ">
										<li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a>
										</li>
										<li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li class="footer_social_item"><a href="#"><i class="fa fa-instagram"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<center>

	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url(); ?>layout/styles/bootstrap4/popper.js"></script>
	<script src="<?= base_url(); ?>layout/styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/offers_custom.js"></script>


</body>

</html>