<html>
<head>
	<title>Gallery</title>
	<link href="style.css" rel="stylesheet">
</head>
<body class="body">
	<div class="main">
		<?php include('header.php')?>
		<div class="row3gallery">
			<div class="row3left">
				<div class="sidebar"><a href="index.php" title="Home" class="anchar1">Home</a></div>
				<div class="sidebar"><a href="aboutus.php" title="About us" class="anchar1">About us<a/></div>
				<div class="sidebar"><a href="course.php" title="Course" class="anchar1">Course</a></div>
				<div class="sidebar"><a href="gallery.php" title="Gallery" class="anchar1">Gallery</a></div>
				<div class="sidebar"><a href="enquire.php" title="Enquire" class="anchar1">Enquire</a></div>
				<div class="sidebar"><a href="contactus.php" title="Contact us" class="anchar1">Contact us</a></div>	
			</div>
			<div class="gallery">
				<h1>Gallery</h1>
					
					<div class="galleryc1">
						<?php 
						$sel="SELECT * from add_gallery where gallery_status=1";
						$exe=mysqli_query($conn,$sel);
						while ($fetch=mysqli_fetch_assoc($exe)) {
												
						 ?>
						<img src="upload/<?php echo $fetch['add_img']; ?>" width="220" height="150">
					<?php }?>
					</div>
					
						
			</div>
		</div>		
		<?php include('footer.php')?>
	</div>
</body>
</html>