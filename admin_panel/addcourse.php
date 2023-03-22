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
			include("session.php");				
			 include("header.php");
			 include("connection.php");
			 $cid=$_GET['courseid'];
	if($cid==""){
				 if (isset($_POST['save'])) {
				 $course_name=$_POST['course_name'];
				 $course_price=$_POST['course_price'];
				 $course_duration=$_POST['course_duration'];	
				 $course_desc=$_POST['course_desc'];
				 $choose_file=$_POST['choose_file'];
				 $img=$_POST['img'];
				 $radio=$_POST['active'];

				 	$ins="INSERT INTO add_course SET
				 			course_name='$course_name',
				 			course_price='$course_price',
				 			course_duration='$course_duration',
				 			course_desc='$course_desc',
				 			add_file='$choose_file',
				 			course_img='$img',
				 			course_status='$radio'
				 	";
				 	mysqli_query($conn,$ins);
				 	header("Location:viewcourse.php");
				 }	
			}
			else{
				$sel="SELECT * from add_course where course_id='$cid'";
				$exec=mysqli_query($conn,$sel);
				$fetch=mysqli_fetch_assoc($exec);
				//update command 
				if (isset($_POST['save'])) {
				 $course_name=$_POST['course_name'];
				 $course_price=$_POST['course_price'];
				 $course_duration=$_POST['course_duration'];	
				 $course_desc=$_POST['course_desc'];
				 $choose_file=$_POST['choose_file'];
				 $img=$_POST['img'];
				 $radio=$_POST['active'];

				 	$update="UPDATE add_course SET
				 			course_name='$course_name',
				 			course_price='$course_price',
				 			course_duration='$course_duration',
				 			course_desc='$course_desc',
				 			add_file='$choose_file',
				 			course_img='$img',
				 			course_status='$radio'
				 			where course_id='$cid'";				 	
				 	mysqli_query($conn,$update);
				 	header("Location:viewcourse.php");
			}	
			}	 
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
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Course" name="course_name" value="<?php echo $fetch['course_name'] ?>">
							</div>
							<div class="row">
							<div class="col-lg-6">
									<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Price" name="course_price" value="<?php echo $fetch['course_price'] ?>">
							</div>
							<div class="col-lg-6">
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Duration" name="course_duration" value="<?php echo $fetch['course_duration'] ?>">
							</div>
							</div>
							<div class="mb-3">
								<textarea class="form-control mt-3" id="exampleFormControlTextarea1" rows="6" placeholder="Course Description" name="course_desc"><?php echo $fetch['course_desc'] ?></textarea>
							</div>
							<div class="row">
								<div class="col-lg-9 mb-3">
									<select class="form-select" aria-label="Default select example" name="choose_file">
 										<option selected>Choose</option>
 										<option selected>Web Development</option>
 										<option selected>Android Development</option>
 										<option selected>Java</option>
 										<option selected>.Net</option>
 										<option selected>I-Phone</option>
 										<option selected>SEO</option>
 										<option selected>Basic Programing</option>
 										<option selected>Advance Programing</option>
 									</select>
								</div>
								<div class="col-lg-2 mb-2">
									<input type="file" name="img">
								</div>
							</div>
							<div>
								<input type="radio" name="active" value="1" class="mx-2 mb-2" <?php if($fetch['course_status']==1){ echo "checked";} ?>><label>Active</label>
								<input type="radio" name="active" value="0" class="mx-2  mb-2"<?php if($fetch['course_status']==0 && $cid!=""){ echo "checked";} ?>><label>Deactive</label>
							</div>
							<div>
								<button type="submit" name="save" style="border: none;" class="btn btn-primary" >Add Course</button>
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