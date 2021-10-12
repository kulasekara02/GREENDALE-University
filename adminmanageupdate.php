<?php
	include "DBconnection.php";

$targetDir = "adminImage/";
$admin_picture = basename($_FILES["admin_picture"]["name"]);
$targetFilePath = $targetDir . $admin_picture;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);



if (isset($_POST['updatedata'])){
	 
	$id = $_POST['update_id'];
	
		
   		$admin_name = $_POST['admin_name'];
		$admin_email = $_POST['admin_email'];
		$admin_password = $_POST['admin_password']; 
		 
		$admin_year = $_POST['admin_year'];
		$admin_birthday = $_POST['admin_birthday'];
		$admin_NIC =$_POST['admin_NIC'];
	
	move_uploaded_file($_FILES["admin_picture"]["tmp_name"], $targetFilePath);
   
   $query = "UPDATE admins SET admin_name='$admin_name', admin_email='$admin_email', admin_password='$admin_password', admin_picture='$admin_picture', admin_year='$admin_year', admin_birthday='$admin_birthday' , admin_NIC='$admin_NIC' WHERE admin_id= $id " ;
	
	$query_run = mysqli_query($conn, $query);
	
	if($query_run)
	{
		
	echo "submitted";	
   header('location:adminmanageadmins.php') ;     
		
	}
	else
	{
	
		echo "form not submitted";
		 
		
		
	}
	               
}

?>