<?php
		// Delete function
		function deleteData($table,$key,$value, $nid,$con){

			$dele="DELETE from $table where $key in($value)";
			$exe=mysqli_query($con,$dele);
		}
	// Inser function
		function InsertData($table,$data,$con)
		{
			$ins.="INSERT INTO $table SET";
			foreach ($data as $key => $value) 
			{
					 $ins.=" $key='$value',";

			}					
			$ins=substr($ins, 0,-1);
			echo $ins;			
			mysqli_query($con,$ins);
		}
		
// update function
	function update($table,$data, $id, $nid,$con)
		{
			$upd.="UPDATE $table SET";
			foreach ($data as $key => $value) 
			{
					 $upd.=" $key='$value',";

			}
								
			$upd=substr($upd, 0,-1);
			$upd.="where $id='$nid'";			
			mysqli_query($con,$upd);
		}

	//Select function
	function select($table,$key, $nid,$con){
		$sel="SELECT * from $table where $key='$nid'";
		$exe=mysqli_query($con,$sel);
		$fetch=mysqli_fetch_assoc($exe);
		
	}
	
 ?>
