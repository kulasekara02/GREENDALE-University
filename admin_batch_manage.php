<?php

$mysqli = new mysqli('localhost','root','','greendale') or die(mysqli_error($mysqli));

if (isset($_POST['submit'])){

		 $batch_id = $_POST['batch_id'];
		$batch_name = $_POST['batch_name'];
		$batch_code = $_POST['batch_code'];
		$course_id = $_POST['course_id'];
		$assignment_id =$_POST['assignment_id'];
	
	
	$mysqli->query("INSERT INTO module_assignments (assignmnt_id ,batch_id ) VALUES('$batch_id','$assignment_id')") or die($mysqli->error);

	$mysqli->query("INSERT INTO student_batches ( batch_id, batch_name, batch_code, course_id, assignment_id  )VALUES('$batch_id','$batch_name','$batch_code','$course_id' ,'$assignment_id')") or die($mysqli->error);
	
	 
	 
	
	
	header("location:admin_batch.php");
 	  
	
	
}

$batch_id = $_POST['batch_id'];

if (isset($_GET['delete'])) {
	$batch_id = $_GET['delete'];
	$mysqli->query("DELETE FROM student_batches WHERE batch_id=$batch_id") or die ($mysqli->error());
    $mysqli->query("DELETE FROM module_assignments WHERE batch_id=$batch_id") or die ($mysqli->error());  
      header("location:admin_batch.php");
}


