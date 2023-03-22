<?php
		include('admin_panel/connection.php');
		session_start();
		$id=$_SESSION['USERID'];
		if (isset($_POST['save']))
		 {
			$oldpass=$_POST['oldpassword'];
			$newpass=$_POST['npassword'];
			$conf=$_POST['cpassword'];
			$sel="SELECT * from add_user where user_password='$oldpass' and user_id='$id'";
			$exe=mysqli_query($conn,$sel);
			echo $row=mysqli_num_rows($exe);
			if ($row==1) 
			{
				if($newpass==$conf)
				{
					 $upd="UPDATE add_user set
						 user_password='$newpass' where user_id='$id'";
						 mysqli_query($conn,$upd);
						  $msg="Change Password Successful";
				}
				else
				{
						 $error="Please match New Password and Confirm Password";
				}
				
			}
			else{
						 $error="Invaild Old Password";
				}
		}

 ?>

<html>
<head>
	<title>Change Password</title>
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
			<div class="row3right7">
				<div class="row3right1c1">
					<h2 class="h1">CHANGE PASSWORD</h2>
					<div style="color:black; font-size: 20px; font-weight: bolder;"> <?php echo $error ?></div>
					<div style="color:blue; font-size: 20px; font-weight: bolder;"><?php echo$msg ?></div>
					<form method="post">						
						
						<table class="tb2" align="center">
							<tr>								
								<td>
									<label>Old Password :</label>
									<input type="password" name="oldpassword">		
								</td>
							</tr>
							<tr>								
								<td>
									<label>New Password :</label>
									<input type="password" name="npassword" width="100">		
								</td>								
							</tr>
							<tr>								
								<td>
									<label>Confirm Password :</label>
									<input type="password" name="cpassword" width="100">		
								</td>								
							</tr>
							<tr>								
								<td>
									<button type="submit" name="save">Save</button>	
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