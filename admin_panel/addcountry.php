<?php
	include("session.php");	
	 include("connection.php");
	 // echo $counid=$_GET['countryId'];

 ?>

<!DOCTYPE html>
<html>
<!-- <img src="img/loading-1.gif" style="width:100%; height: 100vh; position:fixed; z-index: 99999;"  id="loader1" class="p-0"> -->
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
			// if ($counid=="") {
				
			
			// 	 if (isset($_POST['save'])) {
			// 	 	$country=$_POST['country'];
			// 	 	$status=$_POST['active'];
			// 	 	//insert query;
			// 	 	$ins="INSERT INTO add_country SET
			// 	 			country_title='$country',
			// 	 			country_status='$status'

			// 	 	";
			// 	 	mysqli_query($conn,$ins);
			// 	 	header("Location:viewcountry.php");

			// 	 }	
			// }
			// else{
			// 		$sel="SELECT * from add_country where country_id='$counid'";
			// 		$exe=mysqli_query($conn,$sel);
			// 		$fetch=mysqli_fetch_assoc($exe);
			// 		// echo "<pre>";
			// 		// print_r($fetch);
			// 		// echo "</pre>";
			// 		//update command are here
			// 		 if (isset($_POST['save'])) {
			// 	 	$country=$_POST['country'];
			// 	 	$status=$_POST['active'];
			// 	 	//insert query;
			// 	 	$update="UPDATE add_country SET
			// 	 			country_title='$country',
			// 	 			country_status='$status'
			// 	 			where country_id='$counid'";
			// 	 	mysqli_query($conn,$update);
			// 	 	header("Location:viewcountry.php");

			// 	 }	
			// }		 
		?>
	</header>
	<aside>
		<div class="container-fluid mt-3">
			
			<div class="container">
					<div class="row">
						<?php include("aside.php");?>
						<div class="col-lg-1"></div>
						<div class="col-lg-8">
						<form method="post" id="countryAjax" style="position: relative;">
							<h2 class="text-center">Add Country</h2>
							<img id="loader" src="img/loading-17.gif" style="position:absolute; left: 30%; display: none;">
							<div class="mb-3">
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="country" value="<?php echo $fetch['country_title'] ?>">
							</div>
							<div>
								<input type="radio" name="active" value="1" class="mx-2 mb-2"<?php if($fetch['country_status']==1){ echo "checked";} ?>><label>Active</label>
								<input type="radio" name="active" value="0" class="mx-2  mb-2" <?php if($fetch['country_status']==0 && $counid!=""){ echo "checked";} ?>><label>Dactive</label>
							</div>
							<div>
								<button type="submit" name="save" style="border: none;" class="btn btn-primary">Add Country</button>
							</div>
							
						</table>
						<div class="col-lg-12" id="abc">
							<?php include("countryview.php") ?>
						</div>						
						</div>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</script>
</html>