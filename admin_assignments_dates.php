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
		$mysqli = new mysqli('localhost','root','','greendale') or die(mysqli_error($mysqli));
		$result  = $mysqli->query("SELECT * FROM module_assignments") or die ($mysqli->erorr);	
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
			  
 
		  
		  
		  
		  <div class="section2_admin" style="overflow-x: scroll" align="center">
			  
			  
			  <h1 align="center">Assignments Dates  </h1><hr>
			 
	<div align="center"  style="margin-top: 5px" >
    <button type="button"  class="hidden"  data-toggle="modal" data-target="#model" class="btn btn-primary btn-md"><i class="fa fa-plus"></i>&nbsp;Add Module Assignments Dates</button>
		
	 
		 
		
	<!-- insert model -->
<div id="model" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"  id="exampleModalLabel1">Add Module Assignments Dates</h5>
		  <form method="post" action="admin_manage_assignments_dates.php"  enctype="multipart/form-data"> 
    	 
     <button type="button" class="close" data-dismiss="modal">close</i></button>
 
 <div class="modal-body">
   
  <br>
<input type="text" name="assignmnt_id"   class="form-control" placeholder="Assignment ID" required  />
  <br> 
	 <input type="text" name="batch_id"   class="form-control" placeholder="Batch ID" required />
  <br> 
	 <lable>Module 1</lable>  
     <input type="date" name="module_1_issued"   class="form-control" placeholder="Assignment 1" />
<br>
     <input type="date" name="module_1_deadl"   class="form-control" placeholder="Assignment 1" />
     <lable>Module 2 </lable>
     <input type="date" name="module_2_issued"   class="form-control" placeholder="Assignment 2"  />
  <br>
     <input type="date" name="module_2_deadl"    class="form-control" placeholder="Assignment 2" />
     <lable>Module 3 </lable>
     <input type="date" name="module_3_issued"   class="form-control" placeholder="Assignment 3" />
	<br> 
     <input type="date" name="module_3_deadl"   class="form-control" placeholder="Assignment 3" />
	  <lable>Module 4 </lable>
     <input type="date" name="module_4_issued"  class="form-control" placeholder="Assignment 4"  />
  <br>
     <input type="date" name="module_4_deadl"   class="form-control" placeholder="Assignment 4" />
    <lable>Module 5 </lable> 
     <input type="date" name="module_5_issued"   class="form-control" placeholder="Assignment 5" />
	<br> 
     <input type="date" name="module_5_deadl"   class="form-control" placeholder="Assignment 5" />
		  
	  <lable>Module 6 </lable>	  
	   <input type="date" name="module_6_issued"  class="form-control" placeholder="Assignment 6" />
<br>
     <input type="date" name="module_6_deadl"  class="form-control" placeholder="Assignment 6" />
    <lable>Module 7 </lable>
     <input type="date" name="module_7_issued"  class="form-control" placeholder="Assignment 7"  />
  <br>
     <input type="date" name="module_7_deadl"  class="form-control" placeholder="Assignment 7" />
    <lable>Module 8 </lable>
     <input type="date" name="module_8_issued"  class="form-control" placeholder="Assignment 8" />
	<br> 
     <input type="date" name="module_8_deadl"  class="form-control" placeholder="Assignment 8" />
	  <lable>Module 9 </lable>
     <input type="date" name="module_9_issued"   class="form-control" placeholder="Assignment 9"  />
  <br>
     <input type="date" name="module_9_deadl"   class="form-control" placeholder="Assignment 9" />
     <lable>Module 10 </lable> 
     <input type="date" name="module_10_issued"   class="form-control" placeholder="Assignment 10" />
	<br> 
     <input type="date" name="module_10_deadl" id="module_10_deadl" class="form-control" placeholder="Assignment 10" />	  
 </div>
    <div class="modal-footer">
     
	 <button type="submit" name="submit"  class="btn btn-success"/>Insert Data</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 
		
		
		
    </div>
	   
   </div>
  </form>
 </div>
</div>
			  
			  
 		  
