<?php
	include "DBconnection.php";

if (isset($_POST['updatedata'])){
	 
	$id = $_POST['update_id'];
	
		$course_id = $_POST['course_id'];
		 
		$course_name = $_POST['course_name'];
		$module_1 = $_POST['module_1'];
		$module_2 = $_POST['module_2'];
		$module_3 =$_POST['module_3'];
		$module_4 = $_POST['module_4'];
		$module_5 = $_POST['module_5'];
		$module_6 = $_POST['module_6'];
		$module_7 = $_POST['module_7'];
		$module_8 = $_POST['module_8'];
		$module_9 =$_POST['module_9'];
		$module_10 = $_POST['module_10'];

   $query = "UPDATE course_details SET course_id='$course_id', course_name='$course_name', module_1='$module_1', module_2='$module_2', module_3='$module_3', module_4='$module_4', module_5='$module_5', module_6='$module_6', module_7='$module_7', module_8='$module_8', module_9='$module_9', module_10='$module_10' WHERE course_id= $id " ;

	$query_run = mysqli_query($conn, $query);

	if($query_run)
	{	
	echo "submitted";	
   header('location:admin_course_details.php') ;     	
	}
	else
	{
		echo "form not submitted";
	}               
}

?>

 
