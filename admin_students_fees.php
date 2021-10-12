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

	
	
	 $resultSet = $mysqli->query("SELECT student_batches.batch_code AS batchcode, students_payments.student_id AS student_id,
	 students_payments.batch_id AS batch_id,
	 students_payments.payment1_status AS payment1_status,
	 students_payments.payment2_status AS payment2_status,
	 students_payments.payment3_status AS payment3_status,
	 students_payments.payment4_status AS payment4_status,
	 students_payments.payment5_status AS payment5_status,
	  students_payments.final_status AS final_status,
	   students_payments.studentpayment_id AS studentpayment_id
	  
	 
	 
	 
	 FROM student_batches,students_payments
	 WHERE student_batches.batch_code = '$search' AND
	 students_payments.batch_id = student_batches.batch_id "); 
	
 
					
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
			  
 
		  
		  
		  
		  <div class="section2_admin" style="overflow-x: scroll" align="center">
			  
			  			  <h1 align="center">Student Fees  </h1><hr>
			  
	<!-- update model --> 		  
	<div align="left" class="col-md-12" style="margin-top: 5px" >	
		
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Details </h5>
		<form method="post" action="admin_student_update_fees.php"  enctype="multipart/form-data"> 	
			
			
       <button type="button" class="close" data-dismiss="modal"> close</button>
		<input type="hidden" name="" value=""> 
      </div> 
	 
      <div class="modal-body">
		  
    <input type="hidden" name="update_id" id="update_id" class="form-control"   required/>
	 
		  
    <input type="text" name="batchcode" id="batchcode" class="form-control" placeholder="Batch Code" required/>
  	<br>
     <input type="" name="studentpayment_id" id="studentpayment_id" class="form-control" placeholder="Payment ID" required/>
	<br> 
     <input type="text" name="student_id" id="student_id" class="form-control" placeholder="Student ID" required/>
    <br>
     <input type="text" name="batch_id" id="batch_id" class="form-control" placeholder="Batch ID"  required/>
    <br>
		<lable>Paid or Not paid :</lable>  
     <input type="text" name="payment1_status" id="payment1_status" class="form-control" placeholder="Payment 2" />
    <br> 
		<lable>Paid or Not paid :</lable>  
     <input type="text" name="payment2_status" id="payment2_status" class="form-control" placeholder="Payment 2" />
	<br> 
		  <lable>Paid or Not paid :</lable>  
     <input type="text" name="payment3_status" id="payment3_status" class="form-control" placeholder="Payment 3" />
	<br>
		  <lable>Paid or Not paid :</lable>  
     <input type="text" name="payment4_status" id="payment4_status" class="form-control" placeholder="Payment 4"  />
    <br>
		  <lable>Paid or Not paid :</lable>  
     <input type="text" name="payment5_status" id="payment5_status"  class="form-control" placeholder="Payment 5"  />
    <br> 
		  <lable>Payment compleated or Payment not compleated :</lable>  
     <input type="text" name="final_status" id="final_status" class="form-control" placeholder="Final Status" />
	  
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
	  
<select  name="search" class="form-control-static">
	<option>Batch </option>
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
		<th scope="col">Payment ID</th>
		<th scope="col">Student ID</th>
        <th scope="col">Batch ID </th>
        <th scope="col">payment 01 </th>
	  	<th scope="col">payment 02 </th>
        <th scope="col">payment 03 </th>
		<th scope="col">payment 04 </th>
        <th scope="col">payment 05 </th>
		<th scope="col">Final Status</th>
	<th scope="col" >Update</th>
	<th scope="col" class="hidden" >Delete</th>	
	
    </tr>
  </thead> 
  <tbody>

		<?php
		While($rows = $resultSet->fetch_assoc ()):
{	
	$batchcode = $rows['batchcode'];
	$student_id = $rows['student_id'];
	$batch_id = $rows['batch_id'];
	$payment1_status = $rows['payment1_status'];
	$payment2_status = $rows['payment2_status'];
	$payment3_status = $rows['payment3_status'];
	$payment4_status = $rows['payment4_status'];
	$payment5_status = $rows['payment5_status'];
	$final_status = $rows['final_status'];
	$studentpayment_id = $rows['studentpayment_id'];
	 
}	 
	  
	 ?>
	      <tr>
		 
		<td><?php echo $batchcode ?></td>
		<td><?php echo $studentpayment_id ?></td>	  
	    <td><?php echo $student_id ?></td>
		<td><?php echo $batch_id ?></td>
		<td><?php echo $payment1_status ?></td>
		<td><?php echo $payment2_status ?></td>
		<td><?php echo $payment3_status ?></td>
		<td><?php echo $payment4_status ?></td>
		<td><?php echo $payment5_status ?></td>
		<td><?php echo $final_status ?></td>	  
		 	 <td><button type="button" class="btn btn-info btn-xs editbtn"><i class="fa fa-plus" aria-hidden="true"></i></button></td>
 		 <td class="hidden"><a   href="admin_student_update_fees.php?delete= <?php echo $studentpayment_id; ?> " class="btn btn-danger btn-xs"><i class="fa fa-trash"></a></td>	  
          
   
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
				$('#studentpayment_id').val(data[1]);
				$('#student_id').val(data[2]);
				$('#batch_id').val(data[3]);
				$('#payment1_status').val(data[4]);
				$('#payment2_status').val(data[5]);
				$('#payment3_status').val(data[6]);
				$('#payment4_status').val(data[7]);
				$('#payment5_status').val(data[8]);
				$('#final_status').val(data[9]);
				 
				
		});
	
	});
	
	





</script>

  </body>
</html>