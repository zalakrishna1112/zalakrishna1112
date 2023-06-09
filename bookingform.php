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
		<h1 class="heading text-capitalize text-center">Booking</h1>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="row agile-contact-form">
			
			<div class="col-md-12 mt-md-0 mt-4 contact-form-right">
				<div class="contact-form-top">
					<h3>Booking Form</h3>
				</div>
				<div>
					<form action="" method="post" enctype="multipart/form-data">
						
                     
						<div class="form-group">
						<label>Adv Name</label>
                            <input type="text" name="adv_id" value="<?php echo $_REQUEST['book_id'];?>" class="form-control" placeholder="" required="">	
						</div>
						<div class="form-group">
                            <label>Customer Name</label>
                            <input type="name" name="name" class="form-control" placeholder="Enter your Name" required="">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email id" required="">
                        </div>

                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="phone" name="phone" class="form-control" placeholder="Enter Mobile Number" required="">
                        </div>

                        <div class="form-group">
                        	<label>Address</label>
                            <textarea name="address" class="form-control" placeholder="Address" required=""></textarea>
            	        </div>

                        <div class="form-group">
                            <label>State</label>
                            <input type="text" name="state" class="form-control" placeholder="Enter your state" required="">
                        </div>
                        
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="city" class="form-control" placeholder="Enter your city" required="">
                        </div>
																	
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-warning" value="Book" >
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