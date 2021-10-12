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
  <body style="background-color: grey; margin-top: -220px">
	  
	  
	   <?php
	session_start();
	include "DBconnection.php";  
	if(!isset($_SESSION['id']))
	{
		header("location:loginindex.php");
	} 
	else
	{
		$id = $_SESSION['id'];
		$bid = $_SESSION['bid'];
		
		$result = mysqli_query($conn,"SELECT * FROM students WHERE student_id='" . $id."'");
		$row  = mysqli_fetch_array($result);
		
		if($row >0)
		{
		 
		$fname =$row['student_fname'];
		$lname =$row['student_lname'];
		$semail =$row['email'];
		$sbirthday =$row['birthday'];
		$scontactnumber =$row['contactnumber'];		
		$spassword =$row['password'];
		 
		$spic =$row['picture'];	
		$sNIC =$row['NIC'];	
			
			
		$id = $_SESSION['id'];		
		$bid = $_SESSION['bid'];	
			
		
		$result = mysqli_query($conn,"SELECT * FROM student_batches WHERE batch_id ='" . $bid."'");
		$row  = mysqli_fetch_array($result);
		}
		
		if($row >0) 
		{	
		$batch_id =$row['batch_id'];
		$batch_name =$row['batch_name'];
		$batch_code =$row['batch_code'];
		$course_id =$row['course_id'];
		$assignment_id =$row['assignment_id'];
		$bid = $_SESSION['bid'];
			
			
		$result = mysqli_query($conn,"SELECT * FROM course_details WHERE course_id ='" . $course_id."'");
		$row  = mysqli_fetch_array($result);	
		}
		if($row >0) 
		{	
		$course_id =$row['course_id'];	
		$course_name =$row['course_name'];
		$module_1 =$row['module_1'];
		$module_2 =$row['module_2'];
		$module_3 =$row['module_3'];
		$module_4 =$row['module_4'];
		$module_5 =$row['module_5'];
		$module_6 =$row['module_6'];
		$module_7 =$row['module_7'];
		$module_8 =$row['module_8'];
		$module_9 =$row['module_9'];
		$module_10 =$row['module_10'];
			 
			
		 
		$bid = $_SESSION['bid'];	
			
			
			
		$result = mysqli_query($conn,"SELECT * FROM module_assignments WHERE assignmnt_id ='" . $assignment_id."'");
		$row  = mysqli_fetch_array($result);	
		}
		if($row >0) 
		{	
		 
	    $moduleassignment_1 =$row['moduleassignment_1'];
		$moduleassignment_2 =$row['moduleassignment_2'];
		$moduleassignment_3 =$row['moduleassignment_3'];
		$moduleassignment_4 =$row['moduleassignment_4'];
		$moduleassignment_5 =$row['moduleassignment_5'];
		$moduleassignment_6 =$row['moduleassignment_6'];
		$moduleassignment_7 =$row['moduleassignment_7'];
		$moduleassignment_8 =$row['moduleassignment_8'];
		$moduleassignment_9 =$row['moduleassignment_9'];
		$moduleassignment_10 =$row['moduleassignment_10'];
		
		 	
		
			$module_1_issued =$row['module_1_issued'];
			$module_2_issued =$row['module_2_issued'];
			$module_3_issued =$row['module_3_issued'];
			$module_4_issued =$row['module_4_issued'];
			$module_5_issued =$row['module_5_issued'];
			$module_6_issued =$row['module_6_issued'];
			$module_7_issued =$row['module_7_issued'];
			$module_8_issued =$row['module_8_issued'];
			$module_9_issued =$row['module_9_issued'];
			$module_10_issued =$row['module_10_issued'];
			
			$module_1_deadl =$row['module_1_deadl'];
			$module_2_deadl =$row['module_2_deadl'];
			$module_3_deadl =$row['module_3_deadl'];
			$module_4_deadl =$row['module_4_deadl'];
			$module_5_deadl =$row['module_5_deadl'];
			$module_6_deadl =$row['module_6_deadl'];
			$module_7_deadl =$row['module_7_deadl'];
			$module_8_deadl =$row['module_8_deadl'];
			$module_9_deadl =$row['module_9_deadl'];
			$module_10_deadl =$row['module_10_deadl'];
		 
		$bid = $_SESSION['bid'];		
			
			
			
		}
	}
	  
	  ?>
	  <?php
	include "studentassignmentuploadquerys.php"; 
?>  
 
 
 
	  
	  <div class="div_content_admin">
		 
    <div class="header_admin">
	                    
<div style="margin-right:10px;vertical-align:bottom;">
    <table align="right" width="450">
        <tr><td>
        <div align="right" style="font-size:24px;padding-top:23px; ">
                 <a href="studentindex.php" style="color: aliceblue">Home</a> &nbsp; 
                <a href="userLogout.php" style="color:blue">Logout</a>
			<hr>
			   <div align="right" style="font-size:20px; padding: 10px; color: aliceblue">
         Student - <?php echo $fname;?>  
				   				    <img class="img-rounded" style="border-radius: 50%" width="50px" height="50px" src="studentImage/<?php echo $spic;?>">	

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
			  
		  
		  
		  <div class="mainframe"  style="background-color:#0b1f5f">
		  <div class="section1_admin" >
    		       <ul>
    		      <li><div><a href="studentmyprofile.php">My Profile</a></div></li>
			 	  <li><div><a href="studentresultsprediction.php"> Result Predictions</a></div></li>
			      <li><div><a href="studentviewpayments.php">My Payments</a></div></li>
			      <li><div><a href="studentviewresults.php">My Results</a></div></li>
			      <li><div><a href="studentuploadassignments.php">Upload Assignments</a></div></li>
			      <li><div><a href="studentdownloadassignments.php">Download Assignments</a></div></li>
				  
			  </ul>
			  </ul>


  

