<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inquiry Form Data Send in Mail</title>
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
             <div class="mb-3">                
                <label  class="form-label">User Name</label>
                <input type="type" class="form-control" placeholder="email@example.com" name="username" id="regex" value="" >
              </div>       
              <div class="mb-3">                
                <label  class="form-label">Email address</label>
                <input type="type" class="form-control" placeholder="email@example.com" name="username" id="regex" value="" >
              </div>
              <div class="mb-3">
                <label for="exampleDropdownFormPassword2" class="form-label" >Message</label>
                <textarea name="textarea" class="w-100"></textarea>
              </div>
              <button type="submit" class="btn btn-danger" name="save">Save</button> 
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
</html>