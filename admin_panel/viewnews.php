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
					include("function.php");
				 include("header.php");
				 include("connection.php");
				 // Delete Single value
				  $nid=$_GET['nid']; 
				  if($nid!=""){
				  	//Delete Data using Function
				  	deleteData("add_news","news_id",$delid,$conn);
				  	//Delete Data normal query
				  	// $del="DELETE from add_news where news_id='$nid'";
				  	// mysqli_query($conn,$del);
				  }

				  //Delete multipal value using loop

				  // if (isset($_POST['delete'])) {
				  // $delid=$_POST['del'];
				  // 	// echo "<pre>";
				  // 	// print_r($delid);
				  // 	// echo "</pre>";
				  // foreach ($delid as $value) {
				  // 	$dele="DELETE from add_news where news_id='$value'";
				  // 	mysqli_query($conn,$dele);
				  // }
				  // }

				  //Delete multipal value using IN FUNCTION (in());

				  if (isset($_POST['delete'])) {
				  	$delid=implode(",", $_POST['del']);
				  	//Delete Data using function
				  		deleteData("add_news","news_id",$delid,$conn);
				  	// $dele="DELETE from add_news where news_id in($delid)";
				  	// mysqli_query($conn,$dele);
				  }
		?>
			<!-- Search commad using php -->
			<?php 
						$search="";
						if (isset($_POST['search'])) {
							$title=$_POST['title'];
							$desc=$_POST['desc'];
							if ($title!="") {
								$search.="and news_title like '%$title%'";
							}
							if ($desc!="") {
								$search.="and news_description like '%$desc%'";
							}
						}
			//Paging Concent (First, Previous, 12345, Next, Last)	
			// limit is a keyword it is used to limit in a select querys limit keyword are used two parameters first where we start the row and Second where we end the row e.g limit 0,5 it mean 0 means start the rows and 5 indicate end of the rows;  	
				
				$end=5; //This is show how many rows are display in one page
				$next=$_GET['page']+1; //This is show the next page
				$pre=$_GET['page']-1;  //This is show the previous page
				$start=	$_GET['page']*5;//This is calculate next rows display in the page

			 ?>

	</header>
	<aside>
		<div class="container-fluid mt-3">
			
					<div class="row">
						<?php include("aside.php"); ?>
						<div class="col-lg-1"></div>						
							<div class="col-lg-7 text-center">
								<h2>View News</h2>
								<form method="post">										
							<div class="row">
								<div class="col-lg-5 mt-3">								
									<input type="search" class="form-control" id="exampleFormControlInput1" placeholder="Search by News Title" name="title">							
								</div>
								<div class="col-lg-5 mt-3">								
									<input type="search" class="form-control" id="exampleFormControlInput1" placeholder="Search by News Description" name="desc">							
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
								      	<button type="submit" name="delete" >Delete</button></th>	
								      <th scope="col">Sr No.</th>
								      <th scope="col">News Title</th>
								      <th scope="col">News Description</th>
								      <th scope="col">News Date</th>
								      <th scope="col">Status</th>
								      <th scope="col-2">Action</th>
								      
								    </tr>
								  </thead>
								  <!-- view news -->
								  <?php
								  		echo $select="SELECT * from add_news where 1=1 $search limit $start,$end"; 
								  		$execute=mysqli_query($conn,$select);
								  		while ($fetch=mysqli_fetch_assoc($execute)) {
								  			
								   ?>
								  <tbody>
								   <tr class="table-primary">
								    <td><input type="checkbox" name="del[]" value=<?php echo $fetch['news_id']?>></td>	
								      <td><?php echo $fetch['news_id']?></td>
								      <td><?php echo $fetch['news_title']?></td>
								      <td><?php echo substr($fetch['news_description'],0,10)?>...</td>
								      <td><?php echo $fetch['news_date']?></td>
								      <td>
								      	<?php

								      if($fetch['news_status']==1){

								      	?>

								      	<div class="btn btn-success">Active</div>
								     <?php }

								      else
								      { 
								      	?>
								      		<div class="btn btn-danger">Deactive</div>
								     <?php
								      }
								      ?>


								  </td>
								 
								      <td>
											<a class="btn btn-danger" onclick="deleteProfile(<?php echo $fetch['news_id'] ?>)"><i class="fa-solid fa-trash-can"></i> &nbsp;Delete</a>
								      	<a class="btn btn-info" href="addnews.php?newsid=<?php echo $fetch['news_id']?>"><i class="fa-solid fa-pen-to-square"></i> &nbsp;Edit</a>
								      </td>		      								      
								    </tr>
								<?php }?>
								</tbody>
						</table>
						<nav aria-label="...">
							<ul class="pagination">
								<!-- //stop the first and previous page linking -->
								<?php 
									if ($_GET['page']<=0)  {?>
									<li class="page-item active">
									<a class="page-link active" tabindex="-1">First</a>
									</li>
								<li class="page-item active">
									<a class="page-link active">Previous</a>
								</li>
									<?php
								}
									else{
										?>

									<li class="page-item active">
									<a class="page-link active" href="viewnews.php?page=0" tabindex="-1">First</a>
								</li>
								<li class="page-item active">
									<a class="page-link active" href="viewnews.php?page=<?php echo $pre; ?>" tabindex="-1">Previous</a>
								</li>
							<?php
								}
								?>	
								
								<?php
										$selq="SELECT * from add_news";
										$exeq=mysqli_query($conn,$selq);
										$totq=ceil(mysqli_num_rows($exeq)/$end);
										for($i=1; $i<=$totq; $i++){
								 ?>
								<li class="page-item active"><a class="page-link" href="viewnews.php?page=<?php echo $i-1; ?>"><?php echo $i; ?></a></li>
							<?php }?>
								<!-- TO STOP NEXT AND LAST button code -->
								<?php
									if ($_GET['page']==$totq-1) {?>
										<li class="page-item active">
									<a class="page-link" display="none">Next</a>
								</li>
								<li class="page-item active">
									<a class="page-link">Last</a>
								</li>
									<?php
									}
									else{?>
									<li class="page-item active">
									<a class="page-link" href="viewnews.php?page=<?php echo $next; ?>">Next</a>
								</li>
								<li class="page-item active">
									<a class="page-link" href="viewnews.php?page=<?php echo $totq-1 ?>">Last</a>
								</li>
								<?php 
									}
								 ?>								
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
	 function deleteProfile(nid) {
	 	
    if (confirm("Do you really want to delete your profile?")) {
      location.href = 'viewnews.php?nid='+nid;
  }
}
</script>
</html>