</div>
		  
 	  
		  <div class="section2_admin" align="center">
	
<strong></strong>		  
<h2 align="center"> Upload Your Assignments</h2>
			  <br>
			  
<table class="table table-bordered" align="center"  style="margin-top: -20px; color: black; font-size: 14px; border:10px ">	
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Issued Date</th>
      <th scope="col">Deadline Date</th>
	<th scope="col"> Browse Assignment</th>
      <th scope="col">Submit Your Assignment</th>
    </tr>
  </thead>
  <tbody>  
    
    <tr>
       <th scope="row"><?php echo $module_1 ; ?></th>
	 	<th scope="row"><?php echo $module_1_issued ; ?></th>
		 <th scope="row"><?php echo $module_1_deadl ; ?></th>
		<form method="POST" enctype="multipart/form-data"  >	
	  	<th> <input type="file" name="assignment_name"  accept="application/pdf"></th> 
		<th><button type="submit" name="submit1" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i></button></th>
	</form>	
    </tr>
	 <th scope="row"><?php echo $module_2; ?></th>
			  <th scope="row"><?php echo $module_2_issued ; ?></th>
		 <th scope="row"><?php echo $module_2_deadl ; ?></th>
	<form method="POST" enctype="multipart/form-data"  >		
	  <th> <input type="file" name="assignment_name"  accept="application/pdf"></th>
		<th><button type="submit" name="submit2" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></button></th>
	</form>		
    </tr>
	    <th scope="row"><?php echo $module_3 ; ?></th>
		<th scope="row"><?php echo $module_3_issued ; ?></th>
		 <th scope="row"><?php echo $module_3_deadl ; ?></th>
	<form method="POST" enctype="multipart/form-data"  >		
	  <th> <input type="file" name="assignment_name"  accept="application/pdf"></th>
		<th><button type="submit" name="submit3" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></button></th>
		</form>		
    </tr>
	 <tr>
       <th scope="row"><?php echo $module_4 ; ?></th>
		 <th scope="row"><?php echo $module_4_issued ; ?></th>
		 <th scope="row"><?php echo $module_4_deadl ; ?></th>
	<form method="POST" enctype="multipart/form-data"  >		
	  <th> <input type="file" name="assignment_name"  accept="application/pdf"></th>
		<th><button type="submit" name="submit4" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></button></th>
		</form>		
    </tr>
	 <tr>
       <th scope="row"><?php echo $module_5 ; ?></th>
		 <th scope="row"><?php echo $module_5_issued ; ?></th>
		 <th scope="row"><?php echo $module_5_issued ; ?></th>
	<form method="POST" enctype="multipart/form-data"  >		
	  <th> <input type="file" name="assignment_name"  accept="application/pdf"></th>
		<th><button type="submit" name="submit5" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></button></th>
		</form>		
    </tr>
	   <tr>
        <th scope="row"><?php echo $module_6; ?></th>
		   <th scope="row"><?php echo $module_6_issued ; ?></th>
		 <th scope="row"><?php echo $module_6_deadl ; ?></th>
	<form method="POST" enctype="multipart/form-data"  >		
	  <th> <input type="file" name="assignment_name"  accept="application/pdf"></th>
		<th><button type="submit" name="submit6" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></button></th></td>
		</form>		
    </tr>
	  <tr>
      <th scope="row"><?php echo $module_7 ; ?></th>
		  <th scope="row"><?php echo $module_7_issued ; ?></th>
		 <th scope="row"><?php echo $module_7_deadl ; ?></th>
	<form method="POST" enctype="multipart/form-data"  >		
	  <th> <input type="file" name="assignment_name"  accept="application/pdf"></th>
		<th><button type="submit" name="submit7" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></button></th>
		</form>		
    </tr>
	  <tr>
      <th scope="row"><?php echo $module_8; ?></th>
		  <th scope="row"><?php echo $module_8_issued ; ?></th>
		 <th scope="row"><?php echo $module_8_deadl ; ?></th>
	<form method="POST" enctype="multipart/form-data"  >		
	  <th> <input type="file" name="assignment_name"  accept="application/pdf"></th>
		<th><button type="submit" name="submit8" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></button></th>
		</form>		
    </tr>
	  <tr>
      <th scope="row"><?php echo $module_9 ; ?></th>
		  <th scope="row"><?php echo $module_9_issued ; ?></th>
		 <th scope="row"><?php echo $module_9_deadl ; ?></th>
	<form method="POST" enctype="multipart/form-data"  >		
	  <th> <input type="file" name="assignment_name"  accept="application/pdf"></th>
		<th><button type="submit" name="submit9" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></button></th>
		</form>		
    </tr>
	  <tr>
       <th scope="row"><?php echo $module_10 ; ?></th>
		  <th scope="row"><?php echo $module_10_issued ; ?></th>
		 <th scope="row"><?php echo $module_10_deadl ; ?></th>
	<form method="POST" enctype="multipart/form-data"  >		
	  <th> <input type="file" name="assignment_name"  accept="application/pdf"></th>
		<th><button type="submit" name="submit10" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></button></th>
		</form>		
    </tr>	   
  </tbody>
</table>
			  
			  
	 
			  
			  
			  
			  
			  
			  

		  </div>
 
		  
		  
		  </div>
		  <div class="section3">
		  
		 <p  align="center" style="color:  white; padding-top: 30px; font-size:20px " >© 2021 MAY / GREENDALE University</p>
 
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

<script>
onclick="this.disabled=true;this.value='Sending, please wait...';this.form.submit();"



</script>
	  
	  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>







