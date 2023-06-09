<?php
include_once('header.php');
?>
<!-- team -->
<section class="wthree-row py-5">
<div class="container py-md-5 py-3">
<h3 class="heading text-capitalize text-center">your booking data</h3>
<h5 class="heading mb-5 text-center">Booking detail</h5>
<div class="row text-center">
<div class="col-lg-4 offset-lg-4 team-grids">
<div class="team-effect">
<img src="upload/car/<?php echo $fetch->file?>" alt="img" width="100%" 
height="300px">
</div>
<!-- team text -->
<div class="footerv2-w3ls mt-3">
<h4><i class="fas fa-user" aria-hidden="true"></i> <?php echo $fetch->name?></h4>
<p>ID : <?php echo $fetch->booking_id?></p>
<p>name : <?php echo $fetch->name?></p>
<p>Gender : <?php echo $fetch->gender?></p>
<p>Address : <?php echo $fetch->address?></p>
<p><a href="edit?edit_user_id=<?php echo $fetch->user_id?>" class="btn btn-primary">Edit</a></p>
</div>
<!-- //team text -->
</div>
</div>
</div>
</section>
<!-- //team -->
<?php
include_once('footer.php');
?>