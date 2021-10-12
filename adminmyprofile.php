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
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 210px;
  background-color:  #0b1f5f;
}

li a {
  display: block;
  color: white;
  padding: 8px 16px;
  text-decoration: none;
	
}

li a.active {
  background-color:blue;
  color: white;
}

li a:hover:not(.active) {
  background-color:skyblue;
  color: white;
}
 
	
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;

  margin: auto;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 5.5s;
  animation-name: fade;
  animation-duration: 5.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
	  
	  
	  </style>
	  
  </head>
  <body style="background-color: grey; margin-top: -20px">
	
	   <?php
	session_start();
	include "DBconnection.php";
	if(!isset($_SESSION['email']))
	{
		header("location:adminloginindex.php");
	}
	else
	{
		$email = $_SESSION['email'];
		
		$result = mysqli_query($conn,"SELECT * FROM admins WHERE admin_email='" . $email."'");
		$row  = mysqli_fetch_array($result);
		
		if($row >0)
		{
		$name=$row['admin_name'];
		$pic =$row['admin_picture'];
		$password =$row['admin_password'];
		$year =$row['admin_year'];
		$birthday =$row['admin_birthday'];
		$NIC =$row['admin_NIC'];	
		$id = $_SESSION['id'];	
		}
	}
	  ?>
	  
	  <div class="div_content_admin">
		  
    <div class="header_admin">
	                    
<div style="margin-right:10px;vertical-align:bottom;">
    <table align="right" width="450">
        <tr><td>
        <div align="right" style="font-size:24px;padding-top:23px; ">
                 <a href="administratorindex.php" style="color: aliceblue">Home</a> &nbsp; 
                <a href="userLogoutadmin.php" style="color:blue">Logout</a>
			<hr>
			   <div align="right" style="font-size:20px; padding: 10px; color: aliceblue">
         Admin - <?php echo $name;?>
		<img class="img-rounded" style="border-radius: 50%" width="50px" height="50px" src="adminImage/<?php echo $pic;?>">		   
        </div>
        </td></tr>
 
   </table>
</div> 
	  </div>
		  
		   <div class="div_header_title_admin">
     <div align="left" style="font-size:20px; padding: 10px; color: aliceblue">
         Welcome    
			   
            </div>
		</div> 
			  
		  
		  
		  <div class="mainframe"  style="background-color:#0b1f5f" >
		  <div class="section1_admin" >
			    <ul>
				 <li><div><a href="adminmyprofile.php">View Profile</a></div></li>
    		    <li><div><a href="adminmanageadmins.php">Admins</a></div></li>
			 	<li><div><a href="admin_students.php">Students</a></div></li>
			  	<li><div><a href="admin_batch.php">Batches</a></div></li>
			 	<li><div><a href="admin_assignments.php">Assignments</a></div></li>
			   	<li><div><a href="admin_assignments_dates.php">Assignment Deadlines</a></div></li>
			    <li><div><a href="admin_course_details.php">Courses Details</a></div></li>
			 	<li><div><a href="admin_course_payments_details.php">Course Payments</a></div></li>
			    <li><div><a href="admin_students_fees.php">Student Fees</a></div></li>
			    <li><div><a href="admin_students_results.php">Student Results </a></div></li>
				<li><div><a href="admin_students_submittedassignments.php">Student Assignments</a></div></li>
				 
				 </ul>
			  
					</div>
			  
 
		  
		  
		  
		  <div class="section2_admin" >
	
			  
<h1 align="center" >Profile Details</h1>
<table class="table table-bordered"  style="margin-top: -65px; color: black; font-size: 20px; border:10px ">
  <thead>
    <tr>
 
      
    </tr>
  </thead>
  <tbody>
	   <tr>
      <th scope="row" style="height: 150px">Profile Picture</th>
      <td style="height: 50px">
		  <img width="150px" height="150px" src="adminImage/<?php echo $pic;?>">
		   </td>
      
    </tr>
	  
    <tr>
      <th scope="row">  ID</th>
      <td><?php echo $_SESSION['id'];?></td>
     
    </tr>
    <tr>
      <th scope="row">  Name</th>
      <td><?php echo $name; ?></td>
      
    </tr>
    <tr>
      <th scope="row">  Email</th>
      <td><?php echo $_SESSION['email']; ?></td>
      
    </tr>
	      <tr>
      <th scope="row">  password</th>
      <td id="myDIV"><?php echo $password; ?></td>
      <br>
	
    </tr>
	  
	   <tr>
      <th scope="row">Involed to the Collage in</th>
      <td ><?php echo $year; ?></td>
      <br>
	
    </tr>
	  
	   <tr>
      <th scope="row">Birthday</th>
      <td ><?php echo $birthday; ?></td>
      <br>
	
    </tr>
	  
	     <tr>
      <th scope="row">NIC Number</th>
      <td ><?php echo $NIC; ?></td>
      <br>
	
    </tr>
	  
	  
  </tbody>


</table>
	   
 
			  
			  
			  
			  
			  
			  
			  

		  </div>
 
		  
		  
		  </div>
		  
	   <div class="section3">
		  
		 <p  align="center" style="color:  white; padding-top: 30px; font-size:20px " >© 2021 MAY / GREENDALE COLLEGE</p>
 
		  </div>
		  
	  </div>

	  <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
	  
	  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>