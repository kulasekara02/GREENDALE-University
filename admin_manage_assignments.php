<?php

include "DBconnection.php";

if (isset($_POST['submit'])){
	
		 $assignmnt_id = $_POST['assignmnt_id']; 
	 $batch_id = $_POST['batch_id']; 
	 
		 $moduleassignment_1 =$_FILES['moduleassignment_1']['name'];
		 $destination = 'moduleassignmentsforStudents/' . $moduleassignment_1 ;
		 $extention = pathinfo($moduleassignment_1, PATHINFO_EXTENSION);
		 $file = $_FILES['moduleassignment_1']['tmp_name'];
		 move_uploaded_file($file,$destination);
	
		 $moduleassignment_2 =$_FILES['moduleassignment_2']['name'];
		 $destination = 'moduleassignmentsforStudents/' . $moduleassignment_2 ;
		 $extention = pathinfo($moduleassignment_2, PATHINFO_EXTENSION);
		 $file = $_FILES['moduleassignment_2']['tmp_name'];
		 move_uploaded_file($file,$destination);
	
		 $moduleassignment_3 =$_FILES['moduleassignment_3']['name'];
		 $destination = 'moduleassignmentsforStudents/' . $moduleassignment_3 ;
		 $extention = pathinfo($moduleassignment_3, PATHINFO_EXTENSION);
		 $file = $_FILES['moduleassignment_3']['tmp_name'];
		 move_uploaded_file($file,$destination);
	
	   	 $moduleassignment_4 =$_FILES['moduleassignment_4']['name'];
		 $destination = 'moduleassignmentsforStudents/' . $moduleassignment_4 ;
		 $extention = pathinfo($moduleassignment_4, PATHINFO_EXTENSION);
		 $file = $_FILES['moduleassignment_4']['tmp_name'];
		 move_uploaded_file($file,$destination);
	
		 $moduleassignment_5 =$_FILES['moduleassignment_5']['name'];
		 $destination = 'moduleassignmentsforStudents/' . $moduleassignment_5 ;
		 $extention = pathinfo($moduleassignment_5, PATHINFO_EXTENSION);
		 $file = $_FILES['moduleassignment_5']['tmp_name'];
		 move_uploaded_file($file,$destination);
	
		$moduleassignment_6 =$_FILES['moduleassignment_6']['name'];
		 $destination = 'moduleassignmentsforStudents/' . $moduleassignment_6 ;
		 $extention = pathinfo($moduleassignment_6, PATHINFO_EXTENSION);
		 $file = $_FILES['moduleassignment_6']['tmp_name'];
		 move_uploaded_file($file,$destination);
	
	     $moduleassignment_7 =$_FILES['moduleassignment_7']['name'];
		 $destination = 'moduleassignmentsforStudents/' . $moduleassignment_7 ;
		 $extention = pathinfo($moduleassignment_7, PATHINFO_EXTENSION);
		 $file = $_FILES['moduleassignment_7']['tmp_name'];
		 move_uploaded_file($file,$destination);
	
		 $moduleassignment_8 =$_FILES['moduleassignment_8']['name'];
		 $destination = 'moduleassignmentsforStudents/' . $moduleassignment_8 ;
		 $extention = pathinfo($moduleassignment_8, PATHINFO_EXTENSION);
		 $file = $_FILES['moduleassignment_8']['tmp_name'];
		 move_uploaded_file($file,$destination);
	
		 $moduleassignment_9 =$_FILES['moduleassignment_9']['name'];
		 $destination = 'moduleassignmentsforStudents/' . $moduleassignment_9 ;
		 $extention = pathinfo($moduleassignment_9, PATHINFO_EXTENSION);
		 $file = $_FILES['moduleassignment_9']['tmp_name'];
		 move_uploaded_file($file,$destination);
	
	     $moduleassignment_10 =$_FILES['moduleassignment_10']['name'];
		 $destination = 'moduleassignmentsforStudents/' . $moduleassignment_10 ;
		 $extention = pathinfo($moduleassignment_10, PATHINFO_EXTENSION);
		 $file = $_FILES['moduleassignment_10']['tmp_name'];
		 move_uploaded_file($file,$destination);
		 	
			
			 $sql = "INSERT INTO module_assignments ( assignmnt_id, batch_id, moduleassignment_1, moduleassignment_2, moduleassignment_3, moduleassignment_4, moduleassignment_5, moduleassignment_6, moduleassignment_7, moduleassignment_8, moduleassignment_9, moduleassignment_10) VALUES ('$assignmnt_id','$batch_id','$moduleassignment_1','$moduleassignment_2','$moduleassignment_3','$moduleassignment_4','$moduleassignment_5','$moduleassignment_6','$moduleassignment_7','$moduleassignment_8','$moduleassignment_9','$moduleassignment_10' )";
			 if(mysqli_query($conn, $sql))
			 {
			  header("location:admin_assignments.php");
			 }
			 else
			 {
			 echo "ERROR";
			 }
				 
			 }
		 
?>

<?php

$mysqli = new mysqli('localhost','root','','greendale') or die(mysqli_error($mysqli));

$assignmnt_id = $_POST['assignmnt_id'];	 

if (isset($_GET['delete'])) {
	$assignmnt_id = $_GET['delete'];
	$mysqli->query("DELETE FROM module_assignments WHERE assignmnt_id= $assignmnt_id") or die ($mysqli->error());
      
      header("location:admin_assignments.php");
}



?>

