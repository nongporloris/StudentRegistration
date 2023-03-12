<?php

	$con=mysqli_connect("localhost","root","","project"); 
	if (!$con) {
    	die('Could not connect: ' . mysqli_error($con));
	}


	$RoomNumber = mysqli_real_escape_string($con,$_POST['RoomNumber']);
	$Building = mysqli_real_escape_string($con,$_POST['Building']);
	$Day = mysqli_real_escape_string($con,$_POST['Day']);
	$Time =mysqli_real_escape_string($con,$_POST['Time']);
	
	$BookingID = mysqli_real_escape_string($con,$_POST['BookingID']);
	

	$sql = "INSERT INTO time1(Time, Date,BookingID)
			VALUES ('$Time', '$Day', '$BookingID')";

	

	if ($con->query($sql) === TRUE ) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . $con->error;
	}

	
	
	header("Location:http://localhost/Website/InsertRegisRoom.php?Time='".$Time."'&Day='".$Day."'&BookingID='".$BookingID."'&RoomNumber='".$RoomNumber."'");
	mysqli_close($con);

?>