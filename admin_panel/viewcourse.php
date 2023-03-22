<?php
	include("session.php");
	include("connection.php");
	include("function.php");
	$delid=$_GET['cid'];
	echo $delid;
	if($delid!=""){
		//Delete Data using function
		deleteData("add_course","course_id",$delid,$conn);
		//Normal Data Delete query
		// $delete="DELETE from add_course where course_id='$delid'";
		// mysqli_query($conn,$delete);
	}

	//Search condition
	$scr="";
	if (isset($_POST['search'])) {
		$name=$_POST['name'];
		$desc=$_POST['desc'];
		if ($name!="") {
			$scr.=" and course_name like '%$name%'"; //like is use to search single word 
		}
		if ($desc!="") {
			$scr.=" and course_desc like '%$desc%'";// and % sign is used in like condition
		}
	}
	//Paging Concent (First, Previous, 12345, Next, Last)
	$end=5;//how many rows are disply in one page
	$next=$_GET['page']+1;
	$pre=$_GET['page']-1;
	$start=$_GET['page']*5;

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
				//delete multipal data using loop 
				// if (isset($_POST['delete'])) 
				// {
				// 	$delid=$_POST['del'];
				// 	// echo "<pre>";
				// 	// print_r($delid);
				// 	// echo "</pre>";
				// 	foreach ($delid as $value) 
				// 	{
				// 		$dele="DELETE from add_course where course_id='$value'";
				// 		mysqli_query($conn,$dele);
				// 	}
				// }
				
			//delete multipal data using IN FUNCTION (in())
			
			if (isset($_POST['delete']))
				//Delete Data using Function
			 {
					$delid=implode(",", $_POST['del']);
					deleteData("add_course","course_id",$delid,$conn);

					// $dele="DELETE from add_course where course_id in($delid)";
					// mysqli_query($conn,$dele);
			}	

		?>
	</header>
	<aside>
		<div class="container-fluid mt-3">
			
					<div class="row">
						<?php include("aside.php"); ?>
						<div class="col-lg-1"></div>
						<div class="col-lg-7">
							<h2 class="text-center">View Course</h2>
							<form method="post">
								<div class="row">
									<div class="col-lg-5">
										<input type="search" class="form-control mt-3" id="exampleFormControlInput1" placeholder="Search by Course Name" name="name">
									</div>
									<div class="col-lg-5">
										<input type="search" class="form-control mt-3" id="exampleFormControlInput1" placeholder="Search by Description" name="desc">
									</div>
									<div class="col-lg-2">								
										<button class="btn btn-primary mt-3" type="submit" name="search">Search</button>
									</div>
						</div>
							</form>
						<form method="post" onsubmit="return deleteMulti()">							
						<div class="row">
							<div class="col-lg-12">
								<table class="table">
								  <thead>
								    <tr>
								      <th><button type="submit" name="delete">Delete</button></th>	
								      <th scope="col">Sr No.</th>
								      <th scope="col">Name</th>
								      <th scope="col">Price</th>
								      <th scope="col">Duration</th>
								      <th scope="col">Description</th>
								      <th scope="col">Image</th>
								      <th scope="col">Status</th>
								      <th scope="col">Action</th>
								    </tr>
								  </thead>
								  <?php
										$select="SELECT * from add_course where 1=1 $scr limit $start,$end";
								  		$execute=mysqli_query($conn,$select);
								  		while ($fetch=mysqli_fetch_assoc($execute)) {
								  ?>
								  <tbody>
								    <tr class="table-dark">
								    <td><input type="checkbox" value="<?php echo $fetch['course_id'] ?>" name="del[]"></td>	
								      <td><?php echo $fetch['course_id'] ?></td>
								      <td><?php echo $fetch['course_name'] ?></td>
								      <td><?php echo $fetch['course_price'] ?></td>
								      <td><?php echo $fetch['course_duration'] ?></td>
								      <td><?php echo substr($fetch['course_desc'],0,5);?>...</td>
								      <td><?php echo $fetch['add_file'] ?></td>
								      <td><?php echo $fetch['course_img'] ?></td>
								      <td><?php 
								      if($fetch['course_status']==1)
								      	{ ?>
								      		<button class="btn btn-success">Active</button>
								      <?php }
								      else{

								      	?>
								      		<button class="btn btn-danger">Deactive</button>
								      <?php
								      	} 
								      ?>								      	
								      </td>
								       <td>
								       		<a class="btn btn-danger" onclick="deletedata(<?php echo $fetch['course_id']?>)" href="viewcourse.php">Delete
								       		</a>
								       		<a class="btn btn-primary"href="addcourse.php?courseid=<?php echo $fetch['course_id'] ?>">
								       			Edit	
								       		</a>
								       </td>      
								    </tr>								    
								   <?php } ?> 
								</tbody>
						</table>
						<nav aria-label="...">
							<ul class="pagination">
								<?php if($_GET['page']<=0){?> 
									<li class="page-item active">
									<a class="page-link active" tabindex="-1">First</a>
								</li>
								<li class="page-item active">
									<a class="page-link active" tabindex="-1">Previous </a>
								</li>
							<?php } else{?>

									<li class="page-item active">
									<a class="page-link active" href="viewcourse.php?page=0" tabindex="-1">First</a>
								</li>
								<li class="page-item active">
									<a class="page-link active" href="viewcourse.php?page=<?php echo $pre; ?>" tabindex="-1">Previous</a>
								</li>
								<?php } ?>	
								
								<?php
										$selc="SELECT * from add_course";
										$exec=mysqli_query($conn,$selc);
										$totc=ceil(mysqli_num_rows($exec)/$end);

										for ($i=1; $i<=$totc; $i++) { 
								 ?>
								<li class="page-item active"><a class="page-link" href="viewcourse.php?page=<?php echo $i-1; ?>"><?php echo $i; ?></a></li>
							    <?php }?>
								<li class="page-item active">
									<a class="page-link" href="viewcourse.php?page=<?php echo $next; ?>">Next</a>
								</li>
								<li class="page-item active">
									<a class="page-link" href="viewcourse.php?page=<?php echo $totc-1; ?>">Last</a>
								</li>
							</ul>
						</nav>
							</div>
						</div>
						</div>
				</div>		
			</form>

		</div>
	</aside>
	<!-- Footer Part -->
	<footer>
		<?php include("footer.php"); ?>
	</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type="text/javascript">
	function deletedata(nid)
	{
		if(confirm("Do you want to delete data"))
		{
			location.href = 'viewcourse.php?cid='+nid;
		}
	}
	function deleteMulti(){
		if(confirm("Do you want to Delete")){
			return true;
		}
		else{
				return false;
		}
	}
</script>
</html>