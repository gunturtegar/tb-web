<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Car Rentals</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo base_url('template_user/'); ?>css/linearicons.css">
			<link rel="stylesheet" href="<?php echo base_url('template_user/'); ?>css/font-awesome.min.css">
			<link rel="stylesheet" href="<?php echo base_url('template_user/'); ?>css/bootstrap.css">
			<link rel="stylesheet" href="<?php echo base_url('template_user/'); ?>css/magnific-popup.css">
			<link rel="stylesheet" href="<?php echo base_url('template_user/'); ?>css/nice-select.css">					
			<link rel="stylesheet" href="<?php echo base_url('template_user/'); ?>css/animate.min.css">
			<link rel="stylesheet" href="<?php echo base_url('template_user/'); ?>https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
			<link rel="stylesheet" href="<?php echo base_url('template_user/'); ?>css/owl.carousel.css">
			<link rel="stylesheet" href="<?php echo base_url('template_user/'); ?>css/main.css">
		</head>
		<body>

			<header id="header" id="home">
				<div class="container">
					<div class="row align-items-center justify-content-between d-flex">
						<div id="logo">
							<a href="index.html"><img src="<?php echo base_url('template_user/') ?>img/logo.png" alt="" title="" /></a>
						</div>
						<nav id="nav-menu-container">
							<ul class="nav-menu">
								<li class="menu-active"><a href="<?php echo base_url('Home') ?>">Home</a></li>
								<li><a href="<?php echo base_url('Home/cars') ?>">Cars</a></li>	
								<?php if ($this->session->userdata('logged_in') != null): ?>
									<li class="menu-has-children"><a href="#">Account</a>
										<ul>
											<li><a href="#"><?php echo $this->session->userdata('logged_in')['nama']; ?></a></li>
											<li><a href="<?php echo base_url('Login/logout') ?>">Logout</a></li>
										</ul>
									</li>
									<?php else: ?>
										<li><a href="<?php echo base_url('Login') ?>">Login</a></li>
									<?php endif ?>	
								<!-- <li class="menu-has-children"><a href="">Pages</a>
									<ul>
										<li><a href="blog-single.html">Blog Single</a></li>
										<li><a href="elements.html">Elements</a></li>
									</ul>
								</li> -->			          
							</ul>
						</nav><!-- #nav-menu-container -->		    		
					</div>
				</div>
			</header><!-- #header -->