</div>		
		
    </div>
	<!-- update model --> 		  
	<div align="left" class="col-md-12" style="margin-top: 5px" >	
		
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Module Assignments Dates </h5>
		<form method="post" action="admin_assignment_dates_update.php"  enctype="multipart/form-data"> 	
			
			
       <button type="button" class="close" data-dismiss="modal"> close</button>
		 
      </div> 

      <div class="modal-body">
    <input type="hidden" name="update_id" id="update_id" class="form-control" required/>
		  
     
      <input type="text" name="assignmnt_id" id="assignmnt_id" class="form-control" placeholder="Assignment ID" required/>
		  <br>
		  <input type="text" name="batch_id" id="batch_id" class="form-control" placeholder="Assignment ID" required/>
<br>
  <lable>Module 1</lable>
     <input type="date" name="module_1_issued" id="module_1_issued" class="form-control" placeholder="Assignment 1" />
<br>
     <input type="date" name="module_1_deadl" id="module_1_deadl" class="form-control" placeholder="Assignment 1" />
  <lable>Module 2</lable>
     <input type="date" name="module_2_issued" id="module_2_issued" class="form-control" placeholder="Assignment 2"  />
  <br>
     <input type="date" name="module_2_deadl" id="module_2_deadl"  class="form-control" placeholder="Assignment 2" />
  <lable>Module 3</lable> 
     <input type="date" name="module_3_issued" id="module_3_issued" class="form-control" placeholder="Assignment 3" />
	<br> 
     <input type="date" name="module_3_deadl" id="module_3_deadl" class="form-control" placeholder="Assignment 3" />
	<lable>Module 4</lable>
     <input type="date" name="module_4_issued" id="module_4_issued" class="form-control" placeholder="Assignment 4"  />
  <br>
     <input type="date" name="module_4_deadl" id="module_4_deadl"  class="form-control" placeholder="Assignment 4" />
  <lable>Module 5</lable>
     <input type="date" name="module_5_issued" id="module_5_issued" class="form-control" placeholder="Assignment 5" />
	<br> 
     <input type="date" name="module_5_deadl" id="module_5_deadl" class="form-control" placeholder="Assignment 5" />
	<lable>Module 6</lable>	  
		  
	   <input type="date" name="module_6_issued" id="module_6_issued" class="form-control" placeholder="Assignment 6" />
<br>
     <input type="date" name="module_6_deadl" id="module_6_deadl" class="form-control" placeholder="Assignment 6" />
   <lable>Module 7</lable>
     <input type="date" name="module_7_issued" id="module_7_issued" class="form-control" placeholder="Assignment 7"  />
  <br>
     <input type="date" name="module_7_deadl" id="module_7_deadl"  class="form-control" placeholder="Assignment 7" />
   <lable>Module 8</lable>
     <input type="date" name="module_8_issued" id="module_8_issued" class="form-control" placeholder="Assignment 8" />
	<br> 
     <input type="date" name="module_8_deadl" id="module_8_deadl" class="form-control" placeholder="Assignment 8" />
	<lable>Module 9</lable>
     <input type="date" name="module_9_issued" id="module_9_issued" class="form-control" placeholder="Assignment 9"  />
  <br>
     <input type="date" name="module_9_deadl" id="module_9_deadl"  class="form-control" placeholder="Assignment 9" />
  <lable>Module 10</lable>
     <input type="date" name="module_10_issued" id="module_10_issued" class="form-control" placeholder="Assignment 10" />
	<br> 
     <input type="date" name="module_10_deadl" id="module_10_deadl" class="form-control" placeholder="Assignment 10" />	  
     
    
      </div>
      <div class="modal-footer">
                            	
     <button type="submit" value="submit" id="update_id" name="updatedata" class="btn btn-info"> Update </button>
   
		  
                         
       <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>                  
		 
      </div>
		</form>	
    </div>
  </div>
</div>		
		
 
	
		
    </div>		  
		 
