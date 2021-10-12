<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Greendale College</title>
	  <link rel="icon"  type="image/png" href="photos/header.png">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/style.css" rel="stylesheet">
	  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
			
			blink {
  -webkit-animation: 2s linear infinite condemned_blink_effect; /* for Safari 4.0 - 8.0 */
  animation: 2s linear infinite condemned_blink_effect;
}

/* for Safari 4.0 - 8.0 */
@-webkit-keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}

@keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}
    .zc-html,
    .zc-body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      background-color: black;
    }
 
    .chart--container {
      height: 100%;
      width: 100%;
      min-height: 530px;
    }
 
    .zc-ref {
      display: none;
    }
  </style>
	  
<style>
		
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 210px;
  background-color:  #0b1f5f;
}

li a {
  display: block;
  color: white;
  padding: 8px 16px;
  text-decoration: none;
	
}

li a.active {
  background-color:blue;
  color: white;
}

li a:hover:not(.active) {
  background-color:skyblue;
  color: white;
}
 
	
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;

  margin: auto;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 5.5s;
  animation-name: fade;
  animation-duration: 5.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
	  
	  
	  </style>
	  
	   
		   <?php
	session_start();
	include "DBconnection.php";  
	if(!isset($_SESSION['name']))
	{
		header("location:loginindex.php");
	} 
	else
	{
		$id = $_SESSION['id'];
		$bid = $_SESSION['bid'];
		
		$result = mysqli_query($conn,"SELECT * FROM students WHERE student_id='" . $id."'");
		$row  = mysqli_fetch_array($result);
		
		if($row >0)
		{
		$fname =$row['student_fname'];
		$lname =$row['student_lname'];
		$semail =$row['email'];
		$sbirthday =$row['birthday'];
		$scontactnumber =$row['contactnumber'];		
		$spassword =$row['password'];
		 
		$spic =$row['picture'];	
		$sNIC =$row['NIC'];	
				
		$id = $_SESSION['id'];		
		$bid = $_SESSION['bid'];	
			
		$result = mysqli_query($conn,"SELECT * FROM student_batches WHERE batch_id ='" . $bid."'");
		$row  = mysqli_fetch_array($result);
		}
		if($row >0) 
		{	
		$batch_id =$row['batch_id'];
		$batch_name =$row['batch_name'];
		$batch_code =$row['batch_code'];
		$course_id =$row['course_id'];
		$assignment_id =$row['assignment_id'];
		$bid = $_SESSION['bid'];
			
			
		$result = mysqli_query($conn,"SELECT * FROM course_details WHERE course_id ='" . $course_id."'");
		$row  = mysqli_fetch_array($result);	
		}
		if($row >0) 
		{	  
		 $course_name =$row['course_name'];	
			
		 $module_1 =$row['module_1'];	
		 $module_2 =$row['module_2'];	
		 $module_3 =$row['module_3'];	
		 $module_4 =$row['module_4'];	
		 $module_5 =$row['module_5'];	
		 $module_6 =$row['module_6'];	
		 $module_7 =$row['module_6'];	
		 $module_8 =$row['module_8'];	
		 $module_9 =$row['module_9'];	
		 $module_10 =$row['module_10'];
	
			
			$payment_1 =$row['payment_1'];
			$payment_2 =$row['payment_2'];
			$payment_3 =$row['payment_3'];
			$payment_4 =$row['payment_4'];
			$payment_5 =$row['payment_5'];
			 
			
		$bid = $_SESSION['bid'];	
		$id = $_SESSION['id'];	
			
		$result = mysqli_query($conn,"SELECT * FROM students_results WHERE student_id ='" . $id."'");
		$row  = mysqli_fetch_array($result);	
		}
		if($row >0) 
		{	
		$subjectoneresults =$row['subject1_results'];
		$subjecttworesults =$row['subject2_results'];
		$subjectthreeresults =$row['subject3_results'];
		$subjectfourresults =$row['subject4_results'];
		$subjectfiveresults =$row['subject5_results'];
		$subjectsixresults =$row['subject6_results'];
		$subjectsevenresults =$row['subject7_results'];
		$subjecteightresults =$row['subject8_results'];
		$subjectnineresults =$row['subject9_results'];
		$subjecttenresults =$row['subject10_results'];	
			
		$status =$row['final__status'];	

		$bid = $_SESSION['bid'];	
		$id = $_SESSION['id'];	
		
		$result = mysqli_query($conn,"SELECT * FROM students_payments WHERE student_id ='" . $id."'");
		$row  = mysqli_fetch_array($result);	
		}
		if($row >0) 
		{	
		$payment1_status =$row['payment1_status'];
		$payment2_status =$row['payment2_status'];
		$payment3_status =$row['payment3_status'];
		$payment4_status =$row['payment4_status'];
		$payment5_status =$row['payment5_status'];
		 
			
		}
	}

	  
	  ?>
	   
  </head>
  <body style="background-color: grey; margin-top: -20px">
	
	
	  <div class="div_content_admin">
		 
    <div class="header_admin">
	                    
