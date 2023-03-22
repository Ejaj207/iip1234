<?php session_start(); ?>
<div class="row1">
	<div class="login" style="width:100%" >
		<?php
				if (!isset($_SESSION['USERID'])) 
				{
					?>
					<a href='login.php'>Login</a>
					<span>|</span> 	
     				<a href='register.php'>Register</a>
				<?php }
				 else { ?>
      					<a href='logout.php'>Logout</a>
      					<a href='change.php'>Change Pass</a>
      					<a href='interviewq.php'>Interview Question</a>
  					<?php }
		 ?>
</div>
			<div class="row1c1"></div>
			<div class="row1c2">
				LOOKING FOR THE BEST PLACE FOR PROGRAMMING
			</div>
			<div class="row1c3">
				<div class="row1r1">www.iipacademy.com</div>
				<div class="row1r2">Info@iipacademy.com</div>
				<div class="row1r3">+91-9269698122</div>
			</div>
		</div>
		<div class="row2">
			<div class="menubar"><a href="index.php" title="Home" class="anchar">Home</a></div>
			<div class="menubar"><a href="aboutus.php" title="About" class="anchar">About us</a></div>
			<div class="menubar"><a href="course.php" title="Course" class="anchar">Course</a></div>
			<div class="menubar"><a href="gallery.php"title="Gallery" class="anchar">Gallery</a></div>
			<div class="menubar"><a href="enquire.php"title="Enquire" class="anchar">Enquire</a></div>
			<div class="menubar"><a href="contactus.php"title="Contact" class="anchar">Contact us </a></div>
		</div>
		<div class="row2">
			<div style="color:Red; font-size: 20px; display: flex; margin: 0px; padding-top: 10px;">
				<h3 style="margin: 0px; padding-right: 10px;">NEWS</h3>			
			<marquee >
			 	<?php 
					include('admin_panel/connection.php');
					$sel="SELECT * FROM add_news where news_status=1";
					$exe=mysqli_query($conn,$sel);
					while($fetch=mysqli_fetch_assoc($exe))  {								
						
			 	?>
			 				
			 			<a href="news-details.php?nid=<?php echo $fetch['news_id']; ?>">
			 	<?php 
			 					echo $fetch['news_title']; ?>&nbsp;&nbsp;&nbsp;</a>
			 	<?php }?>
			 </marquee>			 			
			 </div>
		</div>