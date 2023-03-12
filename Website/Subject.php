<?php
	$StudentID = $_GET['q'];
	$SubjectID = $_GET['w'];
	$array = array();
	$array = explode(",",$SubjectID);
	$con=mysqli_connect("localhost","root","","project"); 
	if (!$con) {
    	die('Could not connect: ' . mysqli_error($con));
	}

foreach ($array as $key) {
	$sql = "INSERT INTO student_subject_register (StudentID, SubjectID)
			VALUES ('$StudentID','$key')";
	if ($con->query($sql) === TRUE/** && $con->query($sql2) === TRUE*/) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}


}
	
	/**$sql2 = "INSERT INTO student_subject_register (total)
			VALUES ('$Price')";*/

	


	
	
	mysqli_close($con);


?>