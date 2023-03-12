<?php
//session_start();
$con=mysqli_connect("localhost","root","","project"); 
if (mysqli_connect_errno()) { 
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
	}

// if (!empty($_POST['UserID'])&&!empty($_POST['Password'])) {

$UserID = mysqli_real_escape_string($con, $_POST['UserID']);
//$StudentID = mysqli_real_escape_string($con, $_POST['StudentID']);
$Password = mysqli_real_escape_string($con, $_POST['Password']);
//$ID_Card = $_POST['ID_Card'] ;
$ID_Card = mysqli_real_escape_string($con,$_POST['idcard']) ;
//$Password = $_POST['Password'] ;

/*$sql = "INSERT INTO student_register(UserID, Password)
VALUES('$UserID', '$Password')";*/

$sql = mysqli_query($con,"UPDATE student_register SET Password ='$Password', UserID ='$UserID'   WHERE ID_Card ='$ID_Card' "); 


 	
 		if (!$sql) {
	die('Error: ' . mysqli_error($con)); 
	}



echo "complete";
header("refresh:1; url = http://localhost/Website/SurfaceForm.html");

mysqli_close($con);
// $_SESSION['user'] = $user; keep a values in session (it is goble variable).
// '{$_SESSION["user"]}' when we use values in session.
?>  




