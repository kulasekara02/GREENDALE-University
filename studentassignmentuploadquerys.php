<style>
.wrong {
	
    margin-top: 190px;
	margin-left: 10%;
    padding: 10px;
    background-color: #7169FD;
    width:800px;
    color: #000000;
	
}
</style>

<?php 
	include "DBconnection.php";
	 if(isset($_POST['submit1']))
	 {
		 $assignmentname =$_FILES['assignment_name']['name'];
		 $destination = 'compleatedassignmentsStudents/' . $assignmentname ;
		 $extention = pathinfo($assignmentname, PATHINFO_EXTENSION);
		 $file = $_FILES['assignment_name']['tmp_name'];
		
		 if(!in_array($extention,['pdf']))
		 {
		  echo  "<div class=\"wrong\">YOUR EXTENTION MUST BE .pdf</div>";
		 }
		 elseif($_FILES['assignment_name']['size'] > 100000000)
		{
		 echo "<div class=\"wrong\">file is too large</div>";
		}
		 else{
			 if(move_uploaded_file($file,$destination))
			 {
			 $sql = "INSERT INTO students_assignments ( batch, batch_code , student_id, batch_id, student_name , assignment_name , module_name ) VALUES ('$batch_name', '$batch_code', '$id','$batch_id','$fname','$assignmentname','$module_1' )";
			 if(mysqli_query($conn, $sql))
			 {
				echo "<div class=\"wrong\">file uploaded success</div>";
			 }
			 else
			 {
			 echo "<div class=\"wrong\">ERROR</div>";
			 }
			 }
		 }
	 }
	?>	
	<?php 
	include "DBconnection.php";
	 if(isset($_POST['submit2']))
		 
	 
	 {
		 $assignmentname =$_FILES['assignment_name']['name'];
		 $destination = 'compleatedassignmentsStudents/' . $assignmentname ;
		 $extention = pathinfo($assignmentname, PATHINFO_EXTENSION);
		 $file = $_FILES['assignment_name']['tmp_name'];
		
		 if(!in_array($extention,['pdf']))
		 {
		  echo  "<div class=\"wrong\">YOUR EXTENTION MUST BE .pdf</div>";
		 }
		 elseif($_FILES['assignment_name']['size'] > 100000000)
		{
		 echo "<div class=\"wrong\">file is too large</div>";
		}
		 else{
			 if(move_uploaded_file($file,$destination))
			 {
		 $sql = "INSERT INTO students_assignments ( batch, batch_code , student_id, batch_id, student_name , assignment_name , module_name ) VALUES ('$batch_name', '$batch_code', '$id','$batch_id','$fname','$assignmentname','$module_2' )";
			 if(mysqli_query($conn, $sql))
			 {
			 	echo "<div class=\"wrong\">file uploaded success</div>";
			 }
			 else
			 {
			 echo "<div class=\"wrong\">ERROR</div>";
			 }
				 
			 }
		 }
	 }
	
	

	
	
	
	
	
	?>	
	
	<?php 
	include "DBconnection.php";
	 if(isset($_POST['submit3']))
		 
	 
	 {
		 $assignmentname =$_FILES['assignment_name']['name'];
		 $destination = 'compleatedassignmentsStudents/' . $assignmentname ;
		 $extention = pathinfo($assignmentname, PATHINFO_EXTENSION);
		 $file = $_FILES['assignment_name']['tmp_name'];
		
		 if(!in_array($extention,['pdf']))
		 {
			  echo  "<div class=\"wrong\">YOUR EXTENTION MUST BE .pdf</div>";
		 }
		 elseif($_FILES['assignment_name']['size'] > 100000000)
		{
		 echo "<div class=\"wrong\">file is too large</div>";
		}
		 else{
			 if(move_uploaded_file($file,$destination))
			 {
			 $sql = "INSERT INTO students_assignments ( batch, batch_code , student_id, batch_id, student_name , assignment_name , module_name ) VALUES ('$batch_name', '$batch_code', '$id','$batch_id','$fname','$assignmentname','$module_3' )";
			 if(mysqli_query($conn, $sql))
			 {
				echo "<div class=\"wrong\">file uploaded success</div>";
			 }
			 else
			 {
			 echo "<div class=\"wrong\">ERROR</div>";
			 }
				 
			 }
		 }
	 }	
		
	
