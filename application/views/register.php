<!DOCTYPE html>
<html lang="en">

<head>
	<title>SUMATRATRIP</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="SUMATRATRIPt">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>layout/styles/bootstrap4/bootstrap.min.css">
	<link href="<?= base_url(); ?>layout/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>layout/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>layout/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>layout/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>layout/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>layout/styles/responsive.css">
</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">



			<!-- Main Navigation -->

			<nav class="main_nav">
				<div class="container">
					<div class="row">
						<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<div class="logo"><a href="<?= base_url(); ?>beranda"><img src="<?= base_url(); ?>layout/images/logo.png" alt="">SUMATRATRIP</a>
								</div>
							</div>
							<div class="col d-flex flex-row">

								<div class="user_box ml-auto">
									<div class="user_box_login user_box_link"><a href="<?= base_url(); ?>beranda/login">login</a></div>
									<div class="user_box_register user_box_link"><a href="<?= base_url(); ?>beranda/regis">register</a>
									</div>
								</div>
							</div>

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
				<div class="logo menu_logo"><a href="#"><img src="<?= base_url(); ?>layout/images/logo.png" alt=""></a></div>
				<ul>
					<li class="menu_item"><a href="#">home</a></li>
					<li class="menu_item"><a href="about.php">about us</a></li>
					<li class="menu_item"><a href="offers.php">offers</a></li>
					<li class="menu_item"><a href="blog.php">news</a></li>
					<li class="menu_item"><a href="contact.php">contact</a></li>
				</ul>
			</div>
		</div>

		<!-- Home -->

		<div class="home">

			<!-- Home Slider -->

			<div class="home_slider_container">

				<div class="owl-carousel owl-theme home_slider">

					<!-- Slider Item -->
					<div class="owl-item home_slider_item">
						<!-- Image by https://unsplash.com/@anikindimitry -->
						<div class="home_slider_background" style="background-image:url(<?= base_url(); ?>layout/images/home_slider.jpg)"></div>

						<div class="home_slider_content text-center">
							<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
								<h1>Register</h1>
								<div class="button home_slider_button">
									<div class="button_bcg"></div><a href="#">explore
										now<span></span><span></span><span></span></a>
								</div>
							</div>
						</div>
					</div>

					<!-- Slider Item -->
					<div class="owl-item home_slider_item">
						<div class="home_slider_background" style="background-image:url(<?= base_url(); ?>layout/images/home_slider.jpg)"></div>

						<div class="home_slider_content text-center">
							<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
								<h1>discover</h1>
								<h1>the world</h1>
								<div class="button home_slider_button">
									<div class="button_bcg"></div><a href="#">explore
										now<span></span><span></span><span></span></a>
								</div>
							</div>
						</div>
					</div>

					<!-- Slider Item -->
					<div class="owl-item home_slider_item">
						<div class="home_slider_background" style="background-image:url(<?= base_url(); ?>layout/images/home_slider.jpg)"></div>

						<div class="home_slider_content text-center">
							<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
								<h1>discover</h1>
								<h1>the world</h1>
								<div class="button home_slider_button">
									<div class="button_bcg"></div><a href="#">explore
										now<span></span><span></span><span></span></a>
								</div>
							</div>
						</div>
					</div>

				</div>

				<!-- Home Slider Nav - Prev -->
				<div class="home_slider_nav home_slider_prev">
					<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
						<defs>
							<linearGradient id='home_grad_prev'>
								<stop offset='0%' stop-color='#fa9e1b' />
								<stop offset='100%' stop-color='#8d4fff' />
							</linearGradient>
						</defs>
						<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z" />
						<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 " />
					</svg>
				</div>

				<!-- Home Slider Nav - Next -->
				<div class="home_slider_nav home_slider_next">
					<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
						<defs>
							<linearGradient id='home_grad_next'>
								<stop offset='0%' stop-color='#fa9e1b' />
								<stop offset='100%' stop-color='#8d4fff' />
							</linearGradient>
						</defs>
						<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z" />
						<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 " />
					</svg>
				</div>

				<!-- Home Slider Dots -->

				<div class="home_slider_dots">
					<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
						<li class="home_slider_custom_dot active">
							<div></div>01.
						</li>
						<li class="home_slider_custom_dot">
							<div></div>02.
						</li>
						<li class="home_slider_custom_dot">
							<div></div>03.
						</li>
					</ul>
				</div>

			</div>

		</div>
		<div class="search">


			<!-- Search Contents -->

			<div class="container fill_height">
				<div class="row fill_height">
					<div class="col fill_height">
					</div>
				</div> 
			</div>
		</div>
	</div>
	<div class="contact">
		<div class="contact_background" style="background-image:url(<?= base_url(); ?>layout/images/contact.png)"></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="contact_image">

					</div>
				</div>
				<div class="col-lg-7 mt-5">
					<div class="contact_form_container">
						<div class="contact_title">Sign Up</div>
						
						<form action="<?= base_url('beranda/regis'); ?>" method="post" id="contact_form" class="contact_form">
							<input type="text" id="contact_form_email" class="contact_form_subject input_field" name="full_name" placeholder="Username" required="required" data-error="Email is required.">
							<span><?= form_error('full_name'); ?></span>
							<input type="email" id="contact_form_email" class="contact_form_subject input_field" name="email" placeholder="E-mail" required="required" data-error="Email is required.">
							<span><?= form_error('email'); ?></span>
							<input type="password" id="contact_form_subject" class="contact_form_subject input_field" name="password" placeholder="Password" required="required" data-error="Subject is required.">
							<span><?= form_error('password'); ?></span>
							<button type="submit" id="form_submit_button" class="form_submit_button button">Register<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
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
									<div class="logo"><a href="#"><img src="<?= base_url(); ?>layout/images/logo.png" alt="">SUMATRATRIP</a></div>
								</div>
								<ul class="footer_social_list ">
									<li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
									<li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="footer_social_item"><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>


		<!-- Copyright -->


		<script src="<?= base_url(); ?>layout/js/jquery-3.2.1.min.js"></script>
		<script src="<?= base_url(); ?>layout/styles/bootstrap4/popper.js"></script>
		<script src="<?= base_url(); ?>layout/styles/bootstrap4/bootstrap.min.js"></script>
		<script src="<?= base_url(); ?>layout/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
		<script src="<?= base_url(); ?>layout/plugins/easing/easing.js"></script>
		<script src="<?= base_url(); ?>layout/js/custom.js"></script>

</body>

</html>