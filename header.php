<?php
/**
 * @var \CMain $APPLICATION
 */
?>
<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>Studiare</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/studiare-assets.min.css">
	<link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/css/fonts/font-awesome/font-awesome.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/css/fonts/elegant-icons/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/css/fonts/iconfont/material-icons.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/css/style.css">


</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">

			<div class="top-line">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<p><i class="material-icons">phone</i> <span>+7 962 981 51 63</span></p>
							<p><i class="material-icons">email</i> <span>email@mycourse.com</span></p>
						</div>
						<div class="col-lg-6">
							<div class="right-top-line">
                                <?php $APPLICATION->IncludeComponent("bitrix:menu","top",Array(
                                        "ROOT_MENU_TYPE" => "top",
                                        "MAX_LEVEL" => "1",
                                        "CHILD_MENU_TYPE" => "top",
                                        "USE_EXT" => "Y",
                                        "DELAY" => "N",
                                        "ALLOW_MULTI_SELECT" => "Y",
                                        "MENU_CACHE_TYPE" => "N",
                                        "MENU_CACHE_TIME" => "3600",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "MENU_CACHE_GET_VARS" => ""
                                    )
                                );?>
								<button class="search-icon">
									<i class="material-icons open-search">search</i> 
									<i class="material-icons close-search">close</i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<form class="search_bar">
				<div class="container">
					<input type="search" class="search-input" placeholder="What are you looking for...">
					<button type="submit" class="submit">
						<i class="material-icons">search</i>
					</button>
				</div>
			</form>

			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">

					<a class="navbar-brand" href="index.html">
						<img src="images/logo.svg" alt="">
					</a>

					<a href="#" class="mobile-nav-toggle"> 
						<span></span>
					</a>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php $APPLICATION->IncludeComponent("bitrix:menu","main",Array(
                                "ROOT_MENU_TYPE" => "main",
                                "MAX_LEVEL" => "2",
                                "CHILD_MENU_TYPE" => "main",
                                "USE_EXT" => "Y",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "Y",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => ""
                            )
                        );?>
						<a href="#" class="register-modal-opener login-button"><i class="material-icons">perm_identity</i> Get Started</a>
					</div>
				</div>
			</nav>

			<div class="mobile-menu">
				<div class="search-form-box">
					<form class="search-form">
						<input type="search" class="search-field" placeholder="Enter keyword...">
						<button type="submit" class="search-submit">
							<i class="material-icons open-search">search</i> 
						</button>
					</form>
				</div>
				<div class="shopping-cart-box">
					<a class="shop-icon" href="cart.html">
						<i class="material-icons">shopping_cart</i>
						Cart
						<span class="studiare-cart-number">0</span>
					</a>
				</div>
				<nav class="mobile-nav">
					<ul class="mobile-menu-list">
						<li>
							<a href="index.html">Home</a>
						</li>
						<li class="drop-link">
							<a href="#">Pages</a>
							<ul class="drop-level">
								<li><a href="about.html">About Us</a></li>
								<li><a href="pricing.html">Pricing Packages</a></li>
								<li><a href="portfolio.html">Portfolio</a></li>
								<li><a href="single-project.html">Portfolio Single</a></li>
								<li><a href="teachers.html">Teachers</a></li>
								<li><a href="single-teacher.html">Teacher Single</a></li>
								<li><a href="cart.html">Shopping Cart</a></li>
								<li><a href="checkout.html">Checkout</a></li>
								<li><a href="single-teacher.html">Teacher Single</a></li>
								<li class="drop-link">
									<a href="#">Submenu Level 1</a>
									<ul class="drop-level">
										<li><a href="#">Submenu Level 2</a></li>
										<li class="drop-link">
											<a href="#">Submenu Level 2</a>
											<ul class="drop-level">
												<li><a href="#">Submenu Level 3</a></li>
												<li><a href="#">Submenu Level 3</a></li>
											</ul>
										</li>
										<li><a href="#">Submenu Level 2</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="drop-link">
							<a href="blog.html">Blog</a>
							<ul class="drop-level">
								<li class="drop-link">
									<a href="blog-list.html">Blog List</a>
									<ul class="drop-level">
										<li><a href="blog-list-leftsidebar.html">Blog List - Sidebar Left</a></li>
										<li><a href="blog-list-rightsidebar.html">Blog List - Sidebar Right</a></li>
										<li><a href="blog-list.html">No Sidebar</a></li>
									</ul>
								</li>
								<li class="drop-link">
									<a href="blog-grid-3.html">Blog Grid</a>
									<ul class="drop-level">
										<li><a href="blog-grid-3.html">3 Column</a></li>
										<li><a href="blog-grid-4.html">4 Column</a></li>
										<li><a href="blog-grid-leftsidebar.html">Sidebar Left</a></li>
										<li><a href="blog-grid-rightsidebar.html">Sidebar Right</a></li>
									</ul>
								</li>
								<li><a href="blog.html">Blog Classic</a></li>
								<li><a href="single-post.html">Post Single</a></li>
							</ul>
						</li>
						<li>
							<a href="courses.html">Courses</a>
						</li>
						<li>
							<a href="events.html">Events</a>
						</li>
						<li>
							<a href="contact.html">Contact</a>
						</li>
					</ul>
				</nav>
			</div>

		</header>
		<!-- End Header -->