<table class="table table-bordered  "  style=" color: black; font-size: 12px; border:10px ">
  <thead>
    <tr>
	 
    <th scope="col">Assi ID</th>
	<th scope="col">Batch ID</th>
	<th scope="col"> M1 Issue </th>
	<th scope="col"> M1 DL </th>
	<th scope="col"> M2 Issue </th>
	<th scope="col"> M2 DL </th>
	<th scope="col"> M3 Issue </th>
	<th scope="col"> M3 DL </th>
    <th scope="col"> M4 Issue </th>
	<th scope="col"> M4 DL </th>
	<th scope="col"> M5 Issue </th>
	<th scope="col"> M5 DL </th>
     <th scope="col"> M6 Issue </th>
	<th scope="col"> M6 DL </th>
	<th scope="col"> M7 Issue </th>
	<th scope="col"> M7 DL </th>
     <th scope="col"> M8 Issue </th>
	<th scope="col"> M8 DL </th>
	<th scope="col"> M9 Issue </th>
	<th scope="col"> M9 DL </th>
	<th scope="col"> M10 Issue </th>
	<th scope="col"> M10 DL </th>
	<th scope="col" >Edit</th>
	<th class="hidden" scope="col" >Delete</th>	
		
     
    </tr>
  </thead>
  <tbody>
	  <?php 
 		while ($row= $result->fetch_assoc()):  ?>  
	  
    <tr>
		
     	 <td><?php echo $row['assignmnt_id']; ?></td>
		 <td><?php echo $row['batch_id']; ?></td>
		 <td ><?php echo $row['module_1_issued']; ?></td>
		 <td ><?php echo $row['module_1_deadl']; ?></td>
		 <td><?php echo $row['module_2_issued']; ?></td>
		<td><?php echo $row['module_2_deadl']; ?></td>
		 <td ><?php echo $row['module_3_issued']; ?></td>
		 <td ><?php echo $row['module_3_deadl']; ?></td>
		 <td ><?php echo $row['module_4_issued']; ?></td>
		 <td ><?php echo $row['module_4_deadl']; ?></td>
		 <td ><?php echo $row['module_5_issued']; ?></td>
		 <td ><?php echo $row['module_5_deadl']; ?></td>
		 <td ><?php echo $row['module_6_issued']; ?></td>
		 <td ><?php echo $row['module_6_deadl']; ?></td>
	   	 <td ><?php echo $row['module_7_issued']; ?></td>
		<td ><?php echo $row['module_7_deadl']; ?></td>
		 <td ><?php echo $row['module_8_issued']; ?></td>
		 <td ><?php echo $row['module_8_deadl']; ?></td>
		 <td ><?php echo $row['module_9_issued']; ?></td>
		<td ><?php echo $row['module_9_deadl']; ?></td>
		 <td ><?php echo $row['module_10_issued']; ?></td>
		 <td ><?php echo $row['module_10_deadl']; ?></td>
		 
	
		 
		 <td><button type="button" class="btn btn-success btn-xs editbtn"><i class="fa fa-cog" aria-hidden="true"></i></button></td>
 		 <td class="hidden"><a href="admin_manage_assignments_dates.php?delete= <?php echo $row['assignmnt_id']; ?> " class="btn btn-danger btn-xs"><i class="fa fa-trash"></a></td>
		
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
		  
		 <p  align="center" style="color:  white; padding-top: 30px; font-size:20px " >© 2021 MAY / GREENDALE COLLEGE </p>
 
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
				$('#assignmnt_id').val(data[0]);
				$('#batch_id').val(data[1]);
				$('#module_1_issued').val(data[2]);
				$('#module_1_deadl').val(data[3]);
				$('#module_2_issued').val(data[4]);
				$('#module_2_deadl').val(data[5]);
				$('#module_3_issued').val(data[6]);
				$('#module_3_deadl').val(data[7]);
				$('#module_4_issued').val(data[8]);
				$('#module_4_deadl').val(data[9]);
				$('#module_5_issued').val(data[10]);
				$('#module_5_deadl').val(data[11]); 
				$('#module_6_issued').val(data[12]);
				$('#module_6_deadl').val(data[13]);
				$('#module_7_issued').val(data[14]);
				$('#module_7_deadl').val(data[15]);
				$('#module_8_issued').val(data[16]);
				$('#module_8_deadl').val(data[17]);
				$('#module_9_issued').val(data[18]);
				$('#module_9_deadl').val(data[19]);
				$('#module_10_issued').val(data[20]);
				$('#module_10_deadl').val(data[21]); 
				
		});
	
	});
	
	

 



</script>

  </body>
</html>





 
