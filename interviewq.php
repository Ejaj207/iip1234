<html>
<head>
	<title>Interview Question</title>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
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
					<h2 class="h1">Interview Q&A</h2>

					<form method="post">
					<table class="tb2" align="center">						
						<?php $sel="SELECT * from add_iq where iq_status=1"; 
						$exe=mysqli_query($conn,$sel);
						while ($fetch=mysqli_fetch_assoc($exe)) {
						?>
							<tr>								
								<td>
									<label>Q.No: <?php echo $fetch['q_id'] ?></label>
										
								</td>
							</tr>
							<tr>								
								<td>
									<label>Question: <?php echo $fetch['question_name'] ?></label>										
								</td>
							</tr>
							<tr>								
								<td>
									<label>Answre:<?php echo $fetch['question_answer'] ?></label>											
								</td>								
							</tr>
							<?php }?>
							
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