	<?php $this->load->view('template_user/header') ?>


	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>	
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-7 col-md-6 ">
					<h6 class="text-white ">the Royal Essence of Journey</h6>
					<h1 class="text-white text-uppercase">
						Relaxed Journey Ever				
					</h1>
					<p class="pt-20 pb-20 text-white">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
					<a href="#" class="primary-btn text-uppercase">Rent Car Now</a>
				</div>
				<div class="col-lg-5  col-md-6 header-right">
					<h4 class="text-white pb-30">Book Your Car Today!</h4>
					<form class="form" role="form" autocomplete="off" method="post" action="<?php echo base_url('Home/pesan') ?>">
						<div class="form-group">
							<div class="default-select" id="default-select"">
								<select name="mobil">
									<option value="" disabled selected hidden>Select Your Car</option>
									<?php foreach ($mobil as $value): ?>
										<option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6 wrap-left">
								<div class="input-group dates-wrap">                                              
									<input id="datepicker2" class="dates form-control" name="tgl_sewa" id="exampleAmount" placeholder="Tanggal Sewa" type="text">                        
									<div class="input-group-prepend">
										<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
									</div>											
								</div>
							</div>
							<div class="col-md-6 wrap-right">
								<div class="input-group dates-wrap">                                          
									<input id="datepicker" class="dates form-control" name="tgl_kembali" id="exampleAmount" placeholder="Tanggal Kembali" type="text">                        
									<div class="input-group-prepend">
										<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
									</div>											
								</div>
							</div>
						</div>					    
						<?php if ($this->session->userdata('logged_in') != null): ?>
							<div class="from-group">
								<input class="form-control txt-field" type="text" readonly value="<?php echo $users['nama']; ?>" placeholder="Name">
								<input class="form-control txt-field" type="email"  readonly value="<?php echo $users['alamat']; ?>" placeholder="Address">
								<input class="form-control txt-field" type="tel" readonly value="<?php echo $users['telp']; ?>" placeholder="Phone number">
								<input class="form-control txt-field" type="tel" readonly value="<?php echo $users['nik']; ?>" placeholder="Phone number">
							</div>
						<?php endif ?>
						<div class="form-group row">
							<div class="col-md-12">
								<?php if ($this->session->userdata('logged_in') != null): ?>
									<button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase">Confirm Car Booking</button>
									<?php else: ?>
										<a href="<?php echo base_url('Login') ?>" class="btn btn-success btn-lg btn-block text-center text-uppercase">Login First</a>
								<?php endif ?>
							</div>
						</div>
					</form>
				</div>											
			</div>
		</div>					
	</section>
	<!-- End banner Area -->	

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

	<!-- Start home-about Area -->
	<section class="home-about-area" id="about">
		<div class="container-fluid">				
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding home-about-left">
					<img class="img-fluid" src="<?php echo base_url('template_user/') ?>img/about-img.jpg" alt="">
				</div>
				<div class="col-lg-6 no-padding home-about-right">
					<h1>Globally Connected <br>
					by Large Network</h1>
					<p>
						<span>We are here to listen from you deliver exellence</span>
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
					</p>
					<a class="text-uppercase primary-btn" href="#">get details</a>
				</div>
			</div>
		</div>	
	</section>
	<!-- End home-about Area -->	

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


	<!-- Start fact Area -->
	<section class="facts-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col single-fact">
					<h1 class="counter">2536</h1>
					<p>Projects Completed</p>
				</div>
				<div class="col single-fact">
					<h1 class="counter">6784</h1>
					<p>Really Happy Clients</p>
				</div>
				<div class="col single-fact">
					<h1 class="counter">1059</h1>
					<p>Total Tasks Completed</p>
				</div>
				<div class="col single-fact">
					<h1 class="counter">2239</h1>
					<p>Cups of Coffee Taken</p>
				</div>	
				<div class="col single-fact">
					<h1 class="counter">435</h1>
					<p>In House Professionals</p>
				</div>												
			</div>
		</div>	
	</section>
	<!-- end fact Area -->							

	<!-- Start reviews Area -->
	<section class="reviews-area section-gap" id="review">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-8 pb-40 header-text text-center">
					<h1>Some Features that Made us Unique</h1>
					<p class="mb-10 text-center">
						Who are in extremely love with eco friendly system.
					</p>
				</div>
			</div>					
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-review">
						<h4>Cody Hines</h4>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-review">
						<h4>Chad Herrera</h4>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-review">
						<h4>Andre Gonzalez</h4>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>							
				<div class="col-lg-4 col-md-6">
					<div class="single-review">
						<h4>Jon Banks</h4>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-review">
						<h4>Landon Houston</h4>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-review">
						<h4>Nelle Wade</h4>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>												
			</div>
		</div>	
	</section>
	<!-- End reviews Area -->


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


	<?php $this->load->view('template_user/footer') ?>