<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/citytours/index_7.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Oct 2018 05:32:10 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title>Dong Shang Travel Service Group (Thailand) Co.,Ltd.</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?=base_url(); ?>assets_fe/img/faviconDS.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?=base_url(); ?>assets_fe/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?=base_url(); ?>assets_fe/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?=base_url(); ?>assets_fe/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?=base_url(); ?>assets_fe/img/apple-touch-icon-144x144-precomposed.png">

    <!-- CSS -->
	<link href="<?=base_url(); ?>assets_fe/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url(); ?>assets_fe/css/style1.css" rel="stylesheet">
	<link href="<?=base_url(); ?>assets_fe/css/vendors.css" rel="stylesheet">

	<!-- ALTERNATIVE COLORS CSS -->
	<link href="#" id="colors" rel="stylesheet">

	<!-- CUSTOM CSS -->
	<link href="<?=base_url(); ?>assets_fe/css/custom.css" rel="stylesheet">

</head>
<body>

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

     <!-- Header================================================== -->
    <header>
		<?php echo $Navheaders; ?>
    </header><!-- End Header -->

	<?php if(isset($Searchbooking)){ ?>
	<section id="search_container">
		<?php echo $Searchbooking; ?>
	</section>
	<?php } ?>
	<!-- End hero -->

	<main>
		<?php 
			echo $mainPackage; 
			echo $mainTravels;  
			echo $mainRentcar; 
		 	echo $mainContents; 
		?>
    </main>
	<!-- End main -->

	<?php echo $Footer; ?>
    <!-- End footer -->

	<div id="toTop"></div><!-- Back to top button -->

	<!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon_set_1_icon-78"></i>
			</button>
		</form>
	</div><!-- End Search Menu -->

	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>

			<form action="" method="POST">
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<input id="remember-me" type="checkbox" name="check">
						<label for="remember-me">Remember Me</label>
					</div>
					<div class="float-right"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_login"></div>
			</form>
				<div class="text-center">
					ต้องการสมัครสมาชิก? <a href="javascript:void(0);">สมัครสมาชิก</a>
				</div>
				<div class="text-center">
					คุณเป็นผู้ดูแลระบบ? <a href="<?=base_url('LoginBackend'); ?>">Admin</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->

	<!-- Common scripts -->
	<script src="<?=base_url(); ?>assets_fe/js/jquery-2.2.4.min.js"></script>
	<script src="<?=base_url(); ?>assets_fe/js/common_scripts_min.js"></script>
	<script src="<?=base_url(); ?>assets_fe/js/functions.js"></script>

	<script>
		$('input.date-pick').datepicker('setDate', 'today');
		$('input.time-pick').timepicker({
			minuteStep: 15,
			showInpunts: false
		})
	</script>

	<script src="<?=base_url(); ?>assets_fe/js/jquery.ddslick.js"></script>
	<script>
		$("select.ddslick").each(function() {
			$(this).ddslick({
				showSelectedHTML: true
			});
		});
	</script>

	<!-- Check box and radio style iCheck -->
	<script>
		$('input').iCheck({
		   checkboxClass: 'icheckbox_square-grey',
		   radioClass: 'iradio_square-grey'
		 });
	</script>


	<!-- SWITCHER  -->
	<script src="<?=base_url(); ?>assets_fe/js/switcher.js"></script>
	<?php
	if(isset($Searchbooking)){ ?>
	<div id="style-switcher">
		<h2>Color Switcher <a href="#"><i class="icon_set_1_icon-65"></i></a></h2>
		<div>
			<ul class="colors" id="color1">
				<li><a href="#" class="aqua" title="Aqua"></a></li>
				<li><a href="#" class="green_switcher" title="Green"></a></li>
				<li><a href="#" class="orange" title="Orange"></a></li>
				<li><a href="#" class="blue" title="Blue"></a></li>
			</ul>
		</div>
	</div>
	<?php } ?>

  </body>

<!-- Mirrored from www.ansonika.com/citytours/index_7.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Oct 2018 05:32:15 GMT -->
</html>