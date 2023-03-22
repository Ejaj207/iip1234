<?php
		include("session.php");
		include("connection.php");
		if (isset($_POST['save'])) {
			$c_phone=$_POST['c_phone'];
			$c_mobile=$_POST['c_mobile'];
			$c_email=$_POST['c_email'];
			$c_website=$_POST['c_website'];
			$c_map=$_POST['c_map'];
			$c_address=$_POST['c_address'];
			$c_ffacebook=$_POST['c_ffacebook'];
			$c_instagram=$_POST['c_instagram'];
			$c_linkdin=$_POST['c_linkdin'];
			$c_twitter=$_POST['c_twitter'];
			$c_status=$_POST['active'];

			//insert query
			$ins="INSERT INTO contact_us SET
				 			c_phone='$c_phone',
				 			c_mobile='$c_mobile',
				 			c_email='$c_email',
				 			c_website='$c_website',
				 			c_map='$c_map',
				 			c_address='$c_address',
				 			c_ffacebook='$c_ffacebook',
				 			c_instagram='$c_instagram',
				 			c_linkdin='$c_linkdin',
				 			c_twitter='$c_twitter',
				 			c_status='$c_status'
				 	";
				 	mysqli_query($conn,$ins);
				 	
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
							<h2 class="text-center">Contact Us</h2>							
							<table>
								<tr>       
									<td>
										<input type="text" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Phone" name="c_phone" style="width:375px">
									</td>
									<td>
										<input type="text" class="form-control mx-3 mb-2" id="exampleFormControlInput1" placeholder="Mobile" name="c_mobile" style="width:375px">
									</td>
								</tr>
								<tr>
									<td>
										<input type="email" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Email" name="c_email" style="width:375px">
									</td>
									<td>
										<input type="text" class="form-control mx-3 mb-2" id="exampleFormControlInput1" placeholder="Website" name="c_website" style="width:375px">
									</td>
								</tr>
								<tr>
									<td>
										<textarea class="form-control mb-2" id="exampleFormControlTextarea1" rows="2" placeholder="Map HTML" name="c_map"></textarea>
									</td>
									<td>
										<textarea class="form-control mx-3 mb-2" id="exampleFormControlTextarea1" rows="2" placeholder="Address" name="c_address" style="width:375px"></textarea>
									</td>
								</tr>
								<tr>
									<td>
										<input type="text" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Facebook" name="c_ffacebook" style="width:375px">
									</td>
									<td>
										<input type="text" class="form-control mx-3 mb-2" id="exampleFormControlInput1" placeholder="Instagram" name="c_instagram" style="width:375px">
									</td>
								</tr>
								<tr>
									<td>
										<input type="text" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Linkdin" name="c_linkdin" style="width:375px">
									</td>
									<td>
										<input type="text" class="form-control mx-3 mb-2" id="exampleFormControlInput1" placeholder="Twitter" name="c_twitter" style="width:375px">
									</td>
								</tr>
								<tr>
									<td>
									<input type="radio" name="active" value="1" class="mx-2 mb-2"><label>Active</label>
									<input type="radio" name="active" value="0" class="mx-2  mb-2"><label>Dactive</label>
									</td>								
								</tr>
								<tr>
									<td>
									<button type="submit" name="save" style="border: none;" class="btn btn-primary" >Save</button>	
									</td>
								</tr>
							</table>	
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