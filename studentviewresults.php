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
	if(!isset($_SESSION['name']))
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
		$id = $_SESSION['id'];	
			
		$result = mysqli_query($conn,"SELECT * FROM students_results WHERE student_id ='" . $id."'");
		$row  = mysqli_fetch_array($result);	
		}
		if($row >0) 
		{	
		$subjectoneresults =$row['subject1_results'];
		$subjecttworesults =$row['subject2_results'];
		$subjectthreeresults =$row['subject3_results'];
		$subjectfourresults =$row['subject4_results'];
		$subjectfiveresults =$row['subject5_results'];
		$subjectsixresults =$row['subject6_results'];
		$subjectsevenresults =$row['subject7_results'];
		$subjecteightresults =$row['subject8_results'];
		$subjectnineresults =$row['subject9_results'];
		$subjecttenresults =$row['subject10_results'];	
		$status =$row['final__status'];	

		$bid = $_SESSION['bid'];	
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
	
			  
<h2 align="center">Student Results</h2>
<table class="table table-bordered" align="center"  style="margin-top: -140px; color: black; font-size: 14px; border:10px ">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
	  
	  
    <tr>
      <th scope="row">Student Name</th>
      <td><?php echo $_SESSION['name'];?></td>
     
    </tr>
    <tr>
      <th scope="row">Course</th>
      <td><?php echo $course_name; ?>(<?php echo $batch_code; ?>)</td>
      
    </tr>
    <tr>
       <th scope="row"><?php echo $module_1 ; ?></th>
      <td><?php echo $subjectoneresults ; ?></td>
      
    </tr>
	      <tr>
      <th scope="row"><?php echo $module_2 ; ?></th>
      <td ><?php echo $subjecttworesults ; ?></td>
      <br>
	
    </tr>
	  
	   <tr>
       <th scope="row"><?php echo $module_3 ; ?></th>
      <td ><?php echo $subjectthreeresults ; ?></td>
      <br>
	
    </tr>
	  
	  <tr>
       <th scope="row"><?php echo $module_4 ; ?></th>
      <td> <?php echo $subjectfourresults ; ?></td>
      
    </tr>
	      <tr>
      <th scope="row"><?php echo $module_5 ; ?></th>
      <td ><?php echo $subjectfiveresults ; ?> </td>
      <br>
	
    </tr>
	  
	   <tr>
       <th scope="row"><?php echo $module_6; ?></th>
      <td > <?php echo $subjectsixresults ; ?> </td>
      <br>
	
    </tr>
	  
	  <tr>
      <th scope="row"> <?php echo $module_7; ?> </th>
      <td> <?php echo $subjectsevenresults ; ?> </td>
      
    </tr>
	      <tr>
      <th scope="row"><?php echo $module_8  ; ?></th>
      <td > <?php echo $subjecteightresults ; ?> </td>
      <br>
	
    </tr>
	  
	   <tr>
      <th scope="row"><?php echo $module_9 ; ?></th>
      <td > <?php echo $subjectnineresults ; ?> </td>
      <br>
	
    </tr>
	  
	  <tr>
      <th scope="row"><?php echo $module_10 ; ?></th>
      <td ><?php echo $subjecttenresults ; ?> </td>
      <br>
	
    </tr>
	  
	   <tr>
      <th scope="row">Results Status</th>
      <td > <?php echo $status ; ?></td>
      <br>
	
    </tr>
	  
	  
	  
	  
	 
	  
	   
  </tbody>


</table>
			  
 
			  
			  
			  
			  
			  
			  

		  </div>
 
		  
		  
		  </div>
		  
		 	   <div class="section3">
		  
		 <p  align="center" style="color:  white; padding-top: 30px; font-size:20px " >© 2021 MAY / GREENDALE University</p>
 
		  </div>
	  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>