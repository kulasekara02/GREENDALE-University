<?php

$mysqli = new mysqli('localhost','root','','greendale') or die(mysqli_error($mysqli));

if (isset($_POST['submit'])){

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
	
 
	
	
	$mysqli->query("INSERT INTO course_details ( course_id, course_name, module_1, module_2, module_3, module_4, module_5, module_6, module_7, module_8, module_9, module_10) VALUES('$course_id','$course_name','$module_1','$module_2','$module_3','$module_4','$module_5','$module_6','$module_7','$module_8','$module_9','$module_10')") or die($mysqli->error);
	header("location:admin_course_details.php");
 	 
}

$course_id = $_POST['course_id'];

if (isset($_GET['delete'])) {
	$course_id = $_GET['delete'];
	$mysqli->query("DELETE FROM course_details WHERE course_id=$course_id") or die ($mysqli->error());
      
      header("location:admin_course_details.php");
}


