<?php
include_once('header.php');
?>
<!-- Contact -->
<section class="contact py-5">
	<div class="container py-lg-5">
		<h1 class="heading text-capitalize text-center">Contact Us</h1>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="row">
			<div class="col-md-8 mx-auto">
				<form action="#" method="post">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name"placeholder="Enter Your Name" required>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Enetr Your Email" required>
					</div>
					<div class="form-group">
						<label for="phone">Mobile Number</label>
						<input type="tel" class="form-control" id="phone" name="phone" placeholder="Enetr Your Phone Number" required>
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea class="form-control" id="message" name="message" rows="5" placeholder="Massage" required></textarea>
					</div>
					<button type="submit" class="btn btn-warning" >Submit</button>
				</form>
			</div>
		</div>
		<div class="row top mt-5">
			<div class="col-lg-4 mb-lg-0 mb-4 address-grid">
				<div class="row address-info">
					<div class="col-lg-3 col-sm-2 mb-sm-0 mb-3 address-left">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<div class="col-lg-9 col-sm-10 address-right text-left">
						<h6>Address</h6>
						<p> 3481 Jack Street Beverly Jack Hills<span> 90210 Block, USA </span></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mb-lg-0 mb-4 address-grid">
				<div class="row address-info">
					<div class="col-lg-3 col-sm-2 mb-sm-0 mb-3 address-left">
						<i class="fas fa-envelope-open"></i>
					</div>
					<div class="col-lg-9 col-sm-10 address-right text-left">
						<h6>Email</h6>
						<p>Email : <a href="mailto:mail@example.com"> mail@example.com</a></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 address-grid">
				<div class="row address-info">
					<div class="col-lg-3 col-sm-2 mb-sm-0 mb-3 address-left">
						<i class="fas fa-phone"></i>
					</div>
					<div class="col-lg-9 col-sm-10 address-right text-left">
						<h6>Phone</h6>
						<p>Phone : 112 367 896 2449</p>
						<p>Fax : 112 367 896 2449</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Contact -->
	
	
<?php
include_once('footer.php');
?>