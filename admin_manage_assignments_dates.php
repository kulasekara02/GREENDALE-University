<?php

$mysqli = new mysqli('localhost','root','','greendale') or die(mysqli_error($mysqli));

if (isset($_POST['submit'])){
	
		$assignmnt_id = $_POST['assignmnt_id']; 
		$batch_id = $_POST['batch_id'];
		$module_1_issued = $_POST['module_1_issued'];
		$module_1_deadl = $_POST['module_1_deadl'];
		$module_2_issued = $_POST['module_2_issued'];
		$module_2_deadl = $_POST['module_2_deadl'];
		$module_3_issued = $_POST['module_3_issued'];
		$module_3_deadl = $_POST['module_3_deadl'];
		$module_4_issued = $_POST['module_4_issued'];
		$module_4_deadl = $_POST['module_4_deadl'];
		$module_5_issued = $_POST['module_5_issued'];
		$module_5_deadl = $_POST['module_5_deadl'];
		$module_6_issued = $_POST['module_6_issued'];
		$module_6_deadl = $_POST['module_6_deadl'];
		$module_7_issued = $_POST['module_7_issued'];
		$module_7_deadl = $_POST['module_7_deadl'];
		$module_8_issued = $_POST['module_8_issued'];
		$module_8_deadl = $_POST['module_8_deadl'];
		$module_9_issued = $_POST['module_9_issued'];
		$module_9_deadl = $_POST['module_9_deadl'];
		$module_10_issued = $_POST['module_10_issued'];
		$module_10_deadl = $_POST['module_10_deadl'];
	
	
	$mysqli->query("INSERT INTO module_assignments (assignmnt_id, batch_id, module_1_issued, module_1_deadl, module_2_issued, module_2_deadl, module_3_issued, module_3_deadl, module_4_issued, module_4_deadl, module_5_issued, module_5_deadl, module_6_issued, module_6_deadl, module_7_issued, module_7_deadl, module_8_issued, module_8_deadl, module_9_issued, module_9_deadl, module_10_issued, module_10_deadl ) VALUES('$assignmnt_id','$batch_id','$module_1_issued','$module_1_deadl','$module_2_issued','$module_2_deadl','$module_3_issued','$module_3_deadl','$module_4_issued','$module_4_deadl','$module_5_issued','$module_5_deadl','$module_6_issued','$module_6_deadl','$module_7_issued','$module_7_deadl','$module_8_issued','$module_8_deadl','$module_9_issued','$module_9_deadl','$module_10_issued','$module_10_deadl') ") or die($mysqli->error);
	header("location:admin_assignments_dates.php");
	
}


$assignmnt_id = $_POST['assignmnt_id'];	 

if (isset($_GET['delete'])) {
	$assignmnt_id = $_GET['delete'];
	$mysqli->query("DELETE FROM module_assignments WHERE assignmnt_id= $assignmnt_id") or die ($mysqli->error());
      
      header("location:admin_assignments_dates.php");
}



?>

