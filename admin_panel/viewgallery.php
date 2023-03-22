<?php
		include("session.php");
		include("connection.php");
		$delid=$_GET['gid'];
		if($delid!="")
		{
			$seldata="SELECT * from add_gallery where gallery_Id='$delid'";
			$exe=mysqli_query($conn,$seldata);
			$fetch=mysqli_fetch_assoc($exe);
			$image=$fetch['add_img'];
			$path="../upload/".$image;
			unlink($path);
			$del="DELETE from add_gallery where gallery_Id='$delid'";
			mysqli_query($conn,$del);		
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
		 		//Delete multipal value using loop
		 	// 	if (isset($_POST['delete'])) {
		 	// 	$delid=$_POST['del'];
		 	// 	foreach ($delid as $value) {
		 	// 	$del="DELETE from add_gallery where gallery_Id='$value'";
			// 	mysqli_query($conn,$del);
		 	// 	}
		 	// }
		 		// OR - Delete multipal value using IN FUNCTION (in())
				if (isset($_POST['delete'])) {
		 		$delid=implode(",", $_POST['del']);		 		
		 		$del="DELETE from add_gallery where gallery_Id in($delid)";
				mysqli_query($conn,$del);		 		
		 	 }
		?>
		<!-- search condition  -->
		<?php 
				//search condition
				$sec="";
				if (isset($_POST['search'])) {
					$title=$_POST['title'];
					if ($title!="") 
					{
						$sec=" and img_title like '%$title%'";
					}
				}
			$end=5;
			$next=$_GET['page']+1;
			$pre=$_GET['page']-1;
			$start=$_GET['page']*5;
		 ?>
	</header>
	<aside>
		<div class="container-fluid mt-3">			
					<div class="row">
						<?php include("aside.php"); ?>
						<div class="col-lg-1"></div>
						<div class="col-lg-7">
							<h2 class="text-center">View Gallery</h2>
						<form method="post">
								<div class="row">
								<div class="col-lg-10">
									<input type="search" class="form-control mt-3" id="exampleFormControlInput1" placeholder="Search by Title Name" name="title">
								</div>
								<div class="col-lg-2">
									<button class="btn btn-primary mt-3" type="submit" name="search">Search</button>
								</div>
							</div>								
						</form>
						<form method="post" action="">								
						<div class="row">
							<div class="col-lg-12">
								<table class="table">
								  <thead>
								    <tr>
								      <th><button name="delete">Delete</button></th>	
								      <th scope="col">Sr No.</th>
								      <th scope="col">Image title</th>
								      <th scope="col">Image</th>
								      <th scope="col">Status</th>
								      <th scope="col 2">Active</th>							      
								    </tr>
								  </thead>
								  	<?php
								 		$select="SELECT * from add_gallery where 1=1 $sec limit $start,$end";
								  			$execute=mysqli_query($conn,$select);
								  			while ($fetch=mysqli_fetch_assoc($execute)) {
								  	?>
								  <tbody>
								    <tr class="table-success">
								    <td><input type="checkbox" value="<?php echo $fetch['gallery_Id']; ?>" name="del[]" ></td>	
								      <td><?php echo $fetch['gallery_Id'];  ?></td>
								      <td><?php echo $fetch['img_title'];  ?></td>
								      <td>
								      	<img src="../upload/<?php echo $fetch['add_img'];?>" width="50"/>
								      	
								      </td>
								      <td><?php 
								      if($fetch['gallery_status']==1)
								      	{ ?>
								      	<button class="btn btn-success">Active</button>
								     <?php }

								      else
								      	{ ?> 
								      	<button class="btn btn-danger">Deactive</button>
								     <?php } ?>
								 </td>
								      <td>
								      	<a class="btn btn-primary" onclick="deletedata(<?php echo $fetch['gallery_Id'];?>)" >Delete</a>
								      	<a class="btn btn-info" href="">Edit</a>
								      </td>								    
								<?php } ?>
								</tbody>
						</table>
						<nav aria-label="...">
							<ul class="pagination">
								<li class="page-item active">
									<a class="page-link active" href="viewgallery.php?page=0" tabindex="-1">First</a>
								</li>
								<li class="page-item active">
									<a class="page-link active" href="viewgallery.php?page=<?php echo $pre; ?>" tabindex="-1">Previous</a>
								</li>
								<?php 
										$selgal="SELECT * from add_gallery";
										$exegal=mysqli_query($conn,$selgal);
										$totgal=ceil(mysqli_num_rows($exegal)/$end);
										for ($i=1; $i<=$totgal; $i++) { 
								 ?>
								<li class="page-item active"><a class="page-link" href="viewgallery.php?page=<?php echo $i-1; ?>"><?php echo $i; ?></a></li>
							<?php }?>								
								<li class="page-item active">
									<a class="page-link" href="viewgallery.php?page=<?php echo $next; ?>">Next</a>
								</li>
								<li class="page-item active">
									<a class="page-link" href="viewgallery.php?page=<?php echo $totgal-1 ?>">Last</a>
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
		if(confirm("Do you want to Delete Data"))
		{
			location.href='viewgallery.php?gid='+nid;
		}
	}
</script>
</html>