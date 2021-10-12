<?php
	include "DBconnection.php";
 
if (isset($_POST['updatedata'])){
	 
	$id = $_POST['update_id'];
 
 	$studentresult_id = $_POST['studentresult_id'];
	$student_id = $_POST['student_id'];
	$batch_id = $_POST['batch_id'];
	$subject1_results = $_POST['subject1_results'];
	$subject2_results = $_POST['subject2_results'];
	$subject3_results = $_POST['subject3_results'];
	$subject4_results = $_POST['subject4_results'];
	$subject5_results = $_POST['subject5_results'];
	$subject6_results = $_POST['subject6_results'];
	$subject7_results = $_POST['subject7_results'];
	$subject8_results =$_POST['subject8_results'];
	$subject9_results = $_POST['subject9_results'];
	$subject10_results = $_POST['subject10_results'];
	$final__status = $_POST['final__status'];
	 
	
   $query = "UPDATE students_results SET studentresult_id='$studentresult_id', student_id='$student_id', batch_id='$batch_id', subject1_results='$subject1_results', subject2_results='$subject2_results', subject3_results='$subject3_results', subject4_results='$subject4_results' , subject5_results='$subject5_results', subject6_results='$subject6_results', subject7_results='$subject7_results', subject8_results='$subject8_results', subject9_results='$subject9_results' , subject10_results='$subject10_results', final__status='$final__status'  WHERE studentresult_id= $studentresult_id " ;
	
	$query_run = mysqli_query($conn, $query);
	if($query_run)
	{	
	echo "submitted";	
   header('location:admin_students_results.php') ;     	
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
	$studentresult_id = $_GET['delete'];
	$mysqli->query("DELETE FROM students_results WHERE studentresult_id=$studentresult_id") or die ($mysqli->error());
      
      header("location:admin_students_results.php");
}


?>