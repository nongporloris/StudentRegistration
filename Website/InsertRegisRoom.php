<?php
$q = $_GET['Time'];
$w = $_GET['Day'];
$z = $_GET['BookingID'];
$y = $_GET['RoomNumber'];

$con=mysqli_connect("localhost","root","","project"); 
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$q = str_replace("'", '', $q);
$w = str_replace("'", '', $w);
$z = str_replace("'", '', $z);
$y = str_replace("'", '', $y);



$sql = sprintf("SELECT * FROM time1 WHERE Time='%s' AND Date='%s' AND BookingID='%s'" ,
   $q,$w,$z);

$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result) ) {
    $row['TimeID'];
    $TimeID = $row['TimeID'];
}

 $sql2 = "INSERT INTO room_regisid(TimeID,RoomNo)
			VALUES ('$TimeID','$y')";


if (!mysqli_query($con,$sql2)) {
	die('Error: ' . mysqli_error($con)); 
	}

header("Location:http://localhost/Website/AdminForm.html");
mysqli_close($con);
?>