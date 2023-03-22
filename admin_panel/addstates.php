<?php 
	include("session.php");
	include("connection.php");
	include("function.php");

	echo $stateId=$_GET['sid'];
if ($stateId=="") {
	
	if (isset($_POST['save'])) {

		// insert query using function
		// $state=array(
		// 			'state_name'=>$_POST['state_name'],
		// 			'state_choose'=>$_POST['state_choose'],
		// 			'state_status'=>$_POST['state_status']
		// );
		// InserData("add_state",$state,$conn);
		
		$state_name=$_POST['state_name'];
		$country=$_POST['country'];
		$state_status=$_POST['state_status'];

		//insert query
			$ins="INSERT INTO add_state SET
					 			state_name='$state_name',
					 			country_id='$country',
					 			state_status='$state_status'
					 	";
					 	mysqli_query($conn,$ins);
		header("Location:viewstate.php");
					 	
	}
		}

		else{
				//2nd process update process 
				//retrive single data in database.
				$sel="SELECT * from add_state where state_id='$stateId'"; 
				$exe=mysqli_query($conn,$sel);
				$fetch=mysqli_fetch_assoc($exe);
				//update query
				if (isset($_POST['save'])) {

						// $upd=array(
						// 		'state_name'=>$_POST['state_name'],
						// 		'state_choose'=>$_POST['state_choose'],
						// 		'state_status'=>$_POST['state_status']

						// );
						// // update("add_state",$upd,"state_id",$stateId);

						$state_name=$_POST['state_name'];
						$country=$_POST['country'];
						$state_status=$_POST['state_status'];	
			$update="UPDATE add_state SET
					 			state_name='$state_name',
					 			country_id='$country',
					 			state_status='$state_status'
					 			where state_id='$stateId'";
					 	mysqli_query($conn,$update);
					 	header("Location:viewstate.php");
		}
	}	
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/style1.css">
  <link rel="stylesheet" type="text/css" href="../css/responsive.css">
</head>
<body>
	<header>
		<?php 
				include("header.php");				
		?>
	</header>
	<aside>
		<div class="container-fluid mt-3">
				<div class="container">
					<div class="row">
						<?php include("aside.php"); ?>
						<div class="col-lg-1"></div>
						<div class="col-lg-8">
							<form method="post" action="">
							<h2 class="text-center">Add State</h2>
							<div class="mb-3 mt-3">
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="state_name" value="<?php echo $fetch['state_name'] ?>">
							</div>
							<div class="mb-3">
								<select class="form-select" aria-label="Default select example" name="country" value="<?php echo $fetch['country'] ?>">
								  <option>Select State</option>
								 <?php $selc="SELECT * from add_country";
								 	$exec=mysqli_query($conn,$selc);
								 	while ($fetch=mysqli_fetch_assoc($exec)) {?>
								 		<option value="<?php echo $fetch['country_id'] ?>"><?php echo $fetch['country_title'] ?></option>
								 <?php } ?>
								</select>
							
							</div>								
							<div>
								<input type="radio" name="state_status" value="1"  class="mx-2 mb-2" <?php if($fetch['state_status']==1){ echo "checked";}?>><label>Active</label>
								<input type="radio" name="state_status" value="0" class="mx-2  mb-2"<?php if($fetch['state_status']==0 && $stateId!=""){ echo "checked";}?>><label>Dactive</label>
							</div>
							<div>
								<button type="submit" name="save" style="border: none;" class="btn btn-primary mt-3">Add State</button>
							</div>
							</form>
						</div>
				</div>		
			</div>
		</div>
	</aside>
	<!-- Footer Part -->
	<footer>
		<?php include("footer.php"); ?>
	</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>