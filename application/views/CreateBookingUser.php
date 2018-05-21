<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Traveler &mdash; Kelompok-01</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/icomoon.css')?>">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/themifyicon.css')?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css')?>">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/<?php echo base_url('assets/css/magnific-popup.css')?>">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.css')?>">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css')?>">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url()?>assets/js/modernizr-2.6.2.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
<body>
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">E-TRIP <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li class="has-dropdown">
							<a href="#">Destination</a>
							<ul class="dropdown">
								<li><a href="Lombar">Lombok Barat</a></li>
								<li><a href="#">Mataram</a></li>
								<li><a href="#">Lombok Utara</a></li>
								<li><a href="#">Lombok Tengah</a></li>
								<li><a href="#">Lombok Timur</a></li>
							</ul>
						</li>
						<li><a href="Pricing">Pricing</a></li>
						<li><a href="Contact">Contact</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<?php
    if(validation_errors()){
        echo "<div class='alert alert-danger'>
    	   	    <strong>Upss!</strong>".validation_errors()."
              </div>"
         ;
    }
?>

<?php 
	echo form_open_multipart('Welcome/create_booking', array('class' => 'needs-validation', 'novalidate' => '') );
?>
<table class="table table-hover">
	<h2>Fill Your Booking Tour</h2><br>
<tr>

<b>Your Name
<?php echo form_dropdown('CustID', $customer, set_value('CustID'), 'class="form-control" required' ); ?>
<b>Guide's Name
<?php echo form_dropdown('GuideID', $guide, set_value('GuideID'), 'class="form-control" required' ); ?>
<b>Your Packages
<?php echo form_dropdown('Packages', $packages, set_value('Packages'), 'class="form-control"  id="Packages" onchange="cek_dropdown_packages($(this).val())" required' ); ?>
<b>Start Date :</b> <input type="date" class="form-control" name="StartDate">
<?php echo form_error('StartDate', '<div class="error">', '</div>'); ?> <br>
<b>Total Price:</b> <input type="number" class="form-control total_price" name="TotalPrice" id="harga" readonly><br>
<br>
</tr>
<input type="hidden" class="base_url" value="<?php echo base_url(); ?>">
<input type="submit" id="submitBtn" class="btn btn-primary" value="Booking Now!">
</table>
</div>

<script type="text/javascript">
    $(document).ready(function() {
    	cek_dropdown_packages = function(packages) {
    		var base_url = $('.base_url').val();

    		$.ajax({
    			type: 'POST',
    			url: base_url + 'BookingTour/get_harga',
    			data: 'id=' + packages,
    			dataType: 'html',
    			success: function(response) {
    				$('.total_price').val(response);
    			}
    		})
    	}
    })
</script>

</body>
</html>

