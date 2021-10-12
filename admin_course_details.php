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
		$result  = $mysqli->query("SELECT * FROM course_details ") or die ($mysqli->erorr);	
	
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
			  
			  			  <h1 align="center">Courses  </h1><hr>
			  
	<div align="center"   style="margin-top: 5px" >
    <button type="button"   data-toggle="modal" data-target="#model" class="btn btn-primary btn-md"><i class="fa fa-plus"></i> &nbsp;Add A New Course </button>
		
	 
		 
		
	<!-- insert model -->
<div id="model" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Add A New Course </h5>
		 
     <button type="button" class="close" data-dismiss="modal">close</i></button>
 
    </div>
	  <form method="post" action="admin_course_details_manage.php"  enctype="multipart/form-data"> 
    <div class="modal-body">
     
	<br>	
     <input type="text" name="course_id" class="form-control" placeholder="Course_ID" required/>
  
<br>
     <input type="text" name="course_name" class="form-control" placeholder="Course Name" required/>
 <br> 
     <input type="text" name="module_1"  class="form-control" placeholder="module 1" required/>
   <br> 
     <input type="text" name="module_2" class="form-control" placeholder="module 2" required/>
	<br> 
     <input type="text" name="module_3" class="form-control" placeholder="module 3" required/>
		<br> 
     <input type="text" name="module_4"  class="form-control" placeholder="module 4" required/>
   <br> 
     <input type="text" name="module_5" class="form-control" placeholder="module 5" required/>
	<br> 
     <input type="text" name="module_6" class="form-control" placeholder="module 6" required/>
		<br> 
     <input type="text" name="module_7"  class="form-control" placeholder="module 7" required/>
   <br> 	
     <input type="text" name="module_8" class="form-control" placeholder="module 8" required/>  
	<br> 
     <input type="text" name="module_9" class="form-control" placeholder="module 9" required/>
		<br> 
     <input type="text" name="module_10" class="form-control" placeholder="module 10" required/>
 </div>
    <div class="modal-footer">
     
	 <button type="submit" name="submit"  class="btn btn-success"/>Insert Data</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 
		
		
		
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
        <h5 class="modal-title" id="exampleModalLabel">Update AN Exiting Course </h5>
		<form method="post" action="admin_course_details_update.php"  enctype="multipart/form-data"> 	
			
			
       <button type="button" class="close" data-dismiss="modal"> close</button>
 	
      </div>  
      <div class="modal-body">
    <input type="hidden" name="update_id" id="update_id" class="form-control"  required/>
     <label>Course ID</label>
      <input type="text" name="course_id" id="course_id" class="form-control" placeholder="Course ID" required/>
   
<br>
		 
	 <input type="text" name="course_name" id="course_name" class="form-control" placeholder="Course Name" required/>
<br>	
	  <label>Module 1</label>	  
	  <input type="text" name="module_1" id="module_1" class="form-control" placeholder="Module 1" required/>
   <br>
		    <label>Module 2</label>
     <input type="text" name="module_2" id="module_2" class="form-control" placeholder="Module 2" required/>
   <br>
		    <label>Module 3</label>
     <input type="text" name="module_3" id="module_3" class="form-control" placeholder="Module 3"  required/>
  <br>
  <label>Module 4</label>
     <input type="text" name="module_4" id="module_4"  class="form-control" placeholder="Module 4" required/>
   <br> 
	  <label>Module 5</label>
     <input type="text" name="module_5" id="module_5" class="form-control" placeholder="Module 5" required/>
   
	<br> 
		    <label>Module 6</label>
     <input type="text" name="module_6" id="module_6" class="form-control" placeholder="Module 6" required/>
     
	<br>
   <label>Module 7</label>
     <input type="text" name="module_7" id="module_7" class="form-control" placeholder="Module 7" required/>
   <br>
	<label>Module 8</label>
     <input type="text" name="module_8" id="module_8" class="form-control" placeholder="Module 8"  required/>
  <br>
	  <label>Module 9</label>
     <input type="text" name="module_9" id="module_9"  class="form-control" placeholder="Module 9" required/>
   <br> 
	  <label>Module 10</label>
     <input type="text" name="module_10" id="module_10" class="form-control" placeholder="Module 10" required/>
   
	
     	  
    
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
 
  <table class="table table-bordered"  style=" color: black; font-size: 20px; border:10px ">
  <thead>
    <tr>
      <th scope="col">Course ID</th>
		<th scope="col">Course Name</th>
		<th class="hidden" scope="col">M01</th>
      	<th class="hidden" scope="col">M02</th>
		<th class="hidden" scope="col">M03</th>
   	    <th class="hidden" scope="col">M04</th>
		<th class="hidden" scope="col">M05</th>
        <th class="hidden" scope="col">M06</th>
		<th class="hidden" scope="col">M07</th>
		<th class="hidden" scope="col">M08</th>	
		<th class="hidden" scope="col">M09</th>	
   	    <th class="hidden" scope="col">M10</th>
		<th scope="col">View/Edit</th>	
   	    <th scope="col">Delete</th>
		
		
		
    </tr>
  </thead>
  <tbody>
	  <?php 
 		while ($row= $result->fetch_assoc()):  ?>  
	  
    <tr>
      <td><?php echo $row['course_id']; ?></td>
	  <td><?php echo $row['course_name']; ?></td>
	  <td class="hidden" ><?php echo $row['module_1']; ?></td>
      <td class="hidden"><?php echo $row['module_2']; ?></td>
      <td class="hidden"><?php echo $row['module_3']; ?></td>
	  <td class="hidden"><?php echo $row['module_4']; ?></td>
	  <td class="hidden"><?php echo $row['module_5']; ?></td>
	  <td class="hidden"><?php echo $row['module_6']; ?></td>
	  <td class="hidden"><?php echo $row['module_7']; ?></td>
	  <td class="hidden"><?php echo $row['module_8']; ?></td>
	  <td class="hidden"><?php echo $row['module_9']; ?></td>
	  <td class="hidden"><?php echo $row['module_10']; ?></td>
	<td><button type="button" class="btn btn-success btn-xs editbtn"><i class="fa fa-list" aria-hidden="true"></i></button></td>
 	<td><a href="admin_course_details_manage.php?delete= <?php echo $row['course_id']; ?> " class="btn btn-danger btn-xs"><i class="fa fa-trash"></a></td>
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
				$('#course_id').val(data[0]);
				$('#course_name').val(data[1]);
				$('#module_1').val(data[2]);
				$('#module_2').val(data[3]);
				$('#module_3').val(data[4]);
				$('#module_4').val(data[5]);
				$('#module_5').val(data[6]);
				$('#module_6').val(data[7]);
				$('#module_7').val(data[8]);
				$('#module_8').val(data[9]);
				$('#module_9').val(data[10]);
				$('#module_10').val(data[11]);
				
			 	
	 
				
		});
	
	});
	
	





</script>

  </body>
</html>