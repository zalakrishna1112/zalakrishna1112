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
					<h3>View Booking </h3>
				</div>
				<div>
					<?php
                     if($book_arr){
                        foreach($book_arr as $c)
                        {
                            $user_id=$c->user_id;
                            if($_SESSION['user_id']==$user_id)
                            { 
                    ?>

                    <table width="100%" class="table table-dark">
                    <tr>
                        <td width="50%">Booking ID</td>
                        <td> <?php echo $c->booking_id?></td>
                    </tr>
                        <td>Advertisement ID</td>
                        <td > <?php echo $c->adv_id?></td>
                    </tr>
                        <td>Booking Name</td>
                        <td> <?php echo $c->name?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> <?php echo $c->email?></td>
                    </tr>
                    <tr>
                        <td>Mobile Number </td>
                        <td> <?php echo $c->phone?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td> <?php echo $c->address?></td>
                    </tr>
                    <tr>
                        <td>Booking Date</td>
                        <td> <?php echo $c->created_dt?></td>
                    </tr>
                    <tr></tr>
                   
                    </table>

                    <?php
                            }
                            else{
                                echo "done";	
                                               
                            }}}
                            
                    ?>
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