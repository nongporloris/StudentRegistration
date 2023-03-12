<?php

	$con=mysqli_connect("localhost","root","","project"); 
	if (!$con) {
    	die('Could not connect: ' . mysqli_error($con));
	}

	$SubjectName = mysqli_real_escape_string($con,$_POST['SubjectName']);
	$SubjectID = mysqli_real_escape_string($con,$_POST['SubjectID']);
	$SubjectTeacher = mysqli_real_escape_string($con,$_POST['SubjectTeacher']);
	$Program =mysqli_real_escape_string($con,$_POST['Program']);
	$SubjectSection = mysqli_real_escape_string($con,$_POST['SubjectSection']);
	$SubjectCredit = mysqli_real_escape_string($con,$_POST['SubjectCredit']);
	$Seat = mysqli_real_escape_string($con,$_POST['Seat']);
	$Price = mysqli_real_escape_string($con,$_POST['Price']);
	
	$sql = "INSERT INTO open_section (TeacherName,Subject_ID,Subject,Section,Program,Volume,Credit,Price)
			VALUES ('$SubjectTeacher', '$SubjectID', '$SubjectName', '$SubjectSection', '$Program', '$Seat', '$SubjectCredit', '$Price')";

	$sql2 = "INSERT INTO subject (Subject_Code,Section,SubjectName,Teacher,Program,Credit,Volume,Price)
			VALUES ('$SubjectID', '$SubjectSection', '$SubjectName', '$SubjectTeacher', '$Program', '$SubjectCredit', '$Seat', '$Price')";
		

if ($con->query($sql) === TRUE && $con->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

	
    header("Location:http://localhost/Website/popUpBookingID.php?SubjectName='".$SubjectName."'&SubjectID='".$SubjectID."'&SubjectTeacher='".$SubjectTeacher."'&Program='".$Program."'&SubjectSection='".$SubjectSection."'&SubjectCredit='".$SubjectCredit."'&Seat='".$Seat."'&Price='".$Price."'");	
	mysqli_close($con);


?>
