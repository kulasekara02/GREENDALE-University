<?php
$mysqli = new mysqli('localhost','root','','greendale') or die(mysqli_error($mysqli));

if (isset($_POST['submit'])){
	
		$course_id = $_POST['course_id'];
	 
		$course_name = $_POST['course_name']; 
		$payment_1 = $_POST['payment_1']; 
		$payment_2 = $_POST['payment_2'];
		$payment_3 = $_POST['payment_3'];
		$payment_4 = $_POST['payment_4'];
		$payment_5 = $_POST['payment_5'];
	
	$mysqli->query("INSERT INTO course_details ( course_id,  course_name, payment_1, payment_2, payment_3, payment_4, payment_5) VALUES('$course_id' ,'$course_name','$payment_1','$payment_2','$payment_3','$payment_4','$payment_5')") or die($mysqli->error);
	header("location:admin_course_payments_details.php");

}

$course_id = $_POST['course_id'];

if (isset($_GET['delete'])) {
	$course_id = $_GET['delete'];
	$mysqli->query("DELETE FROM course_details WHERE course_id=$course_id") or die ($mysqli->error());
      
      header("location:admin_course_payments_details.php");
}

?>
