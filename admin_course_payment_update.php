<?php
	include "DBconnection.php";

if (isset($_POST['updatedata'])){
	 
	$id = $_POST['update_id'];
	 
   		$course_id = $_POST['course_id'];
		
		$course_name = $_POST['course_name'];
		$payment_1 = $_POST['payment_1']; 
		$payment_2 = $_POST['payment_2'];
		$payment_3 = $_POST['payment_3'];
		$payment_4 =$_POST['payment_4'];
		$payment_5 =$_POST['payment_5'];
 		 
   $query = "UPDATE course_details SET course_id='$course_id',  course_name='$course_name', payment_1='$payment_1', payment_2='$payment_2', payment_3='$payment_3', payment_4='$payment_4', payment_5='$payment_5' WHERE course_id= $id " ;
 
$query_run = mysqli_query($conn, $query);
 
	if($query_run)
	{	
	echo "submitted";	
   header('location:admin_course_payments_details.php') ;     	
	}
	else
	{
		echo "form not submitted";
	}
	               
}


?>


 