?>
	
	
	<?php 
	include "DBconnection.php";
	 if(isset($_POST['submit4']))
		 
	 
	 {
		 $assignmentname =$_FILES['assignment_name']['name'];
		 $destination = 'compleatedassignmentsStudents/' . $assignmentname ;
		 $extention = pathinfo($assignmentname, PATHINFO_EXTENSION);
		 $file = $_FILES['assignment_name']['tmp_name'];
		
		 if(!in_array($extention,['pdf']))
		 {
			  echo  "<div class=\"wrong\">YOUR EXTENTION MUST BE .pdf</div>";
		 }
		 elseif($_FILES['assignment_name']['size'] > 100000000)
		{
		 echo "<div class=\"wrong\">file is too large</div>";
		}
		 else{
			 if(move_uploaded_file($file,$destination))
			 {
			 $sql = "INSERT INTO students_assignments ( batch, batch_code , student_id, batch_id, student_name , assignment_name , module_name ) VALUES ('$batch_name', '$batch_code', '$id','$batch_id','$fname','$assignmentname','$module_4' )";
			 if(mysqli_query($conn, $sql))
			 {
			 	echo "<div class=\"wrong\">file uploaded success</div>";
			 }
			 else
			 {
			 echo "<div class=\"wrong\">ERROR</div>";
			 }
			 }
		 }
	 }	
		
	
?>
	
	<?php 
	include "DBconnection.php";
	 if(isset($_POST['submit5']))
		 
	 
	 {
		 $assignmentname =$_FILES['assignment_name']['name'];
		 $destination = 'compleatedassignmentsStudents/' . $assignmentname ;
		 $extention = pathinfo($assignmentname, PATHINFO_EXTENSION);
		 $file = $_FILES['assignment_name']['tmp_name'];
		
		 if(!in_array($extention,['pdf']))
		 {
			  echo  "<div class=\"wrong\">YOUR EXTENTION MUST BE .pdf</div>";
		 }
		 elseif($_FILES['assignment_name']['size'] > 100000000)
		{
		 echo "<div class=\"wrong\">file is too large</div>";
		}
		 else{
			 if(move_uploaded_file($file,$destination))
			 {
			 $sql = "INSERT INTO students_assignments ( batch, batch_code , student_id, batch_id, student_name , assignment_name , module_name ) VALUES ('$batch_name', '$batch_code', '$id','$batch_id','$fname','$assignmentname','$module_5' )";
			 if(mysqli_query($conn, $sql))
			 {
				echo "<div class=\"wrong\">file uploaded success</div>";
			 }
			 else
			 {
			 echo "<div class=\"wrong\">ERROR</div>";
			 }
				 
			 }
		 }
	 }	
		
	
?>
	
	
<?php 
	include "DBconnection.php";
	 if(isset($_POST['submit6']))
		 
	 
	 {
		 $assignmentname =$_FILES['assignment_name']['name'];
		 $destination = 'compleatedassignmentsStudents/' . $assignmentname ;
		 $extention = pathinfo($assignmentname, PATHINFO_EXTENSION);
		 $file = $_FILES['assignment_name']['tmp_name'];
		
		 if(!in_array($extention,['pdf']))
		 {
			  echo  "<div class=\"wrong\">YOUR EXTENTION MUST BE .pdf</div>";
		 }
		 elseif($_FILES['assignment_name']['size'] > 100000000)
		{
		 echo "<div class=\"wrong\">file is too large</div>";
		}
		 else{
			 if(move_uploaded_file($file,$destination))
			 {
			 $sql = "INSERT INTO students_assignments ( batch, batch_code , student_id, batch_id, student_name , assignment_name , module_name ) VALUES ('$batch_name', '$batch_code', '$id','$batch_id','$fname','$assignmentname','$module_6' )";
			 if(mysqli_query($conn, $sql))
			 {
				echo "<div class=\"wrong\">file uploaded success</div>";
			 }
			 else
			 {
			 echo "<div class=\"wrong\">ERROR</div>";
			 }
				 
			 }
		 }
	 }	
		
	
?>	
	
	
	<?php 
	include "DBconnection.php";
	 if(isset($_POST['submit7']))
		 
	 
	 {
		 $assignmentname =$_FILES['assignment_name']['name'];
		 $destination = 'compleatedassignmentsStudents/' . $assignmentname ;
		 $extention = pathinfo($assignmentname, PATHINFO_EXTENSION);
		 $file = $_FILES['assignment_name']['tmp_name'];
		
		 if(!in_array($extention,['pdf']))
		 {
			  echo  "<div class=\"wrong\">YOUR EXTENTION MUST BE .pdf</div>";
		 }
		 elseif($_FILES['assignment_name']['size'] > 100000000)
		{
		 echo "<div class=\"wrong\">file is too large</div>";
		}
		 else{
			 if(move_uploaded_file($file,$destination))
			 {
			 $sql = "INSERT INTO students_assignments ( batch, batch_code , student_id, batch_id, student_name , assignment_name , module_name ) VALUES ('$batch_name', '$batch_code', '$id','$batch_id','$fname','$assignmentname','$module_7' )";
			 if(mysqli_query($conn, $sql))
			 {
			 	echo "<div class=\"wrong\">file uploaded success</div>";
			 }
			 else
			 {
			 echo "<div class=\"wrong\">ERROR</div>";
			 }
				 
			 }
		 }
	 }	
		
	
