<html>
<head>
	<title>Contact us</title>
	<link href="style.css" rel="stylesheet">
</head>
<body class="body">
	<div class="main">
		<?php
				 include('header.php')
		?>
		<div class="row3">
			<div class="row3left">
				<div class="sidebar"><a href="index.php" title="Home" class="anchar1">Home</a></div>
				<div class="sidebar"><a href="aboutus.php" title="About us" class="anchar1">About us<a/></div>
				<div class="sidebar"><a href="course.php" title="Course" class="anchar1">Course</a></div>
				<div class="sidebar"><a href="gallery.php" title="Gallery" class="anchar1">Gallery</a></div>
				<div class="sidebar"><a href="enquire.php" title="Enquire" class="anchar1">Enquire</a></div>
				<div class="sidebar"><a href="contactus.php" title="Contact us" class="anchar1">Contact us</a></div>	
			</div>
			<div class="contactusc1">
				<div>
					<h1 style="margin-left:15px;">Contact us</h1>
					<div style="margin-left: 15px; font-family:sans-serif; font-size: 18px;">
						<?php

							$sel="SELECT * from contact_us where c_status='1'";
				 			$exe=mysqli_query($conn,$sel);
				 			while ($fetch=mysqli_fetch_assoc($exe)) {
						 ?>
						 	<p><?php echo $fetch['c_address'];?></p>
							<p><?php echo $fetch['c_phone'];?></p>
							<p><?php echo $fetch['c_mobile'];?></p>
							<p><?php echo $fetch['c_email'];?></p>
							<p><?php echo $fetch['c_website'];?></p>
							<p><?php echo $fetch['c_map'];?></p>
							
							<p><?php echo $fetch['c_ffacebook'];?></p>
							<p><?php echo $fetch['c_instagram'];?></p>
							<p><?php echo $fetch['c_linkdin'];?></p>
							<p><?php echo $fetch['c_twitter'];?></p>
							<p><?php echo $fetch['c_status'];?></p>
						<?php } ?>
					</div>					
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<?php include('footer.php')?>
	</div>
</body>
</html>