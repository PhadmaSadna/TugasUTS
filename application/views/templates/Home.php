	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Site Title -->
		<title>Adventure</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo site_url('assets/css/linearicons.css')?>">
			<link rel="stylesheet" href="<?php echo site_url('aseets/css/font-awesome.min.css')?>">
			<link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.css')?>">
			<link rel="stylesheet" href="<?php echo site_url('assets/css/magnific-popup.css')?>">
			<link rel="stylesheet" href="<?php echo site_url('assets/css/animate.min.css')?>">
			<link rel="stylesheet" href="<?php echo site_url('assets/css/owl.carousel.css')?>">
			<link rel="stylesheet" href="<?php echo site_url('assets/css/main.css')?>">
		</head>
		<body>
			<!-- start banner Area -->
			<section class="banner-area" id="home">
				<!-- Start Header Area -->
				<header class="default-header">
					<nav class="navbar navbar-expand-lg  navbar-light">
						<div class="container">
							  <a class="navbar-brand" href="index.html">
							  	<img src="img/logo.png" alt="">
							  </a>
							  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							    <span class="text-white lnr lnr-menu"></span>
							  </button>

							  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
							    <ul class="navbar-nav">
									<li><a href="#home">Home</a></li>
									<li><a href="#about">About</a></li>
									<li><a href="#gallery">Gallery</a></li>
									<li><a href="#contact">Contact</a></li>
							    </ul>
							  </div>						
						</div>
					</nav>
				</header>
				<!-- End Header Area -->				
			</section>

			<section class="default-banner active-blog-slider">
					<div class="item-slider relative" style="background: url('<?php echo base_url()?>assets/img/gili-trawangan.jpeg'); background-size: cover;">
						<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
						<div class="container">
							<div class="row fullscreen justify-content-center align-items-center">
								<div class="col-md-10 col-12">
									<div class="banner-content text-center">
										<h4 class="text-white mb-20 text-uppercase">Discover the Colorful World</h4>
										<h1 class="text-uppercase text-white">New Trip</h1>
										<p class="text-white">Gili Trawangan attracts the majority of visitors, it is around thirty minutes boat ride from the northwest mainland of Lombok and regular daily fast boats.</p>
										<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-uppercase header-btn">Booking Now</a>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="item-slider relative" style="background: url('<?php echo base_url()?>assets/img/sunset.jpg'); background-size: cover;">
						<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
						<div class="container">
							<div class="row fullscreen justify-content-center align-items-center">
								<div class="col-md-10 col-12">
									<div class="banner-content text-center">
										<h4 class="text-white mb-20 text-uppercase">Discover the Colorful World</h4>
										<h1 class="text-uppercase text-white">New Adventure</h1>
										<p class="text-white">The mighty Rinjani mountain of Gunung Rinjani is a massive volcano which towers over the island of Lombok. A climb to the top is one of the most exhilarating.</p>
										<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-uppercase header-btn">Booking Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item-slider relative" style="background: url('<?php echo base_url()?>assets/img/air-terjun.jpg');background-size: cover;">
						<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
						<div class="container">
							<div class="row fullscreen justify-content-center align-items-center">
								<div class="col-md-10 col-12">
									<div class="banner-content text-center">
										<h4 class="text-white mb-20 text-uppercase">Discover the Colorful World</h4>
										<h1 class="text-uppercase text-white">New Experience</h1>
										<p class="text-white">Sendang Gila waterfall (Sendang Gile), which attracts many thousands of Indonesian and foreign visitors annually, is Mount Rinjani national.</p>
										<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-uppercase header-btn">Booking Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			<!-- Start Model Booking Area -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">	
					<?php
					    $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
					?>
					<?php
					    if(validation_errors()){
					        echo "<div class='alert alert-danger'>
					    	   	    <strong>Upss!</strong>".validation_errors()."
					              </div>";
					    }
					?>
					<?php 
						echo form_open_multipart('FrontEnd/create_booking', array('class' => 'needs-validation', 'novalidate' => '') );
					?>
			      	<div class="form-group">
			      		<label>Cust ID</label>
			      		<?php echo form_dropdown('CustID', $customer, set_value('CustID'), 'class="form-control" required' ); ?>
			      	</div>
			      	<div class="form-group">
						<label>Guide ID</label>
						<?php echo form_dropdown('GuideID', $guide, set_value('GuideID'), 'class="form-control" required' ); ?>
						<div class="invalid-feedback">Please, fill the blanks</div>
					</div>
					<div class="form-group">
						<label>Packages</label>
						<?php echo form_dropdown('Packages', $packages, set_value('Packages'), 'class="form-control"  id="Packages" onchange="cek_dropdown_packages($(this).val())" required' ); ?>
						<div class="invalid-feedback">Please, fill the blanks</div>
					</div>
					<div class="form-group">
						<label>Start Date :</label>
						<input type="date" class="form-control" name="StartDate" required><div class="invalid-feedback">Please, fill the blanks</div>
					</div>
					<div class="form-group">
						<label>Total Price:</label>
						<input type="number" class="form-control total_price" name="TotalPrice" id="harga" readonly>
					</div>
					<script type="text/javascript">
					    $(document).ready(function() {
					    	cek_dropdown_packages = function(packages) {
					    		var base_url = $('.base_url').val();

					    		$.ajax({
					    			type: 'POST',
					    			url: base_url + 'FrontEnd/get_harga',
					    			data: 'id=' + packages,
					    			dataType: 'html',
					    			success: function(response) {
					    				$('.total_price').val(response);
					    			}
					    		})
					    	}
					    })
					</script>
			      </div>
			      <div class="modal-footer">
			      	<input type="hidden" class="base_url" value="<?php echo base_url(); ?>">
					<input type="submit" id="submitBtn" class="btn btn-primary" value="Tambah">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- End Model Booking Area -->

			<!-- Start about Area -->
			<section class="section-gap info-area" id="about">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-40 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Why Choose Us Your Fitness Builder</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>					
					<div class="single-info row mt-40">
						<div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
							<div class="info-thumb">
								<img src="<?php echo base_url()?>assets/img/about-img.jpg" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-lg-6 col-md-12 no-padding info-rigth">
							<div class="info-content">
								<h2 class="pb-30">We Realize that <br>
								there are reduced <br>
								Wastege Stand out</h2>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.									
								</p>
								<br>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.									
								</p>
								<br>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.
								</p>
								</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End about Area -->

			<!-- Start gallery Area -->
			<section class="gallery-area" id="gallery">
				<div class="container-fluid">
					<div class="row no-padding">
						<div class="active-gallery" align="center">
							<?php foreach ($paket->result() as $key) {?>
							<div class="item single-gallery">
								<img src="<?=base_url('assets/images/').$key->image?>" alt="" style="width: 300px;height: 200px">
							</div>	
							<?php } ?>														
						</div>
					</div>
					<div class="container" align="center">
						<?php echo $links; ?>
					</div>
				</div>	
			</section>
			<!-- End gallery Area -->
			
			<!-- start contact Area -->		
			<section class="contact-area section-gap" id="contact">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">If you need, Just drop us a line</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>										
					<form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
						<div class="row">	
						<div class="col-lg-6 form-group">
							<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
						
							<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

							<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
						</div>
						<div class="col-lg-6 form-group">
							<textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
							<button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
							<div class="alert-msg">								
						</div>
						</div></div>
					</form>						
					
				</div>	
			</section>
			<!-- end contact Area -->		
			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            		<p class="footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">

										<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="d-flex flex-row">

											<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


				                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
				                            	<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
				                          	
											<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
										</div>		
										<div class="info"></div>
										</form>
								</div>
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
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->			

			<script src="<?php echo site_url('assets/js/vendor/jquery-2.2.4.min.js')?>"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="<?php echo site_url('assets/js/vendor/bootstrap.min.js')?>"></script>
			<script src="<?php echo site_url('assets/js/jquery.ajaxchimp.min.js')?>"></script>
			<script src="<?php echo site_url('assets/js/jquery.magnific-popup.min.js')?>"></script>	
			<script src="<?php echo site_url('assets/js/owl.carousel.min.js')?>"></script>			
			<script src="<?php echo site_url('assets/js/jquery.sticky.js')?>"></script>
			<script src="<?php echo site_url('assets/js/slick.js')?>"></script>
			<script src="<?php echo site_url('assets/js/jquery.counterup.min.js')?>"></script>
			<script src="<?php echo site_url('assets/js/waypoints.min.js')?>"></script>		
			<script src="<?php echo site_url('assets/js/main.js')?>"></script>	
		</body>
	</html>