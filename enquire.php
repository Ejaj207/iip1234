<html>
<head>
	<title>Enquire</title>
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
			<div class="enquireright1">
				<div class="enquireright2">Enquire</div>
				<form>
				<div class="outerleft">Gender</div>
				<div class="outerright">
					<input type="radio" name="Gender"/>Male
					<input type="radio" name="Gender"/>Female
				</div>
				<div class="outerleft">Name</div>
				<div class="outerright"><input type="text"/></div>
				<div class="outerleft">Contact No.</div>
				<div class="outerright"><input type="text"/></div>
				<div class="outerleft">Country</div>
				<div class="outerright">

					<select onchange="seldata(this.value)">
						<option>Select</option>
						<?php 
								$sel="SELECT * from add_country";
								$exe=mysqli_query($conn,$sel);
								while ($fetch=mysqli_fetch_assoc($exe)) {
						 ?>
						 		<option value="<?php echo $fetch['country_id']; ?>"><?php echo $fetch['country_title']; ?></option>

						 <?php }?>
					</select>
				</div>
				<div class="outerleft">State</div>
				<div class="outerright">
						<select name="abc" id="state">
							 

						</select>
				</div>
				<div class="outerleft">City</div>
				<div class="outerright">
					<select>
						<option>--Select--</option>
						<option>Ranchi</option>
						<option>Hazaribag</option>
						<option>Bokaro</option>
					</select>
				</div>
				<div class="outerleft">Address</div>
				<div class="outerright1"><textarea class="text1"></textarea/></div>
				<div class="outerleft">Email</div>
				<div class="outerright"><input type="text"/></div>
				<div class="outerleft">Enquire</div>
				<div class="outerright1"><textarea class="text1"></textarea/></div>
				<div class="outerright2">
					<input type="submit" value="Submit" class="btn" />
					<input type="Reset" value="Reset" class="btn" />

				</div>

				</form>
			</div>
		</div>
		<div class="clear"></div>
		<?php include('footer.php')?>
	</div>
</body>
<script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>
<script type="text/javascript">
	function seldata(cid){
		// alert(cid);
		$.ajax({

				url:'stateajax.php',
				type:"GET",
				data:{
					'abc':cid	
				},
				success:function(res){
					var sData=res.stateData;
					var sd='';
					for(var data in sData){
						sd+='<option>'+sData[data]+'</option>'
					}
						$('#state').html(sd);

				}	

		});

	}
</script>
</html>