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
			
			
			
		}
	}
	  
	
 
	  
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
	
			  
			  
<h1 align="center" >Profile Details</h1>
<table class="table table-bordered" align="center"  style="margin-top: -100px; color: black; font-size: 14px; border:10px ">
  <thead>
    <tr>
     
      
    </tr>
  </thead>
  <tbody>
	   <tr>
		   <td></td>
      <th scope="row"  >   <img width="150px" height="150px" src="studentImage/<?php echo $spic;?>"></th>
     
      
    </tr>
	        <tr>
      <th scope="row">Student ID</th>
      <td ><?php echo $batch_code; ?>/<?php echo $id; ?></td>
      <br>
	
    </tr>
	    <tr>
      <th scope="row">Course</th>
      <td ><?php echo $course_name; ?></td>
      <br>
	
    </tr>
	    <tr>
      <th scope="row">Batch</th>
      <td ><?php echo $batch_name; ?>(<?php echo $batch_code; ?>)</td>
      <br>
	
    </tr>
	  
    <tr>
      <th scope="row">First Name</th>
      <td><?php echo $_SESSION['name'];?></td>
     
    </tr>
    <tr>
      <th scope="row">Last Name</th>
      <td><?php echo $lname; ?></td>
      
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td><?php echo $semail; ?></td>
      
    </tr>
	 
	  
	   <tr>
      <th scope="row">Birthday</th>
      <td ><?php echo $sbirthday; ?></td>
      <br>
	
    </tr>
	  
	   <tr>
      <th scope="row">Contact Number</th>
      <td ><?php echo $scontactnumber; ?></td>
      <br>
	
    </tr>
	  
	     <tr>
      <th scope="row">NIC</th>
      <td ><?php echo $sNIC; ?></td>
      <br>
	
    </tr>
	 
	      <tr>
      <th scope="row">Password</th>
      <td  ><?php echo $spassword; ?></td>
      <br>
	  
  </tbody>


</table>
			  
	  
			  

 	  
			  
			  
			  
			  
			  
			  
			  

		  </div>
 
		  
		  
		  </div>
		  
	   <div class="section3">
		  
		 <p  align="center" style="color:  white; padding-top: 30px; font-size:20px " >© 2021 MAY / GREENDALE COLLEGE</p>
 
		  </div>
		    
	  </div>

 
	  
	  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>        