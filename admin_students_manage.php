<?php

$mysqli = new mysqli('localhost','root','','greendale') or die(mysqli_error($mysqli));

$targetDir = "studentImage/";
$picture = basename($_FILES["picture"]["name"]);
$targetFilePath = $targetDir . $picture;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if (isset($_POST['submit'])){
	
		$student_id = $_POST['student_id'];
		$batch_id = $_POST['batch_id'];
		$student_fname = $_POST['student_fname']; 	 
		$student_lname = $_POST['student_lname'];
		$email = $_POST['email'];
		$birthday =$_POST['birthday'];
		$contactnumber = $_POST['contactnumber'];
		$password = $_POST['password'];
		$NIC = $_POST['NIC'];
		 

 
    move_uploaded_file($_FILES["picture"]["tmp_name"], $targetFilePath);
         
	$mysqli->query("INSERT INTO students ( student_id, batch_id, student_fname, student_lname,  email, birthday, contactnumber,  password, NIC, picture) VALUES('$student_id','$batch_id','$student_fname','$student_lname','$email','$birthday','$contactnumber','$password','$NIC','$picture')") or die($mysqli->error);
	
	$mysqli->query("INSERT INTO students_payments (student_id, batch_id) VALUES('$student_id','$batch_id')") or die($mysqli->error);
	
	$mysqli->query("INSERT INTO students_results (student_id, batch_id) VALUES('$student_id','$batch_id')") or die($mysqli->error);
	
	header("location:admin_students.php");
	
	 

}
	?>

