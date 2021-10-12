<?php
	include "DBconnection.php";
if (isset($_POST['updatedata'])){
	 
	$id = $_POST['update_id']; 
		$batch_id = $_POST['batch_id'];
		$batch_name = $_POST['batch_name'];
		$batch_code = $_POST['batch_code'];
		$course_id = $_POST['course_id'];
		$assignment_id =$_POST['assignment_id'];

   $query = "UPDATE student_batches SET batch_id='$batch_id', batch_name='$batch_name', batch_code='$batch_code', course_id='$course_id', course_id='$course_id', assignment_id='$assignment_id'  WHERE batch_id= $batch_id " ;
	$query_run = mysqli_query($conn, $query);
	if($query_run)
	{	
	echo "submitted";	
   header('location:admin_batch.php') ;     	
	}
	else
	{
		echo "form not submitted";
	}               
}
?>