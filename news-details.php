<html>
<head>
	<title>Contact us</title>
	<link href="style.css" rel="stylesheet">
</head>
<body class="body">
	<div class="main">
		<?php include('header.php');
			$nid=$_GET['nid'];
			$sel="SELECT * from add_news where news_id='$nid'";
			$exe=mysqli_query($conn,$sel);
			$fetchDetails=mysqli_fetch_assoc($exe);		
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
				<div class="course-c1">
					
					<div style="margin-left: 10px; font-size:20px;">
						<p>Title:<?php echo $fetchDetails['news_title']; ?></p>
						<p>Description:<?php echo $fetchDetails['news_description'];?></p>
						<p>News Date:<?php echo $fetchDetails['news_date']; ?></p>
					</div>
					
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<?php include('footer.php')?>
	</div>
</body>
</html>