<?php
$con=mysqli_connect("localhost","root","","project"); 
if (mysqli_connect_errno()) { 
  echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
    }

$ActivityID = mysqli_real_escape_string($con, $_POST['ActivityID']);
$ActivityName = mysqli_real_escape_string($con , $_POST['ActivityName']);
$StudentID = mysqli_real_escape_string($con , $_POST['StudentID']);

$query = "INSERT INTO activity (ActivityID, ActivityName, TeacherID) 
VALUES ('$ActivityID' ,'$ActivityName', '$StudentID')"; 

if (!mysqli_query($con,$query)) {
  die('Error: ' . mysqli_error($con)); 
  }
  else
  {
  header("refresh:1; url = http://localhost/Website/HomeForm.html");
  echo "complete";
     }

mysqli_close($con);
?>