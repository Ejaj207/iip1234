<?php
	include("session.php");
	include("connection.php");
	 
		$eid=$_GET['eid'];
		if($eid==''){
				
		if (isset($_POST['save'])) 
		{
			$qn=$_POST['question_name'];
			$q_ans=$_POST['q_answer'];
			$status=$_POST['active'];
			//inser query
			$ins="INSERT INTO add_iq SET
				question_name='$qn',
				question_answer='$q_ans',
				iq_status='$status'
			";
			mysqli_query($conn,$ins);
			header("Location:viewiq.php");
		}
}
else{
				$sel="SELECT * from add_iq where q_id='$eid'";
				$edit=mysqli_query($conn,$sel);
				$fetch=mysqli_fetch_assoc($edit);

				if (isset($_POST['save'])){
					echo $qn=$_POST['question_name'];
					$q_ans=$_POST['q_answer'];
					$status=$_POST['active'];
				//update query
					$update="UPDATE add_iq SET 
					question_name='$qn',
					question_answer='$q_ans',
					iq_status='$status'
					WHERE q_id='$eid'";
					mysqli_query($conn,$update);
					header("Location:viewiq.php");			
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
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
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
							<h2 class="text-center">Interview's Question</h2>
							<div class="mb-3">
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Question Name" name="question_name" value="<?php echo $fetch['question_name']; ?>" >
							</div>
							<div class="mb-3">
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Question Answer" name="q_answer" value="<?php echo $fetch['question_answer']; ?>" >
							</div>
							<div>
								<input type="radio" name="active" value="1" class="mx-2 mb-2" <?php if($fetch['iq_status']==1){ echo "checked";}?>><label>Active</label>
								<input type="radio" name="active"  value="0" class="mx-2  mb-2" <?php if($fetch['iq_status']==0 && $eid!=""){ echo "checked";}?>><label>Dactive</label>
							</div>
							<div>
								<button type="submit" name="save" style="border: none;" class="btn btn-primary" >Add Question</button>
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