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
								<div class="logo"><a href="index.php"><img src="<?= base_url(); ?>layout/images/logo.png" alt="">SUMATRATRIP</a>
								</div>
							</div>
							<?php if($this->session->userdata('level') === '2'): ?>
							
							<div class="col d-flex flex-row">
								<div class="user_box ml-auto">
									<div class="user_box_login user_box_link"><a href="#"><ul><li>ya</li></ul>My Booking</a></div>
									<div class="user_box_login user_box_link"><a href="#"><?= $this->session->userdata('full_name'); ?></a></div>
									<div class="user_box_register user_box_link"><a href="<?= base_url(); ?>beranda/logout">Logout</a></div>
									</div>
								</div>
							</div>
							<?php else : ?>
							<div class="col d-flex flex-row">
								<div class="user_box ml-auto">
									<div class="user_box_login user_box_link"><?php $book = 'My Booking: '.$this->cart->total_items(). ' items'; ?>
									<?php echo $book; ?></div>
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
				<div class="logo menu_logo"><a href="#"><img src="<?= base_url(); ?>layout/images/logo.png" alt=""></a></div>

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

		<!-- Search -->

		<div class="search">


			<!-- Search Contents -->

			<div class="container fill_height">
				<div class="row fill_height">
					<div class="col fill_height">

						<!-- Search Tabs -->

						<div class="search_tabs_container">
							<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
								<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
									<a href="<?= base_url(); ?>beranda/flights" style="color:#2d2c2c;"><img src="<?= base_url(); ?>layout/images/bus.png" alt="">TRANSPORTS</a>
								</div>
								<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
									<a href="<?= base_url(); ?>beranda/acco" style="color:#2d2c2c;"><img src="<?= base_url(); ?>layout/images/suitcase.png" alt="">ACCOMMODATIONS</a>
								</div>
								<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
									<a href="<?= base_url(); ?>beranda/souvenir" style="color:#2d2c2c;"><img src="<?= base_url(); ?>layout/images/island.png" alt="">THINGS TO DO</a>
								</div>
								<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
									<a href="<?= base_url(); ?>beranda/vocation_credit" style="color:#2d2c2c;"><img src="<?= base_url(); ?>layout/images/stats_4.png" alt="">VOCATION CREDIT</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Intro -->

		<div class="intro">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="intro_title text-center">The Best Features</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="intro_text text-center">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.
								Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. </p>
						</div>
					</div>
				</div>
				<div class="row intro_items">

					<!-- Intro Item -->

					<div class="col-lg-4 intro_col">
						<div class="intro_item">
							<div class="intro_item_overlay"></div>
							<!-- Image by https://unsplash.com/@dnevozhai -->
							<div class="intro_item_background" style="background-image:url(<?= base_url(); ?>layout/images/intro_1.jpg)"></div>
							<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="intro_date">May 25th - June 01st</div>
								<div class="button intro_button">
									<div class="button_bcg"></div><a href="#">see
										more<span></span><span></span><span></span></a>
								</div>
								<div class="intro_center text-center">
									<h1>Mauritius</h1>
									<div class="intro_price">From $1450</div>
									<div class="rating rating_4">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Intro Item -->

					<div class="col-lg-4 intro_col">
						<div class="intro_item">
							<div class="intro_item_overlay"></div>
							<!-- Image by https://unsplash.com/@hellolightbulb -->
							<div class="intro_item_background" style="background-image:url(<?= base_url(); ?>layout/images/intro_2.jpg)"></div>
							<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="intro_date">May 25th - June 01st</div>
								<div class="button intro_button">
									<div class="button_bcg"></div><a href="#">see
										more<span></span><span></span><span></span></a>
								</div>
								<div class="intro_center text-center">
									<h1>Greece</h1>
									<div class="intro_price">From $1450</div>
									<div class="rating rating_4">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Intro Item -->

					<div class="col-lg-4 intro_col">
						<div class="intro_item">
							<div class="intro_item_overlay"></div>
							<!-- Image by https://unsplash.com/@willianjusten -->
							<div class="intro_item_background" style="background-image:url(<?= base_url(); ?>layout/images/intro_3.jpg)"></div>
							<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="intro_date">May 25th - June 01st</div>
								<div class="button intro_button">
									<div class="button_bcg"></div><a href="#">see
										more<span></span><span></span><span></span></a>
								</div>
								<div class="intro_center text-center">
									<h1>Scotland</h1>
									<div class="intro_price">From $1450</div>
									<div class="rating rating_4">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- CTA -->

		<div class="cta">
			<!-- Image by https://unsplash.com/@thanni -->
			<div class="cta_background" style="background-image:url(<?= base_url(); ?>layout/images/cta.jpg)"></div>

			<div class="container">
				<div class="row">
					<div class="col">

						<!-- CTA Slider -->

						<div class="cta_slider_container">
							<div class="owl-carousel owl-theme cta_slider">

								<!-- CTA Slider Item -->
								<div class="owl-item cta_item text-center">
									<div class="cta_title">maldives deluxe package</div>
									<div class="rating_r rating_r_4">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
										eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus
										mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor
										augue gravida lectus, et efficitur enim justo vel ligula.</p>
									<div class="button cta_button">
										<div class="button_bcg"></div><a href="#">book
											now<span></span><span></span><span></span></a>
									</div>
								</div>

								<!-- CTA Slider Item -->
								<div class="owl-item cta_item text-center">
									<div class="cta_title">maldives deluxe package</div>
									<div class="rating_r rating_r_4">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
										eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus
										mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor
										augue gravida lectus, et efficitur enim justo vel ligula.</p>
									<div class="button cta_button">
										<div class="button_bcg"></div><a href="#">book
											now<span></span><span></span><span></span></a>
									</div>
								</div>

								<!-- CTA Slider Item -->
								<div class="owl-item cta_item text-center">
									<div class="cta_title">maldives deluxe package</div>
									<div class="rating_r rating_r_4">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
										eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus
										mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor
										augue gravida lectus, et efficitur enim justo vel ligula.</p>
									<div class="button cta_button">
										<div class="button_bcg"></div><a href="#">book
											now<span></span><span></span><span></span></a>
									</div>
								</div>

							</div>

							<!-- CTA Slider Nav - Prev -->
							<div class="cta_slider_nav cta_slider_prev">
								<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
									<defs>
										<linearGradient id='cta_grad_prev'>
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

							<!-- CTA Slider Nav - Next -->
							<div class="cta_slider_nav cta_slider_next">
								<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
									<defs>
										<linearGradient id='cta_grad_next'>
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

						</div>

					</div>
				</div>
			</div>

		</div>

		<!-- Offers -->

		<div class="offers">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2 class="section_title">the best offers with rooms</h2>
					</div>
				</div>
				<div class="row offers_items">

					<!-- Offers Item -->
					<div class="col-lg-6 offers_col">
						<div class="offers_item">
							<div class="row">
								<div class="col-lg-6">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background" style="background-image:url(<?= base_url(); ?>layout/images/offer_1.jpg)"></div>
										<div class="offer_name"><a href="#">grand castle</a></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="offers_content">
										<div class="offers_price">$70<span>per night</span></div>
										<div class="rating_r rating_r_4 offers_rating">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor
											sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="<?= base_url(); ?>layout/images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="<?= base_url(); ?>layout/images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="<?= base_url(); ?>layout/images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="<?= base_url(); ?>layout/images/sailboat.png" alt="">
												</li>
											</ul>
										</div>
										<div class="offers_link"><a href="offers.php">read more</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Offers Item -->
					<div class="col-lg-6 offers_col">
						<div class="offers_item">
							<div class="row">
								<div class="col-lg-6">
									<div class="offers_image_container">
										<!-- Image by Egzon Bytyqi -->
										<div class="offers_image_background" style="background-image:url(<?= base_url(); ?>layout/images/offer_2.jpg)"></div>
										<div class="offer_name"><a href="#">turkey hills</a></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="offers_content">
										<div class="offers_price">$50<span>per night</span></div>
										<div class="rating_r rating_r_4 offers_rating">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor
											sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="<?= base_url(); ?>layout/images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="<?= base_url(); ?>layout/images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="<?= base_url(); ?>layout/images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="<?= base_url(); ?>layout/images/sailboat.png" alt="">
												</li>
											</ul>
										</div>
										<div class="offers_link"><a href="offers.php">read more</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Offers Item -->
					<div class="col-lg-6 offers_col">
						<div class="offers_item">
							<div class="row">
								<div class="col-lg-6">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@nevenkrcmarek -->
										<div class="offers_image_background" style="background-image:url(<?= base_url(); ?>layout/images/offer_3.jpg)"></div>
										<div class="offer_name"><a href="#">island dream</a></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="offers_content">
										<div class="offers_price">$90<span>per night</span></div>
										<div class="rating_r rating_r_4 offers_rating">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor
											sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="<?= base_url(); ?>layout/images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="<?= base_url(); ?>layout/images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="<?= base_url(); ?>layout/images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="<?= base_url(); ?>layout/images/sailboat.png" alt="">
												</li>
											</ul>
										</div>
										<div class="offers_link"><a href="offers.php">read more</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Offers Item -->
					<div class="col-lg-6 offers_col">
						<div class="offers_item">
							<div class="row">
								<div class="col-lg-6">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@mantashesthaven -->
										<div class="offers_image_background" style="background-image:url(<?= base_url(); ?>layout/images/offer_4.jpg)"></div>
										<div class="offer_name"><a href="#">travel light</a></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="offers_content">
										<div class="offers_price">$30<span>per night</span></div>
										<div class="rating_r rating_r_4 offers_rating">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor
											sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="<?= base_url(); ?>layout/images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="<?= base_url(); ?>layout/images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="<?= base_url(); ?>layout/images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="<?= base_url(); ?>layout/images/sailboat.png" alt="">
												</li>
											</ul>
										</div>
										<div class="offers_link"><a href="offers.php">read more</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Testimonials -->

		<div class="testimonials">
			<div class="test_border"></div>
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2 class="section_title">what our clients say about us</h2>
					</div>
				</div>
				<div class="row">
					<div class="col">

						<!-- Testimonials Slider -->

						<div class="test_slider_container">
							<div class="owl-carousel owl-theme test_slider">

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="test_image"><img src="<?= base_url(); ?>layout/images/test_1.jpg" alt="https://unsplash.com/@anniegray"></div>
										<div class="test_icon"><img src="<?= base_url(); ?>layout/images/backpack.png" alt=""></div>
										<div class="test_content_container">
											<div class="test_content">
												<div class="test_item_info">
													<div class="test_name">carla smith</div>
													<div class="test_date">May 24, 2017</div>
												</div>
												<div class="test_quote_title">" Best holliday ever "</div>
												<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse
													potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="test_image"><img src="<?= base_url(); ?>layout/images/test_2.jpg" alt="https://unsplash.com/@tschax"></div>
										<div class="test_icon"><img src="<?= base_url(); ?>layout/images/island_t.png" alt=""></div>
										<div class="test_content_container">
											<div class="test_content">
												<div class="test_item_info">
													<div class="test_name">carla smith</div>
													<div class="test_date">May 24, 2017</div>
												</div>
												<div class="test_quote_title">" Best holliday ever "</div>
												<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse
													potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="test_image"><img src="<?= base_url(); ?>layout/images/test_3.jpg" alt="https://unsplash.com/@seefromthesky"></div>
										<div class="test_icon"><img src="<?= base_url(); ?>layout/images/kayak.png" alt=""></div>
										<div class="test_content_container">
											<div class="test_content">
												<div class="test_item_info">
													<div class="test_name">carla smith</div>
													<div class="test_date">May 24, 2017</div>
												</div>
												<div class="test_quote_title">" Best holliday ever "</div>
												<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse
													potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="test_image"><img src="<?= base_url(); ?>layout/images/test_2.jpg" alt=""></div>
										<div class="test_icon"><img src="<?= base_url(); ?>layout/images/island_t.png" alt=""></div>
										<div class="test_content_container">
											<div class="test_content">
												<div class="test_item_info">
													<div class="test_name">carla smith</div>
													<div class="test_date">May 24, 2017</div>
												</div>
												<div class="test_quote_title">" Best holliday ever "</div>
												<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse
													potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="test_image"><img src="<?= base_url(); ?>layout/images/test_1.jpg" alt=""></div>
										<div class="test_icon"><img src="<?= base_url(); ?>layout/images/backpack.png" alt=""></div>
										<div class="test_content_container">
											<div class="test_content">
												<div class="test_item_info">
													<div class="test_name">carla smith</div>
													<div class="test_date">May 24, 2017</div>
												</div>
												<div class="test_quote_title">" Best holliday ever "</div>
												<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse
													potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="test_image"><img src="<?= base_url(); ?>layout/images/test_3.jpg" alt=""></div>
										<div class="test_icon"><img src="<?= base_url(); ?>layout/images/kayak.png" alt=""></div>
										<div class="test_content_container">
											<div class="test_content">
												<div class="test_item_info">
													<div class="test_name">carla smith</div>
													<div class="test_date">May 24, 2017</div>
												</div>
												<div class="test_quote_title">" Best holliday ever "</div>
												<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse
													potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
											</div>
										</div>
									</div>
								</div>

							</div>

							<!-- Testimonials Slider Nav - Prev -->
							<div class="test_slider_nav test_slider_prev">
								<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
									<defs>
										<linearGradient id='test_grad_prev'>
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

							<!-- Testimonials Slider Nav - Next -->
							<div class="test_slider_nav test_slider_next">
								<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
									<defs>
										<linearGradient id='test_grad_next'>
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
							<div class="contact_title">get in touch</div>
							<form action="#" id="contact_form" class="contact_form">
								<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
								<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
								<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
								<button type="submit" id="form_submit_button" class="form_submit_button button">send
									message<span></span><span></span><span></span></button>
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
										<div class="logo"><a href="#"><img src="<?= base_url(); ?>layout/images/logo.png" alt="">SUMATRATRIP</a>
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

	<script src="<?= base_url(); ?>layout/js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url(); ?>layout/styles/bootstrap4/popper.js"></script>
	<script src="<?= base_url(); ?>layout/styles/bootstrap4/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>layout/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="<?= base_url(); ?>layout/plugins/easing/easing.js"></script>
	<script src="<?= base_url(); ?>layout/js/custom.js"></script>

</body>

</html>