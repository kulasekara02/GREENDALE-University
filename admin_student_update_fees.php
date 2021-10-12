<?php
	include "DBconnection.php";
 
if (isset($_POST['updatedata'])){
	 
	$id = $_POST['update_id'];
	
	$studentpayment_id = $_POST['studentpayment_id'];
   	$student_id = $_POST['student_id'];
	$batch_id = $_POST['batch_id'];
	$payment1_status = $_POST['payment1_status'];
	$payment2_status = $_POST['payment2_status'];
	$payment3_status = $_POST['payment3_status'];
	$payment4_status = $_POST['payment4_status'];
	$payment5_status = $_POST['payment5_status'];
	$final_status = $_POST['final_status'];
	 
	
 
   $query = "UPDATE students_payments SET studentpayment_id='$studentpayment_id', student_id='$student_id', batch_id='$batch_id', payment1_status='$payment1_status', payment2_status='$payment2_status', payment3_status='$payment3_status', payment4_status='$payment4_status' , payment5_status='$payment5_status', final_status='$final_status'  WHERE studentpayment_id= $studentpayment_id " ;
	$query_run = mysqli_query($conn, $query);
	if($query_run)
	{	
	echo "submitted";	
   header('location:admin_students_fees.php') ;     	
	}
	else
	{
echo "form not submitted";	
	}
	               
}
?>

<?php
 $mysqli = new mysqli('localhost','root','','greendale') or die(mysqli_error($mysqli));




if (isset($_GET['delete'])) {
	$studentpayment_id = $_GET['delete'];
	$mysqli->query("DELETE FROM students_payments WHERE studentpayment_id=$studentpayment_id") or die ($mysqli->error());
      
      header("location:admin_students_fees.php");
}


?>