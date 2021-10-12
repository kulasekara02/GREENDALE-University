<?php
if(isset($_POST['upload']))
include "DBconnection.php";	
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 
 $folder="compleatedassignmentsStudents/";
 
 move_uploaded_file($file_loc,$folder.$file);
	$submittedassignment1 =$row['submitted_assignment1'];
	
	$submittedassignment1=$_POST['submitted_assignment1'];
$submittedassignment2=$_POST['submitted_assignment2'];
$submittedassignment3=$_POST['submitted_assignment3'];
$submittedassignment4=$_POST['submitted_assignment4'];
	$submittedassignment5=$_POST['submitted_assignment5'];
$submittedassignment6=$_POST['submitted_assignment6'];
	$submittedassignment7=$_POST['submitted_assignment7'];
$submittedassignment8=$_POST['submitted_assignment8'];
	$submittedassignment9=$_POST['submitted_assignment9'];
$submittedassignment10=$_POST['submitted_assignment10'];
			
	
	
 $sql="INSERT INTO students_submit_assignment(submitted_assignment1,submitted_assignment2,submitted_assignment3,submitted_assignment4,submitted_assignment5,submitted_assignment6,submitted_assignment7,submitted_assignment8,submitted_assignment9,submitted_assignment10,) VALUES('$submittedassignment1','$submittedassignment2','$submittedassignment3','$submittedassignment4','$submittedassignment5','$submittedassignment6','$submittedassignment7','$submittedassignment8','$submittedassignment9','$submittedassignment10',)";
 mysql_query($sql); 
}
?>