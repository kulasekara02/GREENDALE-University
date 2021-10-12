<?php error_reporting(0); ?>
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
		
		
		if($row >0)
		{
		}
		}
	  
	  ?>
	  
	  
<?php	
$mysqli = new mysqli('localhost','root','','greendale') or die(mysqli_error($mysqli)); 
	  
if(isset($_POST['submit'])){

	
$search = $mysqli->real_escape_string($_POST['search']);
	
	 $resultSet = $mysqli->query("SELECT student_batches.batch_code AS batchCode, students_assignments.uploaded_assignment_id AS uploaded_assignment_id, students_assignments.student_id AS student_id, students_assignments.student_name AS student_name, students_assignments.batch_id AS batchid, students_assignments.batch AS batch, students_assignments.module_name AS module_name, students_assignments.assignment_name AS assignment_name, students_assignments.date AS date
	 
	 FROM student_batches,students_assignments
	 WHERE student_batches.batch_code = '$search' AND 
	 students_assignments.batch_id = student_batches.batch_id") ; 
					
}
	  
if(isset($_POST['submit2'])){

	
$search2 = $mysqli->real_escape_string($_POST['search2']);
	
	 $resultSet = $mysqli->query("SELECT students.student_id AS studentid, students_assignments.uploaded_assignment_id AS uploaded_assignment_id, students_assignments.student_id AS student_id, students_assignments.student_name AS student_name, students_assignments.batch_id AS batchid, students_assignments.batch AS batch, students_assignments.module_name AS module_name, students_assignments.assignment_name AS assignment_name, students_assignments.date AS date, students_assignments.batch_code AS batchCode
	 
	 FROM students,students_assignments
	 WHERE students.student_id = '$search2' AND 
	 students_assignments.student_id = students.student_id" ) ; 
					
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
		<img class="img-rounded" style="border-radius: 50%" width="50px" height="50px" src="adminImage/<?php echo $pic;?>">		           </div>
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
			    <li><div><a href="admin_students_results.php">Student Results</a></div></li>
				<li><div><a href="admin_students_submittedassignments.php">Student Assignments</a></div></li> 
				 
				 </ul>
			  
					</div>
			  
 
		  
		  
		  
		  <div class="section2_admin" style="overflow-x: scroll" align="center">
			  
			  			  <h1 align="center">Students Assignments </h1><hr>
		
		<?php
	$mysqli = new mysqli('localhost','root','','greendale') or die(mysqli_error($mysqli)); 
	
	 $resultSet2 = $mysqli->query("SELECT batch_code FROM student_batches  "); 
	   
		  
	?>	
   <div align="center"> 	
  <form method="post" class="form">
	  
<select name="search" class="form-control-static">
	<option>Batch Code</option>
	<?php While($rows = $resultSet2->fetch_assoc ()): ?>
	<option><?php echo $rows['batch_code']; ;?></option>
	<?php endwhile ;?>	
</select> 
	  
<input type="submit" class="btn btn-primary"   value="search" name="submit" class="form-control-static">
</form>
		
 	</div>
	 
	   <div align="center"> 	
   
 
   <form method="post" class="form">
	  
<input name="search2" placeholder="Student id" class="form-control-static">
  
<input type="submit"  class="btn btn-primary"    value="search" name="submit2" class="form-control-static">
</form>
		</div>	  
 
<table class="table table-bordered  "  style=" color: black; font-size: 16px; border:10px ">
  <thead>
    <tr>
	  <th scope="col">Batch Code</th>
      <th scope="col">Submitted Assignment ID</th>
	  <th scope="col">Student ID</th>
      <th scope="col">Batch ID</th>
	  <th scope="col">Batch</th>
	  <th scope="col">Student</th>
      <th scope="col">Module Name</th>
	  <th scope="col">Assignment Name</th>
	  <th scope="col">Date</th>
	 
    </tr>
  </thead>
  <tbody>
<?php
	  while($rows = $resultSet->fetch_assoc()):
		
	{
		$student_batches = $rows['batchCode'];
		$uploaded_assignment_id = $rows['uploaded_assignment_id'];
		$student_id = $rows['student_id'];
		$batchid = $rows['batchid'];
		$batch = $rows['batch'];
		$student_name = $rows['student_name'];
		$module_name = $rows['module_name'];
		$assignment_name = $rows['assignment_name'];
		$date = $rows['date'];
	}	 
	  		
	 
	  ?>
	  
    <tr>
		 <td><?php echo $student_batches ?></td>
		 <td><?php echo $uploaded_assignment_id ?></td>
		 <td><?php echo $student_id ?></td>
		 <td><?php echo $batchid ?></td>
		 <td><?php echo $batch ?></td>
		 <td><?php echo $student_name ?></td>
		 <td><?php echo $module_name ?></td>
		<td><?php echo  $assignment_name ?></td>
		<td><?php echo  $date ?></td>
    </tr>  
	  
  </tbody>
<?php endwhile; ?>

</table>
	<?php
 	 function pre_r( $array ){
 	 	echo '<pre>';
 	 	print_r($array);
 	 	echo '</pre>';
 	 }
 	 ?>
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