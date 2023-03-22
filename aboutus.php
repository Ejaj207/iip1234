<?php
	include('admin_panel/connection.php');
	session_start();
	echo $_SESSION['USERID'];
 ?>
<html>
<head>
	<title>About us</title>
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
			<div class="row3right1">
				<div class="row3right1c1" style="text-align: left;">
					<h1>About us</h1>
					<p>At IIP Academy, students always had the access to Major & Minor Projects in Website Develop<pment (PHP / MySQL)</p>
					<p>IIP Academy Provide best training in .NET & PHP. So that students themselves can be able to develop projects and launch them LIVE on IIP Academy Online Servers. Our Students had developed several projects like wscubetech.com. Many students get easy job placements due to their online Projects on the IIP Academy. We are only institute in Jodhpur which provides free Web Hosting to our students on our servers.</p>
					<p>Engineering & MCA students can develop any small minor projects in .NET or PHP and could extend as their Major Projects in further years. Minor Projects are really not hard to develop, as also the colleges generally are not strict in accepting the minor projects.</p>
					<p>Minor Projects can be small but it must be remarkable. Because details of Minor Projects are required to put in your Resume. And students with good minor projects can be easily placed in good companies during Campus Placements.</p>
					<p>IIP Academy Provides 45 Days Industrial Training for Engineering (B.E. / B.TECH.) Students</p>
					<p><b>Why IIP Academy</b></p>
					<ol>
						<li>Live industrial projects</li>
						<li>Expert Developers</li>
						<li>Placement assistance</li>
						<li>100% Practical</li>
						<li>Interview preparation sessions.</li>
					</ol>
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