?>	
	
	
		<?php 
	include "DBconnection.php";
	 if(isset($_POST['submit8']))
		 
	 
	 {
		 $assignmentname =$_FILES['assignment_name']['name'];
		 $destination = 'compleatedassignmentsStudents/' . $assignmentname ;
		 $extention = pathinfo($assignmentname, PATHINFO_EXTENSION);
		 $file = $_FILES['assignment_name']['tmp_name'];
		
		 if(!in_array($extention,['pdf']))
		 {
			  echo  "<div class=\"wrong\">YOUR EXTENTION MUST BE .pdf</div>";
		 }
		 elseif($_FILES['assignment_name']['size'] > 100000000)
		{
		 echo "<div class=\"wrong\">file is too large</div>";
		}
		 else{
			 if(move_uploaded_file($file,$destination))
			 {
			 $sql = "INSERT INTO students_assignments ( batch, batch_code , student_id, batch_id, student_name , assignment_name , module_name ) VALUES ('$batch_name', '$batch_code', '$id','$batch_id','$fname','$assignmentname','$module_8' )";
			 if(mysqli_query($conn, $sql))
			 {
				echo "<div class=\"wrong\">file uploaded success</div>";
			 }
			 else
			 {
			 echo "<div class=\"wrong\">ERROR</div>";
			 }
				 
			 }
		 }
	 }	
		
	
?>	
	
	
		<?php 
	include "DBconnection.php";
	 if(isset($_POST['submit9']))
		 
	 
	 {
		 $assignmentname =$_FILES['assignment_name']['name'];
		 $destination = 'compleatedassignmentsStudents/' . $assignmentname ;
		 $extention = pathinfo($assignmentname, PATHINFO_EXTENSION);
		 $file = $_FILES['assignment_name']['tmp_name'];
		
		 if(!in_array($extention,['pdf']))
		 {
			  echo  "<div class=\"wrong\">YOUR EXTENTION MUST BE .pdf</div>";
		 }
		 elseif($_FILES['assignment_name']['size'] > 100000000)
		{
		 echo "<div class=\"wrong\">file is too large</div>";
		}
		 else{
			 if(move_uploaded_file($file,$destination))
			 {
			 $sql = "INSERT INTO students_assignments ( batch, batch_code , student_id, batch_id, student_name , assignment_name , module_name ) VALUES ('$batch_name', '$batch_code', '$id','$batch_id','$fname','$assignmentname','$module_9' )";
			 if(mysqli_query($conn, $sql))
			 {
				echo "<div class=\"wrong\">file uploaded success</div>";
			 }
			 else
			 {
			 echo "<div class=\"wrong\">ERROR</div>";
			 }
				 
			 }
		 }
	 }	
		
	
?>	
	  
	<?php 
	include "DBconnection.php";
	 if(isset($_POST['submit10']))
		 
	 
	 {
		 $assignmentname =$_FILES['assignment_name']['name'];
		 $destination = 'compleatedassignmentsStudents/' . $assignmentname ;
		 $extention = pathinfo($assignmentname, PATHINFO_EXTENSION);
		 $file = $_FILES['assignment_name']['tmp_name'];
		
		 if(!in_array($extention,['pdf']))
		 {
			  echo  "<div class=\"wrong\">YOUR EXTENTION MUST BE .pdf</div>";
		 }
		 elseif($_FILES['assignment_name']['size'] > 100000000)
		{
		 echo "<div class=\"wrong\">file is too large</div>";
		}
		 else{
			 if(move_uploaded_file($file,$destination))
			 {
			 $sql = "INSERT INTO students_assignments ( batch, batch_code , student_id, batch_id, student_name , assignment_name , module_name ) VALUES ('$batch_name', '$batch_code', '$id','$batch_id','$fname','$assignmentname','$module_10' )";
			 if(mysqli_query($conn, $sql))
			 {
			echo "<div class=\"wrong\">file uploaded success</div>";
			 }
			 else
			 {
			 echo "<div class=\"wrong\">ERROR</div>";
			 }
				 
			 }
		 }
	 }	
		
	
?>		  