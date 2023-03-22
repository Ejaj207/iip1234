<?php
		 include("connection.php");
		 include("session.php");

		 $delid=$_GET['id'];
		 echo $delid;
		 $del="DELETE from add_state where state_id='$delid'";
		 mysqli_query($conn,$del);
?>
<?php 
	//search condition
$search="";
	if (isset($_POST['search'])) 
	{
		$s_state= $_POST['state'];//$s_state for search
		$s_country=$_POST['country'];
		if($s_state!="")
		{
			$search.=" and state_name like '%$s_state%'";//like is use to search single word
		}
		if($s_country!="")
		{
			$search.="and state_choose like '%$s_country%'";// and % sign is used in like condition
		}
	}
	//paging concent using php	
	$end=5;
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
				 // Delete value using loop 
				 // if (isset($_POST['delete'])) {
				 // 	$delid=$_POST['del'];
				 // 	// echo "<pre>";
				 // 	// print_r($delid);
				 // 	// echo "</pre>";
				 // 	foreach ($delid as $value) {
				 // 		$dele="DELETE from add_state where state_id='$value'";
				 // 		mysqli_query($conn,$dele);
				 // 	}
				 		
				 // }

				 // OR - DELETE value using IN FUNCTION (in())
				 if (isset($_POST['delete'])) {
				 	$delid=implode(",",$_POST['del']);
				 	// echo "<pre>";
				 	// print_r($delid);
				 	// echo "</pre>";
				 	$dele="DELETE from add_state where state_id in($delid)";
				 	mysqli_query($conn,$dele);

				 }
		?>
	</header>
	<aside>
		<div class="container-fluid mt-3">
			
					<div class="row">
						<?php include("aside.php"); ?>
						<div class="col-lg-1"></div>						
							<div class="col-lg-7 text-center">
								<h2>View State</h2>
							<form method="post">
								<div class="row">
								<div class="col-lg-5 mt-3">								
									<input type="search" class="form-control" id="exampleFormControlInput1" placeholder="Search by State Name" name="state">							
								</div>
								<div class="col-lg-5 mt-3">								
									<input type="search" class="form-control" id="exampleFormControlInput1" placeholder="Search by Country Name" name="country">							
								</div>
							<div class="col-lg-2">
								<button class="btn btn-primary mt-3" type="submit" name="search">Search</button>
							</div>	
						</div>
						</form>
						<form method="post" action="">
								
							
						<div class="row">
							<div class="col-lg-12">
								<table class="table mt-5">
								  <thead>
								    <tr>
								      <th><input type="checkbox" name="checkbox-2" class="mx-2"><button type="submit" name="delete" >Delete</button></th>	
								      <th scope="col">Sr No.</th>
								      <th scope="col">State Name</th>
								      <th scope="col">Country Name</th>
								      <th scope="col">Status</th>
								      <th scope="col-2">Action</th>
								      
								    </tr>
								  </thead>
								  <?php 
								 	 $select="SELECT * FROM `add_state` INNER JOIN add_country on add_state.country_id=add_country.country_id where 2=2 $search limit $start,$end";
								  		$execute=mysqli_query($conn,$select);
								  		while ($fetch=mysqli_fetch_assoc($execute)) {
								  ?>
								  <tbody>
								   <tr class="table-primary">
								    <td><input type="checkbox" value="<?php echo $fetch['state_id'];?>" name="del[]"></td>	
								      <td><?php echo $fetch['state_id']; ?></td>
								      <td><?php echo $fetch['state_name'];?></td>
								      <td><?php echo $fetch['country_title']; ?></td>
								      <td><?php 

								       if($fetch['state_status']==1)
								       { ?>
								       		<button class="btn btn-success">Active</button>

								      <?php }

								       	else
								      { ?>
								       		<button class="btn btn-danger">Deactive</button>

								       	<?php
								          }
								        ?></td>
								      <td>
								      	<a onclick="deletedata(<?php echo $fetch['state_id'];?>)" class="btn btn-danger"> Delete</a>
								      	<!-- 1st process to update data -->
								      	<a href="addstates.php?sid=<?php echo $fetch['state_id'];?>" class="btn btn-info">Edit</a>
								      </td>		      								      
								    </tr>
								<?php } ?>
								</tbody>
						</table>
						<nav aria-label="...">
							<ul class="pagination">
								<li class="page-item active">
									<a class="page-link active" href="viewstate.php?page=0" tabindex="-1">First</a>
								</li>
								<li class="page-item active">
									<a class="page-link active" href="viewstate.php?page=<?php echo $pre; ?>" tabindex="-1">Previous</a>
								</li>

								<?php
									//paging concent 
									$selsta="SELECT * from add_state";
									$exesta=mysqli_query($conn,$selsta);
									$totsta=ceil(mysqli_num_rows($exesta)/$end);
									for ($i=1; $i<=$totsta; $i++) { 
								?>
								<li class="page-item active"><a class="page-link" href="viewstate.php?page=<?php echo $i-1 ?>"><?php echo $i; ?></a></li>
							<?php }?>
								<li class="page-item active">
									<a class="page-link" href="viewstate.php?page=<?php echo $next; ?>">Next</a>
								</li>
								<li class="page-item active">
									<a class="page-link" href="viewstate.php?page=<?php echo $totsta-1 ?>">Last</a>
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
			location.href='viewstate.php?id='+nid;
		}
	}
</script>
</html>