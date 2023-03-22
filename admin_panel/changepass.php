  <?php
      include("connection.php");
      include("session.php");
      $id= $_SESSION['AdminId'];
      if (isset($_POST['changepass'])) {
        $oldpass=$_POST['oldpass'];
        $newpass=$_POST['newpass'];
        $confpass=$_POST['confpass'];
        $sel="SELECT * from admin where admin_password='$oldpass' and admin_id='$id'";
        $exe=mysqli_query($conn,$sel);
        $total=mysqli_num_rows($exe);
        if($total==1){// Old password check
          if ($newpass==$confpass) { //check new and confirm password match check
            $upd="UPDATE  admin set admin_password='$newpass' where admin_id='$id'";
              mysqli_query($conn,$upd);

              $msg="Password Change Successfully";

          }
          else{
                $error="Please match New Password and Confirm Password";
          }

        }
        else{
              $error= "Invalid Old Password";
        }
      }

   ?>
  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>
<body>
		<div class="container-fluid bg-warning" style="font-size: 18px; font-family: sans-serif; font-weight: bold;">
      <div class="container login-form">
        <?php include("header.php"); ?>
        <div class="row justify-content-center">
          <div class="col-lg-4 border border-info p-3 bg-primary ">
            <form method="post" action="">
            <div class="text-danger">
              <?php echo $error; ?>
            </div>  
            <div class="text-success">
              <?php echo $msg; ?>
            </div>      
            <center><h2 class="text-light"><b>CHANGE PASSWORD</b></h2></center>       
              <div class="mb-3">
                <label for="exampleDropdownFormEmail2" class="form-label text-dark">Old Password</label>
                <input type="text" class="form-control" id="exampleDropdownFormEmail2" name="oldpass">
              </div>
              <div class="mb-3">
                <label for="exampleDropdownFormPassword2" class="form-label text-dark">New Password</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword2" name="newpass">
              </div>
              <div class="mb-3">
                <label for="exampleDropdownFormPassword2" class="form-label text-dark">Confirm Password</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword2" name="confpass">
              </div>              
              <div class="">
              <div class="d-grid gap-2  justify-content-lg-end">
              <button class="btn btn-danger me-lg-2 mb-5" type="submit" name="changepass">Change Password</button>

             
            </div>
            </form>
          </div>
        </div>
      </div>  
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>