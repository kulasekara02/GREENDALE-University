
<?php
		
if (isset($_POST['submit'])) {
	include("DBconnection.php");

$module_name = $_POST['module_name'];
		$moduleassignment_1 = $_POST['moduleassignment_1'];
		$moduleassignment_2 = $_POST['moduleassignment_2'];
		$moduleassignment_3 = $_POST['moduleassignment_3'];
		$moduleassignment_4 = $_POST['moduleassignment_4'];
		$moduleassignment_5 = $_POST['moduleassignment_5'];
		$moduleassignment_6 = $_POST['moduleassignment_6'];
		$moduleassignment_7 = $_POST['moduleassignment_7'];
		$moduleassignment_8 = $_POST['moduleassignment_8'];
		$moduleassignment_9 = $_POST['moduleassignment_9'];
		$moduleassignment_10 = $_POST['moduleassignment_10'];



	$sql = "INSERT INTO module_assignments ". "(module_name, moduleassignment_1, moduleassignment_2, moduleassignment_3, moduleassignment_4, moduleassignment_5, moduleassignment_6, moduleassignment_7, moduleassignment_8, moduleassignment_9, moduleassignment_10)"."VALUE($module_name','$moduleassignment_1','$moduleassignment_2','$moduleassignment_3','$moduleassignment_4','$moduleassignment_5','$moduleassignment_6,'$moduleassignment_7','$moduleassignment_8','$moduleassignment_9','$moduleassignment_10')";
	
	$results = mysqli_query($conn, $sql);
	
	if(!$results) {
	  die('Could not enter data: '.mysqli_error($conn));
	}
	else
	{
  //  echo "Entered data successsfully\n";
	header("location:admin_assignments.php");
	}
   }
else
   {
	  //  echo 'submit the form first';
   }
?>
