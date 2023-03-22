<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/style1.css">
  <link rel="stylesheet" type="text/css" href="../css/responsive.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
	<header>
		<?php
				include("session.php");
				 include("header.php");	 
				 include("connection.php");
				  $delid=$_GET['nid'];
				  //single delete 
				  $del="DELETE from add_iq where q_id='$delid'";
				  mysqli_query($conn,$del);

				  //multipal delete using loop
				  if (isset($_POST['delete'])) {
				  	// $delid=$_POST['del'];
				  		// echo "<pre>";
				  		// print_r($delid);
				  		// echo "</pre>";

				  	// foreach ($delid as $value) {
				  	// 	$delete="DELETE from add_iq where q_id='$value'";
				  	// 	mysqli_query($conn,$delete);
				  	// }
				  	$delid=implode(",", $_POST['del']);
				  	echo $delid;
				  	$del="DELETE from add_iq where q_id in('$delid')";
				  	mysqli_query($conn,$del);
				  }

		?>

		<!-- Search command using PHP -->

		<?php 
			$search="";
			if (isset($_POST['search'])) {
				$name=$_POST['q_name'];
				$desc=$_POST['q_desc'];
				if ($name!="") {
					$search=" and question_name like '%$name%'";
				}
				if ($desc!="") {
					$search=" and question_answer like '%$desc%'";
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
							<div class="col-lg-7 text-center">								
							<h2>View Interview Question</h2>
							<form method="post">
							<div class="row">
								<div class="col-lg-5 mt-3">								
									<input type="search" class="form-control" id="exampleFormControlInput1" placeholder="Search by News Title" name="q_name">							
								</div>
								<div class="col-lg-5 mt-3">								
									<input type="search" class="form-control" id="exampleFormControlInput1" placeholder="Search by News Description" name="q_desc">							
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
								      <th><input type="checkbox" name="checkbox-2" class="mx-2">
								      	<button class="btn btn-danger" type="submit" name="delete" >Delete</button></th>	
								      <th scope="col">Sr No.</th>
								      <th scope="col">Question Name</th>
								      <th scope="col">Question Answer</th>
								      <th scope="col">Status</th>
								      <th scope="col-2">Action</th>
								    </tr>
								  </thead>
								  <tbody>
								  	<?php 
								  		echo $sel="SELECT * from add_iq where 1=1 $search limit $start,$end";
								  			$exe=mysqli_query($conn,$sel);
								  			while ($fetch=mysqli_fetch_assoc($exe)) {
								  		
								  	?>
								   <tr class="table-primary">
								    <td><input type="checkbox" name="del[]" value="<?php echo $fetch['q_id'];?>"></td>	
								      <td><?php echo $fetch['q_id'];?></td>
								      <td><?php echo substr($fetch['question_name'],0,12)?>...</td>
								      <td><?php echo $fetch['question_answer'];?></td>
								      <td><?php 
										      if($fetch['iq_status']==1)
								      {?>
								      		<button class="btn btn-success">Active</button>
								      <?php
								  		}
								      else
								      {?>
								      		<button class="btn btn-danger">Deactive</button>
								      
								      <?php } ?>								      		
								      </td>							 
								      <td>
										<a class="btn btn-danger" href="viewiq.php?nid=<?php echo $fetch['q_id'];?>"><i class="fa-solid fa-trash"></i>&nbsp;Delete</a>
								      	<a class="btn btn-info" href="addiq.php?eid=<?php echo $fetch['q_id'];?>"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Edit</a>
								      </td>	
								     <?php }?> 	      								      
								    </tr>
								
								</tbody>
						</table>
						<nav aria-label="...">
							<ul class="pagination">
								<li class="page-item active">
									<a class="page-link active" href="viewiq.php?page=0" tabindex="-1">First</a>
								</li>
								<li class="page-item active">
									<a class="page-link active" href="viewiq.php?page=<?php echo $pre; ?>" tabindex="-1">Previous</a>
								</li>
								<?php 
										$seliq="SELECT * from add_iq";
										$exeiq=mysqli_query($conn,$seliq);
										$totiq=mysqli_num_rows($exeiq);
										for ($i=1; $i<=$totiq; $i++) { 
								?>
								<li class="page-item active"><a class="page-link" href="viewiq.php?page=<?php echo $i-1 ?>"><?php echo $i; ?></a></li>
								<?php } ?>								
								<li class="page-item active">
									<a class="page-link" href="viewiq.php?page=<?php echo $next; ?>">Next</a>
								</li>
								<li class="page-item active">
									<a class="page-link" href="viewiq.php?page=<?php $totiq-1  ?>">Last</a>
								</li>
								
							</ul>
						</nav>
							</div>
						</div>
						</form>
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


<script type="text/javascript">
	
</script>
</html>