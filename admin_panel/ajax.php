<?php
		include("connection.php");
		$country=$_POST['country'];
		$status=$_POST['active'];
		if ($country!="" && $status!="") 
		{
				$ins="INSERT into add_country SET
				country_title='$country',
				country_status='$status'";
				mysqli_query($conn,$ins);	
				include("countryview1.php");
		}	
		$countryid=$_GET['abc'];
		$state="SELECT * from add_state where country_id='$countryid'";
		$exe=mysqli_query($conn,$state);
		// print_r($exe);
		while ($fetch=mysqli_fetch_array($exe)) {
			?>
					<option><?php echo $fetch['state_name'] ?></option>
			<?php }
?>	