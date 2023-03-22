<?php
		include("session.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../admin_panel/style.css">
</head>
<body>
		<div class="container-fluid bg-success mt-5">
			<div class="container">
				<header>
						<div class="col-lg-12 dashboard-menu d-flex justify-content-between p-3">
							<a href="" style="color:white; font-size: 18px; font-family:sans-serif;"><label>User</label></a>
							<a href="dashboard.php" style="color:white; font-size: 18px; font-family:sans-serif;"><label>Dashboard</label></a>
							<a href="changepass.php"style="color:white; font-size: 18px; font-family:sans-serif;"><label>Change Password</label></a>
							<a href="index.php"style="color:white; font-size: 18px; font-family:sans-serif;"><label>Logout</label></a>
							<a href="../"style="color:white; font-size: 18px; font-family:sans-serif;"><label>Go to Website</label></a>
						</div>
				</header>				
			</div>
		</div>
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<?php include('aside.php')?>
					<div class="col-lg-1"></div>
					<div class="col-lg-8 text-center mt-5">
						<h2 style="text-shadow: 0px 5px 10px gray;" class="mb-5">Welcome to IIP Dashboard</h2>
							<div class="row user-regist text-center">
								<div class="col-lg-4 mt-5">
									<a href="#"><img src="img/1.png" width="50" height="50" class="mx-2" style="border-radius: 25px; border: 1px solid black; background: white;">User Registeration</a>
								</div>
								<div class="col-lg-4 mt-5">
									<a href="#"><img src="img/2.png" width="50" height="50" class="mx-2" style="border-radius: 25px; border: 1px solid black; background: white;">Total Enquires</a>
								</div>
								<div class="col-lg-4 mt-5">
									<a href="#"><img src="img/3.png" width="50" height="50" class="mx-2" style="border-radius: 25px; border: 1px solid black; background: white;">Total Course</a>
								</div>
								<div class="col-lg-4 mt-5">
									<a href="#"><img src="img/4.png" width="50" height="50" class="mx-2" style="border-radius: 25px; border: 1px solid black; background: white;">Total Active News:0</a>
								</div>
							</div>
					</div>
				</div>
				<aside>
					
				</aside>
				<?php include('footer.php') ?>
			</div>
		</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</html>