<div style="margin-right:10px;vertical-align:bottom;">
    <table align="right" width="450">
        <tr><td>
        <div align="right" style="font-size:24px;padding-top:23px; ">
                 <a href="studentindex.php" style="color: aliceblue">Home</a> &nbsp; 
                <a href="userLogout.php" style="color:blue">Logout</a>
			<hr>
			   <div align="right" style="font-size:20px; padding: 10px; color: aliceblue">
         Student - <?php echo $fname;?>  
				   				    <img class="img-rounded" style="border-radius: 50%" width="50px" height="50px" src="studentImage/<?php echo $spic;?>">	

        </div>
        </td></tr>
 
   </table>
</div> 
	  </div>
		  
		   <div class="div_header_title_admin">
     <div align="left" style="font-size:20px; padding: 10px; color: aliceblue">
         Welcome    
			   
            </div>
		</div> 
			  
		  
		  
		  <div class="mainframe"  style="background-color:#0b1f5f">
		  <div class="section1_admin" >
    		       <ul>
    		      <li><div><a href="studentmyprofile.php">My Profile</a></div></li>
			 	  <li><div><a href="studentresultsprediction.php"> Result Predictions</a></div></li>
			      <li><div><a href="studentviewpayments.php">My Payments</a></div></li>
			      <li><div><a href="studentviewresults.php">My Results</a></div></li>
			      <li><div><a href="studentuploadassignments.php">Upload Assignments</a></div></li>
			      <li><div><a href="studentdownloadassignments.php">Download Assignments</a></div></li>
				  
			  </ul>
			  </ul>


  

</div>
		  
 	  
		  <div class="section2_admin" align="center">
<?php
$a[] = $subjectoneresults;
$a[] = $subjecttworesults;
$a[] = $subjectthreeresults;
$a[] = $subjectfourresults;
$a[] = $subjectfiveresults;
$a[] = $subjectsixresults;
$a[] = $subjectsevenresults;
$a[] = $subjecteightresults;
$a[] = $subjectnineresults;
$a[] = $subjecttenresults;
			  		  
$a = array_filter($a);
$average = array_sum($a)/count($a);	  
$roundaverage = round($average, 2);  
			  
?> 
 
 		 
 
			  
			 <?php
			
		$failrate = 100 - $roundaverage;
			
			  ?> 
			  
 	 
			  <script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		theme: "light2",
		title:{
			text: "Result Prediction"
		},		
		data: [
		{       
			type: "pie",
			showInLegend: true,
			toolTipContent: "{y}   #percent %",
			yValueFormatString: " ",
			legendText: "{indexLabel}",
			dataPoints: [
				{  y: <?php echo  $roundaverage  ?>, indexLabel: "Pass Presentage -  <?php echo  $roundaverage  ?>" },
				{  y: <?php echo $failrate  ?>, indexLabel: "Fail Presentage -  <?php echo  $failrate  ?>" },
				 
			]
		}
		]
	});
	chart.render();
}
</script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script></head>
 
<div id="chartContainer" style="height: 600px; width: 100%;"></div>
			 
<?php
$av =  ("$roundaverage");

if ($av <= "0") {
  echo "<h3>Good Luck On your First Exam</h3> ";
}elseif ($av <= "35") {
  echo "<h3> Your Average is Low for the past results.</h3> ";
} elseif ($av <= "35") {
  echo "<h3> Your Average is Low for the past results. </h3>" ;	
} elseif ($av <= "40") {
  echo "<h3> Your Very Average low,Focus on your studies. </h3>" ;
} elseif ($av <= "45") {
  echo "<h3> Your Average low, Focus on your studies. </h3>" ;	
} elseif ($av <= "50"){
  echo "<h3> Your average close to 50% you can be pass or fail in next Subject.  </h3>" ;
}elseif ($av  <= "55"){
  echo "<h3> Your Average close to 50% you can be pass or fail in next Subject.  </h3>" ;
}elseif ($av  <= "60"){
  echo "<h3> Your Average close to 60% You have close to a second upper. </h3>" ;
}elseif ($av  <= "65"){
  echo "<h3> Your Average is around 60% You have a second upper. </h3>" ;	
}elseif ($av <= "70"){
  echo "<h3> Your Average close to 70% You have close to a First Class.  </h3>" ;
}elseif ($av <= "75"){
  echo "<h3> Your Average is around 70% well done</h3>" ;
}elseif ($av <= "85"){
  echo "<h4> Congratulations! You have a First Class. Your average good.  </h4>" ;
}elseif ($av <= "95"){
  echo "<h4> Congratulations! You have a First Class.  Your average good. </h4>" ;
}elseif ($av <= "100"){
  echo "<h4> Congratulations! You have a First Class.  Your average good. </h4>" ;
}
elseif ($av <= "110"){
  echo "<h4> somthing error in your results. Meet College Coordinators.</h4>" ;
}		
	
	
?>
	 
 	  
		  </div>
	 
		  
		  </div>
	 
	  
			  
			  
			 <div class="section3">
		  
		 <p  align="center" style="color:  white; padding-top: 30px; font-size:20px " >© 2021 MAY / GREENDALE COLLEGE</p>
 
		  </div>
		  
			  
			  	</div>	 
 
	  
	  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	  
	  
	  
	 
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	  
  </body>
</html>