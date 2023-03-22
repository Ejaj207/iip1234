<?php
	include("session.php");
	include("connection.php");
	if (isset($_POST['save'])) {
	$title=$_POST['title'];
	$title_des=$_POST['desc'];
	$radio=$_POST['active'];
	//insert query
		$ins="INSERT INTO aboutus SET
			 about_title='$title',
				about_des='$title_des',
				about_status='$radio'
		";
		mysqli_query($conn,$ins);
		header("Location:about.php");
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
				 include("connection.php");
				 
		?>
	</header>
	<aside>
		<div class="container-fluid mt-3">
				<div class="container">
					<div class="row">
						<?php include("aside.php");?>
						<div class="col-lg-1"></div>
						<div class="col-lg-8">
						<form method="post">	
							<h2 class="text-center">About us</h2>
							<div class="mb-3">
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="About us Title" name="title">
							</div>
							<div class="mb-3">
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="About us Description" name="desc"></textarea>
							</div>
							<div>
								<input type="radio" name="active" class="mx-2 mb-2"><label>Active</label>
								<input type="radio" name="active" class="mx-2  mb-2"><label>Dactive</label>
							</div>
							<div>
								<button type="submit" name="save" style="border: none;" class="btn btn-primary" >Save</button>
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