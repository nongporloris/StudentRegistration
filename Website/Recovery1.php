<?php
$con=mysqli_connect("localhost","root","","project"); 
if (mysqli_connect_errno()) { 
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
    }


                     // $Student_ID = stripcslashes($Student_ID);
                     // $Password = stripcslashes($Password);
$Student_ID = mysqli_real_escape_string($con, $_POST['Student_ID']);
$S_email = mysqli_real_escape_string($con , $_POST['S_email']);

$query = "SELECT * FROM student_register 
			WHERE UserID ='$Student_ID' 
			AND Email ='$S_email'";
$query2 = "SELECT * FROM teacher_profile
			WHERE TeacherID = '$Student_ID'
			AND Email = '$S_email'";

$result = mysqli_query($con, $query)
		or die(mysqli_error($con));
$result2 = mysqli_query($con, $query2)
		or die(mysqli_error($con));

$count = mysqli_num_rows($result);
$count2 = mysqli_num_rows($result2);

if($count == 0 && $count2 == 0)
{
	echo "Username or Password Incorrect";
	echo "<br>";
	echo "Redirect back to Login Page.....";
	header("refresh:1; url=http://localhost/Website/RecoveryForm1.html");
}

else 
{
	$row = mysqli_fetch_array($result);
	$row2 = mysqli_fetch_array($result2);

	if ($row['UserID'] == $Student_ID && $row['Email'] == $S_email){
    		echo "Success";
    		header("refresh:1; url = http://localhost/Website/RecoveryForm2.html");
	}
   	else if ($row2['TeacherID'] == $Student_ID && $row2['Email'] == $S_email){
   			echo "Success";
   			header("refresh:1; url = http://localhost/Website/RecoveryForm2.html");

   	
    } else{
         	echo "Failed to login";
         }


}
         
mysqli_close($con);
?>