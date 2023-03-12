<?php
$con=mysqli_connect("localhost","root","","project"); 
if (mysqli_connect_errno()) { 
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
    }


                     // $Student_ID = stripcslashes($Student_ID);
                     // $Password = stripcslashes($Password);
$Student_ID = mysqli_real_escape_string($con, $_POST['Student_ID']);
$Password = mysqli_real_escape_string($con , $_POST['Password']);
$ConfirmPassword = mysqli_real_escape_string($con , $_POST['ConfirmPassword']);

if ($Password != $ConfirmPassword)
{
	echo "Password and ConfirmPassword are different ";
	die(header("refresh:1; url=http://localhost/Website/RecoveryForm2.html"));
}

$query = "UPDATE student_register
			SET Password = '$ConfirmPassword' 
			WHERE Student_ID ='$Student_ID'";
$query2 = "UPDATE teacher_profile
			SET Password = '$ConfirmPassword'
			WHERE TeacherID = '$Student_ID'";

if (!mysqli_query($con,$query) && !mysqli_query($con,$query2)) {
	die('Error: ' . mysqli_error($con)); 
	}
	else
	{
	header("refresh:1; url = http://localhost/Website/SurfaceForm.html");
	echo "complete";
     }

mysqli_close($con);
?>