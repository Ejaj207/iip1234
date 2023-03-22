<?php 
      session_start();

    //  if($_SESSION['AdminId']!=""){
    //   header("location:dashboard.php");
    // }
      include("connection.php");
      if (isset($_POST['login']))  
      {
          $username=$_POST['username'];
          $password=$_POST['password'];
          $sel="SELECT * from admin where admin_username ='$username' and admin_password ='$password'";
           $exe=mysqli_query($conn,$sel);
           $total=mysqli_num_rows($exe);
          if($total==1)
        {
            if ($_POST['rem']==1) {
              setcookie("USERNAME",$username,time()+60);
              setcookie("PASSWORD",$password,time()+60);
            }
            $fetch=mysqli_fetch_assoc($exe);
            $_SESSION['AdminId']=$fetch['admin_id'];
            header("location:dashboard.php");
        }
        
      else
        {
            $error="Enter your valid username or password";
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
  <link rel="stylesheet" type="text/css" href="admin_panel/style.css">
</head>
<body>
		<div class="container-fluid bg-warning" style="height: 100vh;">
      <div class="container login-form pt-5"> 
        <div class="row justify-content-center">
          <div class="col-lg-4 border border-dark p-3 bg-primary">
            <form method="post">  

            <center><h2><b>ADMIN LOGIN</b></h2></center>    
            <div class="error"></div>
             <div class="text-danger"><?php echo $error; ?></div>       
              <div class="mb-3">
                
                <label  class="form-label">Email address</label>
                <input type="type" class="form-control" placeholder="email@example.com" name="username" id="regex" value="<?php echo $_COOKIE['USERNAME']; ?>" >
              </div>
              <div class="mb-3">
                <label for="exampleDropdownFormPassword2" class="form-label" >Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" id="passregex" value="<?php echo $_COOKIE['PASSWORD']; ?>">
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="rem" value="1">
                  <label class="form-check-label" for="dropdownCheck2">
                    Remember me
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-danger" name="login">Sign in</button> 
            </form>
          </div>
        </div>
      </div>  
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.6.1.slim.min.js"></script>
<script type="text/javascript">
  $("#regex").keyup(function(){

     var u=$("#regex").val();
     var r=/^[a-zA-Z ]+$/;
   if(r.test(u)==false){
  $("#regex").css('border',"1px solid red");
  $(".error").html("Please Enter valid data");
  $(".error").css('color',"red");
   $(".error").css('fontSize',"20px");
  }
     else{
     $("#rejex").css('border',"1px solid black");
      $(".error").html("");
        }
 })
  
    $("#passregex").keyup(function(){
        var pass=/^
                  (?=.*\d) /*should contain at least one digit*/
                  (?=.*[a-z]) /*should contain at lease one Lower case */
                  (?=.*[A-Z]) /*should contain at lease one Upper case */
                  [a-zA-Z0-9]{8,}/*should contain at least 8 from the mentioned characters*/
                 +$/;

    })

</script>
</html>