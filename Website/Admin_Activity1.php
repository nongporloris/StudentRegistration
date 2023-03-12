<?php
$con=mysqli_connect("localhost","root","","project"); 
if (mysqli_connect_errno()) { 
  echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
    }

$ActivityID = mysqli_real_escape_string($con, $_POST['ActivityID']);
$ActivityName = mysqli_real_escape_string($con , $_POST['ActivityName']);
$Activity_time = mysqli_real_escape_string($con , $_POST['Activity_time']);
$Activity_day = mysqli_real_escape_string($con , $_POST['Activity_day']);
$Activity_Point = mysqli_real_escape_string($con , $_POST['Activity_Point']);

$query = " UPDATE activity_register
			SET ActivityName = '$ActivityName', Activity_time = '$Activity_time', Activity_day = '$Activity_day', Activity_Point = '$Activity_Point'
			WHERE ActivityID = '$ActivityID'"; 

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