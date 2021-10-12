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

	
	
	 $resultSet = $mysqli->query("SELECT student_batches.batch_code AS batchcode, students_results.student_id AS student_id,
	 students_results.batch_id AS batch_id,
	 students_results.subject1_results AS subject1_results,
	 students_results.subject2_results AS subject2_results,
	 students_results.subject3_results AS subject3_results,
	 students_results.subject4_results AS subject4_results,
	 students_results.subject5_results AS subject5_results,
	 students_results.subject6_results AS subject6_results,
	 students_results.subject7_results AS subject7_results,
	 students_results.subject8_results AS subject8_results,
	 students_results.subject9_results AS subject9_results,
	 students_results.subject10_results AS subject10_results,
	 students_results.final__status AS final__status,
	 students_results.studentresult_id	 AS studentresult_id	
	  
	 
	 
	 
	 FROM student_batches,students_results
	 WHERE student_batches.batch_code = '$search' AND
	 students_results.batch_id = student_batches.batch_id "); 
	
 
					
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
			    <li><div><a href="admin_students_results.php">Student Results</a></div></li>
				<li><div><a href="admin_students_submittedassignments.php">Student Assignments</a></div></li> 
				 
				 </ul>
			  
					</div>
			  
 
		  
		  
		  
		  <div class="section2_admin" style="overflow-x: scroll" align="center">
			  
			  			  <h1 align="center">Student Results  </h1><hr>
	<!-- update model --> 		  
	<div align="left" class="col-md-12" style="margin-top: 5px" >	
		
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Results Details </h5>
		<form method="post" action="admin_student_update_results.php"  enctype="multipart/form-data"> 	
			
			
       <button type="button" class="close" data-dismiss="modal"> close</button>
		<input type="hidden" name="" value=""> 
      </div> 
	 
      <div class="modal-body">
		  
    <input type="hidden" name="update_id" id="update_id" class="form-control"   required/>
	 
		  
    <input type="text" name="batchcode" id="batchcode" class="form-control" placeholder="Batch Code" readonly/>
  	<br>
     <input type="" name="studentresult_id" id="studentresult_id" class="form-control" placeholder="result ID" readonly/>
	<br> 
		  <label scope="col">Student ID</label>
		 
		 
     <input type="text" name="student_id" id="student_id" class="form-control" placeholder="Student ID" readonly/>
    <br>
		  <label>Batch ID</label>
     <input type="text" name="batch_id" id="batch_id" class="form-control" placeholder="Batch ID"  readonly/>
    <br>
		<lable>Module : 1</lable>  
     <input type="text" name="subject1_results" id="subject1_results" class="form-control"   />
    <br> 
		<lable>Module : 2</lable>  
     <input type="text" name="subject2_results" id="subject2_results" class="form-control"   />
	<br> 
		  <lable>Module : 3</lable>  
     <input type="text" name="subject3_results" id="subject3_results" class="form-control"   />
	<br>
		  <lable>Module : 4</lable>  
     <input type="text" name="subject4_results" id="subject4_results" class="form-control"  />
    <br>
		  <lable>Module : 5</lable>  
     <input type="text" name="subject5_results" id="subject5_results"  class="form-control"   />
		<br>  
		  
			<lable>Module : 6</lable>  
     <input type="text" name="subject6_results" id="subject6_results" class="form-control"   />
    <br> 
		<lable>Module : 7</lable>  
     <input type="text" name="subject7_results" id="subject7_results" class="form-control"   />
	<br> 
		  <lable>Module : 8</lable>  
     <input type="text" name="subject8_results" id="subject8_results" class="form-control"  />
	<br>
		  <lable>Module : 9</lable>  
     <input type="text" name="subject9_results" id="subject9_results" class="form-control"   />
    <br>
		  <lable>Module : 10</lable>  
     <input type="text" name="subject10_results" id="subject10_results"  class="form-control"    />	  
    <br> 
		  <lable>'Course completed' or 'Course not completed' :</lable>  
     <input type="text" name="final__status" id="final__status" class="form-control" placeholder="Final Status" />
	  
      </div>
      <div class="modal-footer">
                            	
     <button type="submit" value="submit" id="update_id" name="updatedata" class="btn btn-info"> Update </button>                 
       <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>                  
      </div>
		</form>	
    </div>
  </div>
</div>	
		<?php
	$mysqli = new mysqli('localhost','root','','greendale') or die(mysqli_error($mysqli)); 
	
	 $resultSet2 = $mysqli->query("SELECT batch_code FROM student_batches  ");  
	?>	
  
		<div align="center">
  <form method="post" class="form">
	  
<select name="search" class="form-control-static">
	<option>Batch</option>
	<?php While($rows = $resultSet2->fetch_assoc ()): ?>
	<option><?php echo $rows['batch_code']; ;?></option>
	<?php endwhile ;?>
</select> 
	  
<input type="submit" class="btn btn-primary"   value="search" name="submit" class="form-control-static">
</form>
	
   </div>
	  
	 
	  
	  
	  
 
	  
	 
	
	
	
	
	
	
	
    </div>		  
<table class="table table-bordered  "  style=" color: black; font-size: 16px; border:10px ">
  <thead>
    <tr>
		<th scope="col">Batch Code</th>
		<th scope="col">Result ID</th>
		<th scope="col">Student ID</th>
		 
		<th scope="col">Batch ID</th>
         
        <th class="hidden" scope="col">Module 1  </th>
	  	<th class="hidden" scope="col">Module 2  </th>
        <th class="hidden" scope="col">Module 3  </th>
		<th class="hidden" scope="col">Module 4  </th>
        <th  class="hidden" scope="col">Module 5  </th>
		
		<th class="hidden" scope="col">Module 6 </th>
	  	<th class="hidden" scope="col">Module 7  </th>
        <th class="hidden" scope="col">Module 8  </th>
		<th class="hidden" scope="col">Module 9  </th>
        <th class="hidden" scope="col">Module 10  </th>
		
		<th scope="col">Final Status</th>
	<th scope="col" >View/Add</th>
	<th class="hidden" scope="col" >Delete</th>	
	
 	
		
    </tr>
  </thead> 
  <tbody>

		<?php
		While($rows = $resultSet->fetch_assoc ()):
{	
	$batchcode = $rows['batchcode'];
	$student_id = $rows['student_id'];
	$batch_id = $rows['batch_id'];
	$subject1_results = $rows['subject1_results'];
	$subject2_results = $rows['subject2_results'];
	$subject3_results = $rows['subject3_results'];
	$subject4_results = $rows['subject4_results'];
	$subject5_results = $rows['subject5_results'];
	$subject6_results = $rows['subject6_results'];
	$subject7_results = $rows['subject7_results'];
	$subject8_results = $rows['subject8_results'];
	$subject9_results = $rows['subject9_results'];
	$subject10_results = $rows['subject10_results'];
	$final__status = $rows['final__status'];
	$studentresult_id = $rows['studentresult_id'];
	 
}	 
	  
	 ?>
	      <tr>
		 
		<td><?php echo $batchcode ?></td>
			  <td><?php echo $studentresult_id ?></td>	
		<td><?php echo $student_id ?></td>	  
		   
		<td><?php echo $batch_id ?></td>
		<td class="hidden"><?php echo $subject1_results ?></td>
		<td class="hidden"><?php echo $subject2_results ?></td>
		<td class="hidden"><?php echo $subject3_results ?></td>
		<td class="hidden"><?php echo $subject4_results ?></td>
		<td class="hidden"><?php echo $subject5_results ?></td>
		<td class="hidden"><?php echo $subject6_results ?></td>
		<td class="hidden"><?php echo $subject7_results ?></td>
		<td class="hidden"><?php echo $subject8_results ?></td>
		<td class="hidden"><?php echo $subject9_results ?></td>
	    <td  class="hidden"><?php echo $subject10_results ?></td>	  
		<td><?php echo $final__status ?></td>	  
		 <td><button type="button" class="btn btn-success btn-xs editbtn"><i class="fa fa-list" aria-hidden="true"></i></button></td>
 		 <td class="hidden"><a   href="admin_student_update_results.php?delete= <?php echo $studentresult_id; ?> " class="btn btn-danger btn-xs"><i class="fa fa-trash"></a></td>	  
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


<script>
		$(document).ready(function() {
			
			$('.editbtn').on('click', function(){				 
			$('#editmodal').modal('show');				 
			$tr = $(this).closest('tr');	
			var data = $tr.children("td").map(function(){
				return $(this).text();
			}).get();	
				
			console.log(data);
				$('#update_id').val(data[0]);
				$('#batchcode').val(data[0]);
				$('#studentresult_id').val(data[1]);
				$('#student_id').val(data[2]);
				$('#batch_id').val(data[3]);
				$('#subject1_results').val(data[4]);
				$('#subject2_results').val(data[5]);
				$('#subject3_results').val(data[6]);
				$('#subject4_results').val(data[7]);
				$('#subject5_results').val(data[8]);
				$('#subject6_results').val(data[9]);
				$('#subject7_results').val(data[10]);
				$('#subject8_results').val(data[11]);
				$('#subject9_results').val(data[12]);
				$('#subject10_results').val(data[13]);
				$('#final__status').val(data[14]);
				 
				
		});
	
	});
	
	
	 


</script>

  </body>
</html>