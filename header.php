
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Taxi Cab Transportation Category Flat Bootstrap Responsive Website Template | About :: W3layouts</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Taxi Cab Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>

<body>
    <!--/banner-->
<div class="top-bar_sub_w3layouts container-fluid">
		<div class="row">
			
			<div class="col-md-4 col-sm-6 log-icons mt-2">
				<p class="py-2"><i class="fas fa-phone"></i> Call Taxi : 12(00) 123 1234</p>
			</div>
			
			<div class="col-md-4 col-sm-6 logo">
				<a class="navbar-brand" href="index">
					<i class="fas fa-taxi"></i> Taxi Cab</a>
			</div>
			
			<?php
			if(isset($_SESSION['user_id']))
			{
				?>
					<div class="col-md-4 top-forms mt-md-3 mt-2 mb-md-0 mb-3">
						<span class="mx-lg-4 mx-md-2  mx-1">
							<a href="profile" >		
								<i class="fas fa-lock"></i> hi.. <?php echo $_SESSION['name']  //session Print ?>
							</a>
						</span>
						<span>
							<a href="logout" >
								<i class="fas fa-user"></i> Logout</a>
						</span>
				</div>
				<?php
				}
			else
			{
				?>
				
				<div class="col-md-4 top-forms mt-md-3 mt-2 mb-md-0 mb-3">
					<span class="mx-lg-4 mx-md-2  mx-1">
						<a href="signin" >
							<i class="fas fa-lock"></i> Sign In</a>
					</span>
					<span>
						<a href="register" >
							<i class="fas fa-user"></i> Register</a>
					</span>
				</div>
				<?php
			}
			?>
		</div>
	</div>
	
	<div class="banner" id="home">
		<!-- header -->
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header">
				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item">
							<a class="nav-link ml-lg-0" href="index">Home
								<span class="sr-only"></span>
							</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="services">Services</a>
						</li>

			            <li class="nav-item">
			            <a class="nav-link" href="book">Booking</a>
			            </li>	
			            <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Dropdown
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item text-center" href="car_adv">Add Adv</a>
							<a class="dropdown-item text-center" href="view_booking">View Booking</a>

							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact">Contact</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>
		<!-- //header -->
	</div>
	<!-- //banner -->