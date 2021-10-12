<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>Greendale College</title>
	  <link rel="icon"  type="image/png" href="photos/header.png">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/style.css" rel="stylesheet">
	  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	  <style>
	
        
#login .container #login-row #login-column #login-box {
  margin-top: 400px;
  max-width: 600px;
  height:550px;
  color: white;
	 
	align: center;
	 
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 10px;
  text-align: left;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
 margin-top: 15px;
text-align: right;
	color: aliceblue;

}
        
 
	
	</style>

	  
  </head>
	
  <body style="background-color: grey">
	
	
	
	<?php
session_start();
$message="";

if(isset($_POST['submit'])){ 

if(count($_POST)>0) {
 include 'DBconnection.php';
	
 
 
$result = mysqli_query($conn,"SELECT * FROM admins WHERE admin_email='" . $_POST["username"] . "' and admin_password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);

if(is_array($row)) {
$_SESSION["id"] = $row['admin_id'];
$_SESSION["email"] = $row['admin_email'];	
$_SESSION["name"] = $row['admin_name'];
$_SESSION["pic"] = $row['admin_picture'];
	
} else {
$message = "Invalid Admin User Name or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:administratorindex.php");
}

}
	?>  
	  
 
	 
 <div class="div_content_adminlogin">  
		  
	<div class="login_index">
		   
		<div id="login">
  		  <div class="container">
            <div id="login-row" align="center">
                <div id="login-column" align="center">
                    <div id="login-box" align="center">
                        
                        
                        <form id="login-form" class="form" method="post">
                            
                          
                            
                            <div class="form-group">
                                <label for="username" class="col-sm-3 control-label">Email</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="password" class="col-sm-3 control-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <hr>
                            <div class="form-group">
								
                                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Log In">
								<div class="alert-danger"><h4><?php if($message!="") { echo $message; } ?></h4>
								 
                            </div>
                            	 
                            
                         
                        </form>
							<button class="btn btn-danger btn-block" ><a style="color: white" href="index.php">Back To Main Menu</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div> 
		  
		  
	  </div>


	  
	  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>