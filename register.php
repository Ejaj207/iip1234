<?php
	include('admin_panel/connection.php');
	if (isset($_POST['reg'])) 
	{
		$username=$_POST['username'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$password=$_POST['password'];
		$sel="SELECT * from add_user where user_email='$email' and user_mobile='$mobile'";
		$exe=mysqli_query($conn,$sel);
		echo $check=mysqli_num_rows($exe);
		if($check>0)
		{
				$error1="Duplicate Email and Mobile number";
		}
		else
			if (condition) {
				// code...
			}
		{
			$ins="INSERT INTO add_user SET
			user_name='$username',
			user_email='$email',
			user_mobile='$mobile',
			user_password='$password'";
	 		$exe=mysqli_query($conn,$ins);
	 		$succ="Data Insert Successfully";
		}
			
	}
 ?>

<html>
<head>
	<title>Register</title>
	<link href="style.css" rel="stylesheet">
</head>
<body class="body">
	<div class="main">
		<?php include('header.php')?>
		<div class="row3">
			<div class="row3left">
				<div class="sidebar"><a href="index.php" title="Home" class="anchar1">Home</a></div>
				<div class="sidebar"><a href="aboutus.php" title="About us" class="anchar1">About us<a/></div>
				<div class="sidebar"><a href="course.php" title="Course" class="anchar1">Course</a></div>
				<div class="sidebar"><a href="gallery.php" title="Gallery" class="anchar1">Gallery</a></div>
				<div class="sidebar"><a href="enquire.php" title="Enquire" class="anchar1">Enquire</a></div>
				<div class="sidebar"><a href="contactus.php" title="Contact us" class="anchar1">Contact us</a></div>	
			</div>
			<div class="row3right6">
				<div class="row3right1c1">
					<h2>REGISTRATION</h2>
					<form method="post">						
						<div style="color: red; text-align: center; font-size: 18px;"><?php echo $error1 ?></div>
						<div style="color: green;text-align: center; font-size: 18px;"><?php echo $succ ?></div>
						<table class="tb1" align="center">
							<tr>								
								<td>
									<label>User Name :</label>
									<input type="text" name="username">		
								</td>
							</tr>
							<tr>								
								<td>
									<label>Email :</label>
									<input type="email" name="email" width="100">		
								</td>								
							</tr>
							<tr>								
								<td>
									<label>Mobile No. :</label>
									<input type="number" name="mobile" width="100">		
								</td>								
							</tr>
							<tr>								
								<td>
									<label>Password. :</label>
									<input type="password" name="password" width="100">		
								</td>								
							</tr>
							<tr>								
								<td>
									<button type="submit" name="reg">Register</button>	
								</td>								
							</tr>
						</table>
					</form>
					
				</div>
			</div>
				
		</div>
		<div class="clear"></div>
		<div class="row5">
			Home | About us | Course | Gallery | Enqurie | Contact us
		</div>
	</div>
</body>
</html>