<?php
		include("session.php");
		include("connection.php");
		if (isset($_POST['save'])) {
		$img_title=$_POST['img_title'];			
		$radio=$_POST['active'];
		$image=$_FILES['img']; //Array[name,tem_name,size,type]
		$imagename= rand(1,9999999).time().$image['name']/1024;
		//image upload on a folder code
		// if($imagename<=50){
		$tempimg=$image['tmp_name'];
		$path="../upload/".$imagename;
		move_uploaded_file($tempimg,$path);

		//insert query
		$ins="INSERT INTO add_gallery SET
				 			img_title='$img_title',
				 			add_img='$imagename',
				 			gallery_status='$radio'
				 	";
				 	mysqli_query($conn,$ins);
				 	header("Location:viewgallery.php");
		}

	// }
	// else{
	// 		echo "Photo less than 50kb";
	// }	

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Gallery</title>
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
						<?php include("aside.php");?>
						<div class="col-lg-1"></div>
						<div class="col-lg-8">
							<form method="post" enctype="multipart/form-data">
							<h2 class="text-center">Add Image</h2>
							<div class="mb-3">
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Image Title" name="img_title">
							</div>							
							<div class="row">
								<div class="col-lg-9 mb-3">
									<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Choose Image" name="text-about">
								</div>
								
								<div class="col-lg-1 mb-2">
									<input type="file" name="img">
								</div>
							</div>
							<div>
								<input type="radio" name="active" value="1" class="mx-2 mb-2"><label>Active</label>
								<input type="radio" name="active" value="0" class="mx-2  mb-2"><label>Dactive</label>
							</div>
							<div>
								<button type="submit" name="save" style="border: none;" class="btn btn-primary" >Add Gallery</button>
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