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
			    <li><div><a href="admin_students_results.php">Student Results </a></div></li>
				<li><div><a href="admin_students_submittedassignments.php">Student Assignments</a></div></li>
				 
				 </ul>
			  
					</div>
			  
 
		  
		  
		  
		  <div class="section2_admin" style="overflow-x: scroll" align="center">
			  <h1 align="center">Assignments  </h1><hr>
			 
	<div align="center"  style="margin-top: 5px" >
    <button type="button" align="center" class="hidden"   data-toggle="modal" data-target="#model" class="btn btn-primary btn-md"><i class="fa fa-plus"></i>&nbsp; Add Module Assignments</button>
	
	<!-- insert model -->
	<div id="model" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  		<div class="modal-dialog" role="document">
   			 <div class="modal-content">
      			<div class="modal-header">
        		<h5 class="modal-title" id="exampleModalLabel1">Add Module Assignments </h5>
	<form method="post" action="admin_manage_assignments.php"  enctype="multipart/form-data"> 
    	 
    <button type="button" class="close" data-dismiss="modal">close</i></button>
 	<div class="modal-body">
  	<br>
	<input type="text" name="assignmnt_id" class="form-control" placeholder="Assignment ID" />
		<br> 	
		 <input type="text" name="batch_id"   class="form-control" placeholder="Batch ID" required/>
  	<br>  
     <input type="file" name="moduleassignment_1" class="form-control" placeholder="Assignment 1" />
    <br>
     <input type="file" name="moduleassignment_2" class="form-control" placeholder="Assignment 2" />
    <br>
     <input type="file" name="moduleassignment_3" class="form-control" placeholder="Assignment 3" />
    <br>
     <input type="file" name="moduleassignment_4" class="form-control" placeholder="Assignment 4" />
    <br> 
     <input type="file" name="moduleassignment_5" class="form-control" placeholder="Assignment 5" />
	<br> 
     <input type="file" name="moduleassignment_6" class="form-control" placeholder="Assignment 6" />
	<br>
     <input type="file" name="moduleassignment_7" class="form-control" placeholder="Assignment 7" />
    <br>
     <input type="file" name="moduleassignment_8" class="form-control" placeholder="Assignment 8" />
   <br> 
     <input type="file" name="moduleassignment_9" class="form-control" placeholder="Assignment 9" />
	<br> 
     <input type="file" name="moduleassignment_10" class="form-control" placeholder="Assignment 10" />
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
        <h5 class="modal-title" id="exampleModalLabel">Update Module Assignments </h5>
		<form method="post" action="admin_assignment_update.php"  enctype="multipart/form-data"> 	
			
			
       <button type="button" class="close" data-dismiss="modal"> close</button>
		 
      </div> 

      <div class="modal-body">
    <input type="hidden" name="update_id" id="update_id" class="form-control" required/>
		  
		 
     
      <input type="text" name="assignmnt_id" id="assignmnt_id" class="form-control" placeholder="Assignment ID" required/>
    <br>
	 <input type="text" name="batch_id" id="batch_id" class="form-control" placeholder="Batch ID" required/>
    <br>	  
     <input type="file" name="moduleassignment_1" id="moduleassignment_1" class="form-control" placeholder="Assignment 1" />
    <br>
     <input type="file" name="moduleassignment_2" id="moduleassignment_2" class="form-control" placeholder="Assignment 2" />
    <br>
     <input type="file" name="moduleassignment_3" id="moduleassignment_3" class="form-control" placeholder="Assignment 3"  />
    <br>
     <input type="file" name="moduleassignment_4" id="moduleassignment_4"  class="form-control" placeholder="Assignment 4" />
    <br> 
     <input type="file" name="moduleassignment_5" id="moduleassignment_5" class="form-control" placeholder="Assignment 5" />
	<br> 
     <input type="file" name="moduleassignment_6" id="moduleassignment_6" class="form-control" placeholder="Assignment 6" />
	<br>
     <input type="file" name="moduleassignment_7" id="moduleassignment_7" class="form-control" placeholder="Assignment 7"  />
  	<br>
     <input type="file" name="moduleassignment_8" id="moduleassignment_8"  class="form-control" placeholder="Assignment 8" />
   	<br> 
     <input type="file" name="moduleassignment_9" id="moduleassignment_9" class="form-control" placeholder="Assignment 9" />
	<br> 
     <input type="file" name="moduleassignment_10" id="moduleassignment_10" class="form-control" placeholder="Assignment 10" />
	</div>  
		  
   <div class="modal-footer">                      	
   <button type="submit" value="submit" id="update_id" name="updatedata" class="btn btn-info">Update</button>                
   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	   
   	</div>
	</form>	
    </div>
  	</div>
	</div>			
    </div>		  
			 
 
 <table class="table table-bordered  "  style=" color: black; font-size: 14px; border:10px ">
  <thead>
    <tr>
      <th scope="col">Assignment ID</th>
		  <th scope="col">Batch ID</th>
	  <th scope="col">Module 1</th>
	  <th scope="col">Module 2</th>
      <th scope="col">Module 3</th>
	  <th scope="col">Module 4</th>
      <th scope="col">Module 5</th>
	  <th scope="col">Module 6</th>
      <th scope="col">Module 7</th>
	  <th scope="col">Module 8</th>
	  <th scope="col">Module 9</th>
      <th scope="col">Module 10</th>
	  <th scope="col">Edit</th>
	  <th class="hidden" scope="col">Delete</th>	
    </tr>
  </thead>
  <tbody>
	  <?php 
 		while ($row= $result->fetch_assoc()):  ?>  
	  
    <tr>
     	 <td><?php echo $row['assignmnt_id']; ?></td>
		<td><?php echo $row['batch_id']; ?></td>
		 <td ><?php echo $row['moduleassignment_1']; ?></td>
		 <td ><?php echo $row['moduleassignment_2']; ?></td>
		 <td ><?php echo $row['moduleassignment_3']; ?></td>
		 <td ><?php echo $row['moduleassignment_4']; ?></td>
		 <td ><?php echo $row['moduleassignment_5']; ?></td>
		 <td ><?php echo $row['moduleassignment_6']; ?></td>
	   	 <td ><?php echo $row['moduleassignment_7']; ?></td>
		 <td ><?php echo $row['moduleassignment_8']; ?></td>
		 <td ><?php echo $row['moduleassignment_9']; ?></td>
		 <td ><?php echo $row['moduleassignment_10']; ?></td>
		 <td><button type="button" class="btn btn-success btn-xs editbtn"><i class="fa fa-cog" aria-hidden="true"></i></button></td>
 		 <td class="hidden"><a href="admin_manage_assignments.php?delete= <?php echo $row['assignmnt_id']; ?> " class="btn btn-danger btn-xs"><i class="fa fa-trash"></a></td>
		
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
		  
		 <p  align="center" style="color:  white; padding-top: 30px; font-size:20px " >© 2021 MAY / GREENDALE University</p>
 
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
				$('#moduleassignment_1').val(data[2]);
				$('#moduleassignment_2').val(data[3]);
				$('#moduleassignment_3').val(data[4]);
				$('#moduleassignment_4').val(data[5]);
				$('#moduleassignment_5').val(data[6]);
				$('#moduleassignment_6').val(data[7]);
				$('#moduleassignment_7').val(data[8]);
				$('#moduleassignment_8').val(data[9]);
				$('#moduleassignment_9').val(data[10]);
				$('#moduleassignment_10').val(data[11]); 
				
		});
	
	});
	
	
 



</script>

  </body>
</html>





 
