<?php
	include("session.php");
	include("connection.php");
	include("function.php");
	 $nid=$_GET['newsid'];

	 if ($nid=="") {
	 
	if (isset($_POST['save'])) {
		// $news_title=$_POST['news_title'];
		// $news_description=$_POST['news_description'];
		// $news_date=$_POST['news_date'];	
		// $news_status=$_POST['active'];

			$arr=array(

							'news_title'=>$_POST['news_title'],
				 			'news_description'=>$_POST['news_description'],
		 		 			'news_date'=>$_POST['news_date'],
				 			'news_status'=>$_POST['active']
			);
			InsertData("add_news",$arr,$conn);
			// header("Location:viewnews.php");

		//Insert query
		// $ins="INSERT INTO add_news SET
		// 		 			news_title='$news_title',
		// 		 			news_description='$news_description',
		// 		 			news_date='$news_date',
		// 		 			news_status='$news_status'

		// 		 	";
		// 		 	mysqli_query($conn,$ins);
				 	

	}
	}
		else{				

				select("add_news","news_id",$nid,$conn);
				// $sel="SELECT * from add_news where news_id='$nid'";
				// $exe=mysqli_query($conn,$sel);
				// $fetch=mysqli_fetch_assoc($exe);
				// echo "<pre>";
				// print_r($fetch);
				// echo "</pre>";
				

				// $arr=array(
				// 		'news_title'=>$news_title=$_POST['news_title'],
				// 		'news_descriptio'=>$_POST['news_description'],
				// 		'news_date'=>$_POST['news_date'],
				// 		'news_status'=>$_POST['active']
				// );
				// update("add_news",$arr,"news_id",$nid,$conn);

				if (isset($_POST['save'])) {

				$arr=array(

							'news_title'=>$_POST['news_title'],
				 			'news_description'=>$_POST['news_description'],
		 		 			'news_date'=>$_POST['news_date'],
				 			'news_status'=>$_POST['active']
			);	
				update("add_news",$arr, "news_id",$nid,$conn);
				header("Location:viewnews.php");

				// $news_title=$_POST['news_title'];
				// $news_description=$_POST['news_description'];
				// $news_date=$_POST['news_date'];	
				// $news_status=$_POST['active'];

		//update query
				
		// $update="UPDATE add_news SET
		// 		 			news_title='$news_title',
		// 		 			news_description='$news_description',
		// 		 			news_date='$news_date',
		// 		 			news_status='$news_status'
		// 		 			WHERE news_id='$nid'";
		// 		 	mysqli_query($conn,$update);
				 	
		}	
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
							<h2 class="text-center">Add News</h2>
							<div class="mb-3">
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="News Title" name="news_title" value="<?php echo $fetch['news_title']; ?>">
							</div>
							<div class="mb-3">
								<textarea class="form-control" id="exampleFormControlTextarea1"rows="6" placeholder="News Description" name="news_description" ><?php echo $fetch['news_description'] ?></textarea>
							</div>
							<div class="mb-3">
								<input type="date" class="form-control" id="exampleFormControlInput1"name="news_date" value="<?php echo  $fetch['news_date'] ?>">
							</div>
							<div>
								<input type="radio" name="active" value="1" class="mx-2 mb-2"<?php if($fetch['news_status']==1){ echo "checked";} ?>><label>Active</label>
								<input type="radio" name="active"  value="0" class="mx-2  mb-2"<?php if($fetch['news_status']==0 && $nid!=""){ echo "checked";} ?>><label>Dactive</label>
							</div>
							<div>
								<button type="submit" name="save" style="border: none;" class="btn btn-primary" >Add News</button>
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