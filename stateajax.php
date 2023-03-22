		
<?php
		header('Content-Type: application/json; charset=utf-8');
		$conn=mysqli_connect("localhost","root","","iipacademy") or die("Connection not conntected");
		$countryid=$_GET['abc'];
		$state="SELECT * from add_state where country_id='$countryid'";
		$exe=mysqli_query($conn,$state);
		// print_r($exe);
		while ($fetch=mysqli_fetch_array($exe)) {
			$statearray[$fetch['state_id']]=$fetch['state_name'];
		}
		$finalarray=array('status'=>1,'stateData'=>$statearray);
		echo json_encode($finalarray);
?>	







	
			