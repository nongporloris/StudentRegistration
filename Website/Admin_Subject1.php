<?php
$con=mysqli_connect("localhost","root","","project"); 
if (mysqli_connect_errno()) { 
  echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
    }

$Subject_Code = mysqli_real_escape_string($con, $_POST['Subject_Code']);
$Subject = mysqli_real_escape_string($con , $_POST['Subject']);
$Advisor_ID = mysqli_real_escape_string($con , $_POST['Advisor_ID']);
$Volume = mysqli_real_escape_string($con , $_POST['Volume']);
$Credit = mysqli_real_escape_string($con , $_POST['Credit']);

$query = " UPDATE open_section 
			SET Subject = '$Subject', TeacherName = '$Advisor_ID', Volume = '$Volume', Credit = '$Credit'
			WHERE Subject_ID = '$Subject_Code'"; 

if (!mysqli_query($con,$query)) {
  die('Error: ' . mysqli_error($con)); 
  }
  else
  {
  header("refresh:1; url = http://localhost/Website/AdminForm.html");
  echo "complete";
     }

mysqli_close($con);
?>