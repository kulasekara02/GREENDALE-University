<?php

$mysqli = new mysqli('localhost','root','','greendale') or die(mysqli_error($mysqli));

$targetDir = "adminImage/";
$admin_picture = basename($_FILES["admin_picture"]["name"]);
$targetFilePath = $targetDir . $admin_picture;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if (isset($_POST['submit'])){
	
		$admin_name = $_POST['admin_name'];
		$admin_email = $_POST['admin_email'];
		$admin_password = $_POST['admin_password'];
		$admin_year = $_POST['admin_year'];
		$admin_birthday = $_POST['admin_birthday'];
		$admin_NIC =$_POST['admin_NIC'];
	
 
    move_uploaded_file($_FILES["admin_picture"]["tmp_name"], $targetFilePath);
         
	$mysqli->query("INSERT INTO admins ( admin_name, admin_email, admin_password, admin_picture,  admin_year, admin_birthday, admin_NIC) VALUES('$admin_name','$admin_email','$admin_password','$admin_picture','$admin_year','$admin_birthday','$admin_NIC')") or die($mysqli->error);
	header("location:adminmanageadmins.php");
	
	 

}
	



$admin_id = 0;
$update = false;
$admin_name = '';
$admin_email = '';
$admin_picture = '';
$admin_password = '';
$admin_year = '';
$admin_birthday = '';
$admin_NIC = '';

if (isset($_GET['delete'])) {
	$admin_id = $_GET['delete'];
	$mysqli->query("DELETE FROM admins WHERE admin_id=$admin_id") or die ($mysqli->error());
      
      header("location:adminmanageadmins.php");
}




 
