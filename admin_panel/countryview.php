
							<div class="col-lg-6">
								<table class="table">
								  <thead>
								    <tr>							      
								      <th scope="col">Sr No.</th>
								      <th scope="col">Name</th>
								      <th scope="col">Status</th>			     			      
								    </tr>
								  </thead>
								  <?php
								  //Paging Concept 
								  	$select="SELECT * from add_country";
								  	$execute=mysqli_query($conn,$select);
								  	while ($fetch=mysqli_fetch_assoc($execute)) {
								  		// echo "<pre>";
								  		// print_r($fetch); // to check array data
								  		// echo "</pre>";
								  ?>
								  <tbody>
								    <tr class="table-primary">
								      <td><?php echo $fetch['country_id']; ?></td>
								      <td><?php echo $fetch['country_title']; ?></td>
								      <td>
								      	<?php 

								      if($fetch['country_status']==1)

								      	{?>

								      	<button class="btn btn-success">Active</button>

								      <?php }

								      else

								      	{?>

								      	<button class="btn btn-danger">Deactive</button>

								     <?php 

								 		} 
								  		?>								  		
								  	</td>
								    <td>								      
								      	<a onclick="deletedata(<?php echo $fetch['country_id'] ?>)" class="btn btn-danger">Delete</a>
								      </td>
								      								      
								    </tr>
								    	
								   <?php } ?> 
								    
								</tbody>
						</table>
						
					
						
