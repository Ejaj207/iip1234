<?php
	session_start();
include('admin_panel/connection.php');
if (isset($_POST['submit'])) {
	$username=$_POST['username'];
	$pass=$_POST['password'];
	//select query
	$sel="SELECT * from add_user where user_name='$username' and user_password='$pass'";
		$exe=mysqli_query($conn,$sel);
		$total=mysqli_num_rows($exe);
		if ($total==1) {
			$fetch=mysqli_fetch_assoc($exe);			
			$_SESSION['USERID']=$fetch['user_id'];
			$_SESSION['USERNAME']=$fetch['user_name'];
			header("location:login.php");
		}
		else{
			 $error ="Invalid User Name and Password";
		}

}


 ?>


<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
			<div class="row3right5">
				<div class="row3right1c1">
					<form method="post">						
					<h2>LOGIN</h2>
					<div style="color:darkred; font-size: 20px;"><?php echo $error ?></div>
						<table align="center">
							<tr>								
								<td>
									<label>User Name :</label>
									<input type="text" name="username">		
								</td>
							</tr>
							<tr>								
								<td>
									<label>Password :</label>
									<input type="password" name="password" width="100">		
								</td>								
							</tr>
							<tr>								
								<td>
									<a href=""><label>Forget Password</label></a>		
								</td>								
							</tr>
							<tr>								
								<td>
									<button type="submit" name="submit">Login</button>	
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