	<?php $this->load->view('template_user/header') ?>


	<!-- start banner Area -->
	<section class="banner-area relative" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Cars			
					</h1>	
					<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="cars.html"> Cars</a></p>
				</div>											
			</div>
		</div>
	</section>
	<!-- End banner Area -->	

	<!-- Start model Area -->
	<section class="model-area section-gap" id="cars">
		<div class="container">
			<div class="row d-flex justify-content-center pb-40">
				<div class="col-md-8 pb-40 header-text">
					<h1 class="text-center pb-10">Choose your Desired Car Model</h1>
					<p class="text-center">
						Who are in extremely love with eco friendly system.
					</p>
				</div>
			</div>				
			<div class="active-model-carusel">
				<div class="row align-items-center single-model item">
					<div class="col-lg-6 model-left">
						<div class="title justify-content-between d-flex">
							<h4 class="mt-20">List Mobil</h4>

						</div>
						<p>
							Pilih Mobil
							Dengan cara slide tombol di bawah
						</p>
					</div>
					<div class="col-lg-6 model-right">
						<img class="img-fluid" src="<?php echo base_url('template_user/') ?>img/car.jpg" alt="">
					</div>
				</div>
				<?php foreach ($mobil as $value): ?>
					<div class="row align-items-center single-model item">
						<div class="col-lg-6 model-left">
							<div class="title justify-content-between d-flex">
								<h4 class="mt-20"><?php echo $value->nama ?></h4>
								<h2>Rp. <?php echo $value->harga ?><span>/day</span></h2>
							</div>
							<p>
								<?php echo $value->ket ?>
							</p>
							<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
						</div>
						<div class="col-lg-6 model-right">
							<img class="img-fluid" src="<?php echo base_url('uploads/'.$value->image) ?>" alt="">
						</div>
					</div>
				<?php endforeach ?>											
			</div>
		</div>	
	</section>
	<!-- End model Area -->			

	<!-- Start callaction Area -->
	<section class="callaction-area relative section-gap">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<h1 class="text-white">Experience Great Support</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
					</p>
					<a class="callaction-btn text-uppercase" href="#">Reach Our Support Team</a>	
				</div>
			</div>
		</div>	
	</section>
	<!-- End callaction Area -->

	<!-- Start feature Area -->
	<section class="feature-area section-gap" id="service">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-8 pb-40 header-text">
					<h1>What Services we offer to our clients</h1>
					<p>
						Who are in extremely love with eco friendly system.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-license"></span>Professional Service</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>								
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-phone"></span>Great Support</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>								
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>				
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>								
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>									
					</div>
				</div>						
			</div>
		</div>	
	</section>
	<!-- End feature Area -->				

	<!-- start footer Area -->		
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Quick links</h6>
						<ul>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>								
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Features</h6>
						<ul>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>								
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Resources</h6>
						<ul>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>								
					</div>
				</div>												
				<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>							
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">
							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
								<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
								<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
								</div>

								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>	
				<p class="mt-50 mx-auto footer-text col-lg-12">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>											
			</div>
		</div>
	</footer>	
	<!-- End footer Area -->


	<?php $this->load->view('template_user/footer') ?>
