<?php
$con=mysqli_connect("localhost","root","","project"); 
if (mysqli_connect_errno()) { 
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
    }


                     // $Student_ID = stripcslashes($Student_ID);
                     // $Password = stripcslashes($Password);
$ActivityName = mysqli_real_escape_string($con, $_POST['ActivityName']);
$ActivityID = mysqli_real_escape_string($con , $_POST['ActivityID']);
$ActivityTeacher = mysqli_real_escape_string($con , $_POST['ActivityTeacher']);
$ActivityPoint = mysqli_real_escape_string($con , $_POST['ActivityPoint']);
$ActivityDay = mysqli_real_escape_string($con , $_POST['ActivityDay']);
$ActivityTime = mysqli_real_escape_string($con , $_POST['ActivityTime']);


	$query = "INSERT INTO activity_register (ActivityName,Activity_time,Activity_day, Activity_Point, TeacherID, ActivityID)
			VALUES ('$ActivityName', '$ActivityTime', '$ActivityDay', '$ActivityPoint', '$ActivityTeacher', '$ActivityID')";

if (!mysqli_query($con,$query)) {
	die('Error: ' . mysqli_error($con)); 
	}

	else {
	header("refresh:1; url = http://localhost/Website/AdminForm.html");
	echo "complete";
     }

mysqli_close($con);
?>