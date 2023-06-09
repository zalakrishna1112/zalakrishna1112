<?php
include_once('header.php');
if(isset($_SESSION['user_id']))
{

}
else{
	echo "
			<script>
			alert('Login First...');
			window.location='signin';
			</script>
			";
}
?>
<!-- Contact -->
<section class="contact py-5">
	<div class="container py-lg-5">
		<h1 class="heading text-capitalize text-center">Car Advertisement</h1>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="row agile-contact-form">
			
			<div class="col-md-12 mt-md-0 mt-4 contact-form-right">
				<div class="contact-form-top">
					<h3>Car Advertisement</h3>
				</div>
				<div>
					<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form-group">
                            <label>Owner Name</label>
                            <input type="text" name="owner_name" class="form-control" placeholder="Enter your Name" required="">
                        </div>

						<div class="form-group">
                            <label>Car Name</label>
                            <input type="text" name="car_name" class="form-control" placeholder="Enter your Car Name" required="">
                        </div>

						<div class="form-group">
                            <label>Vehicle Number</label>
                            <input type="text" name="vehicle_number" class="form-control" placeholder="Enter your Vehicle Number" required="">
                        </div>

						<div class="form-group">
                            <label>Mobile Number</label>
                            <input type="mobile" name="mobile" class="form-control" placeholder="Enter Mobile Number" required="">
                        </div>

                        <div>
                        <select name="location_id" class="form-control" required="">
							<option>----- Select Location -----</option>
							<?php
							foreach($location_arr as $c)
							{
							?>
							<option value="<?php echo $c->location_id?>"><?php echo $c->name?></option>
							<?php	
							}
							?>
						</select>
                        </div>

                        <div class="form-group">
                        	<label>Address</label>
                            <textarea name="address" class="form-control" placeholder="Address" required=""></textarea>
            	        </div>

                        <div>
                        <select name="category_id" class="form-control" required="">
							<option>----- Select Car Category -----</option>
							<?php
							foreach($category_arr as $c)
							{
							?>
							<option value="<?php echo $c->category_id?>"><?php echo $c->cat_name?></option>
							<?php	
							}
							?>
						</select>
                        </div>

                        <div>
							<label>Upload Your Car Picture</label>
							<input type="file" name="file" class="form-control" >
						</div>

                        <div class="form-group">
                            <label>Deposite</label>
                            <input type="text" name="deposite" class="form-control" placeholder="Enter Deposite" required="">
                        </div>

                        <div class="form-group">
							Driver : 
							<input type="radio" name="driver" value="Yes"> Yes /  
							<input type="radio" name="driver" value="NO"> No
            	        </div>

                        <div class="form-group">
                            <label>Charge</label>
                            <input type="text" name="charge" class="form-control" placeholder="Enter Charge"required="">
                        </div>
						
                        <div class="form-group">
                            <label>Terms And Conditions</label>
                            <input type="text" name="terms_conditions" class="form-control" placeholder="Enter Terms And Conditions" required="">
                        </div>
											
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-warning" value="Add" >
						</div>
				</div>
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
								<p> 3481 Jack Street Beverly Jack Hills<span> 90210 Block, USA </span>
								</p>
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
								<p>Email :
									<a href="mailto:example@email.com"> mail@example.com</a>
								</p>
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
								</p>
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