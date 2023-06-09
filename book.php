<?php
	include_once('header.php');
?>
<!-- Why taxi cab -->
<section class="why">
	
	<div class="container-fluid p-md-5 p-3">
		<h3 class="heading text-capitalize text-center">Book My Car</h3>
		<h5 class="heading mb-5 text-center">Booking</h5>

		<form action="" method="post" enctype="multipart/form-data">
			<select name="location_id" class="form-control" required="">
				<option>----- Select Location -----</option>
				<?php
				foreach($location_arr as $i)
				{
				?>
				<option value="<?php echo $i->location_id?>"><?php echo $i->name?>
				</option>
				<?php	
				}
				?>
			</select>	
			
			<input type="submit" name="submit" value="search" class="btn btn-primary" >
		</form>

		<div class="row why-grids">	
		
			<?php
			 if(isset($_REQUEST['submit']))
			 {
				 $search=$_REQUEST['location_id'];
				 $car_arr=$this->select_search('car_adv','location_id',$search);
			     if($car_arr){
				foreach($car_arr as $c)
				{
			?>	
						
			<table width="100%">
				<tr>
					<td rowspan="5" width="500px"><img src="upload/car/<?php echo $c->file?>" width="500px" height="200px"></td>
					<td>Car Name : <?php echo $c->car_name?></td>
					<td rowspan="5"><a href="bookingform?book_id=<?php echo $c->adv_id;?>" class="btn btn-warning">Book</a></td>
				</tr>
				<tr>
					<td >Vehicle Number : <?php echo $c->vehicle_number?></td>
				</tr>
				<tr>
					<td>Address : <?php echo $c->address?></td>
				</tr>
				<tr>
					<td>Deposite : <?php echo $c->deposite?></td>
				</tr>
				<tr >
					<td>Charge(per km) : <?php echo $c->charge?></td>
				</tr>
				<tr>
					<td colspan="3">-----------------------------------------------------------------------------------------------------------------------</td>
				</tr>
				</table>
			
			
			<?php	
				}} 
				else
				{
					echo "
					<script>
					alert('Sorry.. Cars not available in this area..');
					window.location='book';
					</script>
					";
				}
			}
			?>
		</div>
	</div>
</section>
<!-- //Why taxi cab -->



	
<?php
include_once('footer.php');
?>