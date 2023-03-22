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
				// $conid=$_GET['conid'];
				// if($conid!=0){
				// 	$del="DELETE from add_country where country_id='$conid'";
				// 	mysqli_query($conn,$del);
				// }

				//Delete multipal data using loop
				// if (isset($_POST['delete']))
				//  {
				// 	$delid=$_POST['del'];
				// 	foreach ($delid as $value)
				// 		echo $value;
				// 	{
				// 		$dele="DELETE from add_country where country_id='$value'";
				// 		mysqli_query($conn,$dele);
				// 	}
				// }

				//Delete multipal data using IN FUNCTION (in())
				// if(isset($_POST['delete'])) 
				// {
				// 	$delid=implode(",", $_POST['del']);
				// 	echo $delid;
				// 	$dele="DELETE from add_country where country_id in($delid)";
				// 	mysqli_query($conn,$dele);
				// }
				//paging concept 
				$end=5;				
				$next=$_GET['page']+1;
				$pre=$_GET['page']-1;
				$start=$_GET['page']*5;
		?>
	</header>
	<aside>
		<div class="container-fluid mt-3">
			<form method="post" action="">
					<div class="row">
						<?php include("aside.php"); ?>
						<div class="col-lg-1"></div>
						<div class="col-lg-7">
							<h2 class="text-center">View Country</h2>	
						<div class="row">
							<div class="col-lg-12">
								<table class="table">
								  <thead>
								    <tr>
								      <!-- <th><button name="delete" type="submit" onclick="deletemulti(<?php echo $fetch['country_id'] ?>)">Delete</button></th> -->
								      	<a type="submit" onclick="deletemulti(<?php echo $fetch['country_id'] ?>)" class="btn btn-danger">Delete</a>	
								      <th scope="col">Check box</th>
								      <th scope="col">Sr No.</th>
								      <th scope="col">Name</th>
								      <th scope="col">Status</th>
								      <th scope="col-2">Active</th>				      
								    </tr>
								  </thead>
								  <?php
								  //Paging Concept 
								  	$select="SELECT * from add_country limit $start,$end";
								  	$execute=mysqli_query($conn,$select);
								  	while ($fetch=mysqli_fetch_assoc($execute)) {
								  		// echo "<pre>";
								  		// print_r($fetch); // to check array data
								  		// echo "</pre>";
								  ?>
								  <tbody>
								    <tr class="table-primary">
								    <td><input type="checkbox" name="del[]" value="<?php echo $fetch['country_id']; ?>"></td>	
								      <td><?php echo $fetch['country_id']; ?></td>
								      <td><?php echo $fetch['country_title']; ?></td>
								      <td>
								      	<?php 

								      if($fetch['country_status']==1)

								      	{?>

								      	<button class="btn btn-success">Active</button>

								      <?php }

								      else

								      	{?>

								      	<button class="btn btn-danger">Deactive</button>

								     <?php 

								 		} 
								  		?>								  		
								  	</td>
								      <td>								      
								      	<a onclick="deletedata(<?php echo $fetch['country_id'] ?>)" class="btn btn-danger">Delete</a>
								      </td>
								       <td>								      
								      	<a href="addcountry.php?countryId=<?php echo $fetch['country_id'] ?>" class="btn btn-primary">Edit</a>
								      </td>
								      								      
								    </tr>
								   <?php } ?> 
								    
								</tbody>
						</table>
						<nav aria-label="...">
							<ul class="pagination">
								<li class="page-item active">
									<a class="page-link active" href="viewcountry.php?page=0" tabindex="-1">First</a>
								</li>
								<li class="page-item active">
									<a class="page-link active" href="viewcountry.php?page=<?php echo $pre ?>" tabindex="-1">Prev</a>
								</li>
								<?php 
										$selcon="SELECT * from add_country";
										$execon=mysqli_query($conn,$selcon);
										$totcon=ceil(mysqli_num_rows($execon)/$end);
										for ($i=1; $i<=$totcon; $i++) { 
								 ?>
								<li class="page-item active"><a class="page-link" href="viewcountry.php?page=<?php echo $i-1 ?>"><?php echo $i ?></a></li>
								<?php } ?>
								<li class="page-item active">
									<a class="page-link" href="viewcountry.php?page=<?php echo $next ?>">Next</a>
								</li>
								<li class="page-item active">
									<a class="page-link" href="viewcountry.php?page=<?php echo $totcon-1 ?>">Last</a>
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
	// function deletedata(nid)
	// {
	// 	if(confirm("Do you want to Delete Data"))
	// 	{
	// 		location.href='viewcountry.php?conid='+nid;
	// 	}

	// }
	// function deletemulti(did)
	// {
	// 	if (confirm("Do you want to Delete Selected Data")) 
	// 	{
	// 		location.href='viewcountry.php?del='+did;
	// 	}

	// }
</script>
</html>