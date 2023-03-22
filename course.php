<html>
<head>
	<title>Course</title>
	
	<link rel="stylesheet" type="text/css" href="style.css"/>
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
			<div class="course">
				<div class="course-c1">
					<h1>Course</h1>
					
			 		<?php 					
					$sel="SELECT * FROM add_course where course_status=1";
					$exe=mysqli_query($conn,$sel);
					while($fetch=mysqli_fetch_assoc($exe))  {								
					 ?>
								<div class="box" id="box<?php echo $fetch['course_id'] ?>">
								<div class="des"><?php echo $fetch['course_name'] ?></div>
								<div class="des"><?php echo $fetch['course_price'] ?></div>
								<div class="des"><?php echo $fetch['course_duration'] ?></div>
								<div class="des"><?php echo $fetch['course_desc'] ?></div>
								<div class="des"><?php echo $fetch['add_file'] ?></div>	
								<button class="btn_close" onclick="closeModal(<?php echo $fetch['course_id'] ?>)">Close</button>						
						</div>
			 	
			 					<p id="toggle1" onclick="showModal(<?php echo $fetch['course_id'] ?>)">
			 						
			 						<b><?php echo $fetch['course_id']; ?>.)</b>&nbsp;&nbsp;&nbsp;	
			 						<?php echo $fetch['course_name']; ?>
			 					</p>			 			
			 			
			 				<?php }?>
			 		</div>		 				 			
			</div>

		</div>
		<div class="clear"></div>		
		<?php include('footer.php')?>
	</div>


	
</body>


<script type="text/javascript">
	function showModal(cid){
		document.getElementById('box'+cid).style.display="block";
	}
	function closeModal(cid){
		document.getElementById('box'+cid).style.display="none";
	}
</script>

</html>