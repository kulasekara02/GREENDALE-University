<?php
	include "DBconnection.php";

$targetDir = "studentImage/";
$picture = basename($_FILES["picture"]["name"]);
$targetFilePath = $targetDir . $picture;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);



if (isset($_POST['updatedata'])){
	 
	$id = $_POST['update_id'];
	
   		$student_id = $_POST['student_id'];
		$batch_id = $_POST['batch_id'];
		$student_fname = $_POST['student_fname']; 	 
		$student_lname = $_POST['student_lname'];
		$email = $_POST['email'];
		$birthday =$_POST['birthday'];
		$contactnumber = $_POST['contactnumber'];
		$password = $_POST['password'];
		$NIC = $_POST['NIC'];
//		$picture = $_POST['picture'];

//	move_uploaded_file($_FILES["picture"]["tmp_name"], $targetFilePath);
   $query = "UPDATE students SET student_id='$student_id', batch_id='$batch_id', student_fname='$student_fname', student_lname='$student_lname', email='$email', birthday='$birthday' , contactnumber='$contactnumber', password='$password' , NIC='$NIC' WHERE student_id= $student_id " ;
	$query_run = mysqli_query($conn, $query);
	if($query_run)
	{	
	echo "submitted";	
   header('location:admin_students.php') ;     	
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
	$student_id = $_GET['delete'];
	$mysqli->query("DELETE FROM students_results WHERE student_id=$student_id")  or die(mysqli_error($mysqli));
	$mysqli->query("DELETE FROM students_payments WHERE student_id=$student_id")  or die(mysqli_error($mysqli));
	$mysqli->query("DELETE FROM students WHERE student_id=$student_id")  or die(mysqli_error($mysqli));

      
      header("location:admin_students.php");
}





?>
<?php
 

if (isset($_POST['updatedata2'])){
	 
	$id = $_POST['update_id'];
	
   		$student_id = $_POST['student_id'];
		$batch_id = $_POST['batch_id'];
		 

	move_uploaded_file($_FILES["picture"]["tmp_name"], $targetFilePath);
   $query = "UPDATE students SET picture='$picture' WHERE student_id= $student_id " ;
	$query_run = mysqli_query($conn, $query);
	if($query_run)
	{	
	echo "submitted";	
   header('location:admin_students.php') ;     	
	}
	else
	{
echo "form not sxsubmitted";	
	}
	               
}

?>