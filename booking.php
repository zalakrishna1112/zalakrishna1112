<?php
include_once('header.php');
?>

<!-- Booking -->
<section class="bookingform py-5">
	<div class="container py-md-5 py-3">
		<h1 class="heading text-capitalize text-center">Booking form</h1>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="row">
			<div class="col-lg-6 book-appointment p-sm-5 py-5 px-4">
				<h2>Personal Details</h2>
				<div class="book-agileinfo-form">
					<form action="#" method="post">
						<div class="row main-agile-sectns">
							<div class="col-md-6 agileits-btm-spc form-text1">
								<input type="text" name="Name"placeholder="Full Name" Required="">
							</div>
							<div class="col-md-6 agileits-btm-spc form-text2">
								<input type="text" name="Phone" placeholder="Phone number" required="">
							</div>
						</div>
						<div class="row ">
							<div class="col-md-6 agileits-btm-spc form-text1">
								<input type="email" name="email" placeholder="Email" required="">
							</div>
							<div class="col-md-6">
								<div class="agileits-btm-spc">
									<select id="cab" onchange="change_country(this.value)" class="frm-field required sect">
										<option value="">Select Cab</option>
										<option value="">Mini</option>
										<option value="">Sedan</option>
										<option value="">Elite</option>
									</select>
								</div>
							</div>
						</div>
						<div class="clear"></div>
						<h2 class="sub-head-w3ls">Booking Details</h2>
						<div class="row main-agile-sectns">
							<div class="col-md-6 agileits-btm-spc form-text1">
								<input id="datepicker" name="Text" type="text" placeholder="Pick-up Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
									required="">
							</div>
							<div class="col-md-6 agileits-btm-spc form-text2">
								<input type="text" id="timepicker" name="Time" class="timepicker form-control" placeholder="Pick-up Time" value="">
							</div>
						</div>
						<div class="row main-agile-sectns">
							<div class="col-md-6 agileits-btm-spc form-text1">
								<input type="text" name="Pick-up Location" placeholder="Pick-up Location" required="">
							</div>
							<div class="col-md-6 agileits-btm-spc form-text2">
								<input type="text" name="Drop-off Location" placeholder="Drop-off Location" required="">
							</div>
						</div>

						<div class="main-agile-sectns">
							<div class="agileits-btm-spc">
								<select id="passengers" onchange="change_country(this.value)" class="frm-field required sect">
									<option value="">No.of Passengers</option>
									<option value="">1</option>
									<option value="">2</option>
									<option value="">3</option>         
									<option value="">4</option>
									<option value="">5</option>
								</select>
							</div>
							<div class="agileits-btm-spc form-text2">
								<select id="direction" onchange="change_country(this.value)" class="frm-field required">
									<option value="">Direction</option>
									<option value="">One Way</option>
									<option value="">Return</option>       
								</select>
							</div>
						</div>
						<input type="submit" value="Book Now">
						<input type="reset" value="Reset">
					</form>
				</div>
			</div>
			<div class="col-lg-6 mt-md-5">
				<img src="images/car1.png" alt="" class="img-fluid" />
				<img src="images/car2.png" alt="" class="img-fluid" />
			</div>
		</div>
	</div>
</section>	
<!-- //Booking -->
	
	

<?php
include_once('footer.php